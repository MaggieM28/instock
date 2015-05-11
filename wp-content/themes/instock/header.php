<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" />
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Open+Sans+Condensed:300|Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>
<body>
<div id="rotator">
  <div class="container">
  	<div class="menu-wrap">
  		<nav class="menu">
  			<ul class="nav nav-pills pull-right">
				<li><a href="">Home</a></li>
				<li><a href="">Categories</a></li>
				<li ><a href="">Pricing</a></li>
				<li ><a href="">Contact</a></li>
			</ul>	
  		</nav>
  	</div>
	<button class="menu-button" id="open-button"></button>
<div class="content-wrap">
	<div class="content">



