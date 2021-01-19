<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Main page Model
*/
class MXSAPC_Main_Page_Model extends MXSAPC_Model
{

	/*
	* Observe function
	*/
	public static function mxsapc_wp_ajax()
	{

		// add_action( 'wp_ajax_mxsapc_update', [ 'MXSAPC_Main_Page_Model', 'prepare_update_database_column' ], 10, 1 );

	}
	
	
}