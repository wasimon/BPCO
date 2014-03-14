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
	
}
