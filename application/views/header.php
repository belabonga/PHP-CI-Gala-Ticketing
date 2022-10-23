<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link href="<?php echo base_url('assets/');?>images/title_logo.png" rel='shortcut icon'>
		<link href="<?php echo base_url('assets/');?>css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url('assets/');?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url('assets/');?>css/bear.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url('assets/');?>css/beartwo.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url('assets/');?>css/bearthree.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url('assets/');?>css/login_css.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url('assets/');?>css/bear.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url('assets/');?>css/beartwo.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url('assets/');?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all">


		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700italic,400italic,300,900,700,900italic,300italic' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="<?php echo base_url('assets/');?>js/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo base_url('assets/');?>js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/');?>js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
	</head>
