<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prog extends CI_Controller
{
	var $view_data;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pazienti_model', 'pazienti');
		$this->load->model('esami_model', 'esami');
		$this->load->model('programmi_model', 'programmi');
		
		$this->view_data = array(
			'hidden_fields'=>array(),
		);
	}
    
	function index($cf)
	{
		$prog_ch = 0;
		$subj = $this->pazienti->getByCF($cf);
		$erg = $this->esami->getCicloERG($cf);
		$sft = $this->esami->getSFT($cf);
		$antrop = $this->esami->getAntropometria($cf);
		
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
		
		$this->view_data['prog'][TIPO_PROG_AEROBICO] = $prog_ch;
		$this->view_data['prog'][TIPO_PROG_RINFORZO] = $prog_ch;
		$this->view_data['prog'][TIPO_PROG_ADDOMINALI] = $prog_ch;

		$this->view_data['cod_fis'] = $cf;
		$this->view_data['vo2max'] = $erg->vo2max;
		$this->view_data['sft_max'] = $sft->massimale;
		$this->view_data['BMI'] = $antrop->BMI;
		
		// TODO: Calcola eta di nascita
		$eta = 45;
		if ($subj->sesso == 'M')
			$this->view_data['hearth_rate'] = 230 - (1.1*$eta);
		else
			$this->view_data['hearth_rate'] = 207 - (1.1*$eta);
		
		$this->view_data['hidden_fields'] = array( 
			'cf'=>$cf,
			'suggested_prog'=>$prog_ch,
		);
		
		$this->load->view('prog/select_prog_head', $this->view_data);
		$this->load->view('prog/view_prog', $this->view_data);
		$this->load->view('prog/select_prog_foot', $this->view_data);
	}
	
	
	function save($cf)
	{
		if ( ! $this->input->post('submit') )
		{
			$this->index();
		}
		 else
		{
			$codfis = $this->input->post('cf');
			$default = $this->input->post('suggested_prog');
			$selez[TIPO_PROG_AEROBICO] = $this->input->post('prog_aerobic');
			$selez[TIPO_PROG_RINFORZO] = $this->input->post('prog_rinforzo');
			$selez[TIPO_PROG_ADDOMINALI] = $this->input->post('prog_addominali');
			
			if($this->programmi->saveProg($codfis, $selez, $default))
			{
				if( $this->input->post('submit') == 'Salva e Stampa' )
				{
					// TODO: Generate and Send pdf!
					$this->PDF($cf);
				}
				
				$this->session->set_flashdata('message', '<p class="message">Programmi selezionati salvati con successo!</p>');
				redirect("/pz/crea_index/{$cf}");
			}
		}
	}
	
	function PDF($cf)
	{
		# code...
	}
}
 
