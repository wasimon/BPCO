<?php

class Membership_model extends CI_Model {

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
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
			'password' => md5($this->input->post('password'))						
		);
		
		$insert = $this->db->insert('medico', $new_member_insert_data);
		return $insert;
	}
}