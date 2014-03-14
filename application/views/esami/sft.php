<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<script>

  $(document).ready(function(){
    $("#sftForm").validate();
  });

  </script>
<script>
function startCalc(){
	interval = setInterval("calc()",200);
}

function calc(){
	peso = $('#peso').val();
	ripetizioni = $('#ripetizioni').val();
	
	if (peso <= 0 || ripetizioni <= 0 ) {
		$('input[name=massimale]').val('');
	}
	else {
		massimale = peso/(1.0278-(0.0278*ripetizioni));
		
		$('input[name=massimale]').val( nt2dp(massimale,0) );
	}
	
	
}
function nt2dp(num,dp)
{
	// rounds num to dp decimal places
  num=num*1+(0.55/Math.pow(10,dp));

  if (dp>0) {
		dp=dp+1;
	}
	b=Math.floor(num).toString().length+dp;
  return num.toString().substr(0,b);
}


function stopCalc(){
	clearInterval(interval);
}
</script>

<style type="text/css">
th {
	text-align:left; 
}
table {
	text-align:center; 
}
.dx {
	text-align:right;
	width: 50px;
}
.num { text-align:left;
width: 50px;


}
.risultati{
	
	width:100px;
	}
td.risultati{
	border:solid;
	text-align:center;	
}

.fermata
{
    display:none;
}
#sel1,#sel2,#sel3,#sel4
{
    display:none;
}
</style>

<script type="text/javascript">
function verifica_aria(){
    
	if(document.form.aria[1].checked == true) {
		$('#sel1').slideUp();
	}
	else if(document.form.aria[0].checked == true){
		$('#sel1').slideDown();
	}
};

function verifica_pausa(){
	if(document.form.pausa[1].checked == true) {
		$('#sel2').slideUp();
	}
	else if(document.form.pausa[0].checked == true) {
		$('#sel2').slideDown();
        
	}
};

function verifica_sintomi(){
    
    if(document.form.sintomi[1].checked == true) {
        $('#sel3').slideUp();
    }
    else if(document.form.sintomi[0].checked == true) {
        $('#sel3').slideDown();
    }
};

function verifica_stop(){
    
    if(document.form.stop[1].checked == true) {
        $('#sel4').slideUp();
    }
    else if(document.form.stop[0].checked == true) {
        $('#sel4').slideDown();
    }
};

</script>
<?php if(isset($display)): ?>

<?php
	$x='disabled';
	$indietro = $sft->codfis;
?>

<style type="text/css">
td {
   color:gray; 
}
td.esame_enabled {
    color: fuchsia;
    background-color: lime;
}
</style>

<?php else: ?>
<?php
	$display=0;
	$x='';
?>
<?php endif; ?>

<h1>Senior Fitness Test</h1>
<?if(isset($inserito)):?>
<div class="risultato">
	<?if($inserito===true):?>
	<h2>Esame inserito con successo!</h2>
            
	<td><a href='<?=base_url()?>pz/crea_index/<?=$codfis?>'>Torna alla pagina del paziente</a></td>            
	<?else:?>
	<span class="error">Errore nell'inserimento esame:<?=$inserito;?></span>
	<?endif?>
</div>
<?endif;?>


<?php
$attributes = array('class' => 'cmxform', 'id' => 'sftForm', 'name' => 'form');
echo form_open('esami/SFT', $attributes);
?>    

<fieldset>
<legend>Test del cammino</legend>

<table width="100%" align="center">


<tr><th>&nbsp;</th><th>inizio test</th><th>fine test</th><th>predetto</th><th>% predetto</th></tr>
<tr><th>Distanza percorsa (m)</th>
<td>-</td>
<td><input type="text" <?=$x?>   name="mwt" value="<? if($display)echo $sft->mwt;?>" size="10" id="6mwt" /></td><td></td><td></td></tr>
<tr><th>PAO (mmHg)</th>
<td><input type="text" <?=$x?>   name="p1" value="<? if($display)echo $sft->p1  ;?>" size="5" /> / <input type="text" <?=$x?>   name="p2" value="<? if($display)echo $sft->p2  ;?>" size="5" /></td>
<td><input type="text" <?=$x?>   name="p3" value="<? if($display)echo $sft->p3  ;?>" size="5" /> / <input type="text" <?=$x?>   name="p4" value="<? if($display)echo $sft->p4  ;?>" size="5" /></td><td></td><td></td></tr>
<tr><th>FC (bpm)</th><td><input type="text" <?=$x?>   name="fc_i" value="<? if($display)echo $sft->fc_i  ;?>" size="10" id="fc_i" /></td><td><input type="text" <?=$x?>   name="fc_f" value="<? if($display)echo $sft->fc_f  ;?>" size="10" id="fc_f" /></td><td></td><td></td></tr>
<tr><th>Dispnea (scala Borg)</th><td><input type="text" <?=$x?>   name="disp_i" value="<? if($display)echo $sft->disp_i  ;?>" size="10" id="disp_i" /></td><td><input type="text" <?=$x?>   name="disp_f" value="<? if($display)echo $sft->disp_f  ;?>" size="10" id="disp_f" /></td><td></td><td></td></tr>
<tr><th>Fatica (scala Borg)</th><td><input type="text" <?=$x?>   name="fatica_i" value="<? if($display)echo $sft->fatica_i  ;?>" size="10" id="fatica_i" /></td><td><input type="text" <?=$x?>   name="fatica_f" value="<? if($display)echo $sft->fatica_f  ;?>" size="10" id="fatica_f" /></td><td></td><td></td></tr>
<tr><th>Saturazione O2 (%)</th><td><input type="text" <?=$x?>   name="sat_i" value="<? if($display)echo $sft->sat_i  ;?>" size="10" id="sat_i" /> </td><td><input type="text" <?=$x?>   name="sat_f" value="<? if($display)echo $sft->sat_f  ;?>" size="10" id="sat_f" /></td><td></td><td></td></tr>
<tr><td colspan="5"><hr /></td>
</tr>


<tr><th>Suplementazione O2 (l/min)</th>  

<? if ($display):?>
<? if($sft->aria_n==''): //se non suplem?>
<td colspan="2">si <input type="radio" name="aria" disabled="disabled" value="1" />no  <input type="radio" name="aria" value="0" checked="checked" disabled="disabled" /></td>
<? else: //se suplementato ?>
<td colspan="2">si <input type="radio" name="aria" value="1" checked="checked" disabled="disabled"/>no  <input type="radio" name="aria" value="0" disabled="disabled"/></td>
<td colspan="2"><div><input type="text" <?=$x?>   name="aria_n" value="<? if($display)echo $sft->aria_n  ;?>" size="10" id="aria_n" /> 
  l/min</div></td>
<? endif;?>
<? else: ?>
<td colspan="2">si 
  <input type="radio" id="aria" onclick="verifica_aria()" name="aria" value="1" />
  no
  <input type="radio" id="aria" onclick="verifica_aria()" name="aria" value="0" checked="checked" /></td>
<td colspan="2"><div id="sel1"><input type="text" <?=$x?>   name="aria_n" value="<? if($display)echo $sft->aria_n  ;?>" size="10" id="aria_n" /> 
  l/min</div></td>
</tr>
<?endif;?>



<tr>
<th>Pause prima dei 6 minuti</th>


<? if ($display):?>
<? if($sft->pausa_n==''): //se non suplem?>
<td colspan="2">si <input type="radio" name="pausa" disabled="disabled" value="1" />no  <input type="radio" name="pausa" value="0" checked="checked" disabled="disabled" /></td>
<? else: //se suplementato ?>
<td colspan="2">si <input type="radio" name="pausa" value="1" checked="checked" disabled="disabled"/>no  <input type="radio" name="pausa" value="0" disabled="disabled"/></td>
<td colspan="2"><div><input type="text" <?=$x?>   name="pausa_n" value="<? if($display)echo $sft->pausa_n  ;?>" size="10" id="pausa_n" /> 
  l/min</div></td>
<? endif;?>
<? else: ?>
<td colspan="2">si 
  <input type="radio" id="pausa" onclick="verifica_pausa()" name="pausa" value="1" />
  no
  <input type="radio" id="pausa" onclick="verifica_pausa()" name="pausa" value="0" checked="checked" /></td>
<td colspan="2"><div id="sel2">ai minuti <input type="text" <?=$x?>   name="pausa_n" value="<? if($display)echo $sft-> pausa_n  ;?>" size="10" id="pausa_n" /></div></td>
</tr>
<?endif;?>


<tr>
<th>Altri sintomi al termine dell'esercizio</th> 


<? if ($display):?>
<? if($sft->sintomi_n==''): //se non suplem?>
<td colspan="2">si <input type="radio" name="sintomi" disabled="disabled" value="1" />no  <input type="radio" name="sintomi" value="0" checked="checked" disabled="disabled" /></td>
<? else: //se suplementato ?>
<td colspan="2">si <input type="radio" name="sintomi" value="1" checked="checked" disabled="disabled"/>no  <input type="radio" name="sintomi" value="0" disabled="disabled"/></td>
<td colspan="2"><div>Sintomi:<input type="text" <?=$x?>   name="sintomi_n" value="<? if($display)echo $sft->sintomi_n  ;?>" size="10" id="sintomi_n" /> </div></td>
<? endif;?>
<? else: ?>
<td colspan="2">si 
  <input type="radio" id="sintomi" onclick="verifica_sintomi()" name="sintomi" value="1" />
  no
  <input type="radio" id="sintomi" onclick="verifica_sintomi()" name="sintomi" value="0" checked="checked" /></td>
<td colspan="2"><div id="sel3">sintomi: <input type="text" <?=$x?>   name="sintomi_n" value="<? if($display)echo $sft-> sintomi_n  ;?>" size="10" id="sintomi_n" /></div></td>
</tr>
<?endif;?>



</table>
</fieldset>
<br />
<fieldset>
<legend>30-Second Chair Stand</legend>

<table width="50%"><tr><th>Numero di alzate</th><td><input type="text" <?=$x?>   name="alzate" value="<? if($display)echo $sft->alzate  ;?>" size="10" id="alzate" /></td></tr>
<tr><th>Interruzione esercizio?</th><td>

<? if ($display):?>
<? if($sft->sintomi_c==''): //se non suplem?>
<td colspan="2">si <input type="radio" name="stop" disabled="disabled" value="1" />no  <input type="radio" name="stop" value="0" checked="checked" disabled="disabled" /></td>
<? else: //se suplementato ?>
<td colspan="2">si <input type="radio" name="stop" value="1" checked="checked" disabled="disabled"/>no  <input type="radio" name="stop" value="0" disabled="disabled"/></td>
<td colspan="2"><div>Sintomi: <input type="text" <?=$x?>   name="sintomi_c" value="<? if($display)echo $sft->sintomi_c  ;?>" size="10" id="sintomi_c" /> </div></td>
<? endif;?>
<? else: ?>
<td colspan="2">si 
  <input type="radio" id="stop" onclick="verifica_stop()" name="stop" value="1" />
  no
  <input type="radio" id="stop" onclick="verifica_stop()" name="stop" value="0" checked="checked" /></td>
<td colspan="2"><div id="sel4">Sintomi: <input type="text" <?=$x?>   name="sintomi_c" value="<? if($display)echo $sft-> stop_n  ;?>" size="10" id="sintomi_c" /></div></td>
</tr>
<?endif;?>

</td></tr></table>

</fieldset>
<br />
<fieldset>
<legend>Test di forza muscolo quadricipite</legend>

<table width="50%"><tr><th>&nbsp;</th><th>Destro</th><th>Sinistro</th></tr>
<tr>
  <th>Forza (Kg)</th>
  <td><input type="text" <?=$x?>   name="quad_dx" value="<? if($display)echo $sft->quad_dx  ;?>" size="10" id="quad_dx" /></td><td><input type="text" <?=$x?>   name="quad_sx" value="<? if($display)echo $sft->quad_sx  ;?>" size="10" id="quad_sx" /></td></tr></table>

</fieldset>

<br />
<fieldset>
<legend>Arm curl test</legend>

<table width="50%"><tr><th>&nbsp;</th><th>Destro</th><th>Sinistro</th></tr>
<tr>
  <th>Forza (Kg)</th><td><input type="text" <?=$x?>   name="curl_dx" value="<? if($display)echo $sft->curl_dx  ;?>" size="10" id="curl_dx" /></td><td><input type="text" <?=$x?>   name="curl_sx" value="<? if($display)echo $sft->curl_sx  ;?>" size="10" id="curl_sx" /></td></tr>
<tr>
  <th>Peso manubrio (Kg)</th>
  <td colspan="2"><input type="text" <?=$x?>   name="curl_peso" value="<? if($display)echo $sft->curl_peso  ;?>" size="10" id="curl_peso" /></td>

</tr>
</table>

</fieldset>
<br />
<fieldset>

<legend>Hand grip</legend>

<table width="50%"><tr><th>&nbsp;</th>
<th>Mano destra</th>
<th>Mano sinistra</th></tr>
<tr>
  <th>Forza (Kg)</th><td><input type="text" <?=$x?>   name="hand_dx" value="<? if($display)echo $sft->hand_dx  ;?>" size="10" id="hand_dx" /></td><td><input type="text" <?=$x?>   name="hand_sx" value="<? if($display)echo $sft->hand_sx  ;?>" size="10" id="hand_sx" /></td></tr></table>

</fieldset>

<br />
<fieldset>


	
	
<legend>Determinazione carico massimale</legend>

<table width="50%"><tr>
<th>Peso utilizzato (Kg)</th>
<th>Numero di ripetizioni</th>
<th>Massimale teorico</th></tr>
<tr>
 <td><input type="text" <?=$x?> class="required number"  name="peso" value="<? if($display)echo $sft->peso  ;?>" size="10" id="peso" /></td>
 <td><input type="text" <?=$x?> class="required number"  name="ripetizioni" value="<? if($display)echo $sft->ripetizioni  ;?>" size="10" id="ripetizioni" onFocus="startCalc();" onBlur="stopCalc();"></td>
 
 <td><input type="text" readonly name="massimale" value="<? if($display)echo $sft->massimale  ;?>" size="10" id="massimale" /></td>
</tr></table>
</fieldset>

<!--  //calcolare con formula di brzycki il massimale!!!   -->

<br />

<fieldset>

<legend>Foot up and go</legend>

<table width="50%">
<tr>
  <th>Tempo richiesto (s)</th><td><input type="text" <?=$x?>   name="foot" value="<? if($display)echo $sft->foot  ;?>" size="10" id="foot" /></td></tr></table>

</fieldset><br /><fieldset>

<legend>Chair sit and reach</legend>

<table width="50%">
<tr>
  <th>Distanza (cm)</th><td><input type="text" <?=$x?>   name="chair" value="<? if($display)echo $sft->chair  ;?>" size="10" id="chair" /></td></tr></table>

</fieldset><br /><fieldset>

<legend>Back scratch</legend>

<table width="50%">
<tr>
  <th>Distanza (cm)</th>
  <td><input type="text" <?=$x?>   name="back_s" value="<? if($display)echo $sft->back_s  ;?>" size="10" id="back_s" /></td></tr></table>

</fieldset>
<?
$today=date('Ymd');
//echo $today;
echo form_hidden('data',$today);
// sommare le pressioni!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
echo form_hidden('codfis',$this->uri->segment(3));
if(isset($inserito)) $display = '2';
if ($display=='0')  echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 
echo validation_errors('<p class="error">'); ?>
<? if($display=='1'):?>
<a href="<?=base_url();?>pz/crea_index/<?=$indietro?>">INDIETRO</a>
<?endif;?>