<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dottori_model extends CI_Model	{
		
	function getId($uid)
	{
		$this->db->select('idmedico')
			->from('medico')
				->where('username',$uid);

		$q = $this->db->get();
        
		if($q->num_rows() > 0)
			return $q->row()->idmedico;
        
		return FALSE;
	}    
    
	function getNome($uid)
	{	
		$this->db->select('cognome');
		$q = $this->db->get_where('medico', array('username'=> $uid));
        
		if($q->num_rows() > 0)
		{
			$return = $q->result();
			return $return[0]->cognome; //TODO: getNome o getCognome?!
		}

		return FALSE;
	}   
    
        
  
	function getAll()
	{
		$this->db->from('paziente');
		$this->db->where('sesso','f'); //TODO: solo le donne?!    
		$q = $this->db->get();
		
		// $q = $this->db->get('paziente'); //TODO: In teoria ti basta solo questo.
        
		if($q->num_rows() > 0)
			return $q->result;
		
		return FALSE;
	}
}