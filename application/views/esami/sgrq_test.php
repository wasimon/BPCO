
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


<h1>ST-GEORGE RESPIRATORY QUESTIONNAIRE (SGRQ)</h1>
<?php
echo form_open('esami/sgrq');
?>

<TABLE align="center" border=0 cellspacing=0 cellpadding=3>
<TR>
  <td colspan="6">Nel corso degli ultimi 12 mesi:</td>
  
</TR>



<TR>
  <td width="270">&nbsp;</td>
  <th align="center"><font size="-1">Quasi tutti i giorni della settimana</font></th>
  <th align="center"><font size="-1">Per più giorni della settimana</font></th>
  <th align="center"><font size="-1">Qualche giorno nell'arco del mese</font></th>
  <th align="center"><font size="-1">Soltanto in caso di infezioni respiratorie</font></th>
  <th align="center"><font size="-1">Mai</font></th>

  </TR>



<TR>
  <td class="riga_colorata"> 1.  hai avuto tosse</td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq1" value="0" /></td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq1" value="1" /></td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq1" value="2" /></td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq1" value="3" /></td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq1" value="4" /></td>

  </TR>



<TR>
  <td>2.  hai sputato catarro</td>
  <td align="center"><input type="radio" name="sgrq2" value="0" /></td>
  <td align="center"><input type="radio" name="sgrq2" value="1" /></td>
  <td align="center"><input type="radio" name="sgrq2" value="2" /></td>
  <td align="center"><input type="radio" name="sgrq2" value="3" /></td>
  <td align="center"><input type="radio" name="sgrq2" value="4" /></td>

  </TR>



<TR>
  <td class="riga_colorata">3. hai avuto il fiato corto</td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq3" value="0" /></td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq3" value="1" /></td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq3" value="2" /></td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq3" value="3" /></td>
  <td align="center" class="riga_colorata"><input type="radio" name="sgrq3" value="4" /></td>

  </TR>



<TR>
  <td>4. hai avuto il respiro con sibili e fischi?</td>
  <td align="center"><input type="radio" name="sgrq4" value="0" /></td>
  <td align="center"><input type="radio" name="sgrq4" value="1" /></td>
  <td align="center"><input type="radio" name="sgrq4" value="2" /></td>
  <td align="center"><input type="radio" name="sgrq4" value="3" /></td>
  <td align="center"><input type="radio" name="sgrq4" value="4" /></td>

  </TR>





<tr><TD colspan=6><HR></TD></tr>

<TR>

<TD colspan=6><P>  5. Negli ultimi 12 mesi quanti attacchi o crisi respiratorie gravi o molto fastidiose hai avuto</TD>

</TR>



<TR>

  <TD>&nbsp;</TD>

  <TH align="center"><FONT size="-1">più di 3 attacchi o crisi</FONT></TH>

  <TH align="center"><font size="-1">3 attacchi o crisi </font></TH>

  <TH align="center"><FONT size="-1"> 2 attacchi o crisi</FONT></TH>

  <TH align="center"><FONT size="-1">1 attacco o crisi </FONT></TH>

  <TH align="center"><FONT size="-1">nessun attacco o crisi</FONT></TH>

</TR>



<TR>

  <TD>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sgrq5" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq5" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sgrq5" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sgrq5" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sgrq5" value=4></TD>

</TR>
<tr><TD colspan=6><HR></TD></tr>
<TD colspan=6><P>6) negli ultimi 12 mesi quanto tempo è durato l'attacco 
  o la crisi respiratoria peggiore che hai avuto? (se non ne 
  hai avute passa alla domanda 7)</TD>
  
</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center"><FONT size="-1">una settimana o più</FONT></TH>

  <TH align="center"><FONT size="-1">3 giorni o più </FONT></TH>

  <TH align="center"><FONT size="-1">1 o 2 giorni</FONT> </TH>

  <TH align="center"><FONT size="-1">meno di un giorno</FONT></TH>

  

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sgrq6" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq6" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sgrq6" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sgrq6" value=3></TD>

  </TR>
  
  <tr><TD colspan=6><HR></TD></tr>
  
  <TD colspan=6><P>7) negli ultimi 12 mesi, in una settimana normale, 
    quanti giorni &quot;buoni&quot; (ovvero con pochi disturbi 
    respiratori) hai avuto?</TD>

</TR>



<TR>

  <TD>&nbsp;</TD>

  <TH align="center"><FONT size=-1>alcuni giorni </FONT></TH>

  <TH align="center"><FONT size=-1>1 o 2 giorni</FONT></TH>

  <TH align="center"><FONT size=-1>3 o 4 giorni</FONT></TH>

  <TH align="center"><FONT size=-1>quasi tutti i giorni</FONT></TH>

  <TH align="center"><FONT size=-1>tutti i giorni </FONT></TH>

</TR>



<TR>

  <TD>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sgrq7" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq7" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sgrq7" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sgrq7" value=3></TD>

  <TD align="center"><INPUT type="radio" name="sgrq7" value=4></TD>
</TR>
<tr><TD colspan=6><HR></TD></tr>
  <TD colspan=6><P> 8. Quando ha il respiro con i fischi e i sibili è peggiore 
    la mattina?</TD>

</TR>



<TR>

  <TD colspan=4>&nbsp;</TD>

  <TH align="center"><FONT size=-1>SI</FONT></TH>

  <TH align="center"><FONT size=-1>NO</FONT></TH>

</TR>



<tr>

  <TD colspan=4>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sgrq8" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq8" value=1></TD>
  
  </tr>
<tr><TD colspan=6><HR></TD></tr>

  <TD colspan=6><P>9) come descriveresti i tuoi disturbi respiratori 
    (scegliere una sola casella)?</TD>
  
</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center">sono il problema più grave che ho</TH>

  <TH align="center">mi creano parecchi problemi</TH>

  <TH align="center">mi creano qualche problema </TH>

  <TH align="center">non mi creano problemi </TH>

  

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sgrq9" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq9" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sgrq9" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sgrq9" value=3></TD>

  </TR>
  <tr><TD colspan=6><HR></TD></tr>
    <TD colspan=6><P>10) se hai o hai avuto un'attività professionale, scegli 
    una delle seguenti risposte</TD>
  
</TR>



<TR>

  <TD colspan=3>&nbsp;</TD>

  

  <TH align="center">i disturbi respiratori mi hanno costretto a <br />
    smettere di lavorare</TH>

  <TH align="center">i disturbi respiratori mi ostacolano nel <br />
    lavoro o mi hanno costretto a cambiarlo</TH>

  <TH align="center">i disturbi respiratori non mi danno <br />
    problemi sul lavoro</TH>

  

</TR>



<TR>

  <TD colspan=3>&nbsp;</TD>

  
  <TD align="center"><INPUT type="radio" name="sgrq10" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq10" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sgrq10" value=2></TD>

  </TR>



<TR>
  
  <TD colspan=6><HR>
    <p>Sezione 2</p></TD>
  
</TR>



<TR>

  <TD colspan=6><P>    1) quali delle seguenti attività generalmente ti causano il fiato corto in questi giorni</TD>

</TR>



<TR>

  <TD colspan=4>&nbsp;</TD>

  <TH align="center"><font size="-1">VERO</font></TH>

  <TH align="center"><font size="-1">FALSO</font></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>    stare seduto o sdraiato senza muovermi</TD>

  <TD align="center"><INPUT type="radio" name="sgrq11" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq11" value=1></TD>

</TR>



<TR>

  <TD colspan=4>    lavarmi o vestirmi da solo</TD>

  <TD align="center"><INPUT type="radio" name="sgrq12" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq12" value=1></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>    camminare per casa</TD>

    <TD align="center"><INPUT type="radio" name="sgrq13" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq13" value=1></TD>

</TR>

<TR>

  <TD colspan=4>    camminare all'aperto in piano</TD>

  <TD align="center"><INPUT type="radio" name="sgrq14" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq14" value=1></TD>

</TR>

<TR class="riga_colorata">

  <TD colspan=4 class="riga_colorata">    salire una rampa di scale</TD>

  <TD align="center"><INPUT type="radio" name="sgrq15" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq15" value=1></TD>

</TR>

<TR>

  <TD colspan=4>    camminare in salita</TD>

  <TD align="center"><INPUT type="radio" name="sgrq16" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq16" value=1></TD>

</TR>

<TR class="riga_colorata">

  <TD colspan=4 class="riga_colorata">    fare sport o giochi in movimento</TD>

  <TD align="center"><INPUT type="radio" name="sgrq17" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq17" value=1></TD>

</TR>



<TR>
  
  <TD colspan=6><HR>
    <p>Sezione 3</p></TD>
  
</TR>




<TR>

  <TD colspan=6><P>Questa sezione si riferisce alla tosse e al fiato corto in questi giorni. Barra la risposta vero o falso <br />
    relativamente alle seguenti affermazioni</TD>

</TR>



<TR>

  <TD colspan=4>&nbsp;</TD>

  <TH align="center"><font size="-1">VERO</font></TH>

  <TH align="center"><font size="-1">FALSO</font></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>mi fa male quando tossisco</TD>

  <TD align="center"><INPUT type="radio" name="sgrq18" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq18" value=1></TD>

</TR>



<TR>

  <TD colspan=4>    tossire mi stanca fisicamente</TD>

  <TD align="center"><INPUT type="radio" name="sgrq19" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq19" value=1></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>    quando parlo ho il fiato corto</TD>

    <TD align="center"><INPUT type="radio" name="sgrq20" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq20" value=1></TD>

</TR>

<TR>

  <TD colspan=4>    quando mi chino ho il fiato corto</TD>

  <TD align="center"><INPUT type="radio" name="sgrq21" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq21" value=1></TD>

</TR>

<TR class="riga_colorata">

  <TD colspan=4 class="riga_colorata">    la tosse o il respiro mi disturbano durante il sonno</TD>

  <TD align="center"><INPUT type="radio" name="sgrq22" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq22" value=1></TD>

</TR>

<TR>

  <TD colspan=4>    mi sento facilmente esausto</TD>

  <TD align="center"><INPUT type="radio" name="sgrq23" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq23" value=1></TD>

</TR>



<TR>
  
  <TD colspan=6><HR>
    <p>Sezione 4</p></TD>
  
</TR>



<TR>

  <TD colspan=6><P>Questa sezione si riferisce al altri effetti che i disturbi respiratori possono avere su di te in questi giorni</TD>

</TR>



<TR>

  <TD colspan=4>&nbsp;</TD>

  <TH align="center"><font size="-1">VERO</font></TH>

  <TH align="center"><font size="-1">FALSO</font></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>la tosse o il respiro mi mettono a disagio quando sono <br />
    con altre persone</TD>

  <TD align="center"><INPUT type="radio" name="sgrq24" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq24" value=1></TD>

</TR>



<TR>

  <TD colspan=4>i miei disturbi respiratori sono un fastidio per il parenti, <br />
    gli amici, o i vicini di casa</TD>

  <TD align="center"><INPUT type="radio" name="sgrq25" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq25" value=1></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>mi spavento o mi faccio prendere dal panico quando <br />
    non riesco a respirare</TD>

    <TD align="center"><INPUT type="radio" name="sgrq26" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq26" value=1></TD>

</TR>

<TR>

  <TD colspan=4>ho l'impressione di non poter tenere sotto controllo i <br />
    miei problemi respiratori</TD>

  <TD align="center"><INPUT type="radio" name="sgrq27" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq27" value=1></TD>

</TR>

<TR class="riga_colorata">

  <TD colspan=4 class="riga_colorata">credo che i miei disturbi non miglioreranno</TD>

  <TD align="center"><INPUT type="radio" name="sgrq28" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq28" value=1></TD>

</TR>

<TR>

  <TD colspan=4>a causa dei miei disturbi respiratori sono diventato <br />
    debole o invalido</TD>

  <TD align="center"><INPUT type="radio" name="sgrq29" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq29" value=1></TD>

</TR>

<TR class="riga_colorata">

  <TD colspan=4 class="riga_colorata">l'esercizio fisico per me è rischioso</TD>

  <TD align="center"><INPUT type="radio" name="sgrq30" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq30" value=1></TD>

</TR>
<TR>

  <TD colspan=4><br />
    tutto mi sembra troppo faticoso</TD>

  <TD align="center"><INPUT type="radio" name="sgrq31" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq31" value=1></TD>

</TR>


<TR>
  
  <TD colspan=6><HR>
    <p>Sezione 5</p></TD>
  
</TR>

<TR>

  <TD colspan=6><P>Questa sezione è dedicata alla cura che stai seguendo. Se non segui cure passa direttamente alla sezione 6</TD>

</TR>



<TR>

  <TD colspan=4>&nbsp;</TD>

  <TH align="center"><font size="-1">VERO</font></TH>

  <TH align="center"><font size="-1">FALSO</font></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>la cura che seguo mi serve poco</TD>

  <TD align="center"><INPUT type="radio" name="sgrq32" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq32" value=1></TD>

</TR>



<TR>

  <TD colspan=4>mi sento a disagio quando sono costretto a seguire le <br />
    prescrizioni mediche quando sono con altre persone</TD>

  <TD align="center"><INPUT type="radio" name="sgrq33" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq33" value=1></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>la cura che seguo mi causa effetti collaterali sgradevoli</TD>

    <TD align="center"><INPUT type="radio" name="sgrq34" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq34" value=1></TD>

</TR>

<TR>

  <TD colspan=4>    la cura che seguo influisce molto sulla mia vita</TD>

  <TD align="center"><INPUT type="radio" name="sgrq35" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq35" value=1></TD>

</TR>



<TR>
  
  <TD colspan=6><HR>
    <p>Sezione 6</p></TD>
  
</TR>


<TR>

  <TD colspan=6><P>Questa sezione riguarda il modo in cui le tue attività potrebbero essere influenzate dalla tua respirazione <br />
  </TD>

</TR>



<TR>

  <TD colspan=4>&nbsp;</TD>

  <TH align="center"><font size="-1">VERO</font></TH>

  <TH align="center"><font size="-1">FALSO</font></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>    per lavarmi e vestirmi impiego molto tempo</TD>

  <TD align="center"><INPUT type="radio" name="sgrq36" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq36" value=1></TD>

</TR>



<TR>

  <TD colspan=4>non sono in grado di fare il bagno o la doccia, o per 
    farlo impiego molto tempo</TD>

  <TD align="center"><INPUT type="radio" name="sgrq37" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq37" value=1></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>cammino più lentamente degli altri, oppure devo fermarmi per riposare</TD>

    <TD align="center"><INPUT type="radio" name="sgrq38" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq38" value=1></TD>

</TR>

<TR>

  <TD colspan=4>nelle attività come i lavori di casa impiego molto tempo, oppure devo fermarmi per riposare</TD>

  <TD align="center"><INPUT type="radio" name="sgrq39" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq39" value=1></TD>

</TR>

<TR class="riga_colorata">

  <TD colspan=4 class="riga_colorata"> Se salgo una rampa di scale, devo andare piano o fermarmi. </TD>

  <TD align="center"><INPUT type="radio" name="sgrq40" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq40" value=1></TD>

</TR>
<TR>

  <TD colspan=4>se cammino velocemente, devo fermarmi o rallentare il passo</TD>

  <TD align="center"><INPUT type="radio" name="sgrq41" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq41" value=1></TD>

</TR>
<TR class="riga_colorata">

  <TD colspan=4>a causa della mia respirazione ho difficoltà a fare cose com, ad esempio, camminare in salita, portare gli 
    oggetti salendo le scale, fare piccoli lavori in giardino 
    (come togliere le erbacce), ballare, giocare a bocce</TD>

  <TD align="center"><INPUT type="radio" name="sgrq42" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq42" value=1></TD>

</TR>

<TR>

  <TD colspan=4>a causa della mia respirazione ho difficoltà a fare cose 
    come, ad esempio, portare carichi pesanti, zappare il 
    giardino o spalare la neve, correre per fare esercizio o 
    camminare velocemenete (8 km/h), giocare a tennis o 
    nuotare</TD>

  <TD align="center"><INPUT type="radio" name="sgrq43" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq43" value=1></TD>

</TR>
<TR class="riga_colorata">

  <TD colspan=4>a causa della mia respirazione ho difficoltà a fare cose 
    come, ad esempio, lavori manuali molto pesanti, 
    andare in bicicletta, correre, nuotare velocemente o 
    praticare sport faticosi</TD>

  <TD align="center"><INPUT type="radio" name="sgrq44" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq44" value=1></TD>

</TR>


<TR>
  
  <TD colspan=6><HR>
    <p>Sezione 7</p></TD>
  
</TR>
<TR>

  <TD colspan=6><P>Vorremmo ora sapere in che modo i tuoi disturbi influenzano di solito la tua vita di tutti i giorni. 
    Barra le caselle vero o falso relativamente alle affermazioni seguenti (barra vero se i disturbi respiratori ti 
    impediscono di fare una certa cosa)</TD>

</TR>



<TR>

  <TD colspan=4>&nbsp;</TD>

  <TH align="center"><FONT size=-1>VERO</FONT></TH>

  <TH align="center"><FONT size=-1>FALSO</FONT></TH>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>    non sono in grado di praticare sport o fare giochi in 
    movimento</TD>

  <TD align="center"><INPUT type="radio" name="sgrq45" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq45" value=1></TD>

</TR>

	

<TR>

  <TD colspan=4>    non sono in grado di uscire per svago o divertimento</TD>

  <TD align="center"><INPUT type="radio" name="sgrq46" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq46" value=1></TD>

</TR>



<tr class="riga_colorata">

  <TD colspan=4>    non sono in grado di uscire di casa per fare la spesa</TD>

    <TD align="center"><INPUT type="radio" name="sgrq47" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq47" value=1></TD>

</TR>
<TR>

  <TD colspan=4>non sono in grado di fare i lavori di casa</TD>

  <TD align="center"><INPUT type="radio" name="sgrq48" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq48" value=1></TD>

</TR>
<TR class="riga_colorata">

  <TD colspan=4>non sono in grado di allontanarmi dal letto o dalla poltrona</TD>

  <TD align="center"><INPUT type="radio" name="sgrq49" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq49" value=1></TD>

</TR>

<TR>

  <TD colspan=6><HR></TD>

</TR>



<TR>

  <TD colspan=6><P>E' riportato di seguito un elenco di attività che i tuoi disturbi, forse, ti impediscono di svolgere (questo 
    elenco serve semplicemente come esempio per ricordarti come la mancanza di fiato può limitarti in alcune 
    attività. Non devi rispondere a nessuna domanda.  
    <P>      • fare passeggiate o portare a spasso il cane <br />
      • fare lavori in casa o in giardino <br />
      • avere rapporti sessuali <br />
      • andare in chiesa, andare al bar, al circolo, a vedere uno spettacolo ecc. <br />
      • uscire quando fa brutto tempo o stare in locali pieni di fumo <br />
    • andare a trovare parenti, amici o giocare con i bambini </TD>

</TR>



<TR>
  
  <TD colspan=6><HR></TD>
  
</TR>



<TR>

   <TD colspan=6><P>Per piacere, scrivi in questo spazio qualsiasi altra attività importante che i tuoi disturbi respiratori ti 
    impediscono di svolgere:   
    <P>
      <textarea name="sgrq50" id="sgrq50" cols="45" rows="5"></textarea>
    </TD>

</TR>



<TR>
  
  <TD colspan=6><HR></TD>
  
</TR>



<TR>

  <TD colspan=6><P>    Ora ti preghiamo di barrare l'affermazione che secondo
    te descrive meglio il modo in cui i tuoi disturbi
    respiratori limitano la tua attività quotidiana:</TD>

</TR>



<TR>

  <TD colspan=2>&nbsp;</TD>

  <TH align="center">non mi impediscono di fare quello che <br />
    vorrei fare</TH>

  <TH align="center">mi impediscono di fare alcune cose che <br />
    vorrei fare</TH>

  <TH align="center">mi di impediscono di fare la maggior <br />
    parte delle cose che vorrei fare</TH>

  <TH align="center">mi impediscono di fare tutto quello che <br />
    vorrei fare</TH>

 

</TR>

<TR>

  <TD colspan=2>&nbsp;</TD>

  <TD align="center"><INPUT type="radio" name="sgrq51" value=0></TD>

  <TD align="center"><INPUT type="radio" name="sgrq51" value=1></TD>

  <TD align="center"><INPUT type="radio" name="sgrq51" value=2></TD>

  <TD align="center"><INPUT type="radio" name="sgrq51" value=3></TD>

 

</TR>



<TR>

  <TD colspan=6><HR></TD>

</TR>



</TABLE>

<table width="100%">

<tr>

	<td align="center">	

<?
$today=date('Ymd');
echo $today;
echo form_hidden('data',$today);
echo form_hidden('codfis',$this->input->post('codfis'));
echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 
echo validation_errors('<p class="error">');
echo form_close();
?>

	</td>	

</tr>
</table>