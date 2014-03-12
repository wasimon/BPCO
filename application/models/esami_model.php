<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esami_model extends CI_Model {

	// TODO: Aggiungere dei controlli, sui dati passati PRIMa di inserire il tutto nel DB.
	
	function get_esami($cf)
	{
		$anagrafica = $this->db->get_where('paziente', array('codfis' => $cf));
		return $anagrafica;
	}

	function create_tinetti($data)
	{
		$etot=0;        
		$atot=0;
		
		for ($i = 1; $i <= 10; $i++) {
			$etot += $data['e'.$i];
			$atot += $data['a'.$i];
		}
                
		$my_tinetti = array(
			'etot' => $etot,
			'atot' => $atot,
			'tinettitotale' => $atot+$etot,
		);

		$insert = $this->db->insert('t_tinetti', array_merge($my_tinetti, $data));
		return $insert;
	}
	
	// Antropometria
	function getAntropometria($codfis)
	{
		try {
			$this->db->order_by('idantro', 'DESC');
			$results = $this->db->get_where('t_antropometria', array('codfis' => $codfis), 1, 0);
			
			if($results->num_rows())
				return $results->row();
			
		} catch (Exception $e) {
			log_message('warning', 'Error while loading CicloERG for :'.$codfis);
		}
		
		return NULL;
	}
	function createAntropometria($input)
	{
		$insert = $this->db->insert('t_antropometria', $input);
		return $insert;
	}    


	function create_SF36($input)
	{
		$insert = $this->db->insert('t_SF36', $input);
		return $insert;
	}
    
	function create_MMSE($data)
	{
		$totale = 0;
		for ($i = 1; $i <= 10; $i++)
		{
			$totale += $data['or'.$i];

			if ($i<=5)
				$totale += $data['calcolo'.$i];

			if ($i<=6)
				$totale += $data['ling'.$i];
		}

		$totale += $data['reg'];
		$totale += $data['ric'];

		$data['mmsetot'] = $totale;
		$data['mmseagg'] = 0; //TODO: Correggere il coefficente d'aggiustamento
		$data['mmsefinale'] = 0; //TODO: Correggere il coefficente finale

		$insert = $this->db->insert('t_MMSE', $data);
		return $insert;
	}
    
	function create_sgrq($input)
	{
		$insert = $this->db->insert('t_sgrq', $input);
		return $insert;
	}

	function create_sft($input)
	{
		$insert = $this->db->insert('t_sft', $input);
		return $insert;
	}
    
	function create_mrc($input)
	{
		if ( empty($input['durata_notte']) ) {
			$input['durata_notte'] = 0;
		}
		$insert = $this->db->insert('t_mrc', $input);
		return $insert;
	}


// Ciclo ERG
	function getCicloERG($codfis)
	{
		try {
			$this->db->order_by('idciclo', 'DESC');
			$results = $this->db->get_where('t_cicloerg', array('codfis' => $codfis), 1, 0);
			
			if($results->num_rows())
				return $results->row();
			
		} catch (Exception $e) {
			log_message('warning', 'Error while loading CicloERG for :'.$codfis);
		}
		
		return NULL;
	}
	
	function createCicloERG($input)
	{
		$insert = $this->db->insert('t_cicloerg', $input);
		return $insert;
	}
    

}