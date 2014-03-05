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

		$codfis = $input['codfis'];
		$this->crea_index($codfis);
	}

	function listarella($input)
	{
		//$input=$this->visualizza_lista($this->session->userdata('idmedico'));
		echo 'boaaaa';
	}
     
	function visualizza_lista($input)
	{
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
		$esami_count = array(
			't_antropometria' =>0,
			't_cicloerg' =>0,
			't_mmse' =>0,
			't_mrc' =>0,
			't_sf36' =>0,
			't_sft' =>0,
			't_sgrq' =>0,
			't_spsms' =>0,
			't_tinetti'=>0,
		);
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


		$this->load->view('pz/nuovo_index_pz', $this->view_data);  
	}

}

?>
