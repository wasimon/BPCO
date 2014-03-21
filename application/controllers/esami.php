<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esami extends CI_Controller
{
		
	function __construct()
	{
		parent::__construct();
		
    // Solo gli utenti loggati possono inseririe esami!
    if($this->session->userdata('is_logged_in') != TRUE)
    {
      redirect('login');
    }
		
		$this->load->model('esami_model');
	}
	
	
	function index($input)
	{
		if($this->input->post('submit'))
		{
			$data = $this->input->post();

			unset($data['submit']);
			$succes = false;
      
      try {
  			switch($input)
  			{
  				case 'tinetti':
  					$succes = $this->esami_model->createTinetti($data);
  					break;
    
  				case 'sf36':
  					$succes = $this->esami_model->createSF36($data);
  					break;
                    
  				case 'MMSE':
  					$succes = $this->esami_model->createMMSE($data);
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
  					$succes = $this->esami_model->createMRC($data);
  					break;
                    
  				case 'cicloerg':
  					unset($data['pausa']);
  					$succes = $this->esami_model->createCicloERG($data);
  					break;
                    
  				case 'antropometria':
  					$succes = $this->esami_model->createAntropometria($data);
  					break;        
                    
  				default:
  					$this->session->set_flashdata('message', "Esame {$input} non disponibile per l'inserimento.");
  					redirect("/pz/crea_index/{$data['codfis']}");
  			}
      } catch (Exception $e) {
        $err_id = substr(sha1($data.$_SERVER['REQUEST_TIME']), 0, 8);
        show_error("Impossibile aggiungere l'esame a causa di un errore. <br>Contattare l'amministratore del sistema e comuncargli questa stringa: <code>{$err_id}</code>");
        log_message('error', "ID ERRORE:  {$err_id}\n   Eccezione mentre si aggiungeva l'esame: {$input}. Messaggio: ".$e->getMessage());
      }
      
			
                
			if($succes)
			{
				$this->session->set_flashdata('message', "Esame {$input} aggiunto con successo!");
				redirect("/pz/crea_index/{$data['codfis']}");
			}
			else
			{
				show_error("Errore generico nell'inserimento dell'esame. Se il problema persiste contattare l'amministratore del sistema.");
        log_message('error', "Errore nell'inserimento dell'esame: {$input}. Dati: ".print_r($data, TRUE));
			}
		}
		else
		{
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
	
}

