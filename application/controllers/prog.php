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
		
		echo "<!-- \n";
		print_r($subj);
		print_r($erg);
		print_r($antrop);
		echo "\n -->";
		
		$ratio = ($erg->vo2max / $erg->vo2predetto);
		
		echo "<br/>Ratio: {$ratio}";
		
		if ($ratio <= 0.25) {
			$this->view_data['prog_choosen'] = 1;
			
		} elseif($ratio > 0.25 && $ratio <= 0.5) {
			
			$this->view_data['prog_choosen'] = 2;
		} elseif ($ratio > 0.5 && $ratio <= 0.75) {
			
			$this->view_data['prog_choosen'] = 3;
		} else {
			
			$this->view_data['prog_choosen'] = 4;
		}
		
		echo "<br>Programma selezionato: {$this->view_data['prog_choosen']}";
		
		
	}
}       
       
