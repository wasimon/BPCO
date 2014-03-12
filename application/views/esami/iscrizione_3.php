<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<link rel="stylesheet" href="<?=site_url()."js/jqtransform.css";?>" type="text/css" media="all" />
<style type="text/css">
fieldset{
    width:100%;
    vertical-align: middle;
    }
.durata_notte{
    display:none;
}
 </style>

<script type="text/javascript" src="<?=site_url()."js/jquery.jqtransform.js";?>"></script>
<script type="text/javascript">
function verifica_disp(){    
    if($('#presenza').val() == 'si')
    {
        $('.durata_notte').slideDown();
        
    }
    else if($('#presenza').val() == 'no')
    {
        $('.durata_notte').slideUp();
        
    }
   
};
</script>
<script language="javascript">
		$(function(){
			$('form').jqTransform({imgPath:'<?=site_url().'js/img/';?>'});
		});
	</script>
  <script>

  $(document).ready(function(){

    $("#commentForm").validate();

  });

  </script>

<table align="center" width="100%"><tr><td width="33%" align="center" bgcolor="green"> Dati anagrafici </td><td width="33%" align="center" bgcolor="green"> Dati antropometrici </td><td width="33%" align="center" bgcolor="yellow"> Questionario MRC</td></tr></table>
<h1>Medical Research Council (MRC)</h1>
<?php
$attributes = array('class' => 'cmxform', 'id' => 'commentForm');
echo form_open('pz/iscrizione_3', $attributes);
?>

<fieldset>

<table width="100%">
  <td id="label"> 0. Mi manca il fiato solo per sforzi intensi.</td>
  <td id="dati"><input name="mrc" type="radio" checked="checked" value="0" /></td></tr>
  <tr>
    
    <td id="label">1. Mi manca il fiato solo se cammino a passo veloce in piano o faccio una salita leggera.</td>
    <td id="dati"><input name="mrc" type="radio" value="1" /></td>
  </tr>
  <tr>
    
    <td id="label">2. Cammino pi&ugrave; lentamente della gente della mia stessa et&aacute; quando vado in piano, oppure mi devo fermare per respirare quando cammino al mio passo.</td>
    <td id="dati" ><input name="mrc" type="radio" value="2" /></td>
  </tr>
  <tr>
    
    <td id="label">3. Mi devo fermare per respirare dopo che ho camminato in piano per circa 100 metri o pochi minuti.</td>
    <td id="dati"><input name="mrc" type="radio" value="3" /></td>
  </tr>
  <tr>
   
    <td id="label">4. Mi manca il fiato per uscire di casa o mi manca il fiato quando mi vesto o mi spoglio.</td>
    <td id="dati"><input name="mrc" type="radio" value="4" /></td>
  </tr>
  <tr>
    <th colspan="2"><hr /></th>
    </tr>
  <tr>
   
    <td id="label">Durata della dispnea:</td>
    <td id="dati"><input type="text"  name="durata_anni" value="" class=" number" maxlength="2" id="durata_anni" />&nbsp;anni </td>
  </tr>
  <tr>
    
    <td id="label">Presenza di dispnea notturna:</td>
    <td id="dati">
    <select onchange="verifica_disp()" name="presenza" id="presenza">
      <option selected="selected" value="no">no</option>
      <option value="si">si</option>
    </select>
    
    </tr>
  <tr class="durata_notte">
    <td id="label">Durata della dispnea notturna: </td>
    <td id="dati"><input type="text"  name="durata_notte" value="" class=" number" maxlength="2" id="durata_notte" />&nbsp;anni </td>
  </tr>
  
  
    <tr>
    <th colspan="2"><hr /></th>
    </tr>
  <tr>
    
    <td>Tosse:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  
    <td >Indichi sulla scala da 1 a 10 il grado della tosse (al di fuori delle bronchiti) mediamente negli ultimi 6 mesi:<br />
      (0 non ho assolutamente tosse; 10 ho una tosse insopportabile)</td>
    <td><select name="tosse" id="tosse">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
  </tr>
  <tr>
    <th colspan="2"><hr /></th>
    </tr>
  <tr>
    
    <td>Espettorato:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    
    <td>Il catarro &eacute; di tipo:</td>
    <td><input name="qualita_catarro" type="radio" value="bianco" /> mucoso (bianco)</td>
  </tr>
  <tr>
    
    <td>&nbsp;</td>
    <td><input name="qualita_catarro" type="radio" value="bianco-giallastro" />muco-purulento (bianco-giallastro o bianco bruno)</td>
  </tr>
  <tr>
    
    <td>&nbsp;</td>
    <td><input name="qualita_catarro" type="radio" value="giallastro" />purulento (giallastro, marron scuro)</td>
  </tr>
  <tr>
    
    <td>&nbsp;</td>
    <td><input name="qualita_catarro" type="radio" value="non so" checked="checked" />Non so</td>
  </tr>
  
  <tr>
    <th colspan="3"><hr /></th>
  </tr>
  
    <tr>
    
    <td>Negli ultimi 6 mesi la quantit&aacute; media di catarro (al di fuori delle bronchiti) durante una giornata &eacute;:</td>
       <td><input name="quantita_catarro" type="radio" value="1" /> 
       &lt;1 cucchiaio da minestra</td>
  </tr>
  <tr>
  
    <td>&nbsp;</td>
    <td><input name="quantita_catarro" type="radio" value="tra 1 e 3" />
    &gt;1-&lt;3cucchiai da minestra</td>
  </tr>
  <tr>
   
    <td>&nbsp;</td>
    <td><input name="quantita_catarro" type="radio" value="piu di 3" />
    &gt;3 cucchiai da minestra</td>
  </tr>
  <tr>
    
    <td>&nbsp;</td>
    <td><input name="quantita_catarro" type="radio" value="non so"  checked="checked" />Non so</td>
  </tr>
</table>

</fieldset>
<?
$today=date('Ymd');
echo form_hidden('data',$today);
echo form_hidden('codfis',$this->input->post('codfis'));
echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 
//echo validation_errors('<p class="error">'); ?>
<br /><br /><br />
<div id="fotter">
<a href="<?=site_url().'pz/visualizza_lista/'.$this->session->userdata('idmedico');?>">LISTA PAZIENTI</a>&nbsp;|&nbsp;
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>