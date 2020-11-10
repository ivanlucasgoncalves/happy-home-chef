/* eslint-disable no-unused-vars */
/* eslint-disable no-undef */
export default class TopHero {
    constructor() {
        this.mainContainer = document.querySelector( '.block-component--top-hero > .container' ).offsetWidth;
        this.windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        this.topHeroRightContainer = document.querySelector( '.top-hero--right-content' ).offsetWidth;
        this.backgroundImageContainer = document.querySelector( '.background-image-top-hero' );
        this.init();
    }

    init() {
        this.printOffSizes( this.mainContainer, this.windowWidth, this.topHeroRightContainer );
        window.addEventListener( 'resize', () => this.handleResizeWindow() );
    }
    handleResizeWindow() {
        // New values on resize.
        const resizeMainContainer = document.querySelector( '.block-component--top-hero > .container' ).offsetWidth;
        const resizeWindowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        const resizeTopHeroRightContainer = document.querySelector( '.top-hero--right-content' ).offsetWidth;

        this.printOffSizes( resizeMainContainer, resizeWindowWidth, resizeTopHeroRightContainer );
    }
    printOffSizes( mainContainer, windowWidth, topHeroRightContainer ) {
        const totalContainer = ( windowWidth - mainContainer ) / 2;
        const totalWidth = parseInt( totalContainer + topHeroRightContainer );
        this.backgroundImageContainer.style.width = totalWidth + 'px';
    }
}
