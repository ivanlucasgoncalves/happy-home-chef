/* eslint-disable no-undef */

class MenuMobileFooter {
    constructor( el ) {
        this.footer = el;
        this.widgetNavs = this.footer.querySelectorAll( '.widget_nav_menu' );
        this.init();
    }
    init() {
        this.widgetNavs.forEach( ( element ) => {
            const click = element.querySelector( '.widget-title' );

            click.addEventListener( 'click', ( el ) => {
                const menu = el.target.nextElementSibling.firstChild;

                if ( ! menu.classList.contains( 'active' ) ) {
                    menu.classList.add( 'active' );
                } else {
                    menu.classList.remove( 'active' );
                }
            } );
        } );
    }
}

const footer = document.querySelector( '.site-footer' );
if ( null !== footer ) {
    new MenuMobileFooter( footer );
}
