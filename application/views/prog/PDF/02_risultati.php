<style type="text/css" media="all">
th{
	width: 400px;

}
.grande{font-weight:bold;}
</style>

<h1>I tuoi risultati</h1>
<table border="0" cellspacing="5" cellpadding="5">
<tr><td class="grande" colspan="2">Test da sforzo cardiopolmonare:</td></tr>

	<tr><th>Frequenza cardiaca massima</th><td><?= $esami->cicloerg->fcmax ?> bpm</td></tr>
	<tr><th>Pressione arteriosa massima</th><td><?= $esami->cicloerg->p3 ?> / <?= $esami->cicloerg->p4 ?> mmHg</td></tr>
	<tr><th>Volume espirato  </th><td><?= $esami->cicloerg->vo2max ?> L/min</td></tr>
	<tr><th>Potenza  </th><td><?= $esami->cicloerg->wmax ?> W</td></tr>
	<tr><th>Grado di dispnea all'inizio del test / massimale </th><td><?= $esami->cicloerg->borg_d_base ?> / <?= $esami->cicloerg->borg_d_base ?></td></tr>
	</table><hr>
<table border="0" cellspacing="5" cellpadding="5">
<tr><td class="grande" colspan="2">Questionari sulla qualit&agrave; della vita:</td></tr>	
	
	<tr><th>Short Form 36  </th><td></td></tr>
	<tr><th>Saint-George Respiratory Questionnaire (SGRQ)</th><td></td></tr>	
	</table><hr>
<table border="0" cellspacing="5" cellpadding="5">
<tr><td class="grande" colspan="2">Scala di Tinetti:</td></tr>	
	
	<tr><th>Punteggio dell'equilibrio </th><td><?= $esami->tinetti->etot ?>/16</td></tr>
	<tr><th>Punteggio dell'andatura </th><td><?= $esami->tinetti->atot ?>/12</td></tr>
	<tr><th>Punteggio totale </th><td class="grande"><?= $esami->tinetti->tinettitotale ?>/28</td></tr>
	</table><hr>
<table border="0" cellspacing="5" cellpadding="5">
<tr><td class="grande" colspan="2">Senior Fitness Test:</td></tr>	
	<tr><th> 6 minutes walking test: - distanza percorsa</th><td><?= $esami->sft->mwt ?> mt.</td></tr>
	<tr><th> 6 minutes walking test: - dispnea inizio/fine</th><td><?= $esami->sft->disp_i ?> / <?= $esami->sft->disp_f ?></td></tr>
	<tr><th> 6 minutes walking test: - fatica inizio/fine</th><td><?= $esami->sft->fatica_i ?> / <?= $esami->sft->fatica_f ?></td></tr>
	<tr><th>30-Second Chair Stand </th><td><?= $esami->sft->alzate ?> alzate</td></tr>
	<tr><th>Test di forza muscolo quadricipite sinistro/destro </th><td><?= $esami->sft->quad_sx ?> / <?= $esami->sft->quad_dx ?> Kg</td></tr>
	</table><hr>
<table border="0" cellspacing="5" cellpadding="5">
	<tr><td class="grande" colspan="2">Determinazione carico massimale:</td></tr>	
	<tr><th>Peso utilizzato:   </th><td><?= $esami->sft->peso ?> Kg</td></tr>
	<tr><th>Numero di ripetizioni:  </th><td><?= $esami->sft->ripetizioni ?></td></tr>
	<tr><th>Forza massimale degli arti superiori  </th><td class="grande"><?= $esami->sft->massimale ?> Kg</td></tr>
	
</table>