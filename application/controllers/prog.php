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
		$this->_genViewData($cf);
		
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
		require_once('tcpdf/tcpdf.php');

		$subj = $this->pazienti->getByCF($cf);
		
		$this->_genViewData($cf, FALSE);

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(BPCO_PDF_CREATOR);
		$pdf->SetTitle('BPCO Esercizi Selezionati');

		// set default header data
		$pdf->SetHeaderData("../img/logo.png", 15, $this->view_data['PDF']['title'], $this->view_data['PDF']['header']);
		$pdf->setFooterData(array(0,64,0), array(0,64,128));

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			require_once(dirname(__FILE__).'/lang/eng.php');
			$pdf->setLanguageArray($l);
		}

		// ---------------------------------------------------------

		// set default font subsetting mode
		$pdf->setFontSubsetting(true);

		$pdf->SetFont('dejavusans', '', 14, '', true);

		for ($i=0; $i <2 ; $i++) { 
			$pdf->AddPage();

			include_once 'application/views/prog/stampa/'.$i.'.php';

			$pdf->writeHTMLCell(0, 0, '', '', $html.'$i', 0, 1, 0, true, '', true);

			$pdf->lastPage();
		}

		$pdf->Output('Programma_'.$subj->nome, 'I');


	}
	
	
	private function _genViewData($cf, $calculate = TRUE)
	{
		$prog_ch = 0;
		$subj = $this->pazienti->getByCF($cf);
		$erg = $this->esami->getCicloERG($cf);
		$sft = $this->esami->getSFT($cf);
		$antrop = $this->esami->getAntropometria($cf);
		
		
		if ($calculate)
		{
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
		}
		else
		{
			$saved_progs = $this->programmi->getProg($cf);
			
			$this->view_data['prog'][TIPO_PROG_AEROBICO] = $saved_progs[TIPO_PROG_AEROBICO]->p;
			$this->view_data['prog'][TIPO_PROG_RINFORZO] = $saved_progs[TIPO_PROG_RINFORZO]->p;
			$this->view_data['prog'][TIPO_PROG_ADDOMINALI] = $saved_progs[TIPO_PROG_ADDOMINALI]->p;
			
			$this->view_data['PDF']['filename'] = "{$subj->cognome}.{$subj->nome}.".date('Y-m-d', current(	$saved_progs)->timestamp).".pdf";
			$this->view_data['PDF']['title'] = "Programmi Selezionati per il paziente {$subj->cognome} {$subj->nome} in data ".date('Y-m-d', current(	$saved_progs)->timestamp);
			$this->view_data['PDF']['header'] = "";
		}


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
	}
	
}

 
