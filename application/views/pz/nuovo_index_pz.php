<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
	<script src="/js/Chart.js"></script>
	<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
	<style type="text/css">

		.clearfix:after {
			content: ".";
			display: block;
			clear: both;
			visibility: hidden;
			line-height: 0;
			height: 0;
		}
 
		.clearfix {
			display: inline-block;
		}

		/*stili per il layout fisso*/

		body{margin: 0;padding:0;}
		body{font-family: arial,sans-serif;font-size: 76%;text-align: center}
		div#container{width: 1010px;margin: 0 auto;text-align: left;padding-bottom:50px;}
		div#barra{width: 1020px;margin: 0 auto;text-align: left;}



		/*stili specifici per il layout*/
		div#split1,
		div#split2 {
			float: left;
			padding:0px;
			margin:0px;
		}
		div#split1{
			width: 450px;
		}
		div#split2{
			width: 545px;
		}

		div#split1 > table,
		div#split2 > table {
			width: 97%;
			margin: 0 auto;
		}

		.esami {
			margin: 0;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid gray;
			border-radius: 7px;
		}
		.esami .esame-container {
			display: none;
		}
		.esami h2.nome-esame {
			display: block;
			text-align: center;
			margin: 0px;
			padding: 5px;
			background-color:orange;
		}
		.esami table.esame {
			width: 100%;
		}
		.esami table.esame td {
			text-align: center;
		}
		.dati {
			background-color: red;
			border: solid;
		}
		tr:nth-child(odd) {
			background-color: #e3e3e3;
		}
		.aggiungi-esame{
			border: solid 1 px black;
			background-color: gray;
			text-align: center;
			width: 90%;
			margin: 10px auto;
		}

		.barra{
			display:block;
			cursor:pointer;
			background-color: red;
		}
		#footer {
			background: #e3e3e3;
			border-top: 1px solid white;
			position: fixed;
			bottom: 0;
			text-align: center;
			width: 100%;
			padding: .7em .7em .7em 2em;
		}
		td.barra:hover { 
			text-decoration: underline;
       
		}

		.anagrafica-pz h3 {
			margin-top: 0px;
			margin-bottom: 7px;
			padding: 0;
		}
		.anagrafica-pz ul {
			margin-top: 0px;
			margin-bottom: 5px;
			padding-left: 20px;
		}

		.programmi-allenamento {
			background-color: red;
		}
		.programmi-allenamento.popolato {
			background-color: green;
		}

		a:link , a:visited { color: #000000; text-decoration: none; }
		a:hover { text-decoration: underline; }


		<? if ($esami_count['t_antropometria']>0) echo ".barra.antropometria,"?>
		<? if ($esami_count['t_mrc']>0) echo ".barra.mrc,"?>
		<? if ($esami_count['t_mmse']>0) echo ".barra.mmse,"?>
		<? if ($esami_count['t_cicloerg']>0) echo ".barra.cicloerg,"?>
		<? if ($esami_count['t_sf36']>0) echo ".barra.sf36,"?>
		<? if ($esami_count['t_tinetti']>0) echo ".barra.tinetti,"?>
		<? if ($esami_count['t_sft']>0) echo ".barra.sft,"?>
		<? if ($esami_count['t_sgrq']>0) echo ".barra.sgrq,"?>
			#FAKE-ID {
				background-color: green;
			}
	</style>
	<script>
	    $("table .barra").live('click', function(){
				var id_esame = $(this).attr('data-esame');
				var id_element = "#"+id_esame+" .esame-container";
				$(id_element).slideToggle('200', function() {
					if($(id_element).is(":visible")) {
						$('html, body').animate({
							scrollTop: $("#"+id_esame).offset().top -10
						}, 1500);
					}
				});
			
	    });

	    $("h2.nome-esame").live('click', function(){
	        $(this).siblings('.esame-container').slideToggle();
	    });
	</script>

	<script>

		var lineChartData = {
			labels : [
			<? foreach($t_antropometria as $ant):?>

		
			"<?=strftime( ' %d - %m - %g ',  strtotime($ant->data));?>",
			<? endforeach?>],
		
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
			
				
			
				
				data : [<? foreach($t_antropometria as $ant):?><?= $ant->BMI?>,<? endforeach?>]
			}
			]
		
		}
		$().ready(function() {
			var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
		})

	</script>
</head>
<body>

	<div id="container" class="clearfix">
	<!-- riga indice -->
	<div id="barra">
		<table width="100%" border="0" cellspacing="0" cellpadding="3" style="border: none; border-spacing:0;">
			<tr>
				<td class="barra antropometria" data-esame="esami_antropometria">ANTROPOMETRIA</td>
				<td class="barra mrc" data-esame="esami_mrc">MRC</td>
				<td class="barra sf36" data-esame="esami_sf36">SHORT FORM 36</td>
				<td class="barra sgrq" data-esame="esami_sgrq">SAINT GEORGE</td>
				<td class="barra cicloerg" data-esame="esami_cicloerg">TEST DA SFORZO</td>
				<td class="barra sft" data-esame="esami_sft">SENIOR FITNESS TEST</td>
				<td class="barra tinetti" data-esame="esami_tinetti">TINETTI</td>
				<td class="barra mmse" data-esame="esami_mmse">MINI MENTAL STATE EXAMINATION</td>
			</tr>
		</table>
	</div>


	<BR>
	<!-- PRIMA COLONNA -->
	<div id="split1" class="clearfix">
		<table border="1" style="solid" cellspacing="0" cellpadding="4">
	
			<?php if (!empty($message)): ?>
			<tr><td>
				<div id="messaggi">
					<?= $message ?>
				</div>
				</td></tr>
			<?php endif ?>
	
			<tr class="anagrafica-pz">
				<td>
					<h3>Anagrafica Paziente</h3>
					<ul>
						<li><strong>Nome:</strong> <?=$anagrafica->nome?></li>
						<li><strong>Cognome:</strong> <?=$anagrafica->cognome?></li>
						<li><strong>Data di nascita:</strong> <?=$anagrafica->datanascita?></li>
						<li><strong>Codice fiscale:</strong> <?=$anagrafica->codfis?></li>
					</ul>
				</td>
			</tr>

		<?php // Funzione definita in application/helpers/esami_helper.php ?>
		<? if ( is_ready_for_generate_prog($esami_count) ): ?>

		<tr class="programmi-allenamento popolato">
			<td>
				<h3>Programmi di Trattamento</h3>
				<small>Nota: Le generzione del PDF pu&ograve; richiedere qualche secondo.</small>
				<ul>
					<li><a href="<?=site_url("prog/$codicefiscale")?>">Genera Nuovo Programma</a></li>
					<li><a href="<?=site_url("prog/PDF/$codicefiscale")?>">Visualizza / Scarica programma corrente.</a></li>
					<li><a href="<?=site_url("prog/PDF/$codicefiscale/download")?>">Scarica programma corrente.</a></li>
				</ul>
				<? if (count($prog_selezionati)>0):?>
					<table border="1" cellspacing="0" cellpadding="3">
						<thead>
							<tr>
								<th>Data Generazione</th>
								<th>Aerobico</th>
								<th>Rinforzo</th>
								<th>Addominali</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($prog_selezionati as $time=>$prog): ?>
								<tr>
									<td><?=date(' d - m - Y ', $time);?></td>
									<td><?= $prog[TIPO_PROG_AEROBICO]->p?></td>
									<td><?= $prog[TIPO_PROG_RINFORZO]->p?></td>
									<td><?= $prog[TIPO_PROG_ADDOMINALI]->p?></td>
									<!-- <td><a href="<?=site_url("prog/PDF/$codicefiscale/download")?>"> genera PDF</a></td> -->
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				<? endif;?>
			</td>
		</tr>
		<?else:?>
		<tr class="programmi-allenamento">
			<td>
				Devi effettuare tutte le valutazioni per poter generare il programma!!!
			</td>
		</tr>
		<?endif;?>

		</table>


		<div style="margin:5px">
			<h2>Andamento antropometria</h2>
			<canvas id="canvas" height="300" width="450"></canvas>
		</div>

	</div>



	<div id="split2">
		<p>Clicca sul nome dell'esame per visualizzare gli esami sostenuti dal paziente corrente.</p>
		<!-- DIV antropometria -->
		<div class="esami" id="esami_antropometria">
			<h2 class="nome-esame">Antropometria</h2>
			
			<div class="esame-container">
				<? if ($t_antropometria>0):?>
				<table class="esame">
					<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
					<? foreach($t_antropometria as $ant):?>
						<tr>
							<td><?=strftime( ' %d - %m - %g ', $ant->data);?></td>
							<td><?= $ant->BMI?></td>
							<td><a href="<?=site_url()?>/visualizza/antropometria/<?= $ant->idantro?>">Visualizza</a></td>
						</tr>
					<? endforeach?>
				</table>
				<? else:?>
					<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
				<? endif;?>
			</div>
	
			<table class="aggiungi-esame">
			  <tr><td id="aggiungi" ><a href="<?=site_url()?>/esami/antropometria/<?=$codicefiscale?>">AGGIUNGI UN ESAME</a> </td></tr>
			</table>
		</div>

		<!-- DIV MRC -->
		<div class="esami" id="esami_mrc">
			<h2 class="nome-esame">MRC</h2>

			<div class="esame-container">
				<? if ($t_mrc>0):?>
				<table class="esame">
					<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
					<? foreach($t_mrc as $mrc):?>
						<tr>
							<td><?=strftime( ' %d - %m - %g ',  strtotime($mrc->data));?></td>
							<td><?= $mrc->mrc?></td>
							<td><a href='<?=site_url()?>/visualizza/MRC/<?=$mrc->idmrc?>'>Visualizza</a></td>
						</tr>
					<? endforeach?>
				</table>
				<? else:?>
					<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
				<? endif;?>
			</div>
	
			<table class="aggiungi-esame">
			  <tr><td id="aggiungi" ><a href="<?=site_url()?>/esami/mrc/<?=$codicefiscale?>">AGGIUNGI UN ESAME</a> </td></tr>
			</table>
		</div>

		<!-- DIV SF36 -->
		<div class="esami" id="esami_sf36">
			<h2 class="nome-esame">Short Form 36</h2>

			<div class="esame-container">
				<? if ($t_sf36>0):?>
				<table class="esame">
					<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
						<? foreach($t_sf36 as $sf):?>
						<tr>
							<td><?=strftime( ' %d - %m - %g ',  strtotime($sf->data));?></td>
							<td><?= $sf->sf1?></td>
							<td><a href="<?=site_url()?>/visualizza/sf36/<?= $sf->idsf36?>">Visualizza</a></td>
						</tr>
					<? endforeach?>
				</table>
				<? else:?>
					<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
				<? endif;?>
			</div>
	
			<table class="aggiungi-esame">
				<tr><td id="aggiungi" ><a href='<?=site_url()?>/esami/sf36/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
			</table>
		</div>

		<!-- DIV SAINT GEORGE -->
		<div class="esami" id="esami_sgrq">
			<h2 class="nome-esame">Saint George</h2>
			
			<div class="esame-container">
				<? if ($t_sgrq>0):?>
				<table class="esame">
					<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
					<? foreach($t_sgrq as $sg):?>
						<tr>
				  		<td><?=strftime( ' %d - %m - %g ',  strtotime($sg->data));?></td>
				      <td><?= $sg->sgrq1?></td>
				      <td><a href="<?=site_url();?>/visualizza/SGRQ/<?= $sg->idsgrq?>">Visualizza</a></td>
						</tr>
					<? endforeach?>
				</table>
				<? else:?>
				<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
				<? endif;?>
			</div>
	
			<table class="aggiungi-esame">
			  <tr><td id="aggiungi" ><a href='<?=site_url()?>/esami/sgrq/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
			</table>
		</div>

		<!-- DIV TEST DA SFORZO -->
		<div class="esami" id="esami_cicloerg">
			<h2 class="nome-esame">Test da Sforzo</h2>
	
			<div class="esame-container">
				<? if ($t_cicloerg>0):?>
					<table class="esame">
						<tr><th>Data esame</th><th>Totale</th></tr>
						<? foreach($t_cicloerg as $ciclo):?>
							<tr>
								<td><?=strftime( ' %d - %m - %g ',  strtotime($ciclo->data));?></td>
								<td><?= $ciclo->fcbase ?></td>
								<td><a href="<?=site_url();?>/visualizza/cicloerg/<?= $ciclo->idciclo?>">Visualizza</a></td>
							</tr>
						<? endforeach?>
					</table>
				<? else:?>
				<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
				<? endif;?>
			</div>
	
			<table class="aggiungi-esame">
				<tr><td id="aggiungi" ><a href='<?=site_url()?>/esami/cicloerg/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
			</table>
		</div>

		<!-- DIV SENIOR FITNESS TEST -->
		<div class="esami" id="esami_sft">
			<h2 class="nome-esame">Senior Fitness Test</h2>

			<div class="esame-container">
				<? if ($t_sft>0):?>
					<table class="esame">
						<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
						<? foreach($t_sft as $st):?>
							<tr>
								<td><?=strftime( ' %d - %m - %g ',  strtotime($st->data));?></td>
								<td><?= $st->mwt?></td>
								<td><a href="<?=site_url();?>/visualizza/SFT/<?= $st->idsft?>">Visualizza</a></td>
							</tr>
						<? endforeach?>
					</table>
				<? else:?>
					<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
				<? endif;?>
			</div>

			<table class="aggiungi-esame">
			  <tr><td id="aggiungi" ><a href='<?=site_url()?>/esami/sft/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
			</table>
		</div>

		<!-- DIV TINETTI -->
		<div class="esami" id="esami_tinetti">
			<h2 class="nome-esame">Tinetti</h2>
			<div class="esame-container">
			
				<? if ($t_tinetti>0):?>
					<table class="esame">
						<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
						<? foreach($t_tinetti as $tin):?>
							<tr>
								<td><?=strftime( ' %d - %m - %g ',  strtotime($tin->data));?></td>
								<td><?= $tin->tinettitotale?></td>
								<td><a href="<?=site_url();?>/visualizza/tinetti/<?= $tin->idtinetti?>">Visualizza</a></td>
							</tr>
						<? endforeach?>
					</table>
				<? else:?>
					<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
				<? endif;?>
			</div>
			
			<table class="aggiungi-esame">
			  <tr><td id="aggiungi" ><a href='<?=site_url()?>/esami/tinetti/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
			</table>
		</div>


		<!-- DIV MINIMENTAL -->
		<div class="esami" id="esami_mmse">
			<h2 class="nome-esame">Mini Mental State</h2>
			
			<div class="esame-container">
				<? if ($t_mmse>0):?>
					<table class="esame">
						<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
						<? foreach($t_mmse as $mmse):?>
							<tr>
								<td><?=strftime( ' %d - %m - %g ',  strtotime($mmse->data));?></td>
								<td><?= $mmse->mmsetot?></td>
								<td><a href="<?=site_url();?>/visualizza/MMSE/<?= $mmse->idmmse?>">Visualizza</a></td>
							</tr>
						<? endforeach?>
					</table>
				<? else:?>
					<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
				<? endif;?>
			</div>
			
			<table class="aggiungi-esame">
			  <tr><td id="aggiungi" ><a href='<?=site_url()?>/esami/mmse/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
			</table>

		</div>
	<!--   FINE DIV DESTRO-->
	</div>

	</div>
	<div id="footer">
		<a href="<?=site_url();?>">INDIETRO</a>&nbsp;|&nbsp;
		<? $logged = $this->session->userdata('is_logged_in'); ?>
		<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
	</div>
</body>
</html>
