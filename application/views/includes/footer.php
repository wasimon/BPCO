	<script type="text/javascript" charset="utf-8">
		$('input').click(function(){
			$(this).select();	
		});
	</script>
<hr />
 <center>DEBUG!!!</center>
 </br>
<?php print_r($this->session->all_userdata()); ?>
</body>
</html>