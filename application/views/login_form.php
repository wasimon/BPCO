<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<link rel="stylesheet" href="<?=base_url()."js/jqtransform.css";?>" type="text/css" media="all" />
<script type="text/javascript" src="<?=base_url()."js/jquery.jqtransform.js";?>"></script>
<script language="javascript">
		$(function(){
			$('form').jqTransform({imgPath:'<?=base_url().'js/img/';?>'});
		});
	</script>

<style type="text/css">

body{
	background-image:url('logo.png');
	background-repeat: no-repeat;
	background-position: right top;
	margin-right: 200px;

}
fieldset{
    width: 300px;
    height: 200px;
    position: relative;
    vertical-align: middle;
	background-color: white;
    
}
#intro {

width: 200px;
height: 200px;
position: absolute;
top: 35%;
left: 40%;
margin-top: -50px;
margin-left: -50px;
}

 </style>
 
 <br><br><br><br>
 <center><h1>Metti in moto il tuo respiro</h1></center>
<div id="intro" align="center">
<fieldset >
<legend>Login </legend>


    <?php 
	echo form_open('login/validate_credentials');?>
	<table>
		<?php if (!empty($message)): ?>
			<tr>
				<td align="center" colspan="2"><?= $message ?></td>
			</tr>
		<?php endif ?>
		<tr>
			<td id="label">Username: </td>
			<td id="dati"><input type="text" name="username" value="" id="username" /></td>
		</tr>
		<tr>
			<td id="label">Password: </td>
			<td id="dati"><input type="password" name="password" value="" id="password" /></td>
		</tr>
		<tr>
			<td align="center" colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" colspan="2">  <?=form_submit('submit', 'Login');?></td>
		</tr>
		<tr>
			<td align="center" colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><?=anchor('login/signup', 'Crea un Account');?></td>
		</tr>
	</table>
    <?=form_close();?>
</fieldset>

</div>