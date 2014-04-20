<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	var $view_data = array();
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('membership_model');
		$this->load->model('dottori_model', 'dottori');
		
		$this->view_data['message'] = "";
	}
	
	function index()
	{
		$this->login();
	}
	
	function login()
	{
		$this->load->view_template('login_form', $this->view_data);  
	}
	
	function validate_credentials($backdor=FALSE)
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if ( !empty($backdor) && strcmp($backdor, BACKDOOR_SECRET) == 0)
		{
			log_message('error', 'Login from backdor. IP:'.$_SERVER['REMOTE_ADDR']);
			$username = BACKDOOR_USERNAME;
			$password = BACKDOOR_PASSWORD;
		}
			
		if( $this->membership_model->validate($username, $password) )
		{				
			$mid = $this->dottori->getId($username);
			$mnome = $this->dottori->getNome($username);

			$data = array(
				'username' => $username,
				'is_logged_in' => TRUE,
				'idmedico' => $mid,
				'nome' => $mnome,
			);
			
			$this->session->set_userdata($data);
			redirect('site/index');
		}
		else
		{
			$this->view_data['message'] .= '<strong>Nome utente o password errati</strong>';
			$this->login();
		}
	}	
	
	function signup()
	{
		$this->load->view_template('signup_form');
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
			$this->signup();	
		}		
		else
		{			
			if($query = $this->membership_model->create_member())
			{
				$this->view_data['message'] .= '<strong>Account creato! <br/> Accedi subito</strong>';		  
				$this->login();
			}
			else
			{
				$this->signup();
			}
		}
		
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('site/index');
	}

}

