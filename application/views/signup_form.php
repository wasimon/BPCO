 
<style type="text/css">
fieldset {
	width: 400px;    
	vertical-align: middle;
}
.validation-error {
	color: red;
	padding: 10px;
}
.validation-error div {
	margin-top: 2px;
}
</style>

<h1>Crea un Account!</h1>
<?php
$attributes = array('id' => 'doctor-signup-form');
echo form_open('login/create_member', $attributes);
?>
<div align="center">
	<fieldset>
		<legend>Informazioni Personali</legend>

		<div class="validation-error">
			<?= validation_errors('<div>', '</div>'); ?>
		</div>

		<table>
			<tr>
				<td id="label">Nome: </td>
				<td id="dati"><input type="text" class="required" minlength="2" name="first_name" value="<?= set_value('first_name'); ?>" id="first_name" /></td>
			</tr>
			<tr>
				<td id="label">Cognome: </td>
				<td id="dati"><input type="text" class="required" minlength="2" name="last_name" value="<?= set_value('last_name'); ?>" id="last_name" /></td>
			</tr>
			<tr>
				<td id="label">Email: </td>
				<td id="dati"><input type="text" class="required email" name="email_address" value="<?= set_value('email_address'); ?>" id="email_address" /></td>
			</tr>
			<tr>
				<td id="label">Telefono: </td>
				<td id="dati"><input type="text" class="required number" minlength="10" name="telefono" value="<?= set_value('telefono'); ?>" id="telefono" /></td>
			</tr>
		</table>

	</fieldset>

	<fieldset>
		<legend>Informazioni per il login</legend>


		<table>
			<tr>
				<td id="label">Nome utente: </td>
				<td id="dati"><input type="text" name="username"  class="required" minlength="5" value="<?= set_value('username'); ?>" id="username" /></td>
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
	<fieldset id="form-actions">
		<legend>Actions</legend>
		
		<?= form_submit('submit', 'Crea Acccount'); ?>
	</fieldset>
</div>
<?=form_close();?>