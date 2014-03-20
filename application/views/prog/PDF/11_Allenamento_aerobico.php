<style type="text/css" media="all">
th{font-weight:bold;}
img{height: 250px; }

.aerobico{vertical-align: middle;
		}
.pari{ background-color: silver;}
.dispari{background-color: azure;}
.dato{ color: red;
font-weight:bold;}

</style>

<?	
switch ($prog[TIPO_PROG_AEROBICO]) {
	case (4):
	$aero=array(15,15);
	$ratio= 0.70;	
	$hr = $hearth_rate*$ratio;
	break;

	case (3):
	$ratio= 0.70;
	$aero=array(15,10);
	$hr = $hearth_rate*$ratio;
	break;

	case (2):
	$ratio= 0.60;
	$aero=array(10,7);
	$hr = $hearth_rate*$ratio;
	break;

	case (1):
	$ratio= 0.57;
	$aero=array(7,7);
	$hr = $hearth_rate*$ratio;
	break;
}
$modesercizio = '<h4>ESERCIZIO AEROBICO</h4><br>Controlla che la frequenza cardiaca al di sotto di <span class="dato">'.$hr.'</span> bpm ,<br>la scala di Borg deve rimanere compresa tra 3 e 4.';
$scarico ='Inizia a pedalare senza alcun carico (0 watt o ruota libera) per riscaldare i muscoli delle gambe.';
$defaticamento='Quando hai finito il periodo di esercizio non smettere immediatamente ma continua a pedalare  senza alcun carico (o a ruota libera)';

?>
<h1>Allenamento aerobico</h1>
<table border="0" cellspacing="5" cellpadding="5">
<tr>
<td><h2>Cyclette</h2><br><br></td><td rowspan="2"><img src="/img/PDF/ciclette.jpg"></td></tr>
<tr>		
<td><ul>
            <li>E&rsquo; semplice e pi&ugrave; sicura della bicicletta.</li>
            <li>Mentre ti alleni puoi leggere, ascoltare musica o guardare la tv.</li>
            <li>Puoi allenarti indipendentemente dalle condizioni del tempo. </li>
    	</ul>
	</td> 
</tr>
  </table>
  
  <p>L&rsquo;esercizio proposto di seguito &egrave; tarato sulle tue capacit&agrave;, ricordati di interrompere l&rsquo;esercizio in caso di dolore al petto.<br />
  Ricordati di effettuare l'allenamento quando indicato dal diario.</p>
  <p>Frequenza cardiaca limite: <?=$hearth_rate;?></p>

<table border="0" cellspacing="5" cellpadding="5">
      <tr class="pari">
        <td width="465px"><h4>RISCALDAMENTO</h4><?=$scarico;?></td>
  		<td width="100px"><br><h4>3 min.</h4></td>
	</tr>
	<tr class="dispari">
	      <td><?=$modesercizio;?></td>
		<td><br><h4><?=$aero[0];?> min.</h4></td>
	</tr>
	<tr class="pari">
        <td><h4>RECUPERO</h4><?=$scarico;?></td>
  		<td><br><h4>3 min.</h4></td>
	</tr>
	<tr class="dispari">
	      <td><?=$modesercizio;?></td>
		<td><br><h4><?=$aero[1];?> min.</h4></td>
	</tr>
	<tr class="pari">
		 <td><h4>DEFATICAMENTO</h4><?=$defaticamento;?></td>
		 <td><br><h4>5 min.</h4></td>
	</tr>
</table>
