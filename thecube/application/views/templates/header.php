<!doctype html>
<html>
	<title>Kicksupply</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid Serif">

	<head>
		<link rel="stylesheet" type ="text/css" href="<?= asset_url();?>css/style.css" >
	    <link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/navbar.css" >
	    <link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/carousel.css" >
	    <link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/boxes.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
	    <link rel="stylesheet"  type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
	    <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"/>
		<script type="text/javascript" src="jquery.js"></script>
	</head>

<body>
 <nav class="navbar">
        <ul>
            <a href="index.html"><img class="logo" src="<?= asset_url();?>imgs/logo.png" width="339" height="97"></a>
            <div class="list-items-container">
                <li><a href="<?php echo base_url(); ?>home"> Home </a>
                    <hr color=#11338E>
                </li>
                <li><a href="<?php echo base_url(); ?>store"> Store </a>
                    <hr color=#11338E>
                </li>
                <li><a href="<?php echo base_url(); ?>signin"> Account </a>
                    <hr color=#11338E>
                </li>
                <li><a href="<?php echo base_url(); ?>support"> Support </a>
                    <hr color=#11338E>
                </li>
                <li id="cart">
                    <a href="#"><img src="<?= asset_url();?>imgs/cart.png" width="56" height="55"></a>
                </li>

                <a href="<?php echo base_url(); ?>signin"><button id="login-button">Log In</button> </a>

            </div>

        </ul>

    </nav>
	</body>