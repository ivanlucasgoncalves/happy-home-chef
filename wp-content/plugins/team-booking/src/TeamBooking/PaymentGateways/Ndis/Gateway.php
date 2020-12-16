<?php



namespace TeamBooking\PaymentGateways\Ndis;



defined('ABSPATH') or die('No script kiddies please!');



/**

 * Interface Gateway

 *

 * This is the payment gateway interface

 *

 * @author VonStroheim

 */

class Gateway implements \TeamBooking\PaymentGateways\Gateway

{

    private $currency;

    private $receipt_email;

    private $items = array();

    private $order = '';
	
	public function __construct()

    {
		
    }

	/**

     * @param string $code

     */

    public function setCurrency($code)

    {

        $this->currency = $code;

    }



    /**

     * @param string $order_id

     */

    public function setOrderId($order_id)

    {

        $this->order = $order_id;

    }



    /**

     * @param string $email

     */

    public function setReceiptEmail($email)

    {

        $this->receipt_email = $email;

    }



    /**

     * @param string $name

     * @param        $unit_price

     * @param int    $quantity

     */

    public function addItem($name, $unit_price, $quantity = 1)

    {

        $this->items[] = array('name' => $name, 'amount' => $unit_price, 'quantity' => $quantity);

    }
	
    /**

     * The main payment routine

     */

    public function processPayment() {
	
	
		$description = '';

        if (!empty($this->order)) {

            $description = sprintf(esc_html__('Order %s', 'team-booking'), $this->order);

        } else {

            foreach ($this->items as $item) {

                $description .= $item['name'] . ', ';

            }

        }

		$amount = $this->generateAmount();
		//$discount = 10;
		//$final_price = ($amount - ($amount * ($discount / 100)));
        $parameters = array(

            'amount'      => $amount,

            // amount in cents, again

            'currency'    => $this->currency,

            'description' => rtrim($description, ', '),

        );

        if (NULL !== $this->receipt_email) {

            $parameters['receipt_email'] = $this->receipt_email;

        }
		
		try {

			/*$reservation_database_id = 224;
			
			$redirect_order_url = "https://cook.happyhomechef.com.au/";
			
			$reservation = Database\Reservations::getById($reservation_database_id);

            $reservation->setToBePaid(TRUE);

            $reservations = array($reservation);
			
			$gateway_id = "ndis";*/
			
			$return_array['charge id'] = rand();

            $return_array['receipt number'] = rand();

            $return_array['invoice id'] = rand();
			
			/*foreach ($reservations as $reservation_data) {
				$service_id = $reservation_data->getServiceId();

                $reservation_data->setPaid(TRUE);

                $reservation_data->setPaymentGateway($gateway_id);

                //$reservation_data->setPaymentDetails($return_array);
				
				$reservation_class = new \TeamBooking_Reservation($reservation_data);

                $reservation_data = $reservation_class->doReservation();
				
				$reservation_data->setStatusConfirmed();
				
				if ($reservation_data->getCustomerEmail() && $reservation_class->getServiceObj()->getEmailToCustomer('send')) {

					$reservation_class->sendConfirmationEmail();

				}
			}*/
			
			

            return $return_array;

        } catch (\Exception $e) {

            // Something else happened, completely unrelated to Stripe

            $code = $e->getCode();

            $message = $e->getMessage();

        }



        $error = new \TeamBooking_Error(60);

        $error->setExternalCode($code);

        $error->setMessage($message);



        return $error;
	}
	
	 /**

     * @return mixed

     */

    public function generateAmount()

    {

        $zero_decimal_currencies = array(

            'BIF' => 'Burundian Franc',

            'CLP' => 'Chilean Peso',

            'DJF' => 'Djiboutian Franc',

            'GNF' => 'Guinean Franc',

            'JPY' => 'Japanese Yen',

            'KMF' => 'Comorian Franc',

            'KRW' => 'South Korean Won',

            'MGA' => 'Malagasy Ariary',

            'PYG' => 'Paraguayan Guaraní',

            'RWF' => 'Rwandan Franc',

            'VND' => 'Vietnamese Ğ?ng',

            'VUV' => 'Vanuatu Vatu',

            'XAF' => 'Central African Cfa Franc',

            'XOF' => 'West African Cfa Franc',

            'XPF' => 'Cfp Franc',

        );



        $amount = 0;

        if (array_key_exists($this->currency, $zero_decimal_currencies)) {

            foreach ($this->items as $item) {

                $amount += $item['amount'] * $item['quantity'];

            }

        } else {

            foreach ($this->items as $item) {

                $amount += $item['amount'] * $item['quantity'] * 100;

            }

        }



        return $amount;

    }



}