<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esercizi extends CI_Controller 
{
	function index() {
        
		$this->view_data['esercizi'] = $this->db->get('esercizi')->result();
     	  
		$this->load->view_template('lista_esercizi', $this->view_data);             
        
	}
    
}
