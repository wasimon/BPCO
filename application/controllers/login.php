<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('membership_model');
	}
	
	function index()
	{
		$this->login();
	}
	
	function login()
	{
		$this->load->view('login_form');  
	}
	
	function validate_credentials()
	{
		$query = $this->membership_model->validate();
		$this->load->model('Data_model');
		$mid = $this->Data_model->getId($this->input->post('username'));
		$mnome = $this->Data_model->getNome($this->input->post('username'));
        
        
        
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true,
				'idmedico' => $mid,
				'nome' => $mnome,
			);
			$this->session->set_userdata($data);
			redirect('site/index');
		}
		else // incorrect username or password
		{
		  
			echo '<h2>Nome utente o password errati</h2>';		  
			$this->index();
            
		}
	}	
	
	function signup()
	{
		$this->load->view('signup_form');
	}
	
	function create_member()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|is_unique[medico.email]');
		$this->form_validation->set_rules('telefono', 'telefono', 'trim|required|min_length[10]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[medico.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('signup_form');	
		}		
		else
		{			
			if($query = $this->membership_model->create_member())
			{
				echo '<h3>Account creato! <br/> Accedi subito</h3>';		  
				$this->index();
			}
			else
			{

				$this->load->view('signup_form');			
			}
		}
		
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('site/index');
	}

}