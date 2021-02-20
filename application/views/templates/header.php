<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Alcofil</title>
		<link rel="icon" href="<?php echo base_url("/assets/images/logo.png"); ?>">
		<link rel="stylesheet" href="<?php echo base_url("/assets/css/header.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("/assets/css/home.css"); //echo date('l jS \of F Y h:i:s A');?>"/>
		<link rel="stylesheet" href="<?php echo base_url("/assets/css/footer.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("/assets/css/about.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("/assets/css/contact.css"); ?>" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
		<logo>
		<meta name="viewport" content="width=device-width, initialscale=1.0">
	</head>

	<body>
		<nav>
			<div class="container-row">
				<div class="logo">
					<img src="<?php echo base_url('assets/images/logo.png');
					?>" alt="logo" width="40px" height="30px"/>
					<h6>ALCOFIL<h6>
				</div>
				<ul class="nav-links">
					<li>
						<a href="<?php echo base_url() ?>index.php">Home</a>
					</li>
					<li>
						<a href="<?php echo base_url("index.php/stations"); ?>">Stations</a>
					</li>
					<li>
						<a href="<?php echo base_url("index.php/about"); ?>">About</a>
					</li>
					<li>
						<a href="<?php echo base_url("index.php/contact"); ?>">Contact Us</a>
					</li>
					<li>
						<a href="#" class="special-a">Apply Now</a>
					</li>
				</ul>
				<div class="burger">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
			</div>
		</nav>
	</body>
</html>
