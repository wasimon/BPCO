<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<style type="text/css">
A:link , A:visited { color: #000000; text-decoration: none; }
A:hover { text-decoration: underline; }

* { font-family: Verdana; font-size: 96%; }

label { width: 10em; float: left; }

label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }

p { clear: both; }

.submit { margin-left: 12em;}

em { font-weight: bold; padding-right: 1em; vertical-align: top; }

.error_strings {        font-family: arial,sans-serif;
        			
        color:#660000;
        background-color:red;
}
.error_strings {Arial, Helvetica, sans-serif;	font-size : 14px;	 color:#660000; background-color:red;  }
.testo {width:200px;}
#dati {  width: 240px; 
text-align:left;
}
#label {  width: 250px; /* Width of labels */
}
<!--  MIE CLASSI-->

<!--  modifica  -->
.fumo_si,
.fumo_ex {
    display:none;
    width: 500px;
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
</script>
  <script>

  $(document).ready(function(){

    $("#commentForm").validate();

  });

  </script>

  

<?php
$attributes = array('class' => 'cmxform', 'id' => 'commentForm');
echo form_open('pz/scrivi_pz', $attributes);
?>

<fieldset>
     <legend>Dati anagrafici</legend>
   </p>
   <table width="100%">
     <tr>
       <td id="label">Nome:</td>
       <td class="submit" id="dati"><input type="text"  name="nome" id="nome"  class="required" minlength="2"  /></td>
     </tr>
     <tr>
       <td id="label">Cognome:</td>
       <td class="submit" id="dati"><input type="text"  name="cognome" id="cognome" class="required" minlength="2" /></td>
     </tr>
     <tr>
       <td id="label">Sesso:</td>
       <td class="submit" id="dati"><select name="sesso" id="sesso">
         <option value="M">M</option>
         <option value="F">F</option>
       </select></td>
     </tr>
     <tr>
       <td id="label">Data di nascita:</td>
       <td class="submit" id="dati"><input type="text"  name="datanascita"  class="required date" id="datanascita" /></td>
     </tr>
     <tr>
       <td id="label">Luogo di nascita</td>
       <td class="submit" id="dati"><input type="text"  name="luogonascita" class="required" minlength="2" id="luogonascita" /></td>
     </tr>
     <tr>
       <td id="label">Codice fiscale:</td>
       <td class="submit" id="dati"><input type="text"  name="codfis"  class="required" minlength="16" maxlength="16" id="codfis" /></td>
     </tr>
     <tr>
       <td id="label">Stato civile:</td>
       <td class="submit" id="dati"><input type="text"  name="statocivile"  class="required"id="statocivile" /></td>
     </tr>
     <tr>
       <td id="label">Scolarità:</td>
       <td class="submit" id="dati"><input type="text"  name="scolarita"  class="required number" id="scolarita" /></td>
     </tr>
     <tr>
       <td id="label">Numero di telefono:</td>
       <td class="submit" id="dati"><input type="text"  name="tel" class="required number" minlength="10" id="tel" /></td>
     </tr>
     <tr>
       <td id="label">Numero di cellulare:</td>
       <td class="submit" id="dati"><input type="text"  name="cel"  class="required number" minlength="10" id="cel" /></td>
     </tr>
     <tr>
       <td id="label">Lavoro svolto/attuale professione</td>
       <td class="submit" id="dati"><input type="text"  name="lavoro"  class="required" minlength="2" id="lavoro" /></td>
     </tr>
   </table>
 </fieldset>

<fieldset>
<legend>Indirizzo</legend>


<table width="100%">
  <tr>
    <td id="label">Via:</td>
    <td id="dati"><input  name="indirizzovia" type="text" class="required" minlength="2" id="indirizzovia"   /></td>
  </tr>
<tr>
    <td id="label">Città:</td>
    <td id="dati"><input  name="indirizzocitta" type="text" class="required" minlength="2" id="indirizzocitta"  /></td>
  </tr><tr>
    <td id="label">CAP:</td>
    <td id="dati"><input  name="indirizzocap" type="text" class="required number" minlength="5" id="indirizzocap"   /></td>
  </tr><tr>
    <td id="label">Provincia:</td>
    <td id="dati"><input  name="indirizzoprovincia" type="text" class="required" minlength="2" id="indirizzoprovincia" /></td>
  </tr>
</table>
</fieldset>

<fieldset>
<legend>Dati medici:</legend>


<table width="100%">
  <tr>
    <td id="label">Persona di riferimento:</td>
    <td id="dati"><input  name="personariferimento" type="text" class="required " minlength="2" id="personariferimento"   /></td>
  </tr>
<tr>
    <td id="label">Numero di telefono:</td>
    <td id="dati"><input  name="telriferimento" type="text" class="required number" minlength="10" id="telriferimento"   /></td>
  </tr><tr>
    <td id="label">Medico di base:</td>
    <td id="dati"><input  name="medicofamiglia" type="text"  id="medicofamiglia"  /></td>
  </tr><tr>
    <td id="label">Centro pneumologico:</td>
    <td id="dati"><input  name="centropneumo" type="text" class="number" minlength="10" id="centropneumo"  /> </td>
  </tr>
  <tr>
    <td id="label">Specialista pneumologico:</td>
    <td id="dati"><input  name="specpneumo" type="text"  id="specpneumo"   /></td>
  </tr>
  <tr>
    <td id="label">Numero di telefono:</td>
    <td id="dati"><input  name="telpneumologo" type="text" class=" number" minlength="10" id="telpneumologo" /></td>
  </tr>
  <tr>
    <td id="label">Centro motorio:</td>
    <td id="dati"><input  name="centromotorio" type="text" id="centromotorio"  /></td>
  </tr>
  <tr>
    <td id="label">Specialista motorio:</td>
    <td id="dati"><input  name="specmotorio" type="text" id="specmotorio" /></td>
  </tr>
  <tr>
    <td id="label">Numero di telefono:</td>
    <td id="dati"><input  name="telmotorio" type="text" class=" number" minlength="10" id="telmotorio"  /></td>
  </tr>

</table>
</fieldset>

<fieldset>
<legend>Abitudine al fumo</legend>
<table width="100%">
<tr> 

  <tr>
    <td id="label">Fumatore:</td>
    <td id="dati"><select onchange="verifica_fumo()" name="fumo_tipo" id="fumo_tipo">
      <option value="si">si</option>
      <option selected="selected" value="no">no</option>
      <option value="ex">ex</option>
    </select></td>
  </tr>
  
  <tr class="fumo_si">
    <td id="label">Età inizio:</td>
    <td id="dati"><input type="text"  name="fumo_eta_inizio"  id="fumo_eta_inizio" class=" number"/></td>
  </tr>
  <tr class="fumo_ex">
    <td id="label">Età fine:</td>
    <td id="dati"><input type="text"  name="fumo_eta_fine"  class=" number" id="fumo_eta_fine" /></td>
  </tr>
  <tr class="fumo_si">
    <td id="label" >Sigarette al giorno:</td>
    <td id="dati"><input type="text"  name="sigarette_di"  class=" number" id="sigarette_di" /></td>
  </tr>
  <tr  class="fumo_si">
    <td id="label">Pacchetti all'anno:</td>
    <td id="dati"><input type="text"  name="pack_anno"  class=" number" id="pack_anno" /></td>
  </tr> 
   <tr>
    <td id="label">Commorbidità:</td>
    <td id="dati"><textarea name="commorbidita" id="commorbidita" cols="20" rows="5"></textarea></td>
  </tr>

</table>

</fieldset>

<p>  <input class="submit" type="submit" value="Aggiungi paziente"/>  </p>
<?php
$today=date('Ymd');
// echo $today;
echo form_hidden('dataoggi',$today);
echo form_hidden('idmedico',$this->session->userdata('idmedico'));
 ?>
</form>
<br /><br /><br />
</div>
<div id="fotter">
<a href="<?=site_url().'pz/visualizza_lista/'.$this->session->userdata('idmedico');?>">INDIETRO</a>&nbsp;|&nbsp;
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>