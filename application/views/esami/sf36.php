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

</style>
<?php
// visualizazione esame 
if(isset($display)):
$indietro = $sf36->codfis;
$string = "";
for($i=1; $i<37; $i++)
{
    $name = "sf{$i}";
    $value = $sf36->$name;
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

tr.esame_enabled {
    color: fuchsia;
    background-color: lime;
}
</style>
<?
else:
$display=0;
endif;
?>



<h1>Questionario Sullo Stato di Salute SF-36 </h1>
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
echo form_open('esami/sf36');
?>

<TABLE align="center" border=0 cellspacing=0 cellpadding=3>

<TR>

  <TD ><STRONG>1.</STRONG> In generale, direbbe che la Sua salute è:</TD>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center"><FONT size=-1>Eccellente</FONT></TH>

  <TH align="center"><FONT size=-1>Molto buona</FONT></TH>

  <TH align="center"><FONT size=-1>Buona</FONT></TH>

  <TH align="center"><FONT size=-1>Passabile</FONT></TH>

  <TH align="center"><FONT size=-1>Scadente</FONT></TH>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sf1" value=4 ></TD>

  <TD align="center"><INPUT type="radio" name="sf1" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf1" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf1" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf1" value=0></TD>

</TR>



<TR>

  <TD colspan=7><HR><TD>

</TR>



<TR>

  <TD colspan=7><P><STRONG>2.</STRONG> <EM>Rispetto ad un anno fa</EM>, come giudicherebbe, <EM>ora</EM>, la Sua salute in generale?</TD>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center"><FONT size=-1>Decisamente migliore adesso</FONT></TH>

  <TH align="center"><FONT size=-1>Un po' migliore adesso</FONT></TH>

  <TH align="center"><FONT size=-1>Più o meno uguale</FONT></TH>

  <TH align="center"><FONT size=-1>Un po' peggiore adesso</FONT></TH>

  <TH align="center"><FONT size=-1>Decisamente peggiore adesso</FONT></TH>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sf2" value=4 ></TD>

  <TD align="center"><INPUT type="radio" name="sf2" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf2" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf2" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf2" value=0></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR>

  <TD colspan=7><P><STRONG>3.</STRONG> Le seguenti domande riguardano alcune attività che potrebbe svolgere nel corso di una qualsiasi giornata. La <EM>Sua salute</EM> La limita <EM>attualmente</EM> nello svolgimento di queste attività?</TD>

</TR>



<TR>

  <TD colspan=4>&nbsp;</TD>

  <TH align="center"><FONT size=-1>SI,<BR>mi limita<BR>parecchio</FONT></TH>

  <TH align="center"><FONT size=-1>SI,<BR>mi limita<BR>parzialmente</FONT></TH>

  <TH align="center"><FONT size=-1>NO,<BR>non mi limita<BR>per nulla</FONT></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=4><STRONG>Attività fisicamente impegnative,</STRONG> come correre, sollevare oggetti pesanti, praticare sport faticosi</TD>

  <TD align="center"><INPUT type="radio" name="sf3" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf3" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf3" value=2></TD>

</TR>



<TR>

  <TD colspan=4><STRONG>Attività di moderato impegno fisico,</STRONG> come spostare un tavolo, usare l'aspirapolvere, giocare a bocce o fare un giretto in bicicletta</TD>

 <TD align="center"><INPUT type="radio" name="sf4" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf4" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf4" value=2></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>Sollevare o portare le borse della spesa</TD>
  
 <TD align="center"><INPUT type="radio" name="sf5" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf5" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf5" value=2></TD>

</TR>



<TR>

  <TD colspan=4>Salire <STRONG>qualche</STRONG> piano di scale</TD>

 <TD align="center"><INPUT type="radio" name="sf6" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf6" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf6" value=2></TD>
</TR>



<tr class="riga_colorata">

  <TD colspan=4>Salire <STRONG>un</STRONG> piano di scale</TD>

 <TD align="center"><INPUT type="radio" name="sf7" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf7" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf7" value=2></TD>

</TR>



<TR>

  <TD colspan=4>Piegarsi, inginocchiarsi o chinarsi</TD>

 <TD align="center"><INPUT type="radio" name="sf8" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf8" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf8" value=2></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>Camminare <STRONG>per un chilometro</STRONG></TD>

 <TD align="center"><INPUT type="radio" name="sf9" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf9" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf9" value=2></TD>

</TR>



<TR>

  <TD colspan=4>Camminare <STRONG>per qualche centinaia di metri</STRONG></TD>

 <TD align="center"><INPUT type="radio" name="sf10" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf10" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf10" value=2></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>Camminare <STRONG>per circa cento metri</STRONG></TD>

 <TD align="center"><INPUT type="radio" name="sf11" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf11" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf11" value=2></TD>

</TR>



<TR>

  <TD colspan=4>Fare il bagno o vestirsi da soli</TD>

  <TD align="center"><INPUT type="radio" name="sf12" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf12" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf12" value=2></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR>

  <TD colspan=7><P><STRONG>4.</STRONG> <EM>Nelle ultime 4 settimane</EM>,ha riscontrato i seguenti problemi sul lavoro o nelle altre attività quotidiane, <EM>a causa della Sua salute fisica?</EM></TD>

</TR>



<TR>

  <TD colspan=5>&nbsp;</TD>

  <TH align="center"><FONT size=-1>SI</FONT></TH>

  <TH align="center"><FONT size=-1>NO</FONT></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=5>Ha ridotto <STRONG>il tempo</STRONG> dedicato al lavoro o ad altre attività</TD>

  <TD align="center"><INPUT type="radio" name="sf13" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf13" value=1></TD>

</TR>



<TR>

  <TD colspan=5>Ha <STRONG>reso</STRONG> meno di quanto avrebbe voluto</TD>

  <TD align="center"><INPUT type="radio" name="sf14" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf14" value=1></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=5>Ha dovuto limitare alcuni <STRONG>tipi</STRONG> di lavoro o di altre attività</TD>

    <TD align="center"><INPUT type="radio" name="sf15" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf15" value=1></TD>

</TR>

<TR>

  <TD colspan=5>Ha avuto <STRONG>difficoltà</STRONG> nell'eseguire il lavoro o altre attività (ad esempio, ha fatto più fatica)</TD>

  <TD align="center"><INPUT type="radio" name="sf16" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf16" value=1></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR>

  <TD colspan=7><P><STRONG>5.</STRONG> <EM>Nelle ultime 4 settimane</EM>, ha riscontrato i seguenti problemi sul lavoro o nelle altre attività, <EM>a causa del Suo stato emotivo</EM> (quale il sentirsi depresso o ansioso)?</TD>

</TR>



<TR>

  <TD colspan=5>&nbsp;</TD>

  <TH align="center"><FONT size=-1>SI</FONT></TH>

  <TH align="center"><FONT size=-1>NO</FONT></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=5>Ha ridotto <STRONG>il tempo</STRONG> dedicato al lavoro o ad altre attività</TD>

  <TD align="center"><INPUT type="radio" name="sf17" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf17" value=1></TD>

</TR>

	

<TR>

  <TD colspan=5>Ha <STRONG>reso</STRONG> meno di quanto avrebbe voluto</TD>

  <TD align="center"><INPUT type="radio" name="sf18" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf18" value=1></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=5>Ha avuto un calo di <STRONG>concentrazione</STRONG> sul lavoro o in altre attività</TD>

    <TD align="center"><INPUT type="radio" name="sf19" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf19" value=1></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR>

  <TD colspan=7><P><STRONG>6.</STRONG> <EM>Nelle ultime 4 settimane</EM>, in che misura la Sua salute fisica o il Suoi stato emotivo hanno interferito con le normali attività sociali con la famiglia, gli amici, i vicini di casa, i gruppi di cui fa parte?</TD>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center"><FONT size=-1>Per nulla</FONT></TH>

  <TH align="center"><FONT size=-1>Leggermente</FONT></TH>

  <TH align="center"><FONT size=-1>Un po'</FONT></TH>

  <TH align="center"><FONT size=-1>Molto</FONT></TH>

  <TH align="center"><FONT size=-1>Moltissimo</FONT></TH>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sf20" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf20" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf20" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf20" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf20" value=0></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR>

   <TD colspan=7><P><STRONG>7.</STRONG> Quanto dolore <EM>fisico</EM> ha provato <EM>nelle ultime 4 settimane</EM>?</TD>

</TR>



<TR>

  <TD width=270>&nbsp;</TD>

  <TH align="center"><FONT size=-1>Nessuno</FONT></TH>

  <TH align="center"><FONT size=-1>Molto lieve</FONT></TH>

  <TH align="center"><FONT size=-1>Lieve</FONT></TH>

  <TH align="center"><FONT size=-1>Moderato</FONT></TH>

  <TH align="center"><FONT size=-1>Forte</FONT></TH>

  <TH align="center"><FONT size=-1>Molto forte</FONT></TH>

</TR>



<TR>

  <TD>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sf21" value=5></TD>

  <TD align="center"><INPUT type="radio" name="sf21" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf21" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf21" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf21" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf21" value=0></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR>

  <TD colspan=7><P><STRONG>8.</STRONG> <EM>Nelle ultime 4 settimane</EM>, in che misura il <EM>dolore</EM> L'ha ostacolata nel lavoro che svolge abitualmente (sia in casa sia fuori casa)?</TD>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center"><FONT size=-1>Per nulla</FONT></TH>

  <TH align="center"><FONT size=-1>Molto poco</FONT></TH>

  <TH align="center"><FONT size=-1>Un po'</FONT></TH>

  <TH align="center"><FONT size=-1>Molto</FONT></TH>

  <TH align="center"><FONT size=-1>Moltissimo</FONT></TH>

</TR>

<TR>

  <TD colspan=2>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sf22" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf22" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf22" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf22" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf22" value=0></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR> 

  <TD colspan=7><P><STRONG>9.</STRONG> Le seguenti domande si riferiscono a come si è sentito <EM>nelle ultime 4 settimane</EM>. Risponda a ciascuna domanda scegliendo la risposta che più si avvicina al Suo caso.



    <P>Per quanto tempo <EM>nelle ultime 4 settimane</EM> si è sentito...</TD>

</TR>



<TR>

  <TD>&nbsp;</TD>

  <TH align="center"><FONT size=-1>Sempre</FONT></TH>

  <TH align="center"><FONT size=-1>Quasi sempre</FONT></TH>

  <TH align="center"><FONT size=-1>Molto tempo</FONT></TH>

  <TH align="center"><FONT size=-1>Una parte del tempo</FONT></TH>

  <TH align="center"><FONT size=-1>Quasi mai</FONT></TH>

  <TH align="center"><FONT size=-1>Mai</FONT></TH>

</TR>



<tr class="riga_colorata">

  <TD>vivace brillante?</TD>

  <TD align="center"><INPUT type="radio" name="sf23" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf23" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf23" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf23" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf23" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf23" value=5></TD>

</TR>



<TR>

  <TD>molto agitato?</TD>

  <TD align="center"><INPUT type="radio" name="sf24" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf24" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf24" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf24" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf24" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf24" value=5></TD>

</TR>



<tr class="riga_colorata">

  <TD>così giù di morale che niente avrebbe potuto tirarLa su?</TD>

    <TD align="center"><INPUT type="radio" name="sf25" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf25" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf25" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf25" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf25" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf25" value=5></TD>

</TR>



<TR>

  <TD>calmo e sereno?</TD>

    <TD align="center"><INPUT type="radio" name="sf26" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf26" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf26" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf26" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf26" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf26" value=5></TD>

</TR>



<tr class="riga_colorata">

  <TD>pieno di energia?</TD>

    <TD align="center"><INPUT type="radio" name="sf27" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf27" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf27" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf27" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf27" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf27" value=5></TD>

</TR>



<TR>

  <TD>scoraggiato e triste?</TD>

  <TD align="center"><INPUT type="radio" name="sf28" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf28" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf28" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf28" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf28" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf28" value=5></TD>

</TR>



<tr class="riga_colorata">

  <TD>sfinito?</TD>

  <TD align="center"><INPUT type="radio" name="sf29" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf29" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf29" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf29" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf29" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf29" value=5></TD>

</TR>



<TR>

  <TD>felice?</TD>

  <TD align="center"><INPUT type="radio" name="sf30" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf30" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf30" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf30" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf30" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf30" value=5></TD>

</TR>



<tr class="riga_colorata">

  <TD>stanco?</TD>

  <TD align="center"><INPUT type="radio" name="sf31" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf31" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf31" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf31" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf31" value=4></TD>

  <TD align="center"><INPUT type="radio" name="sf31" value=5></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR>

  <TD colspan=7><P><STRONG>10.</STRONG> <EM>Nelle ultime 4 settimane</EM>, per quanto tempo la <EM>Sua salute fisica o il Suo stato emotivo</EM> hanno interferito nelle Sue attività sociali, in famiglia, con gli amici?</TD>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center"><FONT size=-1>Sempre</FONT></TH>

  <TH align="center"><FONT size=-1>Quasi sempre</FONT></TH>

  <TH align="center"><FONT size=-1>Una parte del tempo</FONT></TH>

  <TH align="center"><FONT size=-1>Quasi mai</FONT></TH>

  <TH align="center"><FONT size=-1>Mai</FONT></TH>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sf32" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf32" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf32" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf32" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf32" value=4></TD>

</TR>



<TR>

  <TD colspan=7><HR></TD>

</TR>



<TR>

  <TD colspan=7><P><STRONG>11.</STRONG> Scelga la risposta che meglio descrive quanto siano VERE o FALSE le seguenti affermazioni.</TD>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center"><FONT size=-1>Certamente vero</FONT></TH>

  <TH align="center"><FONT size=-1>In gran parte vero</FONT></TH>

  <TH align="center"><FONT size=-1>Non so</FONT></TH>

  <TH align="center"><FONT size=-1>In gran parte falso</FONT></TH>

  <TH align="center"><FONT size=-1>Certamente falso</FONT></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=2>Mi pare di ammalarmi un po' più facilmente degli altri</TD>

  <TD align="center"><INPUT type="radio" name="sf33" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf33" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf33" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf33" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf33" value=4></TD>

</TR>



<TR>

  <TD colspan=2>La mia salute è come quella degli altri</TD>

 <TD align="center"><INPUT type="radio" name="sf34" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf34" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf34" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf34" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf34" value=4></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=2>Mi aspetto che la mia salute andrà peggiorando</TD>

 <TD align="center"><INPUT type="radio" name="sf35" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf35" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf35" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf35" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf35" value=4></TD>

</TR>



<TR>

  <TD colspan=2>Godo di ottima salute</TD>

 <TD align="center"><INPUT type="radio" name="sf36" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sf36" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sf36" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sf36" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sf36" value=4></TD>

</TR>



</TABLE>

<table width="100%">

<tr>

	<td align="center">	

<?
$today=date('Ymd');
//echo $today;
echo form_hidden('data',$today);
echo form_hidden('codfis',$this->uri->segment(3));
if(isset($inserito)) $display = '2';
if ($display=='0')  echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 
echo validation_errors('<p class="error">');
echo form_close();
?>
<? if($display=='1'):?>
<a href="<?=base_url();?>pz/crea_index/<?=$indietro?>">INDIETRO</a>
<?endif;?>
	</td>	

</tr>
</table>