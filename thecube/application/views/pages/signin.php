<!DOCTYPE html>
<html>

<head>
    <title>Sign In</title>
    <link href="<?= asset_url();?>css/style.css" rel="stylesheet">
    <link href="<?= asset_url();?>css/navbar.css" rel="stylesheet">
    <link href="<?= asset_url();?>css/signin.css" rel="stylesheet">
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
                <li><a class ="current" href="<?php echo base_url(); ?>signin"> Account </a>
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
    <ul class="forms-container">
        <li>
            <div class="label">
                <h2>Sign In</h2>
                <h3>To an existing Cube account</h3>
            </div>
            <!--SIGNIN FORM-->
            <form action="/action_page.php">
                <div class="container">
                    <label>User name: </label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label>Password: </label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <button type="submit" id="signin-button">Sign In</button>
                </div>
            </form>
        </li>


        <li id="signup-container">
            <div class="label">
                <h2>Sign Up</h2>
                <h3>For a new free Cube account</h3>
            </div>
            <form id="signup">
                <div class="container" id="signup">
                    <div class="signup-details">
                        It's free to join and easy to use. Continue on to create your Cube account and get Cube, the leading digital solution for PC gamers.
                    </div>
                    <button id="signup-button">Join Cube</button>
                </div>
            </form>
        </li>
    </ul>

</body>

</html>
