<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Front_Controller {

	//--------------------------------------------------------------------
	
	public function index() 
	{	
	Template::set_view('menus/menu_azul/index');
	Template::render();
	}
	
	//--------------------------------------------------------------------
	

}