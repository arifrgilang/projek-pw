<!doctype html>
<html style="font-family:roboto">
<head>
	<title>POOKS</title>
	<meta name ="viewport" content="width=device=width, initial-scale=1, user-scalable=no">
		<link href="<?php echo base_url("/assets/css/homepage.css")?>" type="text/css" rel="stylesheet">
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
			    <li><a href="<?php echo site_url('/price'); ?>">Price List</a></li>
			    <li><a href="<?php echo site_url('/faq'); ?>">FAQ</a></li>  
				<li><a href="#">Print E-Book Order</a></li>
				<li><a href="#">Order Check</a></li> 
				<li><a href="<?php echo site_url('/credit'); ?>">Credit</a></li> 
			</ul>
		<span class="toggle">☰</span>
		</label>
	</nav>
	<script type="text/javascript">
		function showTime(){
    		var date = new Date();
    		var h = date.getHours();
    		var m = date.getMinutes();
    		var s = date.getSeconds();

			if (h<10) h = "0"+ h;
			if (m<10) m = "0"+ m;
			if (s<10) s = "0"+ s;

    		var time = h + ":" + m + ":" + s;
    		document.getElementById("jam").innerText = time;
			document.getElementById("jam").textContent = time;
		}

		setInterval(showTime, 1);
	</script>
	</header>
