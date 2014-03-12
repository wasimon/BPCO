<script src="http://code.jquery.com/jquery-latest.js"></script>
<style type="text/css">
th { 
font-size: 9pt;
 
}
td { 
font-size: 10pt;
 
}


.riga_colorata { 
background-color:#999;
}

.CORPO{
	text-decoration: underline;
	
}
</style>
<?php
// visualizazione esame 
if(isset($display)):
$indietro = $tinetti->codfis;
$string = "";
for($i=1; $i<11; $i++)
{
    $name = "a{$i}";
    $value = $tinetti->$name;
    $string .= "selectA(\"{$name}\",{$value}); \n";
    $name = "e{$i}";
    $value = $tinetti->$name;
    $string .= "selectA(\"{$name}\",{$value}); \n";
    
}
?>
<script  type="text/javascript">
function selectA(arg1, arg2){  
    $('input:radio[name='+arg1+'][value='+arg2+']').attr('checked',true);
    return true; };

$().ready(function(){
    $('input:radio').attr('disabled',true);
  
    
    <?=$string?>; 
});
</script> 
<style type="text/css">
tr {
   color:gray; 
}


</style>
<?
else:
$display=0;
endif;
?>

<h1>Scala di Tinetti</h1>
<?if(isset($inserito)):?>
    <div class="risultato">
        <?if($inserito===true):?>
            <h2>Esame inserito con successo!</h2>
            
             <td><a href='<?=base_url()?>pz/crea_index/<?=$codfis?>'>Torna alla pagina del paziente</a></td>            
        <?else:?>
            <span class="error">Errore nell'inserimento esame:<?=$inserito;?></span>
        <?endif?>
    </div>
<?endif;?>


<?php
echo form_open('esami/tinetti');
?>

<table width="100%" id="CORPO" >
<tr><td width="600">
<fieldset>
<legend>Equilibrio</legend>
<table width="100%">
<tr ><td class="num">1</td><th  class="centro">Equilibrio da seduto</th><td>&nbsp;</td></tr>
<tr  ><td>&nbsp;</td><td>Si inclina, scivola dalla sedia</td><td class="dx">0 <input type="radio" id="e1" name="e1" value="0" checked//> </td></tr>
<tr><td>&nbsp;</td><td>E' stabile, sicuro</td><td class="dx">1 <input type="radio" name="e1" value="1" /> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">2</td><th class="centro">Alzarsi dalla sedia</th><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>E'incapace senza aiuto</td><td class="dx">0 <input type="radio" name="e2" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>Deve aiutarsi con le braccia</td><td class="dx">1 <input type="radio" name="e2" value="1"/> </td></tr>
<tr ><td>&nbsp;</td><td>Si alza senza aiutarsi con le braccia</td><td class="dx">2 <input type="radio" name="e2" value="2"/> </td></tr>
</table><table width="100%">
<tr ><td class="num">3</td><th class="centro">Tentativo di alzarsi</th><td>&nbsp;</td></tr>
<tr ><td>&nbsp;</td><td>E'incapace senza aiuto</td><td class="dx">0 <input type="radio" name="e3" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>Capace ma richiede pi&ugrave; di un tentativo</td><td class="dx">1 <input type="radio" name="e3" value="1"/> </td></tr>
<tr  ><td>&nbsp;</td><td>Capace al primo tentativo</td><td class="dx">2 <input type="radio" name="e3" value="2"/> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">4</td><th class="centro">Equilibrio nella stazione eretta (primi 5 sec)</th><td>&nbsp;</td></tr>
<tr ><td>&nbsp;</td><td>Instabile (vacilla, muove i piedi, marcata oscillazione del tronco)</td><td class="dx">0 <input type="radio" name="e4" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>Stabile grazie all'uso di bastone o altri ausili</td><td class="dx">1 <input type="radio" name="e4" value="1"/> </td></tr>
<tr  ><td>&nbsp;</td><td>Stabile senza ausili</td><td class="dx">2 <input type="radio" name="e4" value="2"/> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">5</td><th class="centro">Equilibrio nella stazione eretta prolungata</th><td>&nbsp;</td></tr>
<tr  ><td>&nbsp;</td><td>Instabile (vacilla, muove i piedi, marcata oscillazione del tronco)</td><td class="dx">0 <input type="radio" name="e5" value="0" checked/> </td></tr>
<tr  ><td>&nbsp;</td><td>Stabile, ma a base larga (i malleoli mediali distano >10 cm)</td><td class="dx">1 <input type="radio" name="e5" value="1"/> </td></tr>
<tr ><td>&nbsp;</td><td>Stabile, a base stretta, senza supporti</td><td class="dx">2 <input type="radio" name="e5" value="2"/> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">6</td><th class="centro">Romberg</th><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>Instabile</td><td class="dx">0 <input type="radio" name="e6" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>Stabile</td><td class="dx">1 <input type="radio" name="e6" value="1"/> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">7</td><th class="centro">Romberg sensibilizzato</th><td>&nbsp;</td></tr>
<tr  ><td>&nbsp;</td><td>Comincia a cadere</td><td class="dx">0 <input type="radio" name="e7" value="0" checked/> </td></tr>
<tr  ><td>&nbsp;</td><td>Oscilla, ma si riprende da solo</td><td class="dx">1 <input type="radio" name="e7" value="1"/> </td></tr>
<tr  ><td>&nbsp;</td><td>Stabile</td><td class="dx">2 <input type="radio" name="e7" value="2"/> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">8</td><th class="centro">Girarsi a 360 gradi</th><td>&nbsp;</td></tr>
<tr ><td>&nbsp;</td><td>A passi discontinui</td><td class="dx">0 <input type="radio" name="e8" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>A passi continui</td><td class="dx">1 <input type="radio" name="e8" value="1"/> </td></tr>
<tr ><td>&nbsp;</td><td>Instabile</td><td class="dx">0 <input type="radio" name="e9" value="0" checked/> </td></tr>
<tr><td>&nbsp;</td><td>Stabile</td><td class="dx">1 <input type="radio" name="e9" value="1"/> </td></tr>
</table>

<table width="100%">
<tr ><td class="num">9</td><th class="centro">Sedersi</th><td>&nbsp;</td></tr>
<tr ><td>&nbsp;</td><td>Insicuro (sbaglia la distanza, cade sulla sedia)</td><td class="dx">0 <input type="radio" name="e10" value="0" checked/> </td></tr>
<tr><td>&nbsp;</td><td>Usa le braccia, o ha un movimento discontinuo</td><td class="dx">1 <input type="radio" name="e10" value="1"/> </td></tr>
<tr><td>&nbsp;</td><td>Sicuro, movimento continuo</td><td class="dx">2 <input type="radio" name="e10" value="2"/> </td></tr>
</table>

</fieldset>
</td> <td width="600" valign="top">
<fieldset>

<legend>Andatura</legend>


<table width="100%">
<tr ><td class="num">10</td><th  class="centro">Inizio della deambulazione</th><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>Una certa esitazione o pi&ugrave; tentativi</td><td class="dx">0 <input type="radio" name="a1" value="0" checked/> </td></tr>
<tr  ><td>&nbsp;</td><td>Nessuna esitazione</td><td class="dx">1 <input type="radio" name="a1" value="1"/> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">11</td><th class="centro">Lunghezza ed altezza del passo</th><td>&nbsp;</td></tr>
<tr ><td class="num">&nbsp;</td><th class="centro">Piede dx</th><td>&nbsp;</td></tr>
<tr ><td>&nbsp;</td><td>Il piede dx non super il sx</td><td class="dx">0 <input type="radio" name="a2" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>Il piede dx super il sx</td><td class="dx">1 <input type="radio" name="a2" value="1"/> </td></tr>

<tr ><td>&nbsp;</td><td>Il piede dx non si alza completamente dal suolo</td><td class="dx">0 <input type="radio" name="a3" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>Il piede dx si alza completamente dal pavimento</td><td class="dx">1 <input type="radio" name="a3" value="1"/> </td></tr>


<tr ><td class="num">&nbsp;</td><th class="centro">Piede sx</th><td>&nbsp;</td></tr>
<tr  ><td>&nbsp;</td><td>Il piede sx non super il dx</td><td class="dx">0 <input type="radio" name="a4" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>Il piede sx super il dx</td><td class="dx">1 <input type="radio" name="a4" value="1"/> </td></tr>

<tr  ><td>&nbsp;</td><td>Il piede sx non si alza completamente dal suolo</td><td class="dx">0 <input type="radio" name="a5" value="0" checked/> </td></tr>
<tr  ><td>&nbsp;</td><td>Il piede sx si alza completamente dal pavimento</td><td class="dx">1 <input type="radio" name="a5" value="1"/> </td></tr>


</table><table width="100%">
<tr ><td class="num">12</td><th class="centro">Simmetria del passo</th><td>&nbsp;</td></tr>
<tr  ><td>&nbsp;</td><td>Il passo dx e il sx non sembrano uguali</td><td class="dx">0 <input type="radio" name="a6" value="0" checked/> </td></tr>
<tr  ><td>&nbsp;</td><td>Il passo dx e il sx sembrano uguali</td><td class="dx">1 <input type="radio" name="a6" value="1"/> </td></tr>

</table>
<table width="100%">
<tr ><td class="num">13</td><th class="centro">Continuit&aacute; del passo</th><td>&nbsp;</td></tr>
<tr  ><td>&nbsp;</td><td>Interrotto o discontinuo</td><td class="dx">0 <input type="radio" name="a7" value="0" checked/> </td></tr>
<tr  ><td>&nbsp;</td><td>Continuo</td><td class="dx">1 <input type="radio" name="a7" value="1"/> </td></tr>

</table>
<table width="100%">
<tr ><td class="num">14</td><th class="centro">Traiettoria</th><td>&nbsp;</td></tr>
<tr  ><td>&nbsp;</td><td>Deviazione marcata</td><td class="dx">0 <input type="radio" name="a8" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>Deviazione lieve o moderata, o uso di ausili</td><td class="dx">1 <input type="radio" name="a8" value="1"/> </td></tr>
<tr  ><td>&nbsp;</td><td>Assenza di deviazione e uso di ausili</td><td class="dx">2 <input type="radio" name="a8" value="2"/> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">15</td><th class="centro">Tronco</th><td>&nbsp;</td></tr>
<tr ><td>&nbsp;</td><td>Marcata oscilazione o uso di ausili</td><td class="dx">0 <input type="radio" name="a9" value="0" checked/> </td></tr>
<tr  ><td>&nbsp;</td><td>Flessione ginocchia o schiena, o allargamento braccia</td><td class="dx">1 <input type="radio" name="a9" value="1" /> </td></tr>
<tr ><td>&nbsp;</td><td>Nessuna oscillazione, flessione, uso delle braccia o ausili</td><td class="dx">2 <input type="radio" name="a9" value="2" /> </td></tr>
</table>
<table width="100%">
<tr ><td class="num">16</td><th class="centro">Cammino</th><td>&nbsp;</td></tr>
<tr  ><td>&nbsp;</td><td>I talloni sono separati</td><td class="dx">0 <input type="radio" name="a10" value="0" checked/> </td></tr>
<tr ><td>&nbsp;</td><td>I talloni quasi si toccano durante il cammino</td><td class="dx">1 <input type="radio" name="a10" value="1"/> </td></tr>
</table>
</fieldset>
</td></tr>
<tr><td colspan="2" align="center">
<?
$today=date('Ymd');
//echo $today;
echo form_hidden('data',$today);
echo form_hidden('codfis',$this->uri->segment(3));
if(isset($inserito)) $display = '2';
if ($display=='0')  echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 
echo validation_errors('<p class="error">');
echo form_close(); ?>
</td></tr>
</table>
<?if($display):?>
<fieldset>
<table>
<tr><th>RISULTATI:</th></tr>
<tr><td>Totale equilibrio:</td><td><?=$tinetti->etot?></td></tr>
<tr><td>Totale andatura:</td><td><?=$tinetti->atot?></td></tr>
<tr><td>Punteggio totale scala di Tinetti:</td><td><?=$tinetti->tinettitotale?></td></tr>
</table>
<a href="<?=base_url();?>pz/crea_index/<?=$indietro?>">INDIETRO</a>
</fieldset>
<?endif;?>