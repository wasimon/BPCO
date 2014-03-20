<style type="text/css" media="all">
th{font-weight:bold;}
img{width:200px;}
</style>

<?	

//Distribuzione settimanale dell'allenamento aerobico
$es1 = "<ul>
        <li><strong>Posizione di partenza:</strong> Supino con le gambe piegate e le braccia lungo i fianchi</li> 
		<li> Solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e buttando fuori l'aria in questa fase.</li><li> Controlla la discesa. </li></ul>";

$es2 = "<ul>
		<li><strong>Posizione di partenza:</strong> Supino con le gambe piegate e le braccia lungo i fianchi</li> 
		<li> Solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e buttando fuori l'aria in questa fase.</li><li> Controlla la discesa. </li></ul>";
			
$es3 = "<ul>
				        <li><strong>Posizione di partenza:</strong> Supino con le gambe piegate e le braccia lungo i fianchi</li> 
						<li> Solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e buttando fuori l'aria in questa fase.</li><li> Controlla la discesa. </li></ul>";
			
$es4 = "<ul>
						        <li><strong>Posizione di partenza:</strong> Supino con le gambe piegate e le braccia lungo i fianchi</li> 
								<li> Solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e buttando fuori l'aria in questa fase.</li><li> Controlla la discesa. </li></ul>";
			
switch ($prog[TIPO_PROG_ADDOMINALI]) {
	case (4):
	$addominali=array($es4,'/img/PDF/addo4.JPG');
	break;

	case (3):
	$addominali=array($es3,'/img/PDF/addo3.JPG');
	break;

	case (2):
	$addominali=array($es2,'/img/PDF/addo2.JPG');
	break;

	case (1):
	$addominali=array($es1,'/img/PDF/addo1.JPG');
	break;
}

?>



<h1>Esercizi di rinforzo per i muscoli addominali</h1><br>
<table border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td><h2>Addominali</h2>
	<?=$addominali[0];?>
	
	</td>
    <td>  <img src="<?=$addominali[1];?>"> </td></tr>

		<tr><th colspan="2">Ripetizioni: 6-8</th></tr>
</table>