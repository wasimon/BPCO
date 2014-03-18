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
	background-image:url('/img/logo.png');
    background-size: contain; /* Height: auto is to keep aspect ratio */
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-position: center;

	
}
fieldset{
	
    width: 300px;
    height: 200px;
    position: relative;
    vertical-align: middle;
	
	background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
	    
}
#intro {

width: 200px;
height: 200px;
position: absolute;
top: 35%;
left: 20%;
margin-top: -50px;
margin-left: -50px;
}

 </style>
 
 <h1>Metti in moto il tuo respiro</h1>
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