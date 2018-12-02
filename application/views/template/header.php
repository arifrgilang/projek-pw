<!doctype html>
<html>
<head>
	<title>POOKS</title>
	<meta name ="viewport" content="width=device, initial-scale=1, user-scalable=no">
	<link href="<?php echo base_url("/assets/style/style.css")?>" type="text/css" rel="stylesheet">
	<script src="<?php echo base_url("/assets/js/javascript.js")?>" type="text/javascript"></script>
</head>
<body>
	<header>
	<!--navbar-->
	<nav id="menunav">
	    <input type="checkbox" id="checkbox1" />
	    <label for="checkbox1">
			<ul class="menu bar">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
			    <li><a href="<?php echo site_url('pages/price'); ?>">Price List</a></li>
			    <li><a href="<?php echo site_url('pages/faq'); ?>">FAQ</a></li>
				<li><a href="<?php echo site_url('check'); ?>">Order Check</a></li>
				<li><a href="<?php echo site_url('pages/credit'); ?>">Credit</a></li>
				<li><a href="<?php echo site_url('order');?>" id="order" style="color: #dbdbdb;">Print E-Book Order</a></li> 
				<li><a href="<?php echo site_url('login'); ?>">Administrator</a></li>
			</ul>
		<span class="toggle">☰</span>
		</label>
	</nav>
	</header>
