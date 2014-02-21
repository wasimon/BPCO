
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

</style>


<h1>Short Portable Mental Status Quesetionnaire</h1>
<?php
echo form_open('esami/SPMSQ');
?>

<fieldset>
  <table width="100%" align="center">
  <tr>
<th>1.</th>
<th>Qual'è la data di oggi? (giorno, mese, anno)</th>  <td colspan="2">si 
  <input type="radio" name="spsms1" value="1" />
  no
  <input type="radio" name="spsms1" value="0" checked="checked" /></td>

</tr><tr>
<th>2.</th>
<th>Che giorno della settimana è?</th>  <td colspan="2">si 
  <input type="radio" name="spsms2" value="1" />
  no
  <input type="radio" name="spsms2" value="0" checked="checked" /></td>

</tr>

<tr>
  <th>3.</th>
<th>Qual è il nome di questo posto?</th>  
<td colspan="2">si 
  <input type="radio" name="spsms3" value="1" />
  no
  <input type="radio" name="spsms3" value="0" checked="checked" /></td>

</tr>
<tr>
  <th>4.</th>
<th>Qual'è il suo numero di telefono? (o indirizzo)</th>  
<td colspan="2">si 
  <input type="radio" name="spsms4" value="1" />
  no
  <input type="radio" name="spsms4" value="0" checked="checked" /></td>

</tr><tr>
<th>5.</th>
<th>Quanti anni ha?</th>  
<td colspan="2">si 
  <input type="radio" name="spsms5" value="1" />
  no
  <input type="radio" name="spsms5" value="0" checked="checked" /></td>

</tr><tr>
<th>6.</th>
<th>Quando è nato?</th>  
<td colspan="2">si 
  <input type="radio" name="spsms6" value="1" />
  no
  <input type="radio" name="spsms6" value="0" checked="checked" /></td>

</tr><tr>
<th>7.</th>
<th>Chi è il presidente della repubblica? (o Papa)</th>  
<td colspan="2">si 
  <input type="radio" name="spsms7" value="1" />
  no
  <input type="radio" name="spsms7" value="0" checked="checked" /></td>

</tr><tr>
<th>8.</th>
<th>Chi era il presidente precedente? (o Papa)</th>  
<td colspan="2">si 
  <input type="radio" name="spsms8" value="1" />
  no
  <input type="radio" name="spsms8" value="0" checked="checked" /></td>

</tr><tr>
<th>9.</th>
<th>Qual'era il cognome di sua madre da ragazza?</th>  
<td colspan="2">si 
  <input type="radio" name="spsms9" value="1" />
  no
  <input type="radio" name="spsms9" value="0" checked="checked" /></td>

</tr><tr>
<th>10.</th>
<th>Sottrarre 3 da 20 e da ogni numero fino a 2:</th>  
<td colspan="2">si 
  <input type="radio" name="spsms10" value="1" />
  no
  <input type="radio" name="spsms10" value="0" checked="checked" /></td>

</tr>
<tr>
  <th colspan="4"><hr /></th>
  </tr>
<tr>
  <th>&nbsp;</th>
  <th>PUNTEGGIO FINALE</th>
  <td colspan="2"><input type="text"  name="totoparziale" value="" size="10" id="totparziale" /></td>
</tr>
<tr>
  <th>&nbsp;</th>
  <th>Coefficiente di aggiustamento</th>
  <td colspan="2"><input type="text"  name="spsmscoef" value="" size="10" id="spsmscoef" /></td>
</tr>
<tr>
  <th>&nbsp;</th>
  <th>PUNTEGGIO FINALE</th>
  <td colspan="2"><input type="text"  name="spsmstot" value="" size="10" id="spsmstot" /></td>
</tr>
</table>
</fieldset>
<?
$today=date('Ymd');
echo $today;
echo form_hidden('data',$today);
// sommare le pressioni!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
echo form_hidden('codfis',$this->input->post('codfis'));
echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 
echo validation_errors('<p class="error">'); ?>