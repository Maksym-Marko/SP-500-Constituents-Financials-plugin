<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSAPC_Admin_Main
{

	// list of model names used in the plugin
	public $models_collection = [
		'MXSAPC_Main_Page_Model'
	];

	/*
	* MXSAPC_Admin_Main constructor
	*/
	public function __construct()
	{

	}

	/*
	* Additional classes
	*/
	public function mxsapc_additional_classes()
	{

		// enqueue_scripts class
		mxsapc_require_class_file_admin( 'enqueue-scripts.php' );

		MXSAPC_Enqueue_Scripts::mxsapc_register();

	}

	/*
	* Models Connection
	*/
	public function mxsapc_models_collection()
	{

		// require model file
		foreach ( $this->models_collection as $model ) {
			
			mxsapc_use_model( $model );

		}		

	}

	/**
	* registration ajax actions
	*/
	public function mxsapc_registration_ajax_actions()
	{

		// ajax requests to main page
		// MXSAPC_Main_Page_Model::mxsapc_wp_ajax();

	}

	/*
	* Routes collection
	*/
	public function mxsapc_routes_collection()
	{		

	}

}

// Initialize
$initialize_admin_class = new MXSAPC_Admin_Main();

// include classes
$initialize_admin_class->mxsapc_additional_classes();

// include models
$initialize_admin_class->mxsapc_models_collection();

// ajax requests
$initialize_admin_class->mxsapc_registration_ajax_actions();

// include controllers
$initialize_admin_class->mxsapc_routes_collection();