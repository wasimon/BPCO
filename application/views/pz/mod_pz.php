<br>
MODIFICA PAZIENTE <br>
<table border="1">
<? 
echo 'ciao';


?>
	<? if(isset($pazienti) && is_array($pazienti) AND count($pazienti)>0):?>
<? foreach($pazienti as $pz):?>
<?php
$gino = $pz->codfis;
echo form_open('pz/update_pz/'.$gino);
echo form_label('codfis'); 
echo form_input('codfis', set_value('',$pz->codfis));
echo form_label('nome'); 
echo form_input('nome', set_value('',$pz->nome));
echo form_label('cognome'); 
echo form_input('cognome', set_value('',$pz->cognome));

echo form_submit('submit', 'Modifica dati Paziente');

?>	
   	<? endforeach?>
    	<? else:?>
		<tr>
			<td colspan="3">There are currently no users.</td>
		</tr>
	<? endif?>
</table>


<br />




<pre><? print_r($this->session->all_userdata()); ?></pre>