<style type="text/css" media="all">
th{font-weight:bold;}
table{
	/*  width:515px; */
	width:650px;
	border:1;
};

.settimana{
	width: 50px; 
}
.settimana1{
	width: 200px; 
}
.settimana2{
	width: 200px; 
}


</style>

<?	

//Distribuzione settimanale dell'allenamento aerobico
	$si = '<ul><li>Riscaldamento;</li><li>Esercizio aerobico: cyclette;</li><li>Defaticamento;</li></ul>';
	$no = '';
	$doppio=array($no,$no,$no,$no,$no);

switch ($prog[TIPO_PROG_AEROBICO]) {
	case (4):
	$aerobico=array($si,$si,$si,$si,$si);
	if ($esami->antropometria->BMI>25) {
		$doppio=array($si,$si,$si,$si,$si);
	}
	break;

	case (3):
	$aerobico=array($si,$si,$no,$si,$si);
	if ($esami->antropometria->BMI>25) {
		$doppio=array($si,$si,$no,$si,$si);
	}
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
	<table cellpadding="2" cellspacing="0" border="1">
	<tr><th class="settimana">GIORNO</th><th class="settimana1">MATTINO</th><th class="settimana2">POMERIGGIO</th></tr>
	<tr><th class="settimana">LUNEDI</th><td class="settimana1"><?=$aerobico[0]?></td><td class="settimana2"><?=$rinforzo[0]?><?=$doppio[0]?></td></tr>
	<tr><th class="settimana">MARTEDI</th><td class="settimana1"><?=$aerobico[1]?></td><td class="settimana2"><?=$rinforzo[1]?><?=$doppio[1]?></td></tr>

	<tr><th class="settimana">MERCOLEDI</th><td class="settimana1"><?=$aerobico[2]?></td><td class="settimana2"><?=$rinforzo[2]?><?=$doppio[2]?></td></tr>
	<tr><th class="settimana">GIOVEDI</th><td class="settimana1"><?=$aerobico[3]?></td><td class="settimana2"><?=$rinforzo[3]?><?=$doppio[3]?></td></tr>

	<tr><th class="settimana">VENERDI</th><td class="settimana1"><?=$aerobico[4]?></td><td class="settimana2"><?=$rinforzo[4]?><?=$doppio[4]?></td></tr>
	<tr><th class="settimana">SABATO</th><td width="400px" colspan="2" rowspan="2">Nel fine settimana fai se possibile attivit&agrave; fisica all&rsquo;aria aperta. Mantieni uno stile di vita attivo.</td></tr>
	<tr><th id="settimana">DOMENICA</th></tr>
</table>