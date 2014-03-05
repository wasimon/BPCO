<?php

class Esercizi extends CI_Controller 
{
	function index() {
        
		$this->view_data['esercizi'] = $this->db->get('esercizi')->result();
     	  
		$this->load->view('lista_esercizi', $this->view_data);             
        
	}
    
}
?>