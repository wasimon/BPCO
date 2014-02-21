<style type="text/css">
body{margin: 0;padding:0;}
body{font-family: arial,sans-serif;font-size: 76%;text-align: center}
A:link , A:visited { color: #000000; text-decoration: none; }
A:hover { text-decoration: underline; }
label{
	
  display: inline-block;
  line-height: 1.8;
  vertical-align: top;
  padding-left:10px;
  padding-right:20px;
	}
fieldset {  
		margin: 			10px 0 0 0;  
		padding: 			0;
		background-color: #FFF;
	}
legend {  
		text-transform:		uppercase;
		font-size:			1em;
		padding:			3px;
		margin-left:		1em;
		color:				#ffffff;
		background:			#493F0B;
	}
	input {
		padding:			3px;
		font-size:			1em;
		border:				1px solid #493F0B; 
		color:				#1E1903; 
		background:			#F5F6D4;
	}
	input.radio {
		border:				none;
		background:			transparent;
	}
.testo { width:200px;}

.error_strings{  
        font-family: arial,sans-serif;
        
        color:#660000;
        background-color:red;

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

#main {
    width: 600px;margin: 0 auto;text-align: left;
}

#spacer{
	width: 10px;
	}
#label {
  width: 250px; /* Width of labels */
}	
#dati {
  width: 240px; 
text-align:right;
}

.fumo_si,
.fumo_ex {
    display:none;
    width: 500px;
}

</style>
<script language="JavaScript" src="<?=site_url();?>js/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>

<div id="main">
<h1>Aggiungi paziente</h1>
<?php
$attributes = array('class' => 'myform', 'id' => 'myform');
echo form_open('pz/scrivi_pz', $attributes);
?>
<form action="pz/scrivi_pz" name="myform" id="myform">
<fieldset>
<legend>Dati anagrafici</legend>


<table>
 <tr><td colspan="2"><div id='myform_nome_errorloc' class="error_strings"></div></td></tr>
  <tr> 
  <td id="label">Nome:</td><td id="dati"><input type="text"  name="nome" id="nome" class="testo" /></td> </tr>
 <tr><td colspan="2" id="label"><div id='myform_cognome_errorloc' class="error_strings"></div></td></tr>
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

//echo validation_errors('<p class="error">'); ?>
<input type="submit" name="submit" value="Aggiungi paziente">
</form>
<br /><br /><br />
</div>
<div id="fotter">
<a href="<?=site_url().'pz/visualizza_lista/'.$this->session->userdata('idmedico');?>">INDIETRO</a>&nbsp;|&nbsp;
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>
<script language="JavaScript" type="text/javascript" xml:space="preserve">

  var frmvalidator  = new Validator("myform");
        frmvalidator.EnableOnPageErrorDisplay();
        frmvalidator.EnableMsgsTogether();



    frmvalidator.addValidation("nome","req","Please enter your First Name");
    frmvalidator.addValidation("cognome","req","merda");

</script>