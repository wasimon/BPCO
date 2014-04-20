<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title><?= strip_tags($page_title) ?></title>
  
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-style.css" type="text/css" media="screen" >
  <!--[if gte IE 9]>
    <style type="text/css">
    .gradient {
    filter: none;
    }
    </style>
  <![endif]-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/site"><img src="/img/logo_small.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <?php if ($this->session->userdata('is_logged_in')): ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('username')?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Modify User Data</a></li>
                  <li><a href="#">Change Password</a></li>
                  <li class="divider"></li>
                  <li><?= anchor('login/logout', 'Logout');?></li>
                </ul>
              </li>
            <?php else: ?>
              <li><?= anchor('login', 'Sign In');?></li>
              <li><?= anchor('login/signup', 'Sign Up');?></li>
            <?php endif ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <?php if (!empty($messages)): ?>
      <section id="messages"></section>
    <?php endif ?>
  </header>

  <div class="container">
  
