<style type="text/css" media="all">
th{font-weight:bold;}
.importante{
	text-align: center;
	font-weight:bold;
	width: 200px;
	border-bottom-width:5px;
	border-left-width: 5px;
	border-right-width: 5px;
	border-top-width: 5px;
	border-color: red;
}
.piccolo{
	text-align: center;
	font-weight:bold;
	width: 20px;
	border-bottom-width:5px;
	border-left-width: 5px;
	border-right-width: 5px;
	border-top-width: 5px;
	border-color: blue;
}
table{
	text-align:left;
	width: 200px;
}
</style>
<div class="importante">
<p>SE... </p>

- senti il &ldquo;fiato corto&rdquo;…<br>
- senti fitte e/o dolore diffuso al torace…<br>
- hai palpitazioni…<br>


<p>...TI STAI ALLENANDO TROPPO!! RALLENTA!!</p>
- non ti sembra di fare fatica… 
<p>... TI STAI ALLENANDO TROPPO POCO...</p>
  </div>

<p>Tieni presente che <strong>l&rsquo;attivit&agrave; fisica migliora il benessere del corpo e della mente</strong>, ma perch&eacute; tu ne tragga beneficio devi saper capire se ti stai allenando troppo o troppo poco.</p>

<p align="center"><strong>Come fai a sapere se stai effettuando il tuo programma di esercizio in modo corretto?</strong></p>
<p>Rispetta le indicazioni riportate nella scheda d'esercizio.</p><br />
  <p>Utilizza il computer della cyclette per monitorare frequenza cardiaca e/o watt prodotti, non devono superare quelli indicati nella scheda dell'esercizio.</p>

<?

switch ($prog[TIPO_PROG_AEROBICO]) {
	case (4):
$hr = $hearth_rate*0.70;
$ratio= 70;
		break;

	case (3):
	$hr = $hearth_rate*0.70;
$ratio= 70;	
	break;

	case (2):
	$hr = $hearth_rate*0.60;
$ratio= 60;
	break;

	case (1):
	$hr = $hearth_rate*0.57;
$ratio= 57;
	break;
}
?>  
<div class="importante">
  <p>Frequenza cardiaca limite: <?=$hr;?> = <?=$ratio;?> % del massimale ( <?=$hearth_rate;?> bpm )</p>
</div>