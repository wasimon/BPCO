<style type="text/css" media="screen">
#select-program {
	width: 95%;
	margin: 0 auto;
}
</style>

<div id="select-program">
	<h1>Seleziona Programma</h1>
	<p>Il programma suggerito in base ai valori dell'ultimo esame viene evidenziato dal sistema, ma puoi cambiare la selezione prima di salvare le impostazioni.</p>
	<?php echo form_open("prog/save/{$cod_fis}", array('id'=>'save-prog'), $hidden_fields); ?>

<!-- Fine SelectProg Header -->