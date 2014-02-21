<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visualizza extends CI_Controller
{
    var $view_data = array();
		
	function __construct()
	{
		parent::__construct();
        
	}
    
    function index($input)
	{
    echo $input;	   
    }

function antropometria($input)
	{

$this->view_data['ant'] = $this->db->get_where('t_antropometria', array('idantro'=>$input))->row();
$this->view_data['display'] = TRUE;
 
     
 $this->load->view('esami/antropometria', $this->view_data);  
    	   
    }



    
function SFT($input)
	{

$this->view_data['sft'] = $this->db->get_where('t_sft', array('idsft'=>$input))->row();
$this->view_data['display'] = TRUE;
 
     
 $this->load->view('esami/SFT', $this->view_data);  
    	   
    }

function cicloerg($input)
	{

$this->view_data['ciclo'] = $this->db->get_where('t_cicloerg', array('idciclo'=>$input))->row();
$this->view_data['display'] = TRUE;
 
     
 $this->load->view('esami/cicloerg', $this->view_data);  
    	   
    }
   function MMSE($input)
	{

 $this->view_data['mmse'] = $this->db->get_where('t_mmse', array('idmmse'=>$input))->row();
 $this->view_data['display'] = TRUE;
 
     //echo $input;   
 $this->load->view('esami/MMSE', $this->view_data);  
    	   
    }  
    function tinetti($input)
	{

 $this->view_data['tinetti'] = $this->db->get_where('t_tinetti', array('idtinetti'=>$input))->row();
 $this->view_data['display'] = TRUE;
 
     //echo $input;   
 $this->load->view('esami/tinetti', $this->view_data);  
    	   
    }
    
    
function sf36($input)
	{

 $this->view_data['sf36'] = $this->db->get_where('t_sf36', array('idsf36'=>$input))->row();
 $this->view_data['display'] = TRUE;
 
     //echo $input;   
 $this->load->view('esami/sf36', $this->view_data);  
    	   
    }
    
    function MRC($input)
	{

 $this->view_data['mrc'] = $this->db->get_where('t_mrc', array('idmrc'=>$input))->row();
 $this->view_data['display'] = TRUE;
 
     //echo $input;   
 $this->load->view('esami/MRC', $this->view_data);  
    	   
    }
    
function SGRQ($input)
	{

 $this->view_data['sgrq'] = $this->db->get_where('t_SGRQ', array('idsgrq'=>$input))->row();
 $this->view_data['display'] = TRUE;
 
     //echo $input;   
 $this->load->view('esami/SGRQ', $this->view_data);  
    	   
    }
       
}
?>