<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prog extends CI_Controller
{
	var $view_data;
	
	function __construct()
	{
		parent::__construct();
    
    // ci serve che il medico sia loggato altrimenti non possiamo costruire il PDF
    if($this->session->userdata('is_logged_in') != TRUE)
    {
      redirect('login');
    }
    
		$this->load->model('pazienti_model', 'pazienti');
		$this->load->model('esami_model', 'esami');
		$this->load->model('programmi_model', 'programmi');
		$this->load->model('dottori_model', 'dottori');
		
		
		$this->view_data = array(
			'hidden_fields'=>array(),
		);
	}
    
	function index($cf)
	{
		$this->_generateViewData($cf);
		
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
	
	function PDF($cf, $download_pdf=FALSE)
	{
		// Path realtiva ad index.php
		require_once('tcpdf/tcpdf.php');
		// Genera i dati che saranno utilizzati in tutte le view caricate
		$this->_generateViewData($cf, FALSE);
		$this->view_data['le_variabili'] = array_keys($this->view_data);
		
		
		if ($download_pdf===TRUE OR strcasecmp($download_pdf, 'si') == 0 OR strcasecmp($download_pdf, 'download') == 0)
		{
			// Force download if url is: /prog/PDF/$CODFISC/download OR /prog/PDF/$CODFISC/si
			$pdf_mode = "D";
		}
		else
		{
			// In all other cases simply let the browser decide what to do
			$pdf_mode = "I";
		}

		$saved_file = FCPATH.$this->view_data['PDF']['filename'];
		if ( file_exists( $saved_file )) {
			# return file
			switch ($pdf_mode) {
				case 'D':
					header('Content-Description: File Transfer');
					if (headers_sent()) {
						echo('Some data has already been output to browser, can\'t send PDF file');
					}
					header('Cache-Control: private, must-revalidate, post-check=0, pre-check=0, max-age=1');
					header('Pragma: public');
					header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
					header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
					// force download dialog
					if (strpos(php_sapi_name(), 'cgi') === false) {
						header('Content-Type: application/force-download');
						header('Content-Type: application/octet-stream', false);
						header('Content-Type: application/download', false);
						header('Content-Type: application/pdf', false);
					} else {
						header('Content-Type: application/pdf');
					}
					// use the Content-Disposition header to supply a recommended filename
					header('Content-Disposition: attachment; filename="'.$this->view_data['PDF']['filename'].'"');
					header('Content-Transfer-Encoding: binary');
					TCPDF_STATIC::sendOutputData(file_get_contents($saved_file), filesize($saved_file));
					break;
				
				case 'I':
					if (php_sapi_name() != 'cli') {
						// send output to a browser
						header('Content-Type: application/pdf');
						if (headers_sent()) {
							$this->Error('Some data has already been output to browser, can\'t send PDF file');
						}
						header('Cache-Control: private, must-revalidate, post-check=0, pre-check=0, max-age=1');
						//header('Cache-Control: public, must-revalidate, max-age=0'); // HTTP/1.1
						header('Pragma: public');
						header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
						header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
						header('Content-Disposition: inline; filename="'.$this->view_data['PDF']['filename'].'"');
						TCPDF_STATIC::sendOutputData(file_get_contents($saved_file), filesize($saved_file));
					}
					break;
			}
			
			exit();
		}
		
		// SETUP DELLA LIBRERIA TCPDF
		$pdf = new TCPDF();
		// set document information ( definito in application/config/constants.php )
		$pdf->SetCreator(BPCO_PDF_CREATOR);
		$pdf->SetTitle($this->view_data['PDF']['title']);
		
		// set default header data
		$pdf->SetHeaderData("../img/logo.png", 15, $this->view_data['PDF']['title'], $this->view_data['PDF']['header']);
		$pdf->setFooterData(array(0,64,0), array(0,64,128));
		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', 8));
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		// set default font subsetting mode
		$pdf->setFontSubsetting(true);
		$pdf->SetFont('dejavusans', '', 11, '', true);
		// ---------------------------------------------------------

		// Disabilita l'interruzione automatica della pagina
		$pdf->SetAutoPageBreak(FALSE);

		// DOCS: http://ellislab.com/codeigniter/user-guide/helpers/directory_helper.html
		// Note: Paths are almost always relative to your main index.php file.
		$this->load->helper('directory');
		$dir_map = directory_map('./application/views/prog/PDF/', 1);
    sort($dir_map, SORT_STRING);
    
		// In questo modo non serve nominare le pagine con il solo numero, possono avere anche un nome user-friendly
		// o per meglio dire "developer-friendly" (leggasi `Saimon-friendly`)
		foreach ($dir_map as $view_name)
		{
			$pdf->AddPage();
			
			// USAGE:
			// Tutte la chiavi definite in $this->view_data (che viene riempito dalla funzione $this->_generateViewData() )
			//   sono trasformate in variabili avvessibili nella view. Per esempio se definiamo $this->view_data['saimon'] = "una cacca";
			//   e nel file della view facciamo: echo("Saimon è ".$saimon ) php ci stamperà la stringa: "Saimon è una cacca"
			//   Vedete gli esempi che ho fatto nei file delle view. ;-)
			// 
			// $return_value = $this->load->view(string $ViewName, array $ViewVariables, boolean $return_instead_of_echo);
			$page_html = $this->load->view("prog/PDF/{$view_name}", $this->view_data, TRUE);
			
			// Supported tags are: a, b, blockquote, br, dd, del, div, dl, dt, em, font, h1, h2, h3,
			//	 h4, h5, h6, hr, i, img, li, ol, p, pre, small, span, strong, sub, sup, table, tcpdf,
			//	 td, th, thead, tr, tt, u, ul
			// NOTE: all the HTML attributes must be enclosed in double-quote.
			// DOCS: http://www.tcpdf.org/doc/code/classTCPDF.html#ac3fdf25fcd36f1dce04f92187c621407
			$pdf->writeHTML($page_html);


			$pdf->endPage();
		}
		
		// il secondo parametro della funzione Output puo essere utile!
		// DOCS: http://www.tcpdf.org/doc/code/classTCPDF.html#a3d6dcb62298ec9d42e9125ee2f5b23a1
		$pdf->Output($this->view_data['PDF']['filename'], "F".$pdf_mode);
	}
	
	
	private function _generateViewData($cf, $calculate = TRUE)
	{
		$prog_ch = 0;
		
		$idm = $this->session->userdata('idmedico');
		$this->view_data['dottori'] = $this->dottori->getDatiMedico($idm);
    
		$this->view_data['paziente'] = $this->pazienti->getAnagrafica($cf);
		$this->view_data['esami'] = $this->esami->getAllExams($cf, TRUE);
		$pz = $this->view_data['paziente'];
		$erg = $this->view_data['esami']->cicloerg;
		$sft = $this->view_data['esami']->sft;
		$antrop = $this->view_data['esami']->antropometria;
		$doc = $this->view_data['dottori'];
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
			
			$this->view_data['PDF']['filename'] = "Cartella.di.{$pz->cognome}.{$pz->nome}.".date('Y-m-d', current(	$saved_progs)->timestamp).".pdf";
			$this->view_data['PDF']['title'] = "Programma di trattamento domiciliare del sign. '{$pz->cognome} {$pz->nome}' creato in data ".date('d-m-Y', current(	$saved_progs)->timestamp);
			
$this->view_data['PDF']['header'] = "Programma elaborato dal dottor {$doc->cognome} {$doc->nome}, Tel. {$doc->telefono}";
				
		}

		$this->view_data['cod_fis'] = $cf;
		$this->view_data['vo2max'] = $erg->vo2max;
		$this->view_data['sft_max'] = $sft->massimale;
		$this->view_data['BMI'] = $antrop->BMI;
		
		$age = 45; // Default se il valore nel db non e' corretto
		if (($birth_time = strtotime($pz->datanascita))!==FALSE) {
			$birth_year = date('Y', $birth_time);
			$curr_year = date("Y");
			$age = (date("md", $birth_time) > date("md")) ? (($curr_year - $birth_year) - 1)  :  ($curr_year - $birth_year);
		}
		if ($pz->sesso == 'M')
			$this->view_data['hearth_rate'] = 230 - (1.1*$age);
		else
			$this->view_data['hearth_rate'] = 207 - (1.1*$age);
		
		$this->view_data['hidden_fields'] = array( 
			'cf'=>$cf,
			'suggested_prog'=>$prog_ch,
		);
	}
	
	
}
