<style type="text/css" media="all">
th{font-weight:bold;}
</style>

<h1>I tuoi risultati</h1>
<table border="0" cellspacing="5" cellpadding="5">
<tr><th colspan="2">Test da sforzo cardiopolmonare:</th></tr>

	<tr><th>Frequenza cardiaca massima</th><td><?= $esami->cicloerg->fcmax ?></td></tr>
	<tr><th>Pressione arteriosa massima</th><td><?= $esami->cicloerg->p3 ?> / <?= $esami->cicloerg->p4 ?></td></tr>
	<tr><th>Volume espirato  </th><td><?= $esami->cicloerg->vo2max ?></td></tr>
	<tr><th>Potenza (W)  </th><td><?= $esami->cicloerg->wmax ?></td></tr>
	<tr><th>Grado di dispnea all'inizio del test / massimale </th><td><?= $esami->cicloerg->borg_d_base ?> / <?= $esami->cicloerg->borg_d_base ?></td></tr>
	
<tr><th colspan="2"><hr></th></tr>	

<tr><th colspan="2">Questionari sulla qualit&agrave; della vita:</th></tr>	
	
	<tr><th>Short form 36  </th><td>TODO</td></tr>
	
<tr><th colspan="2"><hr></th></tr>	

<tr><th colspan="2">Scala di Tinetti:</th></tr>	
	
	<tr><th>Punteggio dell'equilibrio </th><td><?= $esami->tinetti->etot ?></td></tr>
	<tr><th>Punteggio dell'andatura </th><td><?= $esami->tinetti->atot ?></td></tr>

<tr><th colspan="2"><hr></th></tr>	
		
	
	<tr><th>Forza massimale degli arti superiori  </th><td><?= $esami->sft->massimale ?></td></tr>
	
</table>