<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prog extends CI_Controller
{
		
	function __construct()
	{
		parent::__construct();
        $this->load->model('prog_model');
	}
    
    function index($input)
	{
	  
	    echo $input; 
	    /* 
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
    
                    
                    
                    default:
                     echo("selezione errata");
                }
               */
			   
			 
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
       
       
       
       
       
       
       
       
