/* eslint-disable no-undef */
import 'bootstrap/js/dist/collapse';

import './reviews';
import './top-hero';
import './main-mob-menu';
import './footer-mob-menu';
import HeaderAnimation from './sticky-header';
import Search from './search';
// import FacebookApp from './facebook-app';
import MenuAccordion from './menu-accordion';

( function( $ ) {
    'use strict';

    new HeaderAnimation;
    new Search;
    new MenuAccordion( $ );

    const calendar = document.querySelector( '.calendar-container' );
    if ( null !== calendar ) {
        if ( null !== calendar.querySelector( '.clickable-div' ) ) {
            calendar.querySelector( '.clickable-div' ).addEventListener( 'click', ( e ) => {
                e.preventDefault();
                window.location.href = 'http://staging.happyhomechef.com.au/book-now/';
            } );
        }
    }
}( jQuery ) );

