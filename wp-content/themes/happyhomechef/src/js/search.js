/* eslint-disable no-undef */
export default class Search {
    constructor() {
        this.stickySearch = document.querySelector( '.sticky-search' );
        this.buttonSearch = document.querySelector( '.button-search' );
        this.buttonCloseSearch = document.querySelector( '.button-close-search' );
        this.inputSearch = document.querySelector( '#input-search' );
        this.init();
    }
    init() {
        this.buttonSearch.addEventListener( 'click', ( e ) => {
            e.preventDefault();
            this.handleShowAndHide();
        } );
        this.buttonCloseSearch.addEventListener( 'click', ( e ) => {
            e.preventDefault();
            this.handleClose();
        } );
    }
    handleShowAndHide() {
        if ( ! this.stickySearch.classList.contains( 'show-sticky-search' ) ) {
            this.stickySearch.classList.add( 'show-sticky-search' );
            this.inputSearch.focus();
        }
    }
    handleClose() {
        if ( this.stickySearch.classList.contains( 'show-sticky-search' ) ) {
            this.stickySearch.classList.remove( 'show-sticky-search' );
        }
    }
}
