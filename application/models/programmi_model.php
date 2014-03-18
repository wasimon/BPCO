<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Programmi_model extends CI_Model
{
	
	function saveProg($codfis, $prog, $prog_defautl=NULL)
	{
		$now = time();
		
		$ins_data = array(
			array(
				'codfis' => $codfis,
				'tipo_prog' => TIPO_PROG_AEROBICO,
				'num_prog' => $prog[TIPO_PROG_AEROBICO],
				'prog_default' => $prog_defautl,
				'timestamp' => $now,
			),
			array(
				'codfis' => $codfis,
				'tipo_prog' => TIPO_PROG_RINFORZO,
				'num_prog' => $prog[TIPO_PROG_RINFORZO],
				'prog_default' => $prog_defautl,
				'timestamp' => $now,
			),
			array(
				'codfis' => $codfis,
				'tipo_prog' => TIPO_PROG_ADDOMINALI,
				'num_prog' => $prog[TIPO_PROG_ADDOMINALI],
				'prog_default' => $prog_defautl,
				'timestamp' => $now,
			),
		);
		
		try {
			
			$this->db->insert_batch('prog_selezionati', $ins_data);
			return TRUE;
			
		} catch (Exception $e) {
			log_message('warning', 'Error while saving Program for: '.$codfis);
		}
		
		return FALSE;
	}
	
	function getProg($codfis, $tipo = 'all', $last_only=TRUE)
	{
		$progs = array();
		$result = NULL;
		
		$this->db->from('prog_selezionati')->where('codfis', $codfis);
		$this->db->order_by('timestamp', 'DESC');
		
		// Numero esami da selezionare
		$num_esami = ($tipo == 'all') ? 3 : count($tipo);
		if ($last_only)
			$this->db->limit($num_esami);
		
		try {
			if ($tipo == 'all')
			{
				$result = $this->db->get();	
			}
			elseif( in_array($tipo, array(TIPO_PROG_AEROBICO, TIPO_PROG_RINFORZO, TIPO_PROG_ADDOMINALI)) )
			{
				$this->db->where('tipo_prog', $tipo)->get();
			}
			
		} catch (Exception $e) {
			log_message('error', 'Error loading Program "'.$tipo.'" for: '.$codfis);
		}
		
		if ($last_only)
		{
			foreach ($result->result() as $row)
			{
				$progs[$row->tipo_prog] = $row;
				$progs[$row->tipo_prog]->p = $row->num_prog;
			}
		}
		 else
		{
			foreach ($result->result() as $row)
			{
				$progs[$row->timestamp][$row->tipo_prog] = $row;
				$progs[$row->timestamp][$row->tipo_prog]->p = $row->num_prog;
			}
		}
		
		return $progs;
	}
	
}
