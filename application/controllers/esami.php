<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esami extends CI_Controller
{
		
	function __construct()
	{
		parent::__construct();
        $this->load->model('esami_model');
	}
    
// GENERA IL PROGRAMMA DI ALLENAMENTO
	
	public function prog($codfisc) {
	//echo $codfisc;
	$risultato1 = $this->esami_model->get_esami($codfisc);
	
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
                        $succes = $this->esami_model->create_sft($data);
                    break;
                    
                    case 'mrc':
                     unset($data['presenza']);
                        $succes = $this->esami_model->create_mrc($data);
                    break;
                    
                    case 'cicloerg':
                     unset($data['pausa']);
                        $succes = $this->esami_model->create_cicloerg($data);
                    break;
                    
                    case 'antropometria':
                       
                            $succes = $this->esami_model->create_antropometria($data);
            
                    break;
                    
                    
                    
                    default:
                     echo("selezione errata");
                }
                
                if($succes)
                {
                    $carica = 'esami/'.$input;
                    $view_data['inserito'] = TRUE;
                    $view_data['codfis'] = $data['codfis'];
                    $this->load->view($carica, $view_data);
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
}       
       
       
       
       
       
       
       
       
