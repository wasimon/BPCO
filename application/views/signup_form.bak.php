<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<link rel="stylesheet" href="<?=site_url()."js/jqtransform.css";?>" type="text/css" media="all" />
 
<script type="text/javascript" src="<?=site_url()."js/jquery.jqtransform.js";?>"></script>
<script language="javascript">
		$(function(){
			$('form').jqTransform({imgPath:'<?=site_url().'js/img/';?>'});
		});
	</script>
  
<script>
  $(document).ready(function(){
    $("#commentForm").validate({
  rules: {
    password: "required",
    password2: { equalTo: "#password" }
        }
});
  });
  </script>      
  <style type="text/css">
fieldset{
    width: 400px;
    
    vertical-align: middle;
    
}
 </style>

<h1>Crea un Account!</h1>
<?php
$attributes = array('class' => 'cmxform', 'id' => 'commentForm');
echo form_open('login/create_member', $attributes);
?>
<div align="center">
<fieldset>
<legend>Informazioni Personali</legend>


<table>
<tr>
    <td id="label">Nome: </td>
    <td id="dati"><input type="text" class="required" minlength="2" name="first_name" value="" id="first_name" /></td>
    </tr>
    <tr>
    <td id="label">Cognome: </td>
    <td id="dati"><input type="text" class="required" minlength="2" name="last_name" value="" id="last_name" /></td>
    </tr>
    <tr>
    <td id="label">Email: </td>
    <td id="dati"><input type="text" class="required email" name="email_address" value="" id="email_address" /></td>
    </tr>
    <tr>
    <td id="label">Telefono: </td>
    <td id="dati"><input type="text" class="required number" minlength="10" name="telefono" value="" id="telefono" /></td>
    </tr>
</table>

</fieldset>

<fieldset>
<legend>Informazioni per il login</legend>


<table>
<tr>
    <td id="label">Nome utente: </td>
    <td id="dati"><input type="text" name="username"  class="required" minlength="5" value="" id="username" /></td>
    </tr>
    <tr>
    <td id="label">Password: </td>
    <td id="dati"><input type="password"   minlength="5" name="password" value="" id="password" /></td>
    </tr>
    <tr>
    <td id="label">Conferma password: </td>
    <td id="dati"><input type="password"  class="required" minlength="5" name="password2" value="" id="password2" /></td>
    </tr>

</table>
</fieldset>
<?echo form_submit('submit', 'Crea Acccount');
 echo validation_errors('<p class="error">'); ?>
</div>
</form>