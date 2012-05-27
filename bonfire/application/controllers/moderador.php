<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Moderador extends Front_Controller {

	//--------------------------------------------------------------------
	
	public function index() 
	{	
	
	$header = '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
	$title = "Cpanel del Moderador";
	$html= "<H1>Consola de administración del Moderador</H1>";
	$datos = array (
	'header' => $header,
	'title' => $title,
	'body' => $html
	);
	//$this->load->view('header');
	$this->load->view('moderador',$datos);
	}
	
	//--------------------------------------------------------------------
	

}