<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	var $user = array();
 
	function __construct()
	{
		parent::__construct();

		if( ! $this->session->userdata('is_logged_in')) 
			$this->load->view('login_form');

		$this->user = $this->session->all_userdata();
	}

	public function index()
	{
		$this->members_area();
	}
   
	function members_area()
	{
		$input= $this->session->userdata('idmedico');
		$this->view_data['pazienti'] = $this->db->get_where('paziente', array('idmedico'=>$input))->result();
	
		$this->load->view('logged_in_area',$this->view_data);	
	}
    
    
	function aggiungi_esame()
	{
		$codfis = $this->input->post('codfis');
		$esame = $this->input->post('esame');
        
		$this->session->set_flashdata(array('codfis' => $codfis));
		redirect("esami/{$esame}");
	}

}


