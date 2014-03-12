<script src="http://code.jquery.com/jquery-latest.js"></script>
<style type="text/css">
th { 
font-size: 9pt;
 
}
td { 
font-size: 10pt;
 
}


.riga_colorata { 
background-color:#999;
}

</style>
<?php
// visualizazione esame 
if(isset($display)):
$indietro = $mmse->codfis;
$x='disabled';
$string = "";
for($i=1; $i<11; $i++)
{
    $name = "or{$i}";
    $value = $mmse->$name;
    $string .= "selectA(\"{$name}\",{$value}); \n";
}
for($i=1; $i<6; $i++)
{
    $name = "calcolo{$i}";
    $value = $mmse->$name;
    $string .= "selectA(\"{$name}\",{$value}); \n";
}
for($i=1; $i<7; $i++)
{
    $name = "ling{$i}";
    $value = $mmse->$name;
    $string .= "selectA(\"{$name}\",{$value}); \n";
}
?>
<script  type="text/javascript">
function selectA(arg1, arg2){  
    $('input:radio[name='+arg1+'][value='+arg2+']').attr('checked',true);
    return true; };

$().ready(function(){
    $('input:radio').attr('disabled',true);
    <?=$string?>; 
});
</script> 
<style type="text/css">
tr {
   color:gray; 
}

tr.esame_enabled {
    color: fuchsia;
    background-color: lime;
}
</style>
<?php else: ?>
<?php $display=0; ?>
<script type="text/javascript" charset="utf-8">
	// INPUT type="radio"
	jQuery().ready(function($) {
		$("#MMSE-form").on('submit', function(){
			var checked_count = 0;
			
			for (var i = 10; i >= 1; i--) {
				if ($("input[name=or"+i+"]").is(':checked')) {
					checked_count++;
				}
			}
			
			for (var i = 5; i >= 1; i--) {
				if ($("input[name=calcolo"+i+"]").is(':checked')) {
					checked_count++;
				}
			}
			
			for (var i = 6; i >= 3; i--) {
				if ($("input[name=ling"+i+"]").is(':checked')) {
					checked_count++;
				}
			}
			
			if(checked_count == 18) {
				return true;
			} else {
				window.alert("Devi selezionare una risposta per ogni domanda.\n Risposte mancanti: "+(18 - checked_count));
				return false;
			}
		
	})});
</script>

<?php endif; ?>


<h1>Mini Mental State (MMSE)</h1>

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
echo form_open('esami/MMSE', array('id'=>"MMSE-form"));
?>


<fieldset>

<table ><tr>
  <th colspan="4">Orientamento</th>
  </tr><tr>
  <td colspan="2"></td><td>Corretta</td><td>Sbagliata</td>
  </tr>
  <tr>
    <th width="2%">1.</th>
    <td width="48%">In che anno siamo?</td>
    <td width="14%"><input name="or1" type="radio" value="1" /></td>
        <td width="36%" ><input name="or1" type="radio" value="0" /></td>

  </tr>
  <tr>
    <th>2.</th>
    <td>Stagione</td>
    <td><input name="or2" type="radio" value="1" /></td>
    <td  ><input name="or2" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>3.</th>
    <td>Mese</td>
    <td ><input name="or3" type="radio" value="1" /></td>
    <td  ><input name="or3" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>4.</th>
    <td>Data</td>
    <td ><input name="or4" type="radio" value="1" /></td>
    <td ><input name="or4" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>5.</th>
    <td>Giorno</td>
    <td ><input name="or5" type="radio" value="1" /></td>
    <td  ><input name="or5" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th colspan="4"><hr /></th>
    </tr> 
 
  <tr>
    <th width="2%">1.</th>
    <td width="48%">In quale stato ci troviamo?</td>
    <td width="14%" ><input name="or6" type="radio" value="1" /></td>
    <td width="36%" ><input name="or6" type="radio" value="0" /></td>

  </tr>
  <tr>
    <th>2.</th>
    <td>Regione</td>
    <td ><input name="or7" type="radio" value="1" /></td>
    <td  ><input name="or7" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>3.</th>
    <td>Citt&aacute;</td>
    <td ><input name="or8" type="radio" value="1" /></td>
    <td ><input name="or8" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>4.</th>
    <td>Ospedale</td>
    <td ><input name="or9" type="radio" value="1" /></td>
    <td ><input name="or9" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>5.</th>
    <td>Piano</td>
    <td><input name="or10" type="radio" value="1" /></td>
    <td ><input name="or10" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th colspan="4"><hr /></th>
    </tr> 
    
    <tr>
    <th colspan="4">Registrazione </th>
    </tr> 
  <tr>
    <td colspan="3"><p>Nominare 3 oggetti, uno al secondo (es. casa, fiore, penna). 
      Chiedere al paziente di ripeterli nell'ordine subito dopo. 
      Un punto per ogni oggetto nominato.
      </p></td>
    <td width="36%" >
    
    <select  name="reg" id="reg" <?=$x;?>>
    <? if ($display) echo '<option>';
   echo $mmse->reg;
   echo '</option>'?>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select> 
      oggetti nominati</td>

  </tr>
    
    
    <tr>
      <th colspan="4"><hr /></th>
    </tr>
    
<tr>
  <th colspan="4">Attenzione e calcolo</th>
  </tr>
  <td colspan="2"></td><td>Corretta</td><td>Sbagliata</td>
  </tr>

  <tr>
    <th width="2%">1.</th>
    <td width="48%">Far eseguire: 100-7=93</td>
    <td width="14%" ><input name="calcolo1" type="radio" value="1" /></td>    
    <td width="36%"  ><input name="calcolo1" type="radio" value="0"/></td>

  </tr>
  <tr>
    <th>2.</th>
    <td>93-7=86</td>
    <td ><input name="calcolo2" type="radio" value="1" /></td>
    <td><input name="calcolo2" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>3.</th>
    <td>86-7=89</td>
    <td ><input name="calcolo3" type="radio" value="1" /></td>
    <td ><input name="calcolo3" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>4.</th>
    <td>79-7=72</td>
    <td ><input name="calcolo4" type="radio" value="1" /></td>
    <td  ><input name="calcolo4" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th>5.</th>
    <td>72-7=65</td>
    <td ><input name="calcolo5" type="radio" value="1" /></td>
    <td  ><input name="calcolo5" type="radio" value="0" /></td>
  </tr>
  <tr>
    <th colspan="4"><hr /></th>
    </tr>
  
      <th colspan="4">Richiamo </th>
  </tr>
  <tr>
    <td colspan="3"><p>Chierere il nome degli oggetti sopra menzionati. Un punto per ogni risposta esatta.
    </p></td>
 <td >


    <select name="ric" id="ric" <?=$x;?> >
     <? if ($display) echo '<option>';
   echo $mmse->ric;
   echo '</option>'?>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
      oggetti nominati

      </td>
  </tr>
  
  
  
  
 <tr>
    <th colspan="4"><hr /></th>
    </tr>
  
      <th colspan="4">Test del linguaggio </th>
  </tr>
  

  <tr>
    <td colspan="3"><p>Mostrare due oggetti e chiederne il nome.
    </p></td>
    <td >

    <select name="ling1" id="ling1" <?=$x;?> >
    <? if ($display) echo '<option>';
   echo $mmse->ling1;
   echo '</option>'?>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
      oggetti nominati
      
      </td>
  </tr>
 
  <tr>
   
    <td colspan="3">Far eseguire un comando in 3 tempi ( es. prendere il foglio nella mano destra, piegarlo a met&aacute;, metterlo sul pavimento)</td>
  <td >
  <select name="ling2" id="ling2" <?=$x;?> >
  <? if ($display) echo '<option>';
   echo $mmse->ling2;
   echo '</option>'?>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
     

</td>
  </tr>
  
    <tr>

    <td colspan="3">Far scrivere al paziente una frase. Controllare se &egrave; comprensibile e se contiene un soggetto ed un verbo</td>
    <td >
  
    <select name="ling3" id="ling3" <?=$x;?> >
    <? if ($display) echo '<option>';
   echo $mmse->ling3;
   echo '</option>'?>
      <option value="0">0</option>
      <option value="1" tabindex="1">1</option>
      <option value="2">2</option>
    </select>
  
    
    </td>
  </tr>
  <tr>  <td colspan="2"></td><td>Corretta</td><td>Sbagliata</td></tr>
   <tr>
    
    <td colspan="2">Far ripetere &quot;Sopra la panca la capra campa&quot;</td>
    <td ><input name="ling4" type="radio" value="1" /></td>
    <td  ><input name="ling4" type="radio" value="0" /></td>
  </tr>
  <tr>

    <td colspan="2">Chiedere al paziente di eseguire un comando scritto (es. chiudere gli occhi)</td>
    <td ><input name="ling5" type="radio" value="1" /></td>
    <td  ><input name="ling5" type="radio" value="0" /></td>
  </tr>

  <tr>

    <td colspan="2">Far copiare al paziente il disegno riprodotto</td>
    <td ><input name="ling6" type="radio" value="1" /></td>
    <td  ><input name="ling6" type="radio" value="0" /></td>
  </tr>
  <tr><td></td><td colspan="3"><img height="200px" src="<?=base_url()."img/mmse.gif";?>" /></td></tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
</table>
</fieldset>
<?
$today=date('Ymd');
//echo $today;
echo form_hidden('data',$today);
echo form_hidden('codfis',$this->uri->segment(3));
if(isset($inserito)) $display = '2';
if ($display=='0')  echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 
echo validation_errors('<p class="error">');
echo form_close(); ?>
<?if($display):?>
<fieldset>
<table>
<tr><th>RISULTATI:</th></tr>
<tr><td>Punteggio grezzo:</td><td><?=$mmse->mmsetot?></td></tr>
<tr><td>Coefficiente di aggiustamento:</td><td><?=$mmse->mmseagg ;?></td></tr>
<tr><td>Punteggio finale:</td><td><?=$mmse->mmsefinale?></td></tr>
</table>
<a href="<?=base_url();?>pz/crea_index/<?=$indietro?>">INDIETRO</a>
</fieldset>
<?endif;?>  