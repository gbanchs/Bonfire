<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Database extends Front_Controller{
  function index()
  {
   $this->load->model('database_model');
 $this->load->model('events/databaset_model', 'database_model');
   $data['result'] = $this->database_model->getData();
   $data['page_title'] = "Codeigniter Controller!";
 
   $this->load->view('database',$data);
     }
 }
