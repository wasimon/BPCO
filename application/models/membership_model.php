<?php

class Membership_model extends CI_Model {

	function validate($user, $pass)
	{
		$this->db->where('username', $user);
		$this->db->where('password', md5($pass));
		$query = $this->db->get('medico');
		
		return ($query->num_rows === 1);
	}
	
	function create_member()
	{
		
		$new_member_insert_data = array(
			'nome' => $this->input->post('first_name'),
			'cognome' => $this->input->post('last_name'),
			'email' => $this->input->post('email_address'),	
			'telefono' => $this->input->post('telefono'),		
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'stato'	 => MEMBERSHIP_ENABLED,
		);
		
		$insert = $this->db->insert('medico', $new_member_insert_data);
		return $insert;
	}
}