<?php

class Pz extends CI_Controller 
{

var $view_data = array();

    function aggiungi($mid)
	{
		//$view_data['main_content'] = 'agg_paziente';
		//$this->load->view('includes/template', $view_data);
        
        $this->load->view('agg_paziente');
        //$this->load->view('agg_style');

	}

function scrivi_pz()
	{
		$input = $this->input->post();
  
       // var_dump($input);
    
		 unset($input['submit']);
		      $insert = $this->db->insert('paziente', $input);
		
        //$data['main_content'] = 'esami/antropometria';
         //$this->load->view('includes/template', $data);
         
         //invece
        //$data['iscrizione'] = TRUE;
        //$this->load->view('esami/antropometria', $data);
        
        //invece
        //echo 'Paziente inserito';
        $this->load->view('esami/iscrizione_2');
        
       
        
	}

function iscrizione_2()
	{
	   $input = $this->input->post();
       unset($input['submit']);
    
       
       
 $insert = $this->db->insert('t_antropometria', $input);
    //return $insert;
 //echo 'Paziente inserito';
    $this->load->view('esami/iscrizione_3');      
       }

function iscrizione_3()
	{
	   $input = $this->input->post();
       unset($input['submit']);
       unset($input['presenza']);
    
              
 $insert = $this->db->insert('t_mrc', $input);
    //return $insert;
 //echo 'Paziente inserito';
 $codfis = $input['codfis'];
 $this->crea_index($codfis);
 //$this->view_data['pi'] =$insert;
 //   $this->load->view('logged_in_area');      
 }
       
/*
    function create_pz()
	{
	//	$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('nome', 'nome', 'trim|required');
		//$this->form_validation->set_rules('cognome', 'cognome', 'trim|required');
	//	$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
        //$this->form_validation->set_rules('telefono', 'telefono', 'trim|required|min_length[10]');
		//$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if($this->form_validation->run() == FALSE)
		{
			//$this->load->view('signup_form');
            $view_data['main_content'] = 'agg_paziente';
				$this->load->view('includes/template', $view_data);	
                
                
           echo 'form validation falso';     
		}
		
		else
		{			
		
			
			if($query = $this->scrivi_pz())
			{
				$view_data['main_content'] = 'riepilogo_pz';
				$this->load->view('includes/template', $view_data);
			}
			else
			{
				// non carica lo STYLE->load->view('signup_form');
                
                $data['main_content'] = 'add_pz_form';
				$this->load->view('includes/template', $data);			
			}
		}
		
	}
    
    */

 function listarella($input)
    {
     //$input=$this->visualizza_lista($this->session->userdata('idmedico'));
echo 'boaaaa';
     }
     
    function visualizza_lista($input)
    {
     //$input=$this->visualizza_lista($this->session->userdata('idmedico'));
            
        $this->view_data['pazienti'] = $this->db->get_where('paziente', array('idmedico'=>$input))->result();
     	  
	$this->load->view('lista_pz', $this->view_data);     
            
    
     }
    

                
    

   function visualizza_uno($input){
   
   
    
  //$input=$this->_visualizza_uno($this->uri(4));
  
  $this->view_data['pazienti'] = $this->db->get_where('paziente', array('codfis'=>$input))->result();
     //echo $input;   
 $this->load->view('pz/index_pz', $this->view_data);  

        }



function edit($codfis)
	{
	   echo 'edit';
	   echo $codfis;
       
       
 $view_data['pazienti'] = $this->db->get_where('paziente', array('codfis'=>$codfis))->result();
        
		$this->load->view('pz/mod_pz', $view_data);
       
	}
	
	// Delete
function carica_delete($input)
	{
	   
    $view_data['pazienti'] = $this->db->get_where('paziente', array('codfis'=>$input))->row();
        
		$this->load->view('pz/delete', $view_data);   
       
	 //  $erase = $this->db->delete('paziente', array('codfis'=>$codfis))->result();
    //echo 'il paziente è stato rimosso';
    
    }

function delete($input)
	{
	 //  $erase = $this->db->delete('paziente', array('codfis'=>$codfis))->result();
     $sposta = $this->db->get_where('paziente', array('codfis'=>$input))->row();
      $insert = $this->db->insert('eliminati', $sposta);
      $erase = $this->db->delete('paziente', array('codfis'=>$input));
       $view_data['eliminato'] = true;
      $this->load->view('pz/delete', $view_data); ;
      
    
    }


    //Update paziente
function update($input)
	{
        $this->db->where('codfis', array('codfis'=>$input));
    	$this->db->update('paziente');
		
  
        echo 'fatta???'; 
		
    }


function crea_index($input)
{    
//echo $input;

#$elenco = array(0 => 't_antropometria','t_cicloerg','t_mmse','t_mrc','t_sf36','t_sft','t_sgrq','t_spsms','t_tinetti');
$esami_count = array(   't_antropometria' =>0,
                        't_cicloerg' =>0,
                        't_mmse' =>0,
                        't_mrc' =>0,
                        't_sf36' =>0,
                        't_sft' =>0,
                        't_sgrq' =>0,
                        't_spsms' =>0,
                        't_tinetti'=>0,);
//$this->view_data['elenco'] = $elenco;


foreach($esami_count as $nome_tabella=>$val){
    
    $esami = $this->db->get_where($nome_tabella, array('codfis'=>$input))->result();

    if(is_array($esami) AND count($esami)>0):

        $this->view_data[$nome_tabella] = $esami;
        $esami_count[$nome_tabella]++;
    else:
        $this->view_data[$nome_tabella] = ($nome_tabella.' non fatto');
    endif;   
}

$this->view_data['esami_count'] = $esami_count;

 $anagrafica = $this->db->get_where('paziente', array('codfis'=>$input))->row();

$this->view_data['anagrafica']= $anagrafica;

$this->view_data['codicefiscale'] = $input;
    /*
$esami['tinetti'] = $this->db->get_where('t_tinetti', array('codfis'=>$input))->result();

if(is_array($esami['tinetti']) AND count($esami['tinetti'])>0):

        $this->view_data['tinetti'] = $esami['tinetti'];
else:
        $this->view_data['tinetti'] = 'non fatto';
endif;
*/




  //$this->view_data['antropometria'] = $esami['antropometria'] ;


    //$this->view_data['tinetti'] = $esami['tinetti'] ;
 //print_r ($view_data['antri']);
  //$tine = $this->db->get_where('t_antropometria', array('codfis'=>$input))->result();
  //$this->view_data['pazienti'] = $this->db->get_where('paziente', array('codfis'=>$input))->result();
     //echo $input;   

$this->load->view('pz/nuovo_index_pz', $this->view_data);  


/* 
foreach ($antri as $antro): 
echo $antro->codfis;

echo $antro->peso_ora;
echo 'nulla';
echo $antro->peso_anno;
endforeach;
*/
}

    }

?>
