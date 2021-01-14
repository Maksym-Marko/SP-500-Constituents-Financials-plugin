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

		add_action( 'wp_ajax_mxsapc_update', [ 'MXSAPC_Main_Page_Model', 'prepare_update_database_column' ], 10, 1 );

	}

	/*
	* Prepare for data updates
	*/
	public static function prepare_update_database_column()
	{
		
		// Checked POST nonce is not empty
		if( empty( $_POST['nonce'] ) ) wp_die( '0' );

		// Checked or nonce match
		if( wp_verify_nonce( $_POST['nonce'], 'mxsapc_nonce_request' ) ){

			// Update data
			self::update_database_column( $_POST['mxsapc_some_string'] );		

		}

		wp_die();

	}

		// Update data
		public static function update_database_column( $string )
		{

			global $wpdb;

			$clean_string = esc_html( $string );

			$table_name = $wpdb->prefix . MXSAPC_TABLE_SLUG;

			$wpdb->update(

				$table_name, 
				[
					'mx_name' => $clean_string,
				], 
				[ 'product_id' => 1 ], 
				[ 
					'%s'
				]

			);

		}
	
}