<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<script>

  $(document).ready(function(){
    $("#cicloForm").validate();
  });

  </script>
  
<style type="text/css">
th { text-align:left;
   
}
table { text-align:center;
   
}
.dx { text-align:right;
width: 50px;

}
.num { text-align:left;
width: 50px;


}
#sel1{
    display:none;
}
</style>
<script type="text/javascript">
function verifica_pausa(){
    
    if(document.form.pausa[1].checked == true)
    {
        $('#sel1').slideUp();
        
    }
    else if(document.form.pausa[0].checked == true)
    {
        $('#sel1').slideDown();
        
    }
};
</script> 
<?php
// visualizazione esame 
if(isset($display)):
$x='disabled';
$indietro = $ciclo->codfis;
$prot = array ( 'protocollo1' => 'protocollo al cicloergometro',
                'protocollo2' => 'protocollo al treadmill',);

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




<h1>Test da sforzo cardiopolmonare</h1>
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
$attributes = array('class' => 'cmxform', 'id' => 'cicloForm', 'name' => 'form');
echo form_open('esami/cicloerg', $attributes);
?>   


<fieldset>
<legend>Test da sforzo</legend>


<table width="100%" align="center">


<tr>
  <th>Tipo di protocollo</th>
  <th colspan="4"><select name="protocollo" id="protocollo" <?=$x?> >
  <? if ($display) echo '<option>';
   echo $prot[$ciclo->protocollo];
   echo '</option>'?>
    <option value="protocollo1">protocollo al cicloergometro</option>
    <option value="protocollo2">protocollo al treadmill</option>
  </select></th>
  </tr>
<tr>
  <th colspan="5"><hr /></th>
  </tr>
<tr><th>&nbsp;</th>
  <th>base</th>
  <th>massimale</th><th>predetto</th><th>% predetto</th></tr>
<tr>
  <th>FC (bpm)</th>
  <td><input type="text" <?=$x?>  class="required number" name="fcbase" value="<? if($display)echo $ciclo->fcbase  ;?>" size="10" id="fcbase" /></td>
  <td><input type="text" <?=$x?>  class="required number" name="fcmax" value="<? if($display)echo $ciclo->fcmax  ;?>" size="10" id="fcmax" /></td>
  <td><input type="text" <?=$x?>  class="required number" name="fcpredetto" value="<? if($display)echo $ciclo->fcpredetto  ;?>" size="10" id="fcpredetto" /></td>
  <td></td>
</tr>
<tr><th>PAO (mmHg)</th>
  <td><input type="text" <?=$x?>   name="p1" value="<? if($display)echo $ciclo->p1  ;?>" size="5" /> / <input type="text" <?=$x?>   name="p2" value="<? if($display)echo $ciclo->p2  ;?>" size="5" /></td>
  <td><input type="text" <?=$x?>   name="p3" value="<? if($display)echo $ciclo->p3  ;?>" size="5" /> / <input type="text" <?=$x?>   name="p4" value="<? if($display)echo $ciclo->p4  ;?>" size="5" /></td><td></td><td></td></tr>
<tr>
  <th>VO2 (L/min)</th><td><input type="text" <?=$x?> class="required number"  name="vo2base" value="<? if($display)echo $ciclo->vo2base  ;?>" size="10" id="vo2base" /></td><td><input type="text" <?=$x?> class="required number"  name="vo2max" value="<? if($display)echo $ciclo->vo2max  ;?>" size="10" id="vo2max" /></td><td><input type="text" <?=$x?> class="required number"  name="vo2predetto" value="<? if($display)echo $ciclo->vo2predetto  ;?>" size="10" id="vo2predetto" /></td><td></td></tr>

<tr>
  <th>VE (L/min)</th><td><input type="text" <?=$x?>   name="vebase" value="<? if($display)echo $ciclo->vebase  ;?>" size="10" id="vebase" /></td><td><input type="text" <?=$x?>   name="vemax" value="<? if($display)echo $ciclo->vemax  ;?>" size="10" id="vemax" /></td><td></td><td></td></tr>

<tr>
  <th>Potenza (W)</th><td>&nbsp;</td><td><input type="text" <?=$x?>   name="wmax" value="<? if($display)echo $ciclo->wmax  ;?>" size="10" id="wmax" /></td><td><input type="text" <?=$x?>   name="wpredetto" value="<? if($display)echo $ciclo->wpredetto  ;?>" size="10" id="wpredetto" /></td><td></td></tr>
<tr><th>Dispnea (scala Borg)</th><td><input type="text" <?=$x?>   name="borg_d_base" value="<? if($display)echo $ciclo->borg_d_base  ;?>" size="10" id="borg_d_base" /></td><td><input type="text" <?=$x?>   name="borg_d_max" value="<? if($display)echo $ciclo->borg_d_max  ;?>" size="10" id="borg_d_max" /></td><td></td><td></td></tr>
<tr><td colspan="5"><hr /></td>
</tr><tr>
<th>Durata totale dell'esercizio</th>  <td colspan="2"><input type="text" <?=$x?>   name="tempofine" value="<? if($display)echo $ciclo->tempofine  ;?>" size="10" id="tempofine" /></td>
<td colspan="2">&nbsp;</td>
</tr><tr>
<th>Termine anticipato</th>


<? if ($display):?>
<? if($ciclo->motivofine==''):?>
<td colspan="2">si <input type="radio" name="pausa" disabled="disabled" value="1" />no  <input type="radio" name="pausa" value="0" checked="checked" disabled="disabled" /></td>
<? else: ?>
<td colspan="2">si <input type="radio" name="pausa" value="1" checked="checked" disabled="disabled"/>no  <input type="radio" name="pausa" value="0" disabled="disabled"/></td>
<td colspan="2"><div>Causa:
<textarea name="motivofine"<?=$x?> id="motivofine" cols="45" rows="5"><? if($display)echo $ciclo->motivofine;?></textarea>
</div></td>
<? endif;?>
<? else: ?>
<td colspan="2">si 
  <input type="radio" id="pausa" onclick="verifica_pausa()" name="pausa" value="1" />
  no
  <input type="radio" id="pausa" onclick="verifica_pausa()" name="pausa" value="0" checked="checked" /></td>
<td colspan="2"><div id="sel1">causa: 
    <textarea name="motivofine" <?=$x?> id="motivofine" cols="45" rows="5"><? if($display)echo $ciclo->motivofine;?></textarea> </div></td>
<?endif;?>

</tr>

</table>
</fieldset>
<?
$today=date('Ymd');
//echo $today;
echo form_hidden('data',$today);
// sommare le pressioni!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
echo form_hidden('codfis',$this->uri->segment(3));
if(isset($inserito)) $display = '2';
if ($display=='0')  echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 
echo validation_errors('<p class="error">');
if($display=='1'):?>
<a href="<?=base_url();?>pz/crea_index/<?=$indietro?>">INDIETRO</a>
<?endif;?>