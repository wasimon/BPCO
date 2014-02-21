<?php
class Data_model extends CI_Model	{
		
//USATI SOLO DOPO LA LOGIN

function getId($uid)	{
		
        
        $this->db->select('idmedico');
        $this->db->from('medico');
        $this->db->where('username',$uid);
        
        $q = $this->db->get();
        
        if($q->num_rows() > 0){	
	       $return = $q->result();
           return $return[0]->idmedico;
        }
        
        return false;
  
  
    }    
    
function getNome($uid)	{
		
        $this->db->select('cognome');
        $this->db->from('medico');
        $this->db->where('username',$uid);
        
        $q = $this->db->get();
        
        if($q->num_rows() > 0){	
	       $return = $q->result();
           return $return[0]->cognome;
        }
        
        return false;
  
  
    }   
    
        
  
    function getAll()	{
		
        
        $this->db->select();
        $this->db->from('paziente');
        $this->db->where('sesso','f');
        
        $q = $this->db->get();
        
        if($q->num_rows() > 0)	{
		      foreach($q->result() as $row)	{
		          $data[] = $row;
		}
        return $data;
        
		}
  
  
    }
        
}