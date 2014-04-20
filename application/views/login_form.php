<style type="text/css">
.container {
  background: transparent url('/img/logo.png') no-repeat fixed 50% 50px;
  background-size: 300px auto;
}
</style>
 
<h1 id="page-title"><?=$page_title?></h1>

<?= form_open('login/validate_credentials', array('id'=>"login-form", 'class'=>"form-signin", 'role'=>"form"));?>
  <fieldset>
    <h2 class="form-signin-heading">Please sign in</h2>
      <?php if (!empty($message)): ?>
          <div class="alert alert-success messages"><?= $message ?></div>
      <?php endif ?>
      <div class="form-control-group">
        <input type="text" class="form-control first" name="username" id="username" placeholder="Username" required autofocus >
        <input type="password" class="form-control last" name="password" id="password" placeholder="Password" required >
      </div>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <hr>
        <?=anchor('login/signup', 'Crea un Account', array('class'=>"btn btn-lg btn-primary btn-block"));?>
  </fieldset>
<?=form_close();?>
