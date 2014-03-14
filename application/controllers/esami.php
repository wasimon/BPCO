<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esami extends CI_Controller
{
		
	function __construct()
	{
		parent::__construct();
		$this->load->model('esami_model');
	}
	
	
	function index($input)
	{
		if($this->input->post('submit'))
		{
			$data = $this->input->post();

			unset($data['submit']);
			$succes = false;
                
			switch($input)
			{
				case 'tinetti':
					$succes = $this->esami_model->create_tinetti($data);
					break;
    
				case 'sf36':
					$succes = $this->esami_model->create_SF36($data);
					break;
                    
				case 'MMSE':
					$succes = $this->esami_model->create_MMSE($data);
					break;
                    
				case 'sgrq':
					$succes = $this->esami_model->create_sgrq($data);
					break;
                    
				case 'SFT':
					unset($data['aria']);
					unset($data['pausa']);
					unset($data['stop']);
					$succes = $this->esami_model->createSFT($data);
					break;
                    
				case 'mrc':
					unset($data['presenza']);
					$succes = $this->esami_model->create_mrc($data);
					break;
                    
				case 'cicloerg':
					unset($data['pausa']);
					$succes = $this->esami_model->createCicloERG($data);
					break;
                    
				case 'antropometria':
					$succes = $this->esami_model->createAntropometria($data);
					break;        
                    
				default:
					echo("selezione errata");
			}
                
			if($succes)
			{
				// $carica = 'esami/'.$input;
				// $view_data['inserito'] = TRUE;
				// $view_data['codfis'] = $data['codfis'];
				// $this->load->view($carica, $view_data);
				$this->session->set_flashdata('message', "Esame {$input} aggiunto con successo!");
				redirect("/pz/crea_index/{$data['codfis']}");
			}
			else
			{
				echo("errore grave");
			}

		}
		else
		{
			//echo $input;
			$pagina = 'esami/'.$input;
			$this->load->view($pagina);
		}
        
	}
	
	/*
	
	// Le funzioni qui sotto andrebbero implementate ad una ad una per controllare
	//  che i dati inseriti siano validi e non si siano ricevuti dati a cazzo dalla
	//  form di inserimento. Cosa che nella index() non viene fatta.
	
	
	function tinetti($mode='visualizza')
	{
		# code...
	}
	
	function sf36($value='')
	{
		# code...
	}
	
	function MMSE($value='')
	{
		# code...
	}
	
	function sgrq($value='')
	{
		# code...
	}
	
	function SFT($value='')
	{
		# code...
	}
	
	function mrc($value='')
	{
		# code...
	}
	
	function cicloerg($value='')
	{
		# code...
	}
	
	function antropometria($value='')
	{
		# code...
	}
	*/
	
	// GENERA IL PROGRAMMA DI ALLENAMENTO
	public function prog($codfisc)
	{
		//echo $codfisc;
		$risultato1 = $this->esami_model->get_esami($codfisc);
	}
	
}       

