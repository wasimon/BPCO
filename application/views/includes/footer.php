
  <?php if (DEBUG): ?>
    <div id="debug-area">
      <h2><center>DEBUG!!!</center></h2>
      <pre><?php print_r($this->session->all_userdata()); ?></pre>
    </div>
  <?php endif ?>
  </div> <!-- /.container -->
</body>
</html>