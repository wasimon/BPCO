<style type="text/css">
body{margin: 0;padding:0;}
body{font-family: arial,sans-serif;font-size: 76%;text-align: center}
#fotter {
	background: #e3e3e3;
	border-top: 1px solid white;
	position: fixed;
	bottom: 0;
	text-align: center;
	width: 100%;
	padding: .7em .7em .7em 2em;
}
</style>

<? if(isset($eliminato)):?>
<script type="text/javascript">
function doRedirect() { //funzione con il link alla pagina che si desidera raggiungere
	location.href = "<?=site_url();?>";
}
window.setTimeout("doRedirect()", 4000);
</script>


<br /><br />

<center>
	<h2>Il paziente &egrave; stato eliminato.</h2>
	<br />
	<br>
	<b>Stai per essere reindirizzato ad altra pagina.
		<br>
		<br>
		Se non sei reindirizzato entro 4 secondi</b>
		<br>
		<a href="<?=site_url();?>">Torna alla lista</a>
	</center>





	<?else: ?>
	<h1>ATTENZIONE <br /> IL PAZIENTE VERRA' CANCELLATO:</h1>
	<?
	if($pazienti):
		?>
		<form action="<?=base_url()?>pz/delete/<?=$pazienti->codfis?>">
			CONFERMA  --&gt; <input type="checkbox" id="checkElimina" >
			<input type="submit" id="Elimina" value="Elimina" />
		</form>
		<?
	else:
		echo 'Errore: il paziente &egrave; gi&aacute; stato rimosso';
	endif;
	?>
	<?endif;?>
	<div id="fotter">
		<a href="<?=site_url();?>">LISTA PAZIENTI</a>&nbsp;|&nbsp;
		<? $logged = $this->session->userdata('is_logged_in'); ?>
		<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
	</div>

	<script type="text/javascript">
	var regolamento = document.getElementById("checkElimina");
	regolamento.checked = "";
	var salva = document.getElementById("Elimina");
	salva.disabled = "disabled";
    
	regolamento.onchange = function(){
		if( this.checked ){
			salva.disabled = "";
		} else {
			salva.disabled = "disabled";
		}
	};
	</script>