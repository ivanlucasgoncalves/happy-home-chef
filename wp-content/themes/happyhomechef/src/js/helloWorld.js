
export function helloWorld( text ) {

	// Consoling a text
	console.log(text);

	// Testing jquery
	$( '.custom-logo' ).click( ( e ) => {
		e.preventDefault();
		console.log('Clickedd!');
	} );

}
