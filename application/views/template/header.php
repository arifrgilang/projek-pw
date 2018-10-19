<!doctype html>
<html style="font-family:roboto">
<head>
	<title>POOKS</title>
	<meta name ="viewport" content="width=device=width, initial-scale=1, user-scalable=no">
		<link href="<?php echo base_url("/assets/css/homepage.css")?>" type="text/css" rel="stylesheet">
		<link href="<?php echo base_url("/assets/css/pricepage.css")?>" type="text/css" rel="stylesheet">
		<link href="<?php echo base_url("/assets/css/faq.css")?>" type="text/css" rel="stylesheet">


</head>
<body>
	<header>
	<!--navbar-->
	<nav id="menunav">
	    <input type="checkbox" id="checkbox1" />
	    <label for="checkbox1">
			<ul class="menu bar">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
			    <li><a href="<?php echo site_url('/price'); ?>">Price List</a></li>
			    <li><a href="<?php echo site_url('/faq'); ?>">FAQ</a></li>  
			    <li><a href="#">Credit</a></li>
				<li><a href="#">Print E-Book Order</a></li>
				<li><a href="#">Order Check</a></li> 
			</ul>
		<span class="toggle">☰</span>
		</label>
	</nav>
	</header>
