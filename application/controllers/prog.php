<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prog extends CI_Controller
{
		
	function __construct()
	{
		parent::__construct();
		$this->load->model('pazienti_model', 'pazienti');
		$this->load->model('esami_model', 'esami');
	}
    
	function index($cf)
	{
		echo "CodFis: ".$cf;
		
		$subj = $this->pazienti->getByCF($cf);
		$erg = $this->esami->getCicloERG($cf);
		$antrop = $this->esami->getAntropometria($cf);
		
		echo "<pre>";
		print_r($subj);
		print_r($erg);
		print_r($antrop);
		echo "</pre>";
	}
}       
       
       
       
       
       
       
       
       
