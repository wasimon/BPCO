<style type="text/css" media="all">
th{font-weight:bold;}
img{height: 250px; }
table{border:1;}
.aerobico{background-color: red; }

</style>

<?	
$modesercizio = '<h4>ESERCIZIO AEROBICO</h4><ul> <li>Controlla che la frequenza cardiaca rimanga compresa tra .</li><li>Scala Borg deve rimanere compresa tra 3 e 4.</li></ul>';
$scarico ='Inizia a pedalare senza alcun carico (0 watt o ruota libera) per   riscaldare i muscoli delle gambe.';
$defaticamento='Quando hai finito il periodo di esercizio non smettere immediatamente ma continua a pedalare  senza alcun carico (o a ruota libera)';

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

?>

<h1>Allenamento aerobico</h1>



<table>
<tr>
    <td colspan="2" ><h2>Cyclette</h2></td>
</tr>
		
<tr><td><ul>
            <li>E&rsquo; semplice e pi&ugrave; sicura della bicicletta.</li>
            <li>Mentre ti alleni puoi leggere, ascoltare musica o guardare la tv.</li>
            <li>Puoi allenarti indipendentemente dalle condizioni del tempo. </li>
    	</ul>
	</td>
    <td><img src="/img/PDF/ciclette.jpg"></td>
</tr>
  </table>
  
  <p>L&rsquo;esercizio proposto di seguito &egrave; tarato sulle tue capacit&agrave;, ricordati di interrompere l&rsquo;esercizio in caso di dolore al petto.<br />
  Ricordati di effettuare l'allenamento quando indicato dal diario.</p>

  <table class="aerobico">
      <tr>
        <td> <h4>RISCALDAMENTO</h4><?=$scarico;?></td>
  		<td><h4>3 min.</h4></td>
	</tr>
	<tr>
	      <td><?=$modesercizio;?></td>
			<td><h4><?=$aero[0];?> min.</h4></td>
	</tr>
	<tr>
        <td> <h4>RECUPERO</h4><?=$scarico;?></td>
  		<td><h4>3 min.</h4></td>
	</tr>
	<tr>
	      <td><?=$modesercizio;?></td>
		<td><h4><?=$aero[1];?> min.</h4></td>
	</tr>
	<tr>
		 <td> <h4>DEFATICAMENTO</h4><?=$defaticamento;?></td>
		 <td><h4>5 min.</h4></td>
	</tr>
</table>
