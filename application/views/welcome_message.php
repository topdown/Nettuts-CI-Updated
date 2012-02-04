<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

		::selection {
			background-color: #E13300;
			color:            white;
		}

		::moz-selection {
			background-color: #E13300;
			color:            white;
		}

		::webkit-selection {
			background-color: #E13300;
			color:            white;
		}

		body {
			background-color: #fff;
			margin:           40px;
			font:             13px/20px normal Helvetica, Arial, sans-serif;
			color:            #4F5155;
		}

		a {
			color:            #003399;
			background-color: transparent;
			font-weight:      normal;
		}

		h1 {
			color:            #444;
			background-color: transparent;
			border-bottom:    1px solid #D0D0D0;
			font-size:        19px;
			font-weight:      normal;
			margin:           0 0 14px 0;
			padding:          14px 15px 10px 15px;
		}

		code {
			font-family:      Consolas, Monaco, Courier New, Courier, monospace;
			font-size:        12px;
			background-color: #f9f9f9;
			border:           1px solid #D0D0D0;
			color:            #002166;
			display:          block;
			margin:           14px 0 14px 0;
			padding:          12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align:  right;
			font-size:   11px;
			border-top:  1px solid #D0D0D0;
			line-height: 32px;
			padding:     0 10px 0 10px;
			margin:      20px 0 0 0;
		}

		#container {
			margin:             10px;
			border:             1px solid #D0D0D0;
			-webkit-box-shadow: 0 0 8px #D0D0D0;
			-moz-box-shadow:    0 0 8px #D0D0D0;
		}


#nav ul {
	list-style: none;
	margin:     20px;
	padding:    10px;
}

#nav li {
	display: inline-block;
	margin:  0 5px;
	padding: 0;
}

#nav a {
	display:               block;
	padding:               5px 10px;
	background:            #ddd;
	border:                1px solid #999;
	border-radius:         4px;
	-moz-border-radius:    4px;
	-webkit-border-radius: 4px;
	text-decoration:       none;
	text-align:            center;
	color:                 #333;
	font-weight:           bold;
}

#nav a:hover {
	background: #fff;
}

	</style>
</head>
<body>
<div id="nav">
	<ul>
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li><a href="<?php echo base_url();?>site/">Site</a></li>
		<li><a href="<?php echo base_url();?>blog/">Blog</a></li>
		<li><a href="<?php echo base_url();?>cart_test/">Cart Test</a></li>
		<li><a href="<?php echo base_url();?>mycal/">Calendar</a></li>
		<li><a href="<?php echo base_url();?>site/members_area">Private Page</a></li>
		<li><a href="<?php echo base_url();?>gallery/">Gallery</a></li>
		<li><a href="<?php echo base_url();?>shop/">Shop</a></li>
		<li><a href="<?php echo base_url();?>files/">Files</a></li>
		<li><a href="<?php echo base_url();?>films/">Films</a></li>
		<li><a href="<?php echo base_url();?>films1/">Films1</a></li>
		<li><a href="<?php echo base_url();?>email/">Email</a></li>
		<li><a href="<?php echo base_url();?>login/">Login</a></li>
		<li><a href="<?php echo base_url();?>contact/">Contact</a></li>
	</ul>
</div>
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the
			<a href="user_guide/">User Guide</a>.</p>

		<p style="font-weight: bold;">
			<?php
			/**
			 * $data array holds the $test value
			 *
			 * @see Welcome::index()
			 * @var Welcome $test
			 */
			echo $test;
			?>
		</p>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds
		<br />
		Memory: {memory_usage}
	</p>
</div>

</body>
</html>