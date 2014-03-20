<style type="text/css" media="all">
th{font-weight:bold;}
img{height: 100px;}
.immagine { text-align: center; vertical-align: middle;}

</style>

<?	
$es1=array(
	
	0 => '<h2>Muscoli pettorali</h2>
			<ul>
		        <li><strong>Posizione di partenza:</strong> in piedi, di fronte all&rsquo;angolo del muro, con un piede appoggiato   davanti all&rsquo;altro.</li>
		        <li>Solleva i gomiti all&rsquo;altezza della spalle e appoggia il   palmo delle mani contro il muro.</li>
		        <li>Piega   il corpo in avanti per allungare i muscoli pettorali, localizzati nella parte   superiore del torace.</li>
	          <li>Mantieni   la posizione 10-20 secondi.</li>
          
	    	</ul>',
			
	
			1 => '<h2>Muscoli dorsali</h2>
					<ul>
				        <li><strong>Posizione di partenza:</strong> seduto con la schiena dritta, i piedi fermi a terra e le ginocchia leggermente divaricate.</li>
<li>Lentamente, scendi con il corpo in avanti arrotolandoti, tenendo la braccia rilassate.</li>
<li>Mantieni la posizione 5-10 secondi.</li>
			          <li>Srotola piano il busto verso l&rsquo;alto per tornare alla posizione iniziale.</li>
          
			    	</ul>',
	
					2 => '<h2>Muscoli del polpaccio</h2>
							<ul>
<li><strong>Posizione di partenza:</strong> Seduto sul bordo della sedia: stendi la gamba destra in avanti, appoggiando il tallone a terra. La gamba sinistra resta piegata, con il piede a terra. Appoggia le mani sulle anche.</li>
<li>Lentamente, fletti il busto in avanti: cerca di tenere la schiena allungata e la gamba destra stesa.</li>
<li>Mantieni la posizione 10-20 secondi.</li>
<li>Ritorna piano con il busto verso l&rsquo;alto, piega la gamba destra e stendi in avanti la sinistra, ripeti l’esercizio.</li>
          
					    	</ul>',
			
	);

	$es2=array(
		0 => '<h2>Muscoli del polpaccio</h2>
				<ul>
			        <li><strong>Posizione di partenza:</strong> in piedi, di fronte alla parete, metti il piede sinistro davanti al destro.</li>
			        <li>Distendi la gamba destra più lontana dalla parete, appoggiando il tallone a terra. Fletti il ginocchio sinistro in avanti, senza sollevare il tallone.</li>
		          <li>Mantieni   la posizione 10-20 secondi.</li>
		        <li>Ripeti l&rsquo;esercizio con l&rsquo;altra gamba </li>
		    	</ul>',
				1 => '<h2>Muscoli della coscia</h2>
						<ul>
					        <li><strong>Posizione di partenza:</strong> Di fronte alla parete, con la mano sinistra appoggiata.</li>
					        <li>Fletti il ginocchio destro, afferra il piede destro con la mano destra e porta il ginocchio all&rsquo;indietro tenendo la schiena dritta.</li>
				          <li>Mantieni la posizione per 10-20 secondi. Rilassati.</li>
				        <li>Ripeti l&rsquo;esercizio dall&rsquo;altra parte, con la gamba sinistra. </li>
				    	</ul>',
						2 => '<h2>Muscoli delle anche</h2>
								<ul>
<li><strong>Posizione di partenza:</strong> Sdraiato supino a terra: le braccia stese all&rsquo;esterno con le mani appoggiate a terra, le gambe piegate e i piedi appoggiati a terra.</li>
<li>Lentamente porta entrambe le gambe verso il pavimento alla tua destra, mentre i gomiti, le spalle e la testa oppongono resistenza al movimento cercando di restare appoggiati a terra.</li>
						          <li>Mantieni la posizione per 10-20 secondi.</li>
						        <li>Ritorna piano nella posizione di partenza, rilassati e ripeti l&rsquo;esercizio verso sinistra.</li>
						    	</ul>',
			
		);
			
$img1=array(
	0 =>'/img/PDF/str1_3.gif',
	1 =>'/img/PDF/str1_4.gif',
	2 =>'/img/PDF/str1_5.gif',
		
);
$img2=array(
	0 =>'/img/PDF/str2_3.gif',
	1 =>'/img/PDF/str2_4.gif',
	2 =>'/img/PDF/str2_5.gif',
		
);
	$rep1=array(
		0 =>'Rilassati e ripeti l&rsquo;esercizio 3 volte',
		1 =>'Rilassati e ripeti l&rsquo;esercizio 3 volte',
		2 =>'Rilassati e ripeti la sequenza 2 volte',

		
);	
	$rep2=array(
		0 =>'Ripeti 2 volte la sequenza',
		1 =>'Ripeti tutta la sequenza 2 volte',
		2 =>'Ripeti tutta la sequenza 2 volte',
		
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
<? for ($i=0; $i < 3; $i++) { 
?>

<table border="0" cellspacing="5" cellpadding="5">
  <tr><td><?=$es[$i];?></td>
    <td class="immagine"><img src="<?=$img[$i];?>"></td>
</tr>
	<tr>
		<th colspan="2"><?=$rep[$i];?></th>
	</tr>
</table>

<?php if ($i<2): ?>
<hr>	
<?php endif ?>

<? };?>