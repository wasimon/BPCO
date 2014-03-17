<h1>Variabili disponibili:</h1>
<p>
	Le variabili disponibili sono:<br>
	<small><em>(Per generare questa lista ho usato un truchetto: vedi riga 65 di <code>prog.php</code> )</em></small>
</p>
<pre>
<?= print_r($le_variabili, true); ?>
-----------------------------

Esami Caricati:
$esami = <?= print_r(array_keys((array)$esami), true); ?>



Esempio accesso ad un valore di un esame:
(vedi righe 18,23,28 di views/prog/PDF/999_ultima_pagina.php )

Tipo: CicloERG
Campo: vo2predetto
Valore: <?= $esami->cicloerg->vo2predetto ?>

---
Tipo: MMSE
Campo: mmsetot
Valore: <?= $esami->mmse->mmsetot ?>

---
Tipo: Anagrafica
Campo: Nome
Valore: <?= $paziente->nome ?>
</pre>