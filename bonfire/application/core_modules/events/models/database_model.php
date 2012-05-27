<?php
class Database_model extends CI_Model {
 
    function model()
    {
        // Call the Model constructor
        parent::Model();
    }
     
    function getData()
  {
   //Query the data table for every record and row
   $query = $this->db->get('event_event');
    
   if ($query->num_rows() > 0)
   {
    return $query->result();
   }else{
    //show_error('Database is empty!');
   }
  } 
 
}
?>
