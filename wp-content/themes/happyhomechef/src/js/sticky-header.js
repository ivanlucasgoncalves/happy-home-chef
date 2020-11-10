/* eslint-disable no-undef */
export default class HeaderAnimation {
    constructor() {
        this.lastScrollTop = 0;
        this.mainHeader = document.querySelector( '#masthead' ).offsetHeight;
        this.stickyHeader = document.querySelector( '.sticky-header' );
        this.handleScroll();
    }

    handleScroll() {
        window.addEventListener( 'scroll', () => {
            const st = window.pageYOffset || document.documentElement.scrollTop;
            if ( st > this.lastScrollTop && st > this.mainHeader ) {
                this.stickyHeader.classList.add( 'show-sticky' );
            } else {
                this.stickyHeader.classList.remove( 'show-sticky' );
            }
            this.lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        }, false );
    }
}
