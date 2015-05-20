<?php
	require_once ('include\mysql_db.class.php');
	require 'include\session.inc.php';
	require 'include\db.php';	
?>	

<html>
	<head>
		<title>Calorie Calculator</title>
		<!--link href="calc.css" rel="stylesheet" type="text/css">	
		<link href="1140.css" rel="stylesheet" type="text/css"-->

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	</head>
	
	<body>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
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
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
   		<li><a href="register.php">Register</a></li>
      		<?php if(!isset($_SESSION['username'])) { ?>

      			<li><a href="login.php">Login</a></li>
      		<?php } else { ?>

	      		<li><a href="lal.php">Calorie Calculator</a></li>
	        	<li><a href="logout.php">Logout</a></li>

	        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<!--div class="header">
				<img src="images/gym.png" alt="Fuark" class="logo">

				<a href="register.php" id="link">Register</a>
				<?php //if(!isset($_SESSION['username'])) { ?>

						<a href="login.php" id="link">Login</a>
				<?php //} else { ?>		
						<a href="lal.php" id="link">Calorie Calculator</a>
						<a href="logout.php" id="link">Logout</a>
				<?php //} ?>
		</div-->
		

		<div class="container-top">
				<div class="top">
					<p>Yestee <br> v toq sait <br> 6te se nau4ite <br> kak da stanete <br> nacepeni batki</p>
				</div>
		</div>
		<div class="cotainer-bottom">		
				<div class="bottom">
					<p>V nego su6to taka ima<br>KALKULATOR ZA KALORII</p>
				</div>
		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>