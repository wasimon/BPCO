<style type="text/css" media="screen">
#select-program {
	width: 95%;
	margin: 0 auto;
}
#save-prog > table {
	width: 100%;
}
table tr:nth-child(even) {
	background-color: #ECECEC;
}
table thead tr {
	background-color: #E0E0E0;
}
</style>
<div id="select-program">
	<h1>Seleziona Programma</h1>
	<p>Il programma suggerito in base ai valori dell'ultimo esame viene evidenziato dal sistema, ma puoi cambiare la selezione prima di salvare le impostazioni.</p>
	<?php echo form_open("prog/save/{$cod_fis}", array('id'=>'save-prog'), $hidden_fields); ?>
	
	<h2>Esercizio Aerobico</h2>
	<p>Testo descrittivo per indicare di cosa si tratta.</p>
	<!-- TODO: Simon completa il testo qui sopra. -->
	
	<table class="aerobico" border="1" cellspacing="0" cellpadding="5">
		<thead>
			<tr>
				<th>Programma</th>
				<th>Intensit&agrave;</th>
				<th>VO2 (x%)</th>
				<th>HR (x%)</th>
				<th><abbr title="Ratings of Perceived Exertion">RPE</abbr></th>
				<th>Watt</th>
				<th colspan="5">Protocollo</th>
				<th>Ripetizione</th>
				<th>BMI &gt; 25</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="radio" name="prog_aerobic" value="1" <?php if($prog_choosen==1) echo "checked" ?>>&nbsp;1</td>
				<td><em>Very Light</em></td>
				<td><span class="v02 value">&lt; <?= ($cicloERG->vo2max * 0.37) ?></span> (37)</td>
				<td><span class="hr value">&lt; <?= (int)($cicloERG->hr * 0.37) ?></span> (57)</td>
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
				<td><input type="radio" name="prog_aerobic" value="2" <?php if($prog_choosen==2) echo "checked" ?>>&nbsp;2</td>
				<td><em>Light</em></td>
				<td><span class="v02 value"><?= ($cicloERG->vo2max * 0.37) ?> - <?= ($cicloERG->vo2max * 0.45) ?></span> (37-45)</td>
				<td><span class="hr value"><?= (int)($cicloERG->hr * 0.57) ?> - <?= (int)($cicloERG->hr * 0.63) ?></span> (57-63)</td>
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
				<td><input type="radio" name="prog_aerobic" value="3" <?php if($prog_choosen==3) echo "checked" ?>>&nbsp;3</td>
				<td><em>Moderate</em></td>
				<td><span class="v02 value"><?= ($cicloERG->vo2max * 0.46) ?> - <?= ($cicloERG->vo2max * 0.63) ?></span> (46-63)</td>
				<td><span class="hr value"><?= (int)($cicloERG->hr * 0.64) ?> - <?= (int)($cicloERG->hr * 0.76) ?></span> (64-76)</td>
				<td>12 e 13</td>
				<td>TODO</td>
				<td>3 min di riscaldamento</td>
				<td>15 min esercizio</td>
				<td>3 min di pedalata libera</td>
				<td>10 min esercizio</td>
				<td>3 min di defaticamento</td>
				<td>4/settimana</td>
				<td>2/giorno</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_aerobic" value="4" <?php if($prog_choosen==4) echo "checked" ?>>&nbsp;4</td>
				<td><em>Vigorous</em></td>
				<td><?= ($cicloERG->vo2max * 0.46) ?> - <?= ($cicloERG->vo2max * 0.63) ?> (46-63)</td>
				<td><span class="hr value"><?= (int)($cicloERG->hr * 0.64) ?> - <?= (int)($cicloERG->hr * 0.76) ?></span> (64-76)</td>
				<td>12 e 13</td>
				<td>TODO</td>
				<td>3 min di riscaldamento</td>
				<td>15 min esercizio</td>
				<td>3 min di pedalata libera</td>
				<td>15 min esercizio</td>
				<td>3 min di defaticamento</td>
				<td>5/settimana</td>
				<td>2/giorno</td>
			</tr>
		<tbody>
	</table>
	
	<h2>Esercizio di Rinforzo</h2>
	<p>Testo descrittivo per indicare di cosa si tratta.</p>
	<!-- TODO: Simon completa il testo qui sopra. -->
	
	<table class="rinforzo" border="1" cellspacing="0" cellpadding="5">
		<thead>
			<tr>
				<th>Programma</th>
				<th>Intensit&agrave;</th>
				<th>1RM (x%)</th>
				<th colspan="5">Protocollo</th>
				<th>Ripetizione</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="radio" name="prog_rinforzo" value="1"  <?php if($prog_choosen==1) echo "checked" ?>>&nbsp;1</td>
				<td><em>Very Light</em></td>
				<td>&lt; <?= (int)($sft->max * 0.30) ?> (30)</td>
				<td>3 min di riscaldamento</td>
				<td>10 ripetizioni</td>
				<td>3 min di riposo</td>
				<td>10 ripetizioni</td>
				<td>3 min di defaticamento</td>
				<td>3/settimana</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_rinforzo" value="2" <?php if($prog_choosen==2) echo "checked" ?>>&nbsp;2</td>
				<td><em>Light</em></td>
				<td><?= (int)($sft->max * 0.40) ?> - <?= (int)($sft->max * 0.49) ?> (30-49)</td>
				<td>3 min di riscaldamento</td>
				<td>10 ripetizioni</td>
				<td>3 min di riposo</td>
				<td>10 ripetizioni</td>
				<td>3 min di defaticamento</td>
				<td>3/settimana</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_rinforzo" value="3" <?php if($prog_choosen==3) echo "checked" ?>>&nbsp;3</td>
				<td><em>Moderate</em></td>
				<td><?= (int)($sft->max * 0.50) ?> - <?= (int)($sft->max * 0.59) ?> (50-59)</td>
				<td>3 min di riscaldamento</td>
				<td>10 ripetizioni</td>
				<td>3 min di riposo</td>
				<td>10 ripetizioni</td>
				<td>3 min di defaticamento</td>
				<td>4/settimana</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_rinforzo" value="4" <?php if($prog_choosen==4) echo "checked" ?>>&nbsp;4</td>
				<td><em>Vigorous</em></td>
				<td><?= (int)($sft->max * 0.60) ?> - <?= (int)($sft->max * 0.69) ?> (60-69)</td>
				<td>3 min di riscaldamento</td>
				<td>10 ripetizioni</td>
				<td>3 min di riposo</td>
				<td>10 ripetizioni</td>
				<td>3 min di defaticamento</td>
				<td>5/settimana</td>
			</tr>
		<tbody>
	</table>
	
	<h2>Addominali</h2>
	<p>Testo descrittivo per indicare di cosa si tratta.</p>
	<!-- TODO: Simon completa il testo qui sopra. -->
	
	<table class="addominali" border="1" cellspacing="0" cellpadding="5">
		<thead>
			<tr>
				<th>Programma</th>
				<th>Difficolt&agrave;</th>
				<th>Esercizio</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="radio" name="prog_addominali" value="1" <?php if($prog_choosen==1) echo "checked" ?>>&nbsp;1</td>
				<td>1</td>
				<td>Posizione di partenza: supino con le gambe piegate e le braccia lungo i fianchi. Solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e buttando fuori l'aria in questa fase. Controlla la discesa. Ripeti 6-8 volte.</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_addominali" value="2" <?php if($prog_choosen==2) echo "checked" ?>>&nbsp;2</td>
				<td>2</td>
				<td>Posizione di partenza: supino con le gambe piegate e le braccia incrociate al petto. solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e buttando fuori l''aria in questa fase. Controlla la discesa. Ripeti 6-8 volte.</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_addominali" value="3" <?php if($prog_choosen==3) echo "checked" ?>>&nbsp;3</td>
				<td>3</td>
				<td>Posizione di partenza: supino con le gambe piegate e le mani dietro la nuca. Solleva le spalle facendo attenzione a contrarre bene i muscoli addominali e a non &quot;tirare su&quot; la testa con le mani (i gomiti rimangono aperti). Butta fuori l'aria in questa fase. Controlla la discesa. Ripeti 6-8 volte.</td>
			</tr>
			<tr>
				<td><input type="radio" name="prog_addominali" value="4" <?php if($prog_choosen==4) echo "checked" ?>>&nbsp;4</td>
				<td>4</td>
				<td>Posizione di partenza: seduto sulla sedia, mani appoggiate sulle cosce. Lentamente fletti la testa, avvicinando il mento allo sterno. Controlla la discesa. Butta fuori l''aria in questa fase. Ritorna lentamente alla posizione di partenza. Ripeti 6-8 volte.</td>
			</tr>
		</tbody>
	</table>
	
	<p class="form-actions">
		<input type="submit" name="submit" value="Salva Programma" id="submit">
	</p>
	
	<?php echo form_close() // #save-prog ?>
</div>