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
			<ul class="menu bar" style="color:#006666">
                <li style="float:left"><strong>Administrator Page</strong></li>
				<li><a href="<?php echo site_url('/admin/#'); ?>">Wait List</a></li>
			    <li><a href="<?php echo site_url('/admin/#'); ?>">On Process</a></li>
			    <li><a href="<?php echo site_url('/admin/#'); ?>">Finished</a></li>  
				<li><a href="<?php echo site_url('/admin/logout');?>" id="order" style="color: #dbdbdb;">LOGOUT</a></li> 
			</ul>
		<span class="toggle">☰</span>
		</label>
	</nav>
	</header>
    <hr>
