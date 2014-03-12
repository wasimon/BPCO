<div id="select-program">
	<h1>Seleziona Programma</h1>
	<p>Il programma suggerito in base ai valori dell'ultimo esame viene evidenziato dal sistema, ma puoi cambiare la selezione prima di salvare le impostazioni.</p>
	<?php echo form_open("prog/save/{$cod_fis}", array('id'=>'save-prog'), $hidden_fields); ?>
	
	<table border="1" cellspacing="0" cellpadding="2">
		<thead>
			<tr>
				<th>Programma</th>
				<th>Intensit&agrave;</th>
				<th>% VO2</th>
				<th>% HR</th>
				<th><abbr title="Ratings of Perceived Exertion">RPE</abbr></th>
				<th>Watt</th>
				<th colspan="5">Protocollo</th>
				<th>Ripetizione</th>
				<th>BMI &gt; 25</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="radio" name="prog_aerobic" value="1">&nbsp;1</td>
				<td><em>Very Light</em></td>
				<td>&lt; 37</td>
				<td>&lt 57</td>
				<td>9</td>
				<td>TODO</td>
				<td>3 min di riscaldamento</td>
				<td>7 min esercizio</td>
				<td>3 min di pedalata libera</td>
				<td>7 min esercizio</td>
				<td>3 min di defaticamento</td>
				<td>3/settimana</td>
				<td>-</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_aerobic" value="2">&nbsp;2</td>
				<td><em>Light</em></td>
				<td>37 - 45</td>
				<td>57 - 63</td>
				<td>9 e 11</td>
				<td>TODO</td>
				<td>3 min di riscaldamento</td>
				<td>10 min esercizio</td>
				<td>3 min di pedalata libera</td>
				<td>7 min esercizio</td>
				<td>3 min di defaticamento</td>
				<td>3/settimana</td>
				<td>-</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_aerobic" value="3">&nbsp;3</td>
				<td><em>Moderate</em></td>
				<td>46 - 63</td>
				<td>57</td>
				<td>9</td>
				<td>TODO</td>
				<td>3 min di riscaldamento</td>
				<td>7 min esercizio</td>
				<td>3 min di pedalata libera</td>
				<td>7 min esercizio</td>
				<td>3 min di defaticamento</td>
				<td>2/settimana</td>
				<td>-</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_aerobic" value="4">&nbsp;4</td>
				<td><em>Vigorous</em></td>
				<td>60 - 69</td>
				<td>&lt;&nbsp;57</td>
				<td>&lt;&nbsp;9</td>
				<td>TODO</td>
				<td>3 min di riscaldamento</td>
				<td>7 min esercizio</td>
				<td>3 min di pedalata libera</td>
				<td>7 min esercizio</td>
				<td>3 min di defaticamento</td>
				<td>2/settimana</td>
				<td>-</td>
			</tr>
		<tbody>
	</table>
	
	
	
	
	<?php echo form_close() // #save-prog ?>
</div>