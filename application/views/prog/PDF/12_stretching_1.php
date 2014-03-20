<style type="text/css" media="all">
th{font-weight:bold;}
img{height: 100px;}
.immagine { text-align: center; vertical-align: middle;}

</style>

<?	
$es1=array(
	0 => '<h2>Muscoli della spalla</h2>
		<ul>
	        <li><strong>Posizione di partenza:</strong> in piedi</li>
	        <li>Afferra il gomito sinistro con la mano destra e portalo lentamente verso la spalla destra.</li>
	        <li>Mantieni la posizione 10-20 secondi. </li>
          <li>Rilassati e ripeti l&rsquo;esercizio con l&rsquo;altro braccio.</li>          
    	</ul>',
	1 => '<h2>Muscoli del braccio e della mano</h2>
		<ul>
	        <li><strong>Posizione di partenza:</strong> seduto o da in piedi.</li>
	        <li>Solleva le braccia all&rsquo;altezza delle spalle, unisci le mani intrecciandole e ruota i palmi in avanti.</li>
	        <li>Spingi   le mani in avanti allontanandole dal busto, cercando di stendere i gomiti.</li>
          <li>Mantieni   la posizione 5-10 secondi.</li>          
    	</ul>',	
	
			
	);

	$es2=array(
		0 => '<h2>Muscoli del braccio e pettorali</h2>
			<ul>
		        <li><strong>Posizione di partenza:</strong> Appoggia il busto e il lato sinistro del viso alla parete.</li>
		        <li>Porta il braccio sinistro all&rsquo;altezza della spalla in modo che il braccio e la mano appoggino alla parete.</li>
		        <li>Senza muovere la mano, ruota il corpo allontanandoti dal muro.</li>
	          <li>Mantieni la posizione 10-20 secondi. Rilassati e ripeti l&rsquo;esercizio con il braccio destro e la parte destra del viso.</li>          
	    	</ul>',
		1 => '<h2>Muscoli del braccio e della spalla</h2>
			<ul>
		        <li><strong>Posizione di partenza:</strong> seduto o da in piedi.</li>
		        <li>Posiziona la mano destra dietro la testa, tenendo il braccio vicino all&rsquo;orecchio e il gomito in alto.</li>
		        <li>Appoggia la mano sinistra sul gomito destro, e spingilo lentamente all&rsquo;indietro.</li>
	          <li>Mantieni la posizione 10-20 secondi. Rilassati e ripeti l&rsquo;esercizio con il braccio sinistro.</li>  
	    	</ul>',	
		
			
$img1=array(
		0 =>'/img/PDF/str1_1.gif',
		1 =>'/img/PDF/str1_2.gif',		
));
$img2=array(
		0 =>'/img/PDF/str2_1.gif',
		1 =>'/img/PDF/str2_2.gif',
		
);
	$rep1=array(
		0 =>'Ripeti 2 volte la sequenza',
		1 =>'Rilassati e ripeti l&rsquo;esercizio 3 volte',
		
);	
	$rep2=array(
		0 =>'Ripeti tutta la sequenza 2 volte',
		1 =>'Ripeti 2 volte la sequenza',
		
);			
		

switch ($prog[TIPO_PROG_AEROBICO]) {
	case (4):
$es  = $es2;
$img = $img2;
$rep = $rep2;
	break;

	case (3):
$es  = $es2;
$img = $img2;
$rep = $rep2;
	break;

	case (2):
$es  = $es1;
$img = $img1;
$rep = $rep1;
	break;

	case (1):
$es  = $es1;
$img = $img1;
$rep = $rep1;
	break;
}
?>
<h1>Allungamento muscolare e mobilit&agrave; articolare</h1>
<p>
Al termine del tuo allenamento svolgi sempre questi esercizi: riportano il battito cardiaco, la respirazione e il flusso sanguigno a valori normali, allungano i muscoli e distendono le articolazioni,  consentendo un passaggio facile dall&rsquo;esercizio fisico al resto della tua giornata.
</p>
<? for ($i=0; $i < 2; $i++) { 
?>
<table border="0" cellspacing="5" cellpadding="5">
  <tr><td><?=$es[$i];?></td>
    <td class="immagine"><img src="<?=$img[$i];?>"></td>
</tr>
	<tr>
		<th colspan="2"><?=$rep[$i];?></th>
	</tr>
</table>
<?php if ($i<1): ?>
<hr>	
<?php endif ?>

<? };?>