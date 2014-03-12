<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prog extends CI_Controller
{
	var $view_data;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pazienti_model', 'pazienti');
		$this->load->model('esami_model', 'esami');
		
		$this->view_data = array(
			'hidden_fields'=>array(),
		);
	}
    
	function index($cf)
	{
		$prog_ch = 0;
		$subj = $this->pazienti->getByCF($cf);
		$erg = $this->esami->getCicloERG($cf);
		$ratio = ($erg->vo2max / $erg->vo2predetto);

		switch (TRUE) {
			case ($ratio <= 0.25):
				$prog_ch = 1;
				break;
			
			case ($ratio > 0.25 && $ratio <= 0.5):
				$prog_ch = 2;
				break;

			case ($ratio > 0.5 && $ratio <= 0.75):
				$prog_ch = 3;
				break;

			case ($ratio > 0.75):
				$prog_ch = 4;
				break;
		}
		
		$this->view_data['prog_choosen'] = $prog_ch;
		$this->view_data['cod_fis'] = $cf;
		
		// TODO: Calcola eta di nascita
		$eta = 45;
		if ($subj->sesso == 'M')
			$erg->hr = 230 - (1.1*$eta);
		else
			$erg->hr = 207 - (1.1*$eta);
		

		$this->view_data['cicloERG'] = $erg;
		
		$this->view_data['hidden_fields'] = array( 
			'cf'=>$cf,
			'suggested_prog'=>$prog_ch,
		);
		
		$this->load->view('prog/select_prog', $this->view_data);
	}
	
	
	function save()
	{
		if ( ! $this->input->post('submit') ) {
			$this->index();
		}
		else {
			
		}
	}
}       
       
