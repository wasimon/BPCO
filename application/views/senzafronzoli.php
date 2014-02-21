<html><head>
<style type="text/css">
.error_strings{  Arial, Helvetica, sans-serif;	font-size : 14px;	 color:#660000; background-color:red;  }
</style>

<script language="JavaScript" src="<?=site_url();?>js/gen_validatorv4.js"
type="text/javascript" xml:space="preserve"></script>
</head>
<body>
<div id="main">
<h1>Aggiungi paziente</h1>

<form action="" name="myform" id="myform">
<fieldset>
<legend>Dati anagrafici</legend>


<table>
 <tr><td colspan="2"><div id='myform_nome_errorloc' class="error_strings"></div></td></tr>
  <tr> 
  <td id="label">Nome:</td><td id="dati"><input type="text"  name="nome" id="nome" class="testo" /></td> </tr>
 <tr><td><div id='myform_cognome_errorloc' class="error_strings"></div></td></tr>
<tr>
<td id="label">Cognome:</td>
    <td id="dati"><input type="text"  name="cognome" id="cognome" class="testo" /></td>
  </tr><tr>
<td id="label">Sesso:</td>
    <td id="dati"><select name="sesso" id="sesso" class="testo">
      <option value="M">M</option>
      <option value="F">F</option>
    </select></td>
  </tr><tr>
    <td id="label">Data di nascita:</td>
    <td id="dati"><input type="text"  name="datanascita"  class="testo" id="datanascita" /></td>
  </tr><tr>
    <td id="label">Luogo di nascita</td>
    <td id="dati"><input type="text"  name="luogonascita"  class="testo" id="luogonascita" /></td>
  </tr><tr>
    <td id="label">Codice fiscale:</td>
    <td id="dati"><input type="text"  name="codfis"  class="testo" id="codfis" /></td>
  </tr><tr>
    <td id="label">Stato civile:</td>
    <td id="dati"><input type="text"  name="statocivile"  class="testo" id="statocivile" /></td>
  </tr><tr>
    <td id="label">Scolarità:</td>
    <td id="dati"><input type="text"  name="scolarita"  class="testo" id="scolarita" /></td>
  </tr><tr>
    <td id="label">Numero di telefono:</td>
    <td id="dati"><input type="text"  name="tel" class="testo" id="tel" /></td>
  </tr><tr>
    <td id="label">Numero di cellulare:</td>
    <td id="dati"><input type="text"  name="cel"  class="testo" id="cel" /></td>
  </tr>
  <tr>
    <td id="label">Lavoro svolto/attuale professione</td>
    <td id="dati"><input type="text"  name="lavoro"  class="testo" id="lavoro" /></td>
  </tr>

</table>
</fieldset>
<fieldset>
<legend>Indirizzo</legend>


<table>
  <tr>
    <td id="label">Via:</td>
    <td id="dati"><input  name="indirizzovia" type="text" class="testo" id="indirizzovia"  size="10" /></td>
  </tr>
<tr>
    <td id="label">Città:</td>
    <td id="dati"><input  name="indirizzocitta" type="text" class="testo" id="indirizzocitta"  size="10" /></td>
  </tr><tr>
    <td id="label">CAP:</td>
    <td id="dati"><input  name="indirizzocap" type="text" class="testo" id="indirizzocap"  size="10" /></td>
  </tr><tr>
    <td id="label">Provincia:</td>
    <td id="dati"><input  name="indirizzoprovincia" type="text" class="testo" id="indirizzoprovincia"  size="10" /></td>
  </tr>

</table>
</fieldset>


<fieldset>
<legend>Dati medici:</legend>


<table>
  <tr>
    <td id="label">Persona di riferimento:</td>
    <td id="dati"><input  name="personariferimento" type="text" class="testo" id="personariferimento"  size="10" /></td>
  </tr>
<tr>
    <td id="label">Numero di telefono:</td>
    <td id="dati"><input  name="telriferimento" type="text" class="testo" id="telriferimento"  size="10" /></td>
  </tr><tr>
    <td id="label">Medico di base:</td>
    <td id="dati"><input  name="medicofamiglia" type="text" class="testo" id="medicofamiglia"  size="10" /></td>
  </tr><tr>
    <td id="label">Centro pneumologico:</td>
    <td id="dati"><input  name="nome" type="text" class="testo" id="centropneumo"  size="10" /> </td>
  </tr>
  <tr>
    <td id="label">Specialista pneumologico:</td>
    <td id="dati"><input  name="specpneumo" type="text" class="testo" id="specpneumo"  size="10" /></td>
  </tr>
  <tr>
    <td id="label">Numero di telefono:</td>
    <td id="dati"><input  name="telpneumologo" type="text" class="testo" id="telpneumologo"  size="10" /></td>
  </tr>
  <tr>
    <td id="label">Centro motorio:</td>
    <td id="dati"><input  name="centromotorio" type="text" class="testo" id="centromotorio"  size="10" /></td>
  </tr>
  <tr>
    <td id="label">Specialista motorio:</td>
    <td id="dati"><input  name="specmotorio" type="text" class="testo" id="specmotorio"  size="10" /></td>
  </tr>
  <tr>
    <td id="label">Numero di telefono:</td>
    <td id="dati"><input  name="telmotorio" type="text" class="testo" id="telmotorio"  size="10" /></td>
  </tr>

</table>
</fieldset>

<fieldset>
<legend>Abitudine al fumo</legend>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
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
</script>

<table>
<tr> 

  <tr>
    <td id="label">Fumatore:</td>
    <td id="dati"><select onchange="verifica_fumo()" name="fumo_tipo" id="fumo_tipo" class="testo">
      <option value="si">si</option>
      <option selected="selected" value="no">no</option>
      <option value="ex">ex</option>
    </select></td>
  </tr>
  
  <tr class="fumo_si">
    <td id="label">Età inizio:</td>
    <td id="dati"><input type="text"  name="fumo_eta_inizio"  id="fumo_eta_inizio" class="testo"/></td>
  </tr>
  <tr class="fumo_ex">
    <td id="label">Età fine:</td>
    <td id="dati"><input type="text"  name="fumo_eta_fine"  class="testo" id="fumo_eta_fine" /></td>
  </tr>
  <tr class="fumo_si">
    <td id="label" >Sigarette al giorno:</td>
    <td id="dati"><input type="text"  name="sigarette_di"  class="testo" id="sigarette_di" /></td>
  </tr>
  <tr  class="fumo_si">
    <td id="label">Pacchetti all'anno:</td>
    <td id="dati"><input type="text"  name="pack_anno"  class="testo" id="pack_anno" /></td>
  </tr> 
   <tr>
    <td id="label">Commorbidità:</td>
    <td id="dati"><textarea name="commorbidita" id="commorbidita" cols="20" rows="5"></textarea></td>
  </tr>

</table>

</fieldset>
<?php
$today=date('Ymd');
echo $today;
echo form_hidden('dataoggi',$today);
echo form_hidden('idmedico',$this->session->userdata('idmedico'));

?>
 <input type="submit" name="submit" value="Submit">
</form>
<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("nome","req","Please enter your First Name");
    frmvalidator.addValidation("nome","maxlen=20",	"Max length for FirstName is 20");
    frmvalidator.addValidation("cognome","req","Please enter your First Name");
    frmvalidator.addValidation("cognome","maxlen=20",	"Max length for FirstName is 20");

    frmvalidator.addValidation("Email","maxlen=50");
    frmvalidator.addValidation("Email","req");
    frmvalidator.addValidation("Email","email");
//]]></script>
<br /><br /><br />
</div>
<div id="fotter">
<a href="<?=site_url().'pz/visualizza_lista/'.$this->session->userdata('idmedico');?>">INDIETRO</a>&nbsp;|&nbsp;
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>
</body></html>