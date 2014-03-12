<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pazienti_model extends CI_Model
{

	function add($pz_data)
	{
		try {
			return $this->db->insert('paziente', $pz_data);
			
		} catch (Exception $e) {
			log_message('error', 'Unable to add new Paziente: '.$e->getMessage());
		}
		
		return FALSE;
	}

	function getByCF($CF)
	{	
		$pz = $this->db->get_where('paziente', array('codfis' => $CF), 0, 1);
		
		if ($pz->num_rows()) {
			return $pz->row();
		}
		
		return FALSE;
	}
	
	function getBy($filters, $or_query=FALSE)
	{
		if ( is_array($filters) )
		{
			$this->db->from('paziente');
			
			if($or_query)
			{
				foreach ($filters as $field => $value)
					$this->db->or_where($field, $value);
			}
			 else
			{
				foreach ($filters as $field => $value)
					$this->db->where($field, $value);
			}
			
			try {
				$res = $this->db->get();
				
				return $res->result();
				
			} catch (Exception $e) {
				// TODO: Fare qualcosa per gestire il fatto che sono stati passati parametri sbagliati.
				echo "<p>DB Error!</p>";
				return FALSE;
			}
			
		}
		
		return FALSE;
	}

	function getAll()
	{
		$q = $this->db->select()->from('paziente')->get();
        
		if($q->num_rows() > 0)
			return $q->result();
		
		return FALSE;
	}
}