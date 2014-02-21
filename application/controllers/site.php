<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

var $user = array();
 
 function __construct()
	{
			parent::__construct();
		
        $is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) OR $is_logged_in != true)
		{
		 
		$this->load->view('login_form');
   		}
         else
         {
		  $this->members_area();	
   		}
        $this->user = $this->session->all_userdata();
	}

public function index()
	{
 
   }
   
	function members_area()
	{
	$input= $this->session->userdata('idmedico');
   $this->view_data['pazienti'] = $this->db->get_where('paziente', array('idmedico'=>$input))->result();
        //$this->load->view('logged_in_area');
		
	
		$this->load->view('logged_in_area',$this->view_data);	
	}
    
    
    

/*
 function __construct()
	{
			parent::__construct();
		$this->is_logged_in();
        $this->user = $this->session->all_userdata();
	}

    
public function index()
	{
 echo 'stacippa';
 $this->load->view('login_form', $data);   
 
 
   }


	function members_area()
	{
		//$this->load->view('logged_in_area');
		$view_data['main_content'] = 'logged_in_area';
		$this->load->view('includes/template', $view_data);	
	}
    
    function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			//echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';	
			//die();		
			//$this->load->view('login_form');
			redirect('login/index');
   		}



   */ 
    function aggiungi_esame()
	{
		$codfis = $this->input->post('codfis');
        $esame = $this->input->post('esame');
        
        $this->session->set_flashdata(array('codfis' => $codfis));
        redirect("esami/{$esame}");
	}

}


