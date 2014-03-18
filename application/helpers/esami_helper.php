<?php 

function is_ready_for_generate_prog($esami)
{
	return $esami['t_antropometria'] && $esami['t_mrc'] && $esami['t_mmse'] && $esami['t_tinetti'] && $esami['t_sf36'] && $esami['t_sft'] && $esami['t_sgrq'] && $esami['t_cicloerg'];
}