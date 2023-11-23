// JavaScript Document

	// JS縺ｮ蟷ｲ貂峨ｒ蝗樣∩
	function addEvent( elm, listener, fn ) {
		"use strict";
		try {
			elm.addEventListener( listener, fn, false );
		} catch ( e ) {
			elm.attachEvent( "on" + listener, fn );
		}
	}

	var rellax = new Rellax( '.rellax' );
	document.addEventListener( "DOMContentLoaded", function () {
		$( ".entry-list-child" ).click( function () {
			window.location = $( this ).find( "a" ).attr( "href" );
			return false;
		} );
	} );
