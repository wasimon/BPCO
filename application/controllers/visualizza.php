<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visualizza extends CI_Controller
{
	var $view_data = array();
		
	function __construct()
	{
		parent::__construct();

		// In questo controller facciamo solo delle display
		$this->view_data['display'] = TRUE;
	}

	function index($id)
	{
		var_dump($id);	   
	}

	function antropometria($id)
	{
		$this->view_data['ant'] = $this->db->get_where('t_antropometria', array('idantro'=>$id))->row();
 
		$this->load->view('esami/antropometria', $this->view_data);
	}

	function SFT($id)
	{
		$this->view_data['sft'] = $this->db->get_where('t_sft', array('idsft'=>$id))->row(); 
		$this->load->view('esami/SFT', $this->view_data);
	}

	function cicloerg($id)
	{
		$this->view_data['ciclo'] = $this->db->get_where('t_cicloerg', array('idciclo'=>$id))->row();     
		$this->load->view('esami/cicloerg', $this->view_data);  
    	   
	}
	
	function MMSE($id)
	{
		$this->view_data['mmse'] = $this->db->get_where('t_mmse', array('idmmse'=>$id))->row(); 
		$this->load->view('esami/MMSE', $this->view_data);
	}
	
	function tinetti($id)
	{
		$this->view_data['tinetti'] = $this->db->get_where('t_tinetti', array('idtinetti'=>$id))->row(); 
		$this->load->view('esami/tinetti', $this->view_data);  
	}

	function sf36($id)
	{
		$this->view_data['sf36'] = $this->db->get_where('t_sf36', array('idsf36'=>$id))->row(); 
		$this->load->view('esami/sf36', $this->view_data);  
	}

	function MRC($id)
	{
		$this->view_data['mrc'] = $this->db->get_where('t_mrc', array('idmrc'=>$id))->row(); 
		$this->load->view('esami/MRC', $this->view_data);  
	}

	function SGRQ($id)
	{
		$this->view_data['sgrq'] = $this->db->get_where('t_SGRQ', array('idsgrq'=>$id))->row();
		$this->load->view('esami/SGRQ', $this->view_data);  
	}
       
}
