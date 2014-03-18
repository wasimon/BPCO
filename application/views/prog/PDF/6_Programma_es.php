<style type="text/css" media="all">
th{font-weight:bold;}
</style>

<?	

//Distribuzione settimanale dell'allenamento aerobico
	$si = '<ul><li>Riscaldamento;</li><li>Esercizio aerobico: cyclette;</li><li>Defaticamento;</li></ul>';
	$no = '';

switch ($prog[TIPO_PROG_AEROBICO]) {
	case (4):
	$aerobico=array($si,$si,$si,$si,$si);
	break;

	case (3):
	$aerobico=array($si,$si,$no,$si,$si);
	break;

	case (2):
	$aerobico=array($si,$no,$si,$no,$si);
	break;

	case (1):
	$aerobico=array($si,$no,$no,$si,$no);
	break;
}


//Distribuzione settimanale del rinforzo
	$si = '<ul><li>Esercizio di rinforzo muscolare;</li><li>Esercizi di mobilit&agrave; articolare e stretching;</li></ul>';
	$no = '';

switch ($prog[TIPO_PROG_RINFORZO]) {
	case (4):
	$rinforzo=array($si,$si,$si,$si,$si);
	break;

	case (3):
	$rinforzo=array($si,$si,$no,$si,$si);
	break;

	case (2):
	$rinforzo=array($si,$no,$si,$no,$si);
	break;

	case (1):
	$rinforzo=array($si,$no,$no,$si,$no);
	break;
}

?>	

	<h1>Il tuo programma di esercizio</h1>
	<table cellpadding="2" cellspacing="2">
	<tr><th>GIORNO</th><th>MATTINO</th><th>POMERIGGIO</th></tr>
	<tr><th>LUNEDI</th><td><?=$aerobico[0]?></td><td><?=$rinforzo[0]?></td></tr>
	<tr><th>MARTEDI</th><td><?=$aerobico[1]?></td><td><?=$rinforzo[1]?></td></tr>

	<tr><th>MERCOLEDI</th><td><?=$aerobico[2]?></td><td><?=$rinforzo[2]?></td></tr>
	<tr><th>GIOVEDI</th><td><?=$aerobico[3]?></td><td><?=$rinforzo[3]?></td></tr>

	<tr><th>VENERDI</th><td><?=$aerobico[4]?></td><td><?=$rinforzo[4]?></td></tr>
	<tr><th>SABATO</th><td colspan="2" rowspan="2">Nel fine settimana fai se possibile attivit&agrave; fisica all&rsquo;aria aperta. Mantieni uno stile di vita attivo.</td></tr>
	<tr><td>DOMENICA</td></tr>
</table>