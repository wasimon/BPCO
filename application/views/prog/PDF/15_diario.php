<style type="text/css" media="all">
th{font-weight:bold;}
img{height: 100px;}
table{border:1;
padding:5px; }
.immagine { text-align: center; vertical-align: middle;}
</style>
<?	
$settimana=array(
'<h2>PRIMA SETTIMANA:</h2>',
'<h2>SECONDA SETTIMANA:</h2>',
'<h2>TERZA SETTIMANA:</h2>',
'<h2>QUARTA SETTIMANA:</h2>',
);

//Distribuzione settimanale dell'allenamento aerobico
	$si = ' bgcolor="aqua"';
	$no = ' ';
	$doppio=array($no,$no,$no,$no,$no);
	$rinf2=array($no,$no,$no,$no,$no);

switch ($prog[TIPO_PROG_AEROBICO]) {
	case (4):
	$aero=array($si,$si,$si,$si,$si);
	if ($esami->antropometria->BMI>25) {
		$doppio=array($si,$si,$si,$si,$si);
	}
	break;

	case (3):
	$aero=array($si,$si,$no,$si,$si);
	if ($esami->antropometria->BMI>25) {
		$doppio=array($si,$si,$no,$si,$si);
	}
	break;

	case (2):
	$aero=array($si,$no,$si,$no,$si);
	break;

	case (1):
	$aero=array($si,$no,$no,$si,$no);
	break;
}

//Distribuzione settimanale del rinforzo
	$si = ' bgcolor="red"';
	$no = ' ';

switch ($prog[TIPO_PROG_RINFORZO]) {
	case (4):
	$rinf2=array($si,$si,$si,$si,$si);
	break;
	
	case (3):
	$rinf2=array($si,$si,$no,$si,$si);
	break;
	
	case (2):
	$rinf2=array($si,$no,$si,$no,$si);
	break;

	case (1):
	$rinf2=array($si,$no,$no,$si,$no);
	break;
}
?>	
<h1>DIARIO DELLE ATTIVITA':</h1>
Scrivi all'interno degli spazi se hai effettuato regolarmente le attivit&agrave; del programma di esercizi.
Ricordati di scrivere all'interno dell'ultima riga di ogni settimana le attivit&agrave; che hai svolto nel weekend.
Puoi utilizzare questo foglio come diario/calendario, lo sfondo colorato corrisponde ai tipi di esercizio che devi effettuare quel giorno della settimana.

<? for ($i=0; $i < 4; $i++):?>
<?=$settimana[$i];?>
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
      <td width="119"><p align="center">&nbsp;</p></td>
      <td colspan="2" width="170"><p align="center">MATTINO </p></td>
      <td colspan="2" width="170"><p align="center">POMERIGGIO </p></td>
  </tr>  
  <tr>
    <td width="119"><p align="center">&nbsp;</p></td>
    <td width="85"><p align="center">CYCLETTE</p></td>
    <td width="85"><p align="center">RINFORZO</p></td>
    <td width="85"><p align="center">CYCLETTE</p></td>
    <td width="85"><p align="center">RINFORZO</p></td>
  </tr>
  <tr>
    <td width="119"><p align="center"><strong>LUNEDI</strong><strong> </strong></p></td>
    <td width="85"<?=$aero[0];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$rinf[0];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$doppio[0];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$rinf2[0];?>><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="119"><p align="center"><strong>MARTEDI</strong></p></td>
    <td width="85"<?=$aero[1];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$rinf[1];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$doppio[1];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$rinf2[1];?>><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="119"><p align="center"><strong>MERCOLEDI</strong></p></td>
   <td width="85"<?=$aero[2];?>><p align="center">&nbsp;</p></td>
   <td width="85"<?=$rinf[2];?>><p align="center">&nbsp;</p></td>
   <td width="85"<?=$doppio[2];?>><p align="center">&nbsp;</p></td>
   <td width="85"<?=$rinf2[2];?>><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="119"><p align="center"><strong>GIOVEDI</strong></p></td>
    <td width="85"<?=$aero[3];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$rinf[3];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$doppio[3];?>><p align="center">&nbsp;</p></td>
    <td width="85"<?=$rinf2[3];?>><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="119"><p align="center"><strong>VENERDI</strong></p></td>
   <td width="85"<?=$aero[4];?>><p align="center">&nbsp;</p></td>
   <td width="85"<?=$rinf[4];?>><p align="center">&nbsp;</p></td>
   <td width="85"<?=$doppio[4];?>><p align="center">&nbsp;</p></td>
   <td width="85"<?=$rinf2[4];?>><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="119"><p align="center"><strong>WEEKEND</strong></p></td>
    <td width="340" colspan="4"><p align="center">&nbsp;</p></td>
  </tr>
</table>
<?endfor;?>