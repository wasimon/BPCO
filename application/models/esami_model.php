<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esami_model extends CI_Model {

	// TODO: Aggiungere dei controlli, sui dati passati PRIMA di inserire il tutto nel DB.


	function getAllExams($cf, $last_only=FALSE, $as_array=FALSE)
	{
		$esami = NULL;
		
		$this->antropometria = $this->getAntropometria($cf, $last_only);
		$this->cicloerg = $this->getCicloERG($cf, $last_only);
		$this->mmse = $this->getMMSE($cf, $last_only);
		$this->mrc = $this->getMRC($cf, $last_only);
		$this->sf36 = $this->getSF36($cf, $last_only);
		$this->sft = $this->getSFT($cf, $last_only);
		$this->sgrq = $this->getSGRQ($cf, $last_only);
		$esami->tinetti = $this->getTinetti($cf, $last_only);
		
		if ($as_array)
			return (array) $esami;

		return $esami;
	}



	function getTinetti($codfis, $load_last_only=TRUE)
	{
		try {
			$this->db->order_by('idtinetti', 'DESC');
			
			if($load_last_only)
				$results = $this->db->get_where('t_tinetti', array('codfis' => $codfis), 1, 0);
			else
				$results = $this->db->get_where('t_tinetti', array('codfis' => $codfis));
			
			if($results->num_rows())
				return $results->row();
			
		} catch (Exception $e) {
			log_message('warning', 'Error while loading Tinetti for :'.$codfis);
		}
		
		return NULL;
	}
	function createTinetti($data)
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
	

	function getAntropometria($codfis, $load_last_only=TRUE)
	{
		try {
			$this->db->order_by('idantro', 'DESC');
			
			if($load_last_only)
				$results = $this->db->get_where('t_antropometria', array('codfis' => $codfis), 1, 0);
			else
				$results = $this->db->get_where('t_antropometria', array('codfis' => $codfis));
			
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


	function getSF36($codfis, $load_last_only=TRUE)
	{
		try {
			$this->db->order_by('idsf36', 'DESC');
			
			if($load_last_only)
				$results = $this->db->get_where('t_sf36', array('codfis' => $codfis), 1, 0);
			else
				$results = $this->db->get_where('t_sf36', array('codfis' => $codfis));
			
			if($results->num_rows())
				return $results->row();
			
		} catch (Exception $e) {
			log_message('warning', 'Error while loading SF36 for :'.$codfis);
		}
		
		return NULL;
	}
	function createSF36($input)
	{
		$insert = $this->db->insert('t_SF36', $input);
		return $insert;
	}
  
	
	function getMMSE($codfis, $load_last_only=TRUE)
	{
		try {
			$this->db->order_by('idmmse', 'DESC');
			
			if($load_last_only)
				$results = $this->db->get_where('t_mmse', array('codfis' => $codfis), 1, 0);
			else
				$results = $this->db->get_where('t_mmse', array('codfis' => $codfis));
			
			if($results->num_rows())
				return $results->row();
			
		} catch (Exception $e) {
			log_message('warning', 'Error while loading MMSE for :'.$codfis);
		}
		
		return NULL;
	}
	function createMMSE($data)
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
  
	
	function getSGRQ($codfis, $load_last_only=TRUE)
	{
		try {
			$this->db->order_by('idsgrq', 'DESC');
			
			if($load_last_only)
				$results = $this->db->get_where('t_sgrq', array('codfis' => $codfis), 1, 0);
			else
				$results = $this->db->get_where('t_sgrq', array('codfis' => $codfis));
			
			if($results->num_rows())
				return $results->row();
			
		} catch (Exception $e) {
			log_message('warning', 'Error while loading SGRQ for :'.$codfis);
		}
		
		return NULL;
	}
	function create_sgrq($input)
	{
		$insert = $this->db->insert('t_sgrq', $input);
		return $insert;
	}


	function getSFT($codfis, $load_last_only=TRUE)
	{
		try {
			$this->db->order_by('idsft', 'DESC');
			
			if ($load_last_only)
				$results = $this->db->get_where('t_sft', array('codfis' => $codfis), 1, 0);
			else
				$results = $this->db->get_where('t_sft', array('codfis' => $codfis));
			
			if($results->num_rows())
				return $results->row();
			
		} catch (Exception $e) {
			log_message('warning', 'Error while loading SFT for :'.$codfis);
		}
		
		return NULL;
	}
	function createSFT($input)
	{
		$insert = $this->db->insert('t_sft', $input);
		return $insert;
	}
  
	function getMRC($codfis, $load_last_only=TRUE)
	{
		try {
			$this->db->order_by('idmrc', 'DESC');
			
			if ($load_last_only)
				$results = $this->db->get_where('t_mrc', array('codfis' => $codfis), 1, 0);
			else
				$results = $this->db->get_where('t_mrc', array('codfis' => $codfis));
			
			if($results->num_rows())
				return $results->row();
			
		} catch (Exception $e) {
			log_message('warning', 'Error while loading MRC for :'.$codfis);
		}
		
		return NULL;
	}
	function createMRC($input)
	{
		if ( empty($input['durata_notte']) ) {
			$input['durata_notte'] = 0;
		}
		$insert = $this->db->insert('t_mrc', $input);
		return $insert;
	}


// Ciclo ERG
	function getCicloERG($codfis, $load_last_only=TRUE)
	{
		try {
			$this->db->order_by('idciclo', 'DESC');
			
			if($load_last_only)
				$results = $this->db->get_where('t_cicloerg', array('codfis' => $codfis), 1, 0);
			else
				$results = $this->db->get_where('t_cicloerg', array('codfis' => $codfis));
			
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