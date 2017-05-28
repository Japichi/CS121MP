<!DOCTYPE html>
<html>

<head>
    <title>Support</title>
    <link href="<?= asset_url();?>css/style.css" rel="stylesheet">
    <link href="<?= asset_url();?>css/navbar.css" rel="stylesheet">
    <link href=<?= asset_url();?>"css/support.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar">
        <ul>
            <a href="index.html"><img class="logo" src="<?= asset_url();?>imgs/logo.png" width="339" height="97"></a>
            <div class="list-items-container">
                <li><a href="<?php echo base_url(); ?>home"> Home </a>
                    <hr color=#11338E>
                </li>
                <li><a  href="<?php echo base_url(); ?>store"> Store </a>
                    <hr color=#11338E>
                </li>
                <li><a  href="<?php echo base_url(); ?>signin"> Account </a>
                    <hr color=#11338E>
                </li>
                <li><a class ="current" href="<?php echo base_url(); ?>support"> Support </a>
                    <hr color=#11338E>
                </li>
                <li id="cart">
                    <a href="#"><img src="<?= asset_url();?>imgs/cart.png" width="56" height="55"></a>
                </li>

                <a href="<?php echo base_url(); ?>signin"><button id="login-button">Log In</button> </a>

            </div>

        </ul>


    <h1 class="support-heading">Open A Support Ticket</h1>

    <div class="signin-notice-form-container">
        <h2 class="signin-notice">Sign in to your Cube account to place a support ticket.</h2>
        <a href="signin.html"><button id="signin-button">Sign In</button> </a>
    </div>

    <div class="support-ticket-details">
        <h1 id="what-is-a">What is a</h1>
        <h2 id="support-ticket">SUPPORT TICKET?</h2>
        <p id="support-details">
            To provide better support, we use Support Tickets - you describe the problem on our website, and send the form so there is a <br> created ticket with an unique ID. You'll be notified by email everytime your ticket has changed - example when our support staff replies</p>
    </div>

</body>
</html>