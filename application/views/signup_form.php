<style type="text/css">
.container {
  background: transparent url('/img/logo.png') no-repeat fixed 50% 50px;
  background-size: 300px auto;
}
</style>
 
<h1 id="page-title"><?=$page_title?></h1>


<?= form_open('login/create_member', array('id'=>"signup-form", 'class'=>"form-signin", 'role'=>"form"));?>
  <fieldset>
    <h2 class="form-signin-heading">Personal Data</h2>
      <?php if (!empty($message)): ?>
          <div class="messages"><?= $message ?></div>
      <?php endif ?>
      <?php if ( ($val_err = validation_errors('<div>', '</div>')) ): ?>
        <div class="alert alert-warning validation-error">
          <?= $val_err ?>
        </div>
      <?php endif ?>
      <div class="form-control-group">
        <input type="text" class="form-control first" name="first_name" value="<?= set_value('first_name'); ?>" id="first_name" placeholder="First Name" required autofocus >
        <input type="text" class="form-control" name="last_name" value="<?= set_value('last_name'); ?>" id="last_name" placeholder="Last Name" required>
        <input type="email" class="form-control" name="email_address" value="<?= set_value('email_address'); ?>" id="email_address" placeholder="eMail Address" >
        <input type="text" class="form-control last" name="telefono" value="<?= set_value('telefono'); ?>" id="telefono" placeholder="Tel. Number" />
      </div>
  </fieldset>
  <fieldset>
    <h2 class="form-signin-heading">Login Data</h2>
      <div class="form-control-group">
        <input type="text" class="form-control first" name="username" id="username" value="<?= set_value('username'); ?>" placeholder="Username" required>
        <input type="password" class="form-control" name="password" id="password"placeholder="Password">
        <input type="password" class="form-control last" name="password2" id="password2" placeholder="Password Verification">
      </div>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
  </fieldset>
<?=form_close();?>