/* eslint-disable no-undef */
export default class MenuAccordion {
    constructor( $ ) {
        this.init( $ );
    }
    init( $ ) {
        $( '.collapse' ).on( 'show.bs.collapse', function() {
            $( this ).siblings( '.card-header' ).addClass( 'active-panel' );
        } );
        $( '.collapse' ).on( 'hide.bs.collapse', function() {
            $( this ).siblings( '.card-header' ).removeClass( 'active-panel' );
        } );
    }
}
