jQuery( document ).ready( function( $ ) {

	$( '#mxsapc_form_update' ).on( 'submit', function( e ){

		e.preventDefault();

		var nonce = $( this ).find( '#mxsapc_wpnonce' ).val();

		var someString = $( '#mxsapc_some_string' ).val();

		var data = {

			'action': 'mxsapc_update',
			'nonce': nonce,
			'mxsapc_some_string': someString

		};

		jQuery.post( mxsapc_admin_localize.ajaxurl, data, function( response ){

			// console.log( response );
			alert( 'Value updated.' );

		} );

	} );

} );