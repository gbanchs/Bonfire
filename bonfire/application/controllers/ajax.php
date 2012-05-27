<?php
class Ajax extends CI_Controller {
 
    public function data()
    {
        $data['html'] = '<p>HTML Content</p>';
 echo "prueba";
        $this->load->view('test', $data);
		
    }
}
?>