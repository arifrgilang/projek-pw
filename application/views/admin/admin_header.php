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
	    <label for="checkbox1">
			<ul class="menu bar" style="color:#FFFFFF">
                <li id="admin">Administrator Page</li>
				<li style="float:right"><a href="<?php echo site_url('/admin/logout');?>" id="order" class="active" style="color: #dbdbdb;">LOGOUT</a></li> 
				<li style="float:right"><a href="<?php echo site_url(''); ?>">Main Web</a></li>
			</ul>
		</label>
	</nav>
	</header>
    <hr>
