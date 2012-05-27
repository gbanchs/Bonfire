<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Event_list extends Front_Controller {

	//--------------------------------------------------------------------
	
	public function index() 
	{	
	$header = '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
	$title = "Listado de Eventos";
	$html= "<H1>Listado de Eventos a Nivel Nacional</H1>";
	$datos = array (
	'header' => $header,
	'title' => $title,
	'body' => $html
	);
		
		$this->load->view('event/list',$datos);
	}
	
	//--------------------------------------------------------------------
	

}