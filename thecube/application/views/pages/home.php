<!DOCTYPE html>
<html>

<head>
    <title>The Cube</title>
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
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".carousel-content").slick({
                speed: 1000,
                slidesToShow: 1,
                arrows: false,
                autoplay: true,
            });
        });

    </script>

</head>
<body>
 <nav class="navbar">
        <ul>
            <a href="index.html"><img class="logo" src="<?= asset_url();?>imgs/logo.png" width="339" height="97"></a>
            <div class="list-items-container">
                <li><a class ="current" href="<?php echo base_url(); ?>home"> Home </a>
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
    <div class="carousel-container">
        <h1>WELCOME TO CUBE</h1>
        <h2>The ultimate gaming platform.<br>Play, connect, share, and more.<br>Create a Cube account today!</h2>

        <div class="carousel-content-container">
            <div class="carousel-content">
                <div><img src="<?= asset_url();?>imgs/carousel_create.png" />
                </div>
                <div><img src="<?= asset_url();?>imgs/carousel_manage.png" />
                </div>
                <div><img src="<?= asset_url();?>imgs/carousel_share.png" />
                </div>
            </div>
        </div>
    </div>


    <div class="box-container">
        <div class="box">
            <div class="box-label">Instant Access to games</div>
            <div class="box-desc">There are hundreds of games to choose from. We have Action to Indie and everything in-between!</div>
            <span>Browse Game Store</span>
        </div>
        <div class="box">
            <div class="box-label">Play and Share</div>
            <div class="box-desc">Fulfill the wishes of others by viewing their wishlist and giving them a surprise gift!</div>
            <span>View Wishlist</span>
        </div>
        <div class="box">
            <div class="box-label">Availability</div>
            <div class="box-desc">We offer a catalog of PC, Mac, and Linux games, so you can buy once and play anywhere!</div>
            <span>Search for a game</span>
        </div>

    </div>

    <footer>
        <div class="footer-container">
            <span>Contact us: <br></span>
            <span style="color: grey; line-height: 18px;">Lorem ipsum dolor sit amet, <br>sapien etiam, nunc amet dolor<br> ac odio mauris justo. Luctus </span>
        </div>
    </footer>


</body>

</html>
