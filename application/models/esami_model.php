<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esami_model extends CI_Model {

function create_tinetti($input){
        
	$etot=0;        
    $atot=0;
    $tinettitotale=0;     
  for ($i = 1; $i <= 10; $i++) {
    $etot += $this->input->post('e'.$i);
    $atot += $this->input->post('a'.$i);
}
$tinettitotale = $atot+$etot;
                
        $my_tinetti = array( 'etot' => $etot,
                                'atot' => $atot,
                                'tinettitotale' => $tinettitotale
        );
                                
        $new_tinetti = array_merge($my_tinetti, $input);
        
		$insert = $this->db->insert('t_tinetti', $new_tinetti);
		return $insert;
	}
    

function create_antropometria($input){
  
    $insert = $this->db->insert('t_antropometria', $input);
    return $insert;
    echo 'inserito?';
    }    
   
function create_SF36($input){
    
   
    
    $insert = $this->db->insert('t_SF36', $input);
    return $insert;
    }
    
function create_MMSE($input){


$totale = 0;
for ($i = 1; $i <= 10; $i++) {
    $totale += $this->input->post('or'.$i);
    }
for ($i = 1; $i <= 5; $i++) {
    $totale += $this->input->post('calcolo'.$i);
    }
    
for ($i = 1; $i <= 6; $i++) {
    $totale += $this->input->post('ling'.$i);
    }
    $totale += $this->input->post('reg');
    $totale += $this->input->post('ric');
$my_MMSE = array(   'mmsetot' => $totale,
                    );
                    
$new_MMSE = array_merge($my_MMSE, $input);    
    // aggiungere conti e campi
    $insert = $this->db->insert('t_MMSE', $new_MMSE);
    return $insert;
    }
    
function create_sgrq($input){
    
  
    
    // aggiungere conti e campi
    $insert = $this->db->insert('t_sgrq', $input);
    return $insert;
    }

function create_sft($input){
  
    
    // aggiungere conti e campi
    $insert = $this->db->insert('t_sft', $input);
    return $insert;
    }
    
function create_mrc($input){
  

    $insert = $this->db->insert('t_mrc', $input);
     return $insert;

    $this->load->view('logged_in_area');
    }
    
function create_cicloerg($input){
    
   
    // aggiungere conti e campi
    $insert = $this->db->insert('t_cicloerg', $input);
    return $insert;
    }
    
    //$this->load->view('esami/antropometria');
    
/*function create_iscrizione_2($input){
       
    // aggiungere conti e campi
    echo 'forse';
    $insert = $this->db->insert('t_antropometria', $input);
    return $insert;
    echo 'minchia';
    $this->load->view('esami/mrc', $data);
    }
*/
}