<html><head>
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
div#container{width: 800px;margin: 0 auto;text-align: left;}
div#barra{width: 800px;margin: 0 auto;text-align: left;}



/*stili specifici per il layout*/
div#split1{

float: left;
width: 300px;
padding:0px 0px 0px 0px;

}

div#split2{
float: right;
width: 500px;
padding:0px 0px 0px 0px;
}

table.esame{
    width: 500px;
    border: solid;
}
.esami {
    display:none;
    width: 500px;
    }
.dati {
    background-color: red;
    border: solid;
    width: 500px;
    }
tr:nth-child(odd) {
    background-color: #e3e3e3;
}
#aggiungi{
    border-style: solid;
    border-color: black;
    background-color: gray;
    width: 500px;
    text-align: center;
    
}
#titolo{
    background-color: orange;
}
#t_antropometria,#t_mrc,#t_tinetti,#t_mmse,#t_sf36,#t_sft,#t_sgrq,#t_cicloerg{
    display:block;
    cursor:pointer;
    background-color: red;
    }
#fotter {
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

A:link , A:visited { color: #000000; text-decoration: none; }
A:hover { text-decoration: underline; }

<? if ($esami_count['t_antropometria']>0):?>#t_antropometria{ background-color: green;}<?endif;?>
<? if ($esami_count['t_mrc']>0):?>#t_mrc{ background-color: green;}<?endif;?>
<? if ($esami_count['t_mmse']>0):?>#t_mmse{ background-color: green;}<?endif;?>
<? if ($esami_count['t_tinetti']>0):?>#t_tinetti{ background-color: green;}<?endif;?>
<? if ($esami_count['t_sf36']>0):?>#t_sf36{ background-color: green;}<?endif;?>
<? if ($esami_count['t_sft']>0):?>#t_sft{ background-color: green;}<?endif;?>
<? if ($esami_count['t_sgrq']>0):?>#t_sgrq{ background-color: green;}<?endif;?>
<? if ($esami_count['t_cicloerg']>0):?>#t_cicloerg{ background-color: green;}<?endif;?>
</style>
</head><body>
<div id="container" class="clearfix">
<!-- riga indice -->
<div id="barra">
<table width="100%" border="0" style="border: none; border-spacing:0;">
<tr>
<td class="barra" id="t_antropometria">ANTROPOMETRIA</td>
<td class="barra" id="t_mrc">MRC</td>
<td class="barra" id="t_sf36">SHORT FORM 36</td>
<td class="barra" id="t_sgrq">SAINT GEORGE</td>
<td class="barra" id="t_cicloerg">TEST DA SFORZO</td>
<td class="barra" id="t_sft">SENIOR FITNESS TEST</td>
<td class="barra" id="t_tinetti">TINETTI</td>
<td class="barra" id="t_mmse">MINI MENTAL STATE EXAMINATION</td>
</tr></table>
</div>
<!-- PRIMA COLONNA -->
<div id="split1" class="clearfix">

Nome: <?=$anagrafica->nome?><br />
Cognome: <?=$anagrafica->cognome?><br />
antropometria
</div>
<div id="split2">


<!-- DIV antropometria -->
<div class="esami" id="esami_antropometria">
<? if ($t_antropometria>0):?>
<table class="esame">
<tr><td colspan="2" id="titolo">ANTROPOMETRIA</td></tr><tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
<? foreach($t_antropometria as $ant):?>
			<tr>
                <td><?= $ant->data?></td>
                <td><?= $ant->BMI?></td>
                 <td><a href="<?=base_url()?>index.php/visualizza/antropometria/<?= $ant->idantro?>">Visualizza</a></td>
			</tr>
		<? endforeach?>
</table>
<? else:?>
<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
<? endif;?>
<table id="aggiungi">

  <tr><td id="aggiungi" ><a href="<?=base_url()?>esami/antropometria/<?=$codicefiscale?>">AGGIUNGI UN ESAME</a> </td></tr>
</table><br /><br />
</div>

<!-- DIV MRC -->
<div class="esami" id="esami_mrc">
<? if ($t_mrc>0):?>
<table class="esame">
<tr><td colspan="2" id="titolo">MRC</td></tr><tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
<? foreach($t_mrc as $mrc):?>

			<tr>
                <td><?= $mrc->data?></td>
                <td><?= $mrc->mrc?></td>
                 <td><a href='<?=base_url()?>index.php/visualizza/MRC/<?=$mrc->idmrc?>'>Visualizza</a></td>
			</tr>
		<? endforeach?>
</table><br /><br />
<? else:?>
<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
<? endif;?>
<table id="aggiungi">
  <tr><td id="aggiungi" ><a href="<?=base_url();?>esami/mrc/<?=$codicefiscale?>">AGGIUNGI UN ESAME</a> </td></tr>
</table><br /><br />
</div>
<!-- DIV SF36 -->
<div class="esami" id="esami_sf36">
<? if ($t_sf36>0):?>
<table class="esame">
<tr><td colspan="2" id="titolo">Short form 36</td></tr>
<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
<? foreach($t_sf36 as $sf):?>
			<tr>
                <td><?= $sf->data?></td>
                <td><?= $sf->sf1?></td>
                <td><a href="<?=base_url();?>index.php/visualizza/sf36/<?= $sf->idsf36?>">Visualizza</a></td>
			</tr>
		<? endforeach?>
</table>
<? else:?>
<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
<? endif;?>
<table id="aggiungi">
  <tr><td id="aggiungi" ><a href='<?=base_url()?>esami/sf36/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
</table><br /><br />
</div>

<!-- DIV SAINT GEORGE -->
<div class="esami" id="esami_sgrq">
<? if ($t_sgrq>0):?>
<table class="esame"><tr>
<tr><td colspan="2" id="titolo">Saint George</td></tr>
<th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
<? foreach($t_sgrq as $sg):?>
			<tr>
                <td><?= $sg->data?></td>
                <td><?= $sg->sgrq1?></td>
                <td><a href="<?=base_url();?>index.php/visualizza/SGRQ/<?= $sg->idsgrq?>">Visualizza</a></td>
			</tr>
		<? endforeach?>
</table>
<? else:?>
<table class="esame">
<tr><td colspan="2" id="titolo">Saint George</td></tr>
<tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
<? endif;?>
<table id="aggiungi">
  <tr><td id="aggiungi" ><a href='<?=base_url()?>esami/sgrq/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
</table><br /><br />
</div>

<!-- DIV TEST DA SFORZO -->
<div class="esami" id="esami_cicloerg">
<? if ($t_cicloerg>0):?>
<table class="esame">
<tr><td colspan="2" id="titolo">Test da sforzo</td></tr>
<tr><th>Data esame</th><th>Totale</th></tr>
<? foreach($t_cicloerg as $ciclo):?>
			<tr>
                <td><?= $ciclo->data?></td>
                <td><?= $ciclo->fcbase ?></td>
                <td><a href="<?=base_url();?>index.php/visualizza/cicloerg/<?= $ciclo->idciclo?>">Visualizza</a></td>
			</tr>
		<? endforeach?>
</table>
<? else:?>
<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
<? endif;?>
<table id="aggiungi">
  <tr><td id="aggiungi" ><a href='<?=base_url()?>esami/cicloerg/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
</table><br /><br />
</div>

<!-- DIV SENIOR FITNESS TEST -->
<div class="esami" id="esami_sft">
<? if ($t_sft>0):?>
<table class="esame">
<tr><td colspan="2" id="titolo">Senior fitness test</td></tr>
<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
<? foreach($t_sft as $st):?>
			<tr>
                <td><?= $st->data?></td>
                <td><?= $st->mwt?></td>
                <td><a href="<?=base_url();?>index.php/visualizza/SFT/<?= $st->idsft?>">Visualizza</a></td>
			</tr>
		<? endforeach?>
</table>
<? else:?>
<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
<? endif;?>
<table id="aggiungi">
  <tr><td id="aggiungi" ><a href='<?=base_url()?>esami/sft/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
</table><br /><br />
</div>

<!-- DIV TINETTI -->
<div class="esami" id="esami_tinetti">
<? if ($t_tinetti>0):?>
<table class="esame">
<tr><td colspan="2" id="titolo">Tinetti</td></tr>
<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
<? foreach($t_tinetti as $tin):?>
			<tr>
                <td><?= $tin->data?></td>
                <td><?= $tin->tinettitotale?></td>
                <td><a href="<?=base_url();?>index.php/visualizza/tinetti/<?= $tin->idtinetti?>">Visualizza</a></td>
			</tr>
		<? endforeach?>
</table>
<? else:?>
<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
<? endif;?>
<table id="aggiungi">
  <tr><td id="aggiungi" ><a href='<?=base_url()?>esami/tinetti/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
</table><br /><br />
</div>


<!-- DIV MINIMENTAL -->
<div class="esami" id="esami_mmse">
<? if ($t_mmse>0):?>
<table class="esame">
<tr><td colspan="2" id="titolo">Mini Mental State</td></tr>
<tr><th>Data esame</th><th>Totale</th><th>Visualizza</th></tr>
<? foreach($t_mmse as $mmse):?>
			<tr>
                <td><?= $mmse->data?></td>
                <td><?= $mmse->mmsetot?></td>
                <td><a href="<?=base_url();?>index.php/visualizza/MMSE/<?= $mmse->idmmse?>">Visualizza</a></td>
			</tr>
		<? endforeach?>
</table>
<? else:?>
<table class="esame"><tr><th>VALUTAZIONE NON EFFETTUATA</th></tr></table>
<? endif;?>
<table id="aggiungi">
  <tr><td id="aggiungi" ><a href='<?=base_url()?>esami/mmse/<?=$codicefiscale?>'>AGGIUNGI UN ESAME</a> </td></tr>
</table><br /><br />
</div>
<!--   FINE DIV DESTRO-->
</div>
<br /><br /><br />
</div>
<div id="fotter">
<a href="<?=site_url();?>">INDIETRO</a>&nbsp;|&nbsp;
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>
</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script>
    $("#t_antropometria").live('click', function(){
        $('#esami_antropometria').slideToggle();
    });
    $("#t_tinetti").live('click', function(){
        $('#esami_tinetti').slideToggle();
    });
    $("#t_mmse").live('click', function(){
        $('#esami_mmse').slideToggle();
    });
    $("#t_sf36").live('click', function(){
        $('#esami_sf36').slideToggle();
    });
    $("#t_mrc").live('click', function(){
        $('#esami_mrc').slideToggle();
    });
    $("#t_sgrq").live('click', function(){
        $('#esami_sgrq').slideToggle();
    });
    $("#t_cicloerg").live('click', function(){
        $('#esami_cicloerg').slideToggle();
    });
    $("#t_sft").live('click', function(){
        $('#esami_sft').slideToggle();
    });
</script>