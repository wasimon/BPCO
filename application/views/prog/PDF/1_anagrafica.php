<style type="text/css" media="screen">
	.colonne .titolo {
		display: inline-block;
		margin-right: 200px;
	}
</style>

<h1>Dati Paziente</h1>
<p>In questa pagina uno un po' di variabili per dimostrare come vengono usate.<br> Per una lista completa delle variabili disponibili vedere l'ultima pagina del pdf!</p>

<div class="colonne">
	<div><strong class="titolo">Nome:</strong> <span class="dato"><?= $paziente->nome ?></span></div>
	<div><strong class="titolo">Cognome:</strong> <span class="dato"><?= $paziente->cognome ?></span></div>
	<!-- La riga "data di nascita" potrebbe generare un warning per come è impostata sul database al momento quindi l'ho commentata! -->
	<!-- <div><strong class="titolo">Data di nascita:</strong> <span class="dato"><?= date('d - m - Y', $paziente->datanascita) ?></span></div> -->
	<div><strong class="titolo">Data di nascita (come salvata sul database):</strong> <span class="dato"><?= $paziente->datanascita ?></span></div>
	<hr><br>
	<div><strong class="titolo">Telefono:</strong> <span class="dato"><?= $paziente->tel ?></span></div>
</div>
<h4></h4>
<pre style="max-height:250px;overflow:hidden;">
	$paziente = <? print_r($paziente) ?>
</pre>