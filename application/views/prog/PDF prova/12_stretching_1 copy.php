<style type="text/css" media="all">
th{font-weight:bold;}
img{height: 100px;
}
table{border:1;}
.aerobico{background-color: red; }
.immagine { display: table-cell; text-align: center; vertical-align: middle;}

</style>

<?	
$es1=array(
	0 => '0',
	1 => '1',
	2 => '2',
	3 => '3',		
	);
	
	$img1=array(
		0 =>'/img/PDF/ciclette.jpg',
		1 =>'/img/PDF/ciclette.jpg',
		2 =>'/img/PDF/ciclette.jpg',
		3 =>'/img/PDF/ciclette.jpg',
		
);	
	$rep1=array(
		0 =>'Ripetizioni: 2',
		1 =>'Ripetizioni: 2',
		2 =>'Ripetizioni: 2',
		3 =>'/img/PDF/ciclette.jpg',
		
);			
		
	/*
switch ($prog[TIPO_PROG_AEROBICO]) {
	case (4):
	$aero=array(15,15);
	break;

	case (3):
	$aero=array(15,10);
	break;

	case (2):
	$aero=array(10,7);
	break;

	case (1):
	$aero=array(7,7);
	break;
}
*/
?>
<h1>Allungamento muscolare e mobilit&agrave; articolare</h1>
<p>
Al termine del tuo allenamento svolgi sempre questi esercizi: riportano il battito cardiaco, la respirazione e il flusso sanguigno a valori normali, allungano i muscoli e distendono le articolazioni,  consentendo un passaggio facile dall&rsquo;esercizio fisico al resto della tua giornata.
</p>
<?$i=3;?>
<table>
<tr>
	<td><?=$es1[$i];?></td>
    <td class="immagine"> <img src="<?=$img1[$i];?>"> </td>
</tr>
	<tr>
		<th colspan="2"><?=$rep1[$i];?></th>
	</tr>
</table>

