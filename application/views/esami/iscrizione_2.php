<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<link rel="stylesheet" href="<?=site_url()."js/jqtransform.css";?>" type="text/css" media="all" />
<style type="text/css">
fieldset{
    width: 400px;
    height: 300px;
    vertical-align: middle;
    
}

 </style>

<script type="text/javascript" src="<?=site_url()."js/jquery.jqtransform.js";?>"></script>
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
<script>
function startCalc(){
interval = setInterval("calc()",1);
}
function calc(){
    
peso = document.calcolat.peso_ora.value;
altezza = document.calcolat.altezza.value/100; 
altezza2 = altezza * altezza;
totale= (peso * 1) / (altezza2 * 1);

if (document.calcolat.peso_ora.value==null||document.calcolat.peso_ora.value==0 || document.calcolat.altezza.value==null||document.calcolat.altezza.value==0)
{
          document.calcolat.BMI.value = '';
}
else{
document.calcolat.BMI.value = totale;
}
}
function stopCalc(){
clearInterval(interval);
}
</script>	
</head>
<body>
<table align="center" width="100%"><tr><td width="33%" align="center" bgcolor="green"> Dati anagrafici </td><td width="33%" align="center" bgcolor="yellow"> Dati antropometrici </td><td width="33%" align="center"> Questionario MRC</td></tr></table>
<h1>Dati Antropometrici</h1>
<?php
$attributes = array('class' => 'cmxform', 'id' => 'commentForm', 'name' =>'calcolat');
echo form_open('pz/iscrizione_2', $attributes);
?>

<table width="100%">
<tr><td width="50%" align="center">
<fieldset>
<legend>Dati Antropometrici</legend>
<table width="100%">
<tr ><td colspan="2" id="label">Peso</td> </tr>
<tr>
<td id="label">Data attuale: (Kg)</td>
<td id="dati"><input type="text"  onFocus="startCalc();" onBlur="stopCalc();"  name="peso_ora" value="" class="required number" id="peso_ora" /></td></tr>
<tr >
<td id="label">Un anno fa: (Kg)</td>
<td id="dati"><input type="text"  name="peso_anno" value="" class="required number" id="peso_anno" /></td></tr>
<tr >
  <td colspan="2" class="num"><hr /></td>
  </tr>
<tr >
  <td  id="label">Altezza: (cm)</td>
  <td id="dati"><input type="text"  onFocus="startCalc();" onBlur="stopCalc();"  name="altezza" value="" class="required number" id="altezza" /></td>
</tr>
<tr >
  <td colspan="2" class="num"><hr /></td>
  </tr>
<tr >
  <td id="label">BMI</td>
  <td id="dati"><input type="text"  name="BMI" value="" id="BMI" /></td>
</tr>
</table>
</fieldset>
</td> <td width="50%" valign="top" align="center">
<fieldset><legend>Dati Bioimpedenzometria</legend>
<table width="100%">
<tr>
<td id="label">Massa magra</td>
<td id="dati"><input type="text"  name="massamagra" value="" class="number" id="massamagra" /></td>
</tr>
<tr></tr>
<td id="label">Massa grassa</td>
<td id="dati"><input type="text"  name="massagrassa" value="" class="number" id="massagrassa" /></td>
</tr>
<tr >
  <td id="label">Acqua totale</td>
  <td id="dati"><input type="text"  name="aquatot" value="" class="number" id="aquatot" /></td>
</tr>
<tr >
  <td id="label">Percentuale massa grassa</td>
  <td id="dati"><input type="text"  name="grassoperc" value=""class="number"id="grassoperc" /></td>
</tr>
<tr >
  <td id="label">Percentuale massa magra</td>
  <td id="dati"><input type="text"  name="magroperc" value="" class="number" id="magroperc" /></td>
</tr>
</table>
</fieldset>
</td></tr>
<tr><td colspan="2" align="center">
<?
$today=date('Ymd');
//echo $today;
echo form_hidden('data',$today);
echo form_hidden('codfis',$this->input->post('codfis'));
echo form_submit('submit', 'Aggiungi Esame');	 	 	 	 	 	 	 	 
//echo validation_errors('<p class="error">'); ?>
</td></tr>
</table>
<div id="fotter">
<a href="<?=site_url().'pz/visualizza_lista/'.$this->session->userdata('idmedico');?>">LISTA PAZIENTI</a>&nbsp;|&nbsp;
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>
</html>