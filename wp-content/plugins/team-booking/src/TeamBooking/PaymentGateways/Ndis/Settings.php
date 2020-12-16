<?php



defined('ABSPATH') or die('No script kiddies please!');


use TeamBooking\Functions,

    TeamBooking\Admin\Framework,

    TeamBooking\PaymentGateways;

/**

 * Interface TeamBooking_PaymentGateways_Settings

 *

 * This is the payment gateway settings interface

 *

 * @author VonStroheim

 */

class TeamBooking_PaymentGateways_Ndis_Settings implements TeamBooking_PaymentGateways_Settings

{


	private $use_gateway;

    private $gateway_id;
	
    private $send_receipt;

	
	public function __construct()

    {

		
        $this->gateway_id = 'ndis';

        $this->use_gateway = TRUE;

        $this->send_receipt = FALSE;

    }

	/**

     * @param $bool

     */

    public function setUseGateway($bool)

    {

        $this->use_gateway = (bool)$bool;

    }

    /**

     * @return string

     */

    public function getGatewayId()

    {

        return $this->gateway_id;

    }



   /**

     * @return bool

     */

    public function isActive()

    {

        return TRUE;

    }



    /**

     * It must return TRUE if the gateway is offsite (i.e. PayPal standard)

     */

    public function isOffsite()

    {

        return FALSE;

    }

	/**

     * @param $bool

     */

    public function setSendReceipt($bool)

    {

        $this->send_receipt = (bool)$bool;

    }

	
	/**

     * @return bool

     */

    public function getSendReceipt()

    {

        return $this->send_receipt;

    }
	
	/**

     * @return string

     */

    public function getLabel()

    {

        return __('via NDIS PARTICIPANTS', 'team-booking');

    }
    

    /**

     * It must return the frontend gateway pay button

     */

    public function getPayButton()
	{
		 ob_start();

        ?>

        <div class="tb-icon tbk-button tbk-green tbk-pay-button" data-offsite="<?= $this->isOffsite() ?>"

             data-gateway="<?= $this->gateway_id ?>" tabindex="0">


            <div class="tbk-content">

                <?= esc_html__('NDIS PARTICIPANTS', 'team-booking') ?>

            </div>

        </div>

        <?php

        return ob_get_clean();
	}



    /**

     * It prepares the gateway to payment.

     *

     * Based on the particular gateway (onsite/offsite), it can

     * process the payment or redirect the customer.

     *

     * It can accept an additional parameter (array or whatewer)

     * to pass to the gateway (i.e. token)

     *

     * @param array $items

     * @param mixed $additional_parameter

     */

    public function prepareGateway(array $items, $additional_parameter = NULL) {
		$ndis = new PaymentGateways\Ndis\Gateway();
		
		
		foreach ($items as $item) {

            $ndis->addItem($item->getServiceName() . ' | #' . $item->getDatabaseId(TRUE), $item->getPriceIncremented(), $item->getTickets());

        }

        $lead = reset($items);

        $ndis->setCurrency($lead->getCurrencyCode());
		
		if ($this->send_receipt) {

            $ndis->setReceiptEmail($lead->getCustomerEmail());

        }

        if (NULL !== $lead->getOrderId()) {

            $ndis->setOrderId($lead->getOrderId());

        }



        return $ndis->processPayment();
	}



    /**

     * It must return the data collecting form specific to the gateway.

     *

     * This is usually presented to the customer after he chose

     * to pay with this gateway, and this gateway is onsite type.

     *

     * Offsite gateways must return FALSE

     *

     * @param array  $items

     * @param string $order_redirect

     */

    public function getDataForm($items, $order_redirect) {	
		
		 ob_start();

        $form_id = 'tb-ndis-payment-form-' . mt_rand(100000, 999999);

        $lead = reset($items);

        $order = new \TeamBooking\Order();

        $order->setItems($items);

        $order->setId($lead->getOrderId());

        $url = 'https://ndis.com';

        $amount = NULL === $order->getId() ? $lead->getPriceIncremented() * $lead->getTickets() : $order->get_to_be_paid_amount();
		
		

        ?>
		
        
		<div class="tbk-payment-form-collect">

            <form action="" method="POST" id="<?= $form_id ?>">

				<div class="tbk-field">

                    <label><?= esc_html__('Payment not required.', 'team-booking') ?></label>


                </div>
				
				<?php /*?><div class="tbk-field">

                    <label><?= esc_html__('Use coupon <i>ndis</i> for ', 'team-booking') ?></label>
					<?php $id = 'tbk-coupon-form-' . \TeamBooking\Toolkit\randomNumber(10); ?>

					<div class="tbk-summary-coupon" id="<?= $id ?>">

						<input class="tbk-summary-coupon-input" type="text"

							   placeholder="<?= esc_html(__('Coupon?', 'team-booking')) ?>">

						<span class="tbk-summary-coupon-applied"><span>TEST</span></span>

						<button class="tbk-button tbk-summary-apply-coupon"></button>

					</div>

					<script>

						jQuery(document).ready(function ($) {

							$('#<?= $id ?>').tbkCouponInput({

								applyButtonText : '<?= esc_html(__('Apply', 'team-booking')) ?>',

								removeButtonText: '<?= esc_html(__('Remove', 'team-booking')) ?>',

								wrongCouponText : '<?= esc_html(__('Wrong or expired code!', 'team-booking')) ?>'

							});

						});

					</script>

					<div class="ndis-coupon"><?php echo Components\Summary::coupon_line();?></div>

                </div><?php */?>
				
				
                <div class="tbk-submit tbk-blue tbk-button" style="width: 100%;" tabindex="0">

                    <?= esc_html__('Submit', 'team-booking') ?>

                </div>

                <!-- Error section -->

                <div class='tbk-error-message-form'>

                    <div class="tbk-message-header">

                        <?= esc_html__("You've got some errors...", 'team-booking') ?>

                    </div>

                    <p class="payment-errors"></p>

                </div>

            </form>

        </div>
		<script>

            var $tbk_form;

            var ndisResponseHandler = function () {

                var ajax_url = '<?= admin_url('admin-ajax.php') ?>';

                    var ajax_nonce = '<?= wp_create_nonce('teambooking_process_payment_onsite') ?>';

                    jQuery.post(

                        ajax_url,

                        {

                            action                 : 'tb_process_onsite_payment',

                            gateway_id             : '<?= $this->gateway_id ?>',

                            reservation_database_id: '<?= $lead->getDatabaseId() ?>',

                            order_id               : '<?= $order->getId() ?>',

                            order_redirect         : '<?= $order_redirect ?>',

                            nonce                  : ajax_nonce

                        },

                        function (response) {

                            if (response.status == 'redirect') {

                                window.location.href = response.redirect;

                            }

                            // Load the response

                            var $slider = jQuery.tbkSliderGet($tbk_form.closest('.tb-frontend-calendar'));

                            $slider.goToSlide($slider.addSlide(response.content).index());

                            $tbk_form.find('.tbk-submit').removeClass('disabled tbk-loading');

                        }, "json"

                    );

            };

			jQuery('form[id^="tb-ndis-payment-form-"]')

                .on('click keydown', '.tbk-submit', function (e) {

                    e.stopPropagation();

                    if (jQuery(this).hasClass('disabled tbk-loading')) {

                        return false;

                    }

                    if (e.which == 13 || e.which == 32 || e.which == 1) {

                        $tbk_form = jQuery(this).closest('form');

                        // Reset the errors

                        $tbk_form.find('.tbk-error-message-form').removeClass('tbk-visible');

                        $tbk_form.find('.payment-errors').text('');

                        $tbk_form.closest('.tb-frontend-calendar').trigger('tbk:slider:adapt');

                        // Disable the submit button to prevent repeated clicks

                        jQuery(this).addClass('disabled tbk-loading');

                        ndisResponseHandler();

                        // Prevent the form from submitting with the default action

                        return false;

                    }

                });
            

        </script>



        <?php

        return ob_get_clean();
	}



    /**

     * This method is called from the backend to save

     * the gateway's specific settings.

     *

     * Important: the general currency code setting must

     * be passed too, in order to check the gateway compatibility

     * and make a decision for activation/deactivation accordingly.

     *

     * @param array  $data_array the specific settings data

     * @param string $new_currency_code

     */

    public function saveBackendSettings(array $settings, $new_currency_code)
	{	
	
		
		if (isset($settings['use_gateway'])) {

            $this->setUseGateway($settings['use_gateway']);

        }

        if (isset($settings['send_receipt'])) $this->setSendReceipt($settings['send_receipt']);
		
	}


	/**

     * @return Framework\PanelWithForm

     */

    public function getBackendSettingsTab()

    {
		$panel = new Framework\PanelWithForm(NULL);

        $panel->setAction('tbk_save_payments');

        $panel->setNonce('team_booking_options_verify');

        $panel->addTitleContent(Framework\ElementFrom::content(Framework\Html::anchor(array(

            'text'   => __('NDIS PARTICIPANTS', 'team-booking'),

            'escape' => FALSE,

            'href'   => '#'

        ))));
		
		// Use ndis gateway

        $element = new Framework\PanelSettingYesOrNo(__('Use NDIS PARTICIPANTS', 'team-booking'));
		
        if (!$this->verifyCurrency(Functions\getSettings()->getCurrencyCode())) {

            $element->addAlert(__("The selected currency is not supported by NDIS PARTICIPANTS. NDIS PARTICIPANTS gateway can't be activated.", 'team-booking'));

        }

        $element->addFieldname('gateway_settings[' . $this->gateway_id . '][use_gateway]');

        $element->setState($this->isActive());

        $element->appendTo($panel);
		
		// Send receipt

        $element = new Framework\PanelSettingYesOrNo(__('Send receipt to the customer', 'team-booking'));

        $element->addDescription(__('The customer email provided in the reservation form will be used', 'team-booking'));

        $element->addFieldname('gateway_settings[' . $this->gateway_id . '][send_receipt]');

        $element->setState($this->send_receipt);

        $element->appendTo($panel);
		
		// Save changes

        $element = new Framework\PanelSaveButton(__('Save changes', 'team-booking'), 'tbk_save_payments');

        $element->appendTo($panel);
		
		return $panel;
		//die("this should work now");
	}

    /**

     * It checks the compatibility of a general currency code

     * with the gateway.

     *

     * It returns TRUE if the code is compatible,

     * FALSE otherwise.

     *

     * @param string $code

     */

    public function verifyCurrency($code)

    {

        $supported_currencies = array();

        $supported_currencies['AED'] = 'United Arab Emirates Dirham';

        $supported_currencies['AFN'] = 'Afghan Afghani';

        $supported_currencies['ALL'] = 'Albanian Lek';

        $supported_currencies['AMD'] = 'Armenian Dram';

        $supported_currencies['ANG'] = 'Netherlands Antillean Gulden';

        $supported_currencies['AOA'] = 'Angolan Kwanza';

        $supported_currencies['ARS'] = 'Argentine Peso';

        $supported_currencies['AUD'] = 'Australian Dollar';

        $supported_currencies['AWG'] = 'Aruban Florin';

        $supported_currencies['AZN'] = 'Azerbaijani Manat';

        $supported_currencies['BAM'] = 'Bosnia & Herzegovina Convertible Mark';

        $supported_currencies['BBD'] = 'Barbadian Dollar';

        $supported_currencies['BDT'] = 'Bangladeshi Taka';

        $supported_currencies['BGN'] = 'Bulgarian Lev';

        $supported_currencies['BIF'] = 'Burundian Franc';

        $supported_currencies['BMD'] = 'Bermudian Dollar';

        $supported_currencies['BND'] = 'Brunei Dollar';

        $supported_currencies['BOB'] = 'Bolivian Boliviano';

        $supported_currencies['BRL'] = 'Brazilian Real';

        $supported_currencies['BSD'] = 'Bahamian Dollar';

        $supported_currencies['BWP'] = 'Botswana Pula';

        $supported_currencies['BZD'] = 'Belize Dollar';

        $supported_currencies['CAD'] = 'Canadian Dollar';

        $supported_currencies['CDF'] = 'Congolese Franc';

        $supported_currencies['CHF'] = 'Swiss Franc';

        $supported_currencies['CLP'] = 'Chilean Peso';

        $supported_currencies['CNY'] = 'Chinese Renminbi Yuan';

        $supported_currencies['COP'] = 'Colombian Peso';

        $supported_currencies['CRC'] = 'Costa Rican Colón';

        $supported_currencies['CVE'] = 'Cape Verdean Escudo';

        $supported_currencies['CZK'] = 'Czech Koruna';

        $supported_currencies['DJF'] = 'Djiboutian Franc';

        $supported_currencies['DKK'] = 'Danish Krone';

        $supported_currencies['DOP'] = 'Dominican Peso';

        $supported_currencies['DZD'] = 'Algerian Dinar';

        $supported_currencies['EGP'] = 'Egyptian Pound';

        $supported_currencies['ETB'] = 'Ethiopian Birr';

        $supported_currencies['EUR'] = 'Euro';

        $supported_currencies['FJD'] = 'Fijian Dollar';

        $supported_currencies['FKP'] = 'Falkland Islands Pound';

        $supported_currencies['GBP'] = 'British Pound';

        $supported_currencies['GEL'] = 'Georgian Lari';

        $supported_currencies['GIP'] = 'Gibraltar Pound';

        $supported_currencies['GMD'] = 'Gambian Dalasi';

        $supported_currencies['GNF'] = 'Guinean Franc';

        $supported_currencies['GTQ'] = 'Guatemalan Quetzal';

        $supported_currencies['GYD'] = 'Guyanese Dollar';

        $supported_currencies['HKD'] = 'Hong Kong Dollar';

        $supported_currencies['HNL'] = 'Honduran Lempira';

        $supported_currencies['HRK'] = 'Croatian Kuna';

        $supported_currencies['HTG'] = 'Haitian Gourde';

        $supported_currencies['HUF'] = 'Hungarian Forint';

        $supported_currencies['IDR'] = 'Indonesian Rupiah';

        $supported_currencies['ILS'] = 'Israeli New Sheqel';

        $supported_currencies['INR'] = 'Indian Rupee';

        $supported_currencies['ISK'] = 'Icelandic Króna';

        $supported_currencies['JMD'] = 'Jamaican Dollar';

        $supported_currencies['JPY'] = 'Japanese Yen';

        $supported_currencies['KES'] = 'Kenyan Shilling';

        $supported_currencies['KGS'] = 'Kyrgyzstani Som';

        $supported_currencies['KHR'] = 'Cambodian Riel';

        $supported_currencies['KMF'] = 'Comorian Franc';

        $supported_currencies['KRW'] = 'South Korean Won';

        $supported_currencies['KYD'] = 'Cayman Islands Dollar';

        $supported_currencies['KZT'] = 'Kazakhstani Tenge';

        $supported_currencies['LAK'] = 'Lao Kipa';

        $supported_currencies['LBP'] = 'Lebanese Pound';

        $supported_currencies['LKR'] = 'Sri Lankan Rupee';

        $supported_currencies['LRD'] = 'Liberian Dollar';

        $supported_currencies['LSL'] = 'Lesotho Loti';

        $supported_currencies['MAD'] = 'Moroccan Dirham';

        $supported_currencies['MDL'] = 'Moldovan Leu';

        $supported_currencies['MGA'] = 'Malagasy Ariary';

        $supported_currencies['MKD'] = 'Macedonian Denar';

        $supported_currencies['MNT'] = 'Mongolian Tögrög';

        $supported_currencies['MOP'] = 'Macanese Pataca';

        $supported_currencies['MRO'] = 'Mauritanian Ouguiya';

        $supported_currencies['MUR'] = 'Mauritian Rupee';

        $supported_currencies['MVR'] = 'Maldivian Rufiyaa';

        $supported_currencies['MWK'] = 'Malawian Kwacha';

        $supported_currencies['MXN'] = 'Mexican Peso';

        $supported_currencies['MYR'] = 'Malaysian Ringgit';

        $supported_currencies['MZN'] = 'Mozambican Metical';

        $supported_currencies['NAD'] = 'Namibian Dollar';

        $supported_currencies['NGN'] = 'Nigerian Naira';

        $supported_currencies['NIO'] = 'Nicaraguan Córdoba';

        $supported_currencies['NOK'] = 'Norwegian Krone';

        $supported_currencies['NPR'] = 'Nepalese Rupee';

        $supported_currencies['NZD'] = 'New Zealand Dollar';

        $supported_currencies['PAB'] = 'Panamanian Balboa';

        $supported_currencies['PEN'] = 'Peruvian Nuevo Sol';

        $supported_currencies['PGK'] = 'Papua New Guinean Kina';

        $supported_currencies['PHP'] = 'Philippine Peso';

        $supported_currencies['PKR'] = 'Pakistani Rupee';

        $supported_currencies['PLN'] = 'Polish Zloty';

        $supported_currencies['PYG'] = 'Paraguayan Guaraní';

        $supported_currencies['QAR'] = 'Qatari Riyal';

        $supported_currencies['RON'] = 'Romanian Leu';

        $supported_currencies['RSD'] = 'Serbian Dinar';

        $supported_currencies['RUB'] = 'Russian Ruble';

        $supported_currencies['RWF'] = 'Rwandan Franc';

        $supported_currencies['SAR'] = 'Saudi Riyal';

        $supported_currencies['SBD'] = 'Solomon Islands Dollar';

        $supported_currencies['SCR'] = 'Seychellois Rupee';

        $supported_currencies['SEK'] = 'Swedish Krona';

        $supported_currencies['SGD'] = 'Singapore Dollar';

        $supported_currencies['SHP'] = 'Saint Helenian Pound';

        $supported_currencies['SLL'] = 'Sierra Leonean Leone';

        $supported_currencies['SOS'] = 'Somali Shilling';

        $supported_currencies['SRD'] = 'Surinamese Dollar';

        $supported_currencies['STD'] = 'São Tomé and Príncipe Dobra';

        $supported_currencies['SZL'] = 'Swazi Lilangeni';

        $supported_currencies['THB'] = 'Thai Baht';

        $supported_currencies['TJS'] = 'Tajikistani Somoni';

        $supported_currencies['TOP'] = 'Tongan Pa?anga';

        $supported_currencies['TRY'] = 'Turkish Lira';

        $supported_currencies['TTD'] = 'Trinidad and Tobago Dollar';

        $supported_currencies['TWD'] = 'New Taiwan Dollar';

        $supported_currencies['TZS'] = 'Tanzanian Shilling';

        $supported_currencies['UAH'] = 'Ukrainian Hryvnia';

        $supported_currencies['UGX'] = 'Ugandan Shilling';

        $supported_currencies['USD'] = 'United States Dollar';

        $supported_currencies['UYU'] = 'Uruguayan Peso';

        $supported_currencies['UZS'] = 'Uzbekistani Som';

        $supported_currencies['VEF'] = 'Venezuelan Bolívar';

        $supported_currencies['VND'] = 'Vietnamese Ð?ng';

        $supported_currencies['VUV'] = 'Vanuatu Vatu';

        $supported_currencies['WST'] = 'Samoan Tala';

        $supported_currencies['XAF'] = 'Central African Cfa Franc';

        $supported_currencies['XCD'] = 'East Caribbean Dollar';

        $supported_currencies['XOF'] = 'West African Cfa Franc';

        $supported_currencies['XPF'] = 'Cfp Franc';

        $supported_currencies['YER'] = 'Yemeni Rial';

        $supported_currencies['ZAR'] = 'South African Rand';

        $supported_currencies['ZMW'] = 'Zambian Kwacha';

        if (array_key_exists($code, $supported_currencies)) {

            return TRUE;

        } else {

            return FALSE;

        }

    }




    /**

     * The listener for IPN callbacks.

     *

     * Offsite gateways should simply return;

     *

     * @param array $post_data

     */

    public function listenerIPN($post_data) {
		
	}



    /**

     * Exports the object parameters as JSON

     *

     * @return string

     */

    public function get_json()
	{
	
		$encoded = json_encode(get_object_vars($this));

        if ($encoded) {

            return $encoded;

        }



        return '[]';
		
	}



    /**

     * Imports the object parameters from JSON

     *

     * @param $json

     */

    public function inject_json($json)
	{
		$array = json_decode($json, TRUE);

        if (!array()) {

            $array = array();

        }

        if (isset($array['use_gateway'])) $this->setUseGateway($array['use_gateway']);

        if (isset($array['send_receipt'])) $this->setSendReceipt($array['send_receipt']);
	}

}

