<style type="text/css" media="all">
th{font-weight:bold;}
</style>

<h1>Dati personali</h1>


<table border="0" cellspacing="5" cellpadding="5">
	<tr><th>Nome</th><td><?= $paziente->nome ?></td></tr>
	<tr><th>Cognome</th><td><?= $paziente->cognome ?></td></tr>
	<tr><th>Data di nascita</th><td><?= $paziente->datanascita ?></td></tr>
	<tr><th>Indirizzo</th><td><?= $paziente->indirizzovia ?></td></tr>
	<tr><th>Citt&agrave;</th><td><?= $paziente->indirizzocitta ?></td></tr>
	<tr><th>CAP</th><td><?= $paziente->indirizzocap ?></td></tr>
	<tr><th>Provincia</th><td><?= $paziente->indirizzoprovincia ?></td></tr>
	<tr><th>Numeri di telefono</th><td><?= $paziente->tel ?>&nbsp;&ndash;&nbsp;<?= $paziente->cel ?></td></tr>
	<tr><th>Persona di riferimento</th><td><?= $paziente->personariferimento ?></td></tr>
	<tr><th>Numero di telefono</th><td><?= $paziente->telriferimento ?></td></tr>
	<tr><th>Medico curante</th><td><?= $paziente->medicofamiglia ?></td></tr>
	<tr><th>Centro pneumologico di riferimento</th><td><?= $paziente->centropneumo ?></td></tr>
	<tr><th>Specialista di riferimento</th><td><?= $paziente->specpneumo ?></td></tr>
	<tr><th>Numero di telefono</th><td><?= $paziente->telpneumologo ?></td></tr>
	<tr><th>Centro di attivit&agrave; di riferimento</th><td><?= $paziente->centromotorio ?></td></tr>
	<tr><th>Specialista di riferimento</th><td><?= $paziente->specmotorio ?></td></tr>
	<tr><th>Numero di telefono</th><td><?= $paziente->telmotorio ?></td></tr>
	
</table>