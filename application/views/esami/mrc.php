<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<script>

  $(document).ready(function(){

    $("#commentForm").validate();

  });

  </script>
<script type="text/javascript">
function verifica_presenza(){
    
    if(document.form.presenza[1].checked == true)
    {
        $('.sel1').slideUp();
         
    }
    else if(document.form.presenza[0].checked == true)
    {
        $('.sel1').slideDown();
    
        
    }
};
</script>
<style type="text/css">
th { text-align:left;
   
}
table { text-align:left;
   
}
.dx { text-align:right;
width: 50px;

}
.num { text-align:left;
width: 50px;
}
.sel1{
    display:none;
}
</style>
<?php
$stampa_mrc = array(    '0' => '',
                        '1' => '',
                        '2' => '',
                        '3' => '',
                        '4' => '',
                        );

$stampa_espettorato = array(    '0' => '',
                                '1' => '',
                                '2' => '',
                                '3' => '',
                                );

$stampa_quantita = array(       '0' => '',
                                '1' => '',
                                '2' => '',
                                '3' => '',
                                );

// visualizazione esame 
if(isset($display)):
$x='disabled';
$indietro = $mrc->codfis;

$num1 = $mrc->mrc;
$stampa_mrc[$num1] = " checked =\"checked\"";

$num2 = $mrc->qualita_catarro;
$stampa_espettorato[$num2] = " checked =\"checked\"";

$num3 = $mrc->quantita_catarro;
$stampa_quantita[$num3] = " checked =\"checked\"";
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

<h1>Medical Research Council (MRC)</h1>

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
$attributes = array('class' => 'cmxform', 'id' => 'commentForm', 'name' =>'form');
echo form_open('esami/mrc', $attributes);
?>


<fieldset>

<table width="100%"><tr><th width="2%">0.</th>
  <td width="73%">Mi manca il fiato solo per sforzi intensi.</td>
  <td width="25%"><input <?=$x.$stampa_mrc[0]   ?> name="mrc" type="radio" value="0" /></td></tr>
  <tr>
    <th>1.</th>
    <td>Mi manca il fiato solo se cammino a passo veloce in piano o faccio una salita leggera.</td>
    <td><input <?=$x.$stampa_mrc[1]?> name="mrc" type="radio" value="1" /></td>
  </tr>
  <tr>
    <th>2.</th>
    <td>Cammino più lentamente della gente della mia stessa età quando vado in piano, oppure mi devo fermare pe rrespirare quando cammino al mio passo.</td>
    <td><input <?=$x.$stampa_mrc[2]?> name="mrc" type="radio" value="2" /></td>
  </tr>
  <tr>
    <th>3.</th>
    <td>Mi devo fermare per respirare dopo che ho camminato in piano per circa 100 metri o pochi minuti.</td>
    <td><input <?=$x.$stampa_mrc[3]?> name="mrc" type="radio" value="3" /></td>
  </tr>
  <tr>
    <th>4.</th>
    <td>Mi manca il fiato per uscire di casa o mi manca il fiato quando mi vesto o mi spoglio.</td>
    <td><input <?=$x.$stampa_mrc[4]?> name="mrc" type="radio" value="4" /></td>
  </tr>
  <tr>
    <th colspan="3"><hr /></th>
    </tr>
  <tr>
    <th>&nbsp;</th>
    <td>Durata della dispnea (anni) :</td>
    <td><input <?=$x?> type="text"  name="durata_anni" value="<? if($display)echo $mrc->durata_anni  ;?>" size="10" class=" number" id="durata_anni" /> </td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>Presenza di dispnea notturna:</td>
    

 
<? if ($display):?>
<? if($mrc->durata_notte==''): //se non suplem?>
<td>si <input type="radio" name="presenza" disabled="disabled" value="1" />no  <input type="radio" name="presenza" value="0" checked="checked" disabled="disabled" /></td>
<? else: //se suplementato ?>
<td >si <input type="radio" name="presenza" value="1" checked="checked" disabled="disabled"/>no  <input type="radio" name="presenza" value="0" disabled="disabled"/></td>
<td ><div>Sintomi: <input type="text" <?=$x?>   name="durata_notte" value="<? if($display)echo $mrc->durata_notte  ;?>" size="10" id="durata_notte" /> </div></td>
<? endif;?>
<? else: ?>
<td>si 
  <input type="radio" id="presenza" onclick="verifica_presenza()" name="presenza" value="1" />
  no
  <input type="radio" id="presenza" onclick="verifica_presenza()" name="presenza" value="0" checked="checked" /></td></tr>
<tr><td ></td><td > <p  class="sel1">Durata della dispnea notturna:</p></td><td > <p class="sel1"> <input type="text" <?=$x?>   name="durata_notte" value="<? if($display)echo $mrc->durata_notte  ;?>" size="10" class="number"  id="durata_notte" /></p></td>
</tr>
<?endif;?> 
 
  
    <tr>
    <th colspan="3"><hr /></th>
    </tr>
  <tr>
    <th>&nbsp;</th>
    <td>Tosse:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>Indichi sulla scala da 1 a 10 il grado della tosse (al di fuori delle bronchiti) mediamente negli ultimi 6 mesi:<br />
      (0 non ho assolutamente tosse; 10 ho una tosse insopportabile)</td>
    <td><select name="tosse" id="tosse" <?=$x?> >
 <? if ($display) echo '<option>';
   echo $mrc->tosse;
   echo '</option>'?>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
  </tr>
  <tr>
    <th colspan="3"><hr /></th>
    </tr>
  <tr>
    <th>&nbsp;</th>
    <td>Espettorato:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>Il catarro è di tipo:</td>
    <td><input <?=$x.$stampa_espettorato[0]   ?> name="qualita_catarro" type="radio" value="0" /> mucoso (bianco)</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
    <td><input <?=$x.$stampa_espettorato[1]   ?> name="qualita_catarro" type="radio" value="1" />muco-purulento (bianco-giallastro o bianco bruno)</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
    <td><input <?=$x.$stampa_espettorato[2]   ?> name="qualita_catarro" type="radio" value="2" />purulento (giallastro, marron scuro)</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
    <td><input <?=$x.$stampa_espettorato[3]   ?> name="qualita_catarro" type="radio" value="3" />Non so</td>
  </tr>
  
  <tr>
    <th colspan="3"><hr /></th>
  </tr>
  
    <tr>
    <th>&nbsp;</th>
    <td>Negli ultimi 6 mesi la quantità media di catarro (al di fuori delle bronchiti) durante una giornata è:</td>
       <td><input <?=$x.$stampa_quantita[0]   ?>  name="quantita_catarro" type="radio" value="0" /> 
       &lt;1 cucchiaio da minestra</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
    <td><input <?=$x.$stampa_quantita[1]   ?>   name="quantita_catarro" type="radio" value="1" />
    &gt;1-&lt;3cucchiai da minestra</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
    <td><input <?=$x.$stampa_quantita[2]   ?>   name="quantita_catarro" type="radio" value="2" />
    &gt;3 cucchiai da minestra</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
    <td><input <?=$x.$stampa_quantita[3]   ?>   name="quantita_catarro" type="radio" value="3" />Non so</td>
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
echo form_close();?>
<? if($display=='1'):?>
<a href="<?=base_url();?>pz/crea_index/<?=$indietro?>">INDIETRO</a>
<?endif;?>