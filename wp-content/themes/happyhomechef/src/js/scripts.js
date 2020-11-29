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
}( jQuery ) );

