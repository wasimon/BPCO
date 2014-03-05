<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	var $user = array();
 
	function __construct()
	{
		parent::__construct();

		$this->user = $this->session->all_userdata();
	}

	public function index()
	{
		if( ! $this->session->userdata('is_logged_in'))
		{
			$this->login();
		}
		 else
		{
			$this->members_area();
		}
	}
	
	public function login()
	{
		$this->load->view('login_form');
	}
   
	function members_area()
	{
		if( ! $this->session->userdata('is_logged_in'))
		{
			$this->login();
			return;
		}
		
		$input= $this->session->userdata('idmedico');
		$this->view_data['pazienti'] = $this->db->get_where('paziente', array('idmedico'=>$input))->result();
	
		$this->load->view('logged_in_area',$this->view_data);	
	}
    
    
	function aggiungi_esame()
	{
		if( ! $this->session->userdata('is_logged_in'))
		{
			$this->login();
			return;
		}
		
		$codfis = $this->input->post('codfis');
		$esame = $this->input->post('esame');
        
		$this->session->set_flashdata(array('codfis' => $codfis));
		redirect("esami/{$esame}");
	}

}


