<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<script src="<?=base_url('js/jQueryUI/ui/minified/jquery.ui.core.min.js')?>"></script>
<script src="<?=base_url('js/jQueryUI/ui/minified/jquery.ui.datepicker.min.js')?>"></script>
<link href="<?=base_url('js/jQueryUI/themes/ui-lightness/jquery.ui.all.css')?>" rel="stylesheet" type="text/css" />
<!-- </a><link rel="stylesheet" href="<?=site_url()."js/jqtransform.css";?>" type="text/css" media="all" />
<script type="text/javascript" src="<?=site_url()."js/jquery.jqtransform.js";?>"></script>
<script language="javascript">
$(function(){
$('form').jqTransform({imgPath:'<?=site_url().'js/img/';?>'});
});
</script>
-->
<style type="text/css">
td{
	text-align: left;
	width: 500px;
}
</style>
<script type="text/javascript">
function verifica_fumo(){    
	if($('#fumo_tipo').val() == 'si')
	{
		$('.fumo_ex').slideUp();
		$('.fumo_si').slideDown();
	}
	else if($('#fumo_tipo').val() == 'ex')
	{
		$('.fumo_ex').slideDown();
		$('.fumo_si').slideDown();
	}
	else
	{
		$('.fumo_ex').slideUp();
		$('.fumo_si').slideUp();
	}
};

$(document).ready(function(){

	$("#addPazienteForm").validate();  
	$("#datanascita").datepicker( { 
		dateFormat: 'yy-mm-dd',
		changeYear: true,
		changeMonth: true,
		maxDate: '+1d',
		yearRange: '1921:2000'
	});
});

</script>
	
</head>
<body>
	<table align="center" width="100%">
		<tr>
			<td width="33%" align="center" bgcolor="yellow"> Dati anagrafici </td>
			<td width="33%" align="center"> Dati antropometrici </td>
			<td width="33%" align="center"> Questionario MRC</td>
		</tr>
	</table>
	<div align="center">
		<h1>Aggiungi un Paziente</h1>
		<?= form_open('pz/aggiungi/'.$id_medico, array('id' => 'addPazienteForm'));?>

		<?php if (!empty($message)): ?>
			<div id="messages"><?= $message ?></div>
		<?php endif ?>
		<h2>Dati anagrafici</h2>
		<fieldset>
			<legend>Dati anagrafici</legend>
   
			<table width="100%">
				<tr>
					<td id="label">Nome:</td>
					<td class="dati"><input type="text"  name="nome" id="nome"  class="required" minlength="2"  /></td>
				</tr>
				<tr>
					<td id="label">Cognome:</td>
					<td class="dati"><input type="text"  name="cognome" id="cognome" class="required" minlength="2" /></td>
				</tr>
				<tr>
					<td id="label">Sesso:</td>
					<td class="dati">
						<select name="sesso" id="sesso">
							<option value="M">M</option>
							<option value="F">F</option>
						</select>
					</td>
				</tr>
				<tr>
					<td id="label">Data di nascita:</td>
					<td class="dati"><input type="text" placeholder="AAAA-MM-GG"  name="datanascita"  class="required date" id="datanascita" /></td>
				</tr>
				<tr>
					<td id="label">Luogo di nascita</td>
					<td class="dati"><input type="text"  name="luogonascita" class="required" minlength="2" id="luogonascita" /></td>
				</tr>
				<tr>
					<td id="label">Codice fiscale:</td>
					<td class="dati"><input type="text"  name="codfis"  class="required" minlength="16" maxlength="16" id="codfis" /></td>
				</tr>
				<tr>
					<td id="label">Stato civile:</td>
					<td class="dati"><input type="text"  name="statocivile"  class="required"id="statocivile" /></td>
				</tr>
				<tr>
					<td id="label">Scolarit&aacute;:</td>
					<td class="dati"><input type="text"  name="scolarita"  class="required number" id="scolarita" /></td>
				</tr>
				<tr>
					<td id="label">Numero di telefono:</td>
					<td class="dati"><input type="text"  name="tel" class="required number" minlength="10" id="tel" /></td>
				</tr>
				<tr>
					<td id="label">Numero di cellulare:</td>
					<td class="dati"><input type="text"  name="cel"  class="required number" minlength="10" id="cel" /></td>
				</tr>
				<tr>
					<td id="label">Lavoro svolto/attuale professione</td>
					<td class="dati"><input type="text"  name="lavoro"  class="required" minlength="2" id="lavoro" /></td>
				</tr>
			</table>
		</fieldset>

		<fieldset>
			<legend>Indirizzo</legend>


			<table width="100%">
				<tr>
					<td id="label">Via:</td>
					<td class="dati"><input  name="indirizzovia" type="text" class="required" minlength="2" id="indirizzovia"   /></td>
				</tr>
				<tr>
					<td id="label">Citt&aacute;:</td>
					<td class="dati"><input  name="indirizzocitta" type="text" class="required" minlength="2" id="indirizzocitta"  /></td>
				</tr><tr>
					<td id="label">CAP:</td>
					<td class="dati"><input  name="indirizzocap" type="text" class="required number" minlength="5" id="indirizzocap"   /></td>
				</tr><tr>
					<td id="label">Provincia:</td>
					<td class="dati"><input  name="indirizzoprovincia" type="text" class="required" minlength="2" id="indirizzoprovincia" /></td>
				</tr>
			</table>
		</fieldset>

		<fieldset>
			<legend>Dati medici:</legend>


			<table width="100%">
				<tr>
					<td id="label">Persona di riferimento:</td>
					<td class="dati"><input  name="personariferimento" type="text" class="required " minlength="2" id="personariferimento"   /></td>
				</tr>
				<tr>
					<td id="label">Numero di telefono:</td>
					<td class="dati"><input  name="telriferimento" type="text" class="required number" minlength="10" id="telriferimento"   /></td>
				</tr><tr>
					<td id="label">Medico di base:</td>
					<td class="dati"><input  name="medicofamiglia" type="text"  id="medicofamiglia"  /></td>
				</tr><tr>
					<td id="label">Centro pneumologico:</td>
					<td class="dati"><input  name="centropneumo" type="text" minlength="10" id="centropneumo"  /> </td>
				</tr>
				<tr>
					<td id="label">Specialista pneumologico:</td>
					<td class="dati"><input  name="specpneumo" type="text"  id="specpneumo"   /></td>
				</tr>
				<tr>
					<td id="label">Numero di telefono:</td>
					<td class="dati"><input  name="telpneumologo" type="text" class=" number" minlength="10" id="telpneumologo" /></td>
				</tr>
				<tr>
					<td id="label">Centro motorio:</td>
					<td class="dati"><input  name="centromotorio" type="text" id="centromotorio"  /></td>
				</tr>
				<tr>
					<td id="label">Specialista motorio:</td>
					<td class="dati"><input  name="specmotorio" type="text" id="specmotorio" /></td>
				</tr>
				<tr>
					<td id="label">Numero di telefono:</td>
					<td class="dati"><input  name="telmotorio" type="text" class=" number" minlength="10" id="telmotorio"  /></td>
				</tr>

			</table>
		</fieldset>

		<fieldset>
			<legend>Abitudine al fumo</legend>
			<table width="100%">
				<tr> 

					<tr>
						<td id="label">Fumatore:</td>
						<td class="dati"><select onchange="verifica_fumo()" name="fumo_tipo" id="fumo_tipo">
							<option value="si">si</option>
							<option selected="selected" value="no">no</option>
							<option value="ex">ex</option>
						</select></td>
					</tr>
  
					<tr class="fumo_si">
						<td id="label">Et&aacute; inizio:</td>
						<td class="dati"><input type="text"  name="fumo_eta_inizio"  id="fumo_eta_inizio" class=" number"/></td>
					</tr>
					<tr class="fumo_ex">
						<td id="label">Et&aacute; fine:</td>
						<td class="dati"><input type="text"  name="fumo_eta_fine"  class=" number" id="fumo_eta_fine" /></td>
					</tr>
					<tr class="fumo_si">
						<td id="label" >Sigarette al giorno:</td>
						<td class="dati"><input type="text"  name="sigarette_di"  class=" number" id="sigarette_di" /></td>
					</tr>
					<tr  class="fumo_si">
						<td id="label">Pacchetti all'anno:</td>
						<td class="dati"><input type="text"  name="pack_anno"  class=" number" id="pack_anno" /></td>
					</tr> 
					<tr>
						<td id="label">Commorbidit&aacute;:</td>
						<td class="dati"><textarea name="commorbidita" id="commorbidita" cols="20" rows="5"></textarea></td>
					</tr>

				</table>

			</fieldset>

			<p>  <input class="submit" name="submit" type="submit" value="Aggiungi paziente"/>  </p>
			<?php
			echo form_hidden('dataoggi', date('Ymd'));
			echo form_hidden('idmedico', $id_medico);
			?>
		</form>
		<br /><br />
	</div>

	<!-- <div id="fotter"> TODO: Fotter o Footer?? -->
	<div id="footer">
		<a href="<?=site_url().'pz/visualizza_lista/'.$this->session->userdata('idmedico');?>">LISTA PAZIENTI</a>&nbsp;|&nbsp;
		<? $logged = $this->session->userdata('is_logged_in'); ?>
		<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
	</div>
</body>
</html>
