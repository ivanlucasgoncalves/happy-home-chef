/* eslint-disable no-undef */

class MainMobileMenu {
    constructor( el ) {
        this.mainMenu = el;
        this.body = document.querySelector( 'body' );
        this.hamburgerClick = document.querySelector( '.hamburger-click' );
        this.hamburgerIcon = document.querySelector( '.hamb' );
        this.closeIcon = document.querySelector( '.close' );
        this.init();
    }
    init() {
        this.hamburgerClick.addEventListener( 'click', ( e ) => {
            e.preventDefault();

            if ( ! this.mainMenu.classList.contains( 'active' ) ) {
                this.mainMenu.classList.add( 'active' );
                this.hamburgerIcon.style.display = 'none';
                this.closeIcon.style.display = 'block';
                this.body.style.overflow = 'hidden';
            } else {
                this.mainMenu.classList.remove( 'active' );
                this.hamburgerIcon.style.display = 'block';
                this.closeIcon.style.display = 'none';
                this.body.style.overflow = 'inherit';
            }
        } );
    }
}

const mainMenu = document.querySelector( '.main-navigation' );
if ( null !== mainMenu ) {
    new MainMobileMenu( mainMenu );
}
