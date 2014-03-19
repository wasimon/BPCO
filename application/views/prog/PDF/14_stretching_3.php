<style type="text/css" media="all">
th{font-weight:bold;}
img{height: 100px;}
table{border:1;
padding:5px; }
.immagine { text-align: center; vertical-align: middle;}

</style>

<?	
$es1=array(
	
	0 => '<h2>Muscoli della coscia</h2>
			<ul>
		        <li><strong>Posizione di partenza:</strong>Seduto in obliquo sulla sedia: con il braccio e la mano destra dietro sostieniti al sedile della sedia. Le ginocchia chiuse, i piedi a terra.</li>
		        <li>Lentamente, solleva il ginocchio sinistro e scivola con il piede sinistro all&rsquo;indietro, tenendo il busto dritto. </li>
		        <li>Mantieni la posizione 10-20 secondi. Torna nella posizione iniziale, rilassati.</li>
	    	</ul>',
			
	
			1 => '<h2>Muscoli estensori delle gambe e del busto</h2>
					<ul>
				        <li><strong>Posizione di partenza:</strong>In piedi, di fianco alla sedia o vicino al muro: con una mano sostieniti alla sedia o appoggiati al muro.</li>
<li>Allunga la gamba destra stesa all&rsquo;indietro, appoggiando la punta del piede a terra. Cerca di mantenere il corpo verticale, senza sbilanciare il busto in avanti. </li>
			          <li>Mantieni la posizione 10 secondi. Torna nella posizione iniziale, rilassati. </li>
          <li>Esegui lo stesso esercizio con la gamba sinistra.</li>
			    	</ul>',
	
	);

	$es2=array(
		0 => '<h2>Muscoli della schiena 1</h2>
				<ul>
<li><strong>Posizione di partenza:</strong>A carponi: le mani sono sul pavimento direttamente sotto le spalle, le ginocchia a terra in linea con le anche, lo sguardo in basso.</li>
			        <li>Rilassa lo stomaco, inarca la schiena, solleva la testa e guarda avanti. Resta 5-10 secondi.</li>
		          <li>Rovescia il movimento: spingi in dentro la pancia, arrotonda la schiena, abbassa la testa portandola tra le braccia. Resta  5-10 secondi, poi rilassati.</li>
		    	</ul>',
				1 => '<h2>Muscoli della schiena 2</h2>
						<ul>
					        <li><strong>Posizione di partenza:</strong> Dalla stessa posizione iniziale dell&rsquo;esercizio precedente, porta in dietro il sedere fino a sederti sopra i talloni.</li>
					        <li>Concentrati sulla sensazione di allungamento della tua schiena.</li>
				          <li>Mantieni la posizione per 15-20 secondi. Rilassati.</li>
				        <li>Torna lentamente alla posizione di partenza.</li>
				    	</ul>',
						
			
		);
			
$img1=array(
	0 =>'/img/PDF/str1_6.gif',
	1 =>'/img/PDF/str1_7.gif',
		
);
$img2=array(
	0 =>'/img/PDF/str2_6.gif',
	1 =>'/img/PDF/str2_7.gif',
		
);
	$rep1=array(
		0 =>'Ripeti 2 volte a sinistra, poi cambia la posizione sulle sedia e 2 volte a destra.',
		1 =>'Ripeti tutta la sequenza 3 volte.',

		
);	
	$rep2=array(
		0 =>'Ripeti 3 volte la sequenza',
		1 =>'Ripeti tutta la sequenza 3 volte',
		
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
<? for ($i=0; $i < 2; $i++) { 
?>

<table>
  <tr><td><?=$es[$i];?></td>
    <td class="immagine"><img src="<?=$img[$i];?>"></td>
</tr>
	<tr>
		<th colspan="2"><?=$rep[$i];?></th>
	</tr>
</table>

<? };?>