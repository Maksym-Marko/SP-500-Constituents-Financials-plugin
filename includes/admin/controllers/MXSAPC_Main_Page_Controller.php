<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSAPC_Main_Page_Controller extends MXSAPC_Controller
{
	
	public function index()
	{

		$model_inst = new MXSAPC_Main_Page_Model();

		$data = $model_inst->mxsapc_get_row( NULL, 'product_id', 1 );

		return new MXSAPC_View( 'main-page', $data );

	}

	public function submenu()
	{

		return new MXSAPC_View( 'sub-page' );

	}

	public function hidemenu()
	{

		return new MXSAPC_View( 'hidemenu-page' );

	}

	public function settings_menu_item_action()
	{

		return new MXSAPC_View( 'settings-page' );

	}

}