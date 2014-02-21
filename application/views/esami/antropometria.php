<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<script>

  $(document).ready(function(){

    $("#commentForm").validate();

  });

  </script>
<script>
function startCalc(){
interval = setInterval("calc()",1);
}
function calc(){
    
peso = document.calcolat.peso_ora.value;
altezza = document.calcolat.altezza.value/100; 
altezza2 = altezza * altezza;
totale= (peso * 1) / (altezza2 * 1);

if (document.calcolat.peso_ora.value==null||document.calcolat.peso_ora.value==0 || document.calcolat.altezza.value==null||document.calcolat.altezza.value==0)
{
          document.calcolat.BMI.value = '';
}
else{
document.calcolat.BMI.value = totale;
}
}
function stopCalc(){
clearInterval(interval);
}
</script>
<?php
// visualizazione esame 
if(isset($display)):
$x='disabled';
$indietro = $ant->codfis;
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

<?
else:
$display=0;
$x='';
endif;
?>
</head>
<body>
<h1>Dati Antropometrici</h1>

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
$attributes = array('class' => 'cmxform', 'id' => 'commentForm', 'name' =>'calcolat');
echo form_open('esami/antropometria', $attributes);
?>

<table width="100%">
<tr><td width="50%" align="center">
<fieldset>
<legend>Dati Antropometrici</legend>
<table width="100%">
<tr ><td colspan="2" id="label">Peso</td> </tr>
<tr>
<td id="label">Data attuale: (Kg)</td>
<td id="dati"><input type="text" <?=$x?>  onFocus="startCalc();" onBlur="stopCalc();" name="peso_ora"  value="<? if($display)echo $ant->peso_ora  ;?>"  class="required number" id="peso_ora" /></td></tr>
<tr >
<td id="label">Un anno fa: (Kg)</td>
<td id="dati"><input type="text" <?=$x?>   name="peso_anno"  value="<? if($display)echo $ant->peso_anno  ;?>"  class="required number" id="peso_anno" /></td></tr>
<tr >
  <td colspan="2" class="num"><hr /></td>
  </tr>
<tr >
  <td  id="label">Altezza: (cm)</td>
  <td id="dati"><input type="text" <?=$x?>  onFocus="startCalc();" onBlur="stopCalc();"  name="altezza"  value="<? if($display)echo $ant->altezza  ;?>"  class="required number" id="altezza" /></td>
</tr>
<tr >
  <td colspan="2" class="num"><hr /></td>
  </tr>
<tr >
  <td id="label">BMI</td>
  <td id="dati"><input type="text" <?=$x?>   name="BMI"  value="<? if($display)echo $ant->BMI  ;?>"  id="BMI" /></td>
</tr>
</table>
</fieldset>
</td> <td width="50%" valign="top" align="center">
<fieldset><legend>Dati Bioimpedenzometria</legend>
<table width="100%">
<tr>
<td id="label">Massa magra</td>
<td id="dati"><input type="text" <?=$x?>   name="massamagra"  value="<? if($display)echo $ant->massamagra  ;?>"  class="number" id="massamagra" /></td>
</tr>
<tr></tr>
<td id="label">Massa grassa</td>
<td id="dati"><input type="text" <?=$x?>   name="massagrassa"  value="<? if($display)echo $ant->massagrassa  ;?>"  class="number" id="massagrassa" /></td>
</tr>
<tr >
  <td id="label">Acqua totale</td>
  <td id="dati"><input type="text" <?=$x?>   name="aquatot"  value="<? if($display)echo $ant->aquatot  ;?>"  class="number" id="aquatot" /></td>
</tr>
<tr >
  <td id="label">Percentuale massa grassa</td>
  <td id="dati"><input type="text" <?=$x?>   name="grassoperc"  value="<? if($display)echo $ant->grassoperc  ;?>" class="number"id="grassoperc" /></td>
</tr>
<tr >
  <td id="label">Percentuale massa magra</td>
  <td id="dati"><input type="text" <?=$x?>   name="magroperc"  value="<? if($display)echo $ant->magroperc  ;?>"  class="number" id="magroperc" /></td>
</tr>
</table>
</fieldset>
</td></tr>
<tr><td colspan="2" align="center">
<?
$today=date('Ymd');
//echo $today;
echo form_hidden('data',$today);
echo form_hidden('codfis',$this->uri->segment(3));
if(isset($inserito)) $display = '2';
if ($display=='0')  echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 	 
echo validation_errors('<p class="error">'); ?>
</form>
</td></tr>
</table>
<? if($display=='1'):?>
<a href="<?=base_url();?>pz/crea_index/<?=$indietro?>">INDIETRO</a>
<?endif;?>
</html>