<!DOCTYPE html>
<html>

<head>
    <title>The Cube</title>
    <link href="<?= asset_url();?>css/style.css" rel="stylesheet">
    <link href="<?= asset_url();?>css/navbar.css" rel="stylesheet">
    <link href="<?= asset_url();?>css/carousel.css" rel="stylesheet">
    <link href="<?= asset_url();?>css/boxes.css" rel="stylesheet">
    <link href="<?= asset_url();?>css/store.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".carousel-featured").slick({
                speed: 1000,
                slidesToShow: 1,
                arrows: true,
                autoplay: true,
            });
        });
    </script>

</head>


<body style="overflow-x: hidden;">
    <!--NAVBAR-->
   <nav class="navbar">
        <ul>
            <a href="echo base_url();?>home"><img class="logo" src="<?= asset_url();?>imgs/logo.png" width="339" height="97"></a>
            <div class="list-items-container">
                <li><a href="<?php echo base_url(); ?>home"> Home </a>
                    <hr color=#11338E>
                </li>
                <li><a class ="current" href="<?php echo base_url(); ?>store"> Store </a>
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


    <nav class="navbar-store">
        <ul>
            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Your Store</a>
                <div class="dropdown-content">
                    <a href="#">Recommended Games</a>
                    <a href="#">Featured Games</a>
                    <a href="#">Your Wishlist</a>
                    <a href="#">Home Store</a>
                </div>
            </li>
            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Games</a>
                <div class="dropdown-content">
                    <a href="#">By Genre</a>
                    <a href="#">By Rating</a>
                    <a href="#">By Sales</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Popular Tags</a>
                <div class="dropdown-content">
                    <a href="#">RPG</a>
                    <a href="#">Single Player</a>
                    <a href="#">Multiplayer</a>
                    <a href="#">VR</a>
                    <a href="#">Sandbox</a>
                    <a href="#">Anime</a>
                    <a href="#">Pixel Graphics</a>
                    <a href="#">Survival</a>
                    <a href="#">Arcade</a>
                    <a href="#">Hidden Object</a>
                    <a href="#">PvP</a>
                    <a href="#">MMORPG</a>
                    <a href="#">Sci-Fi</a>
                </div>
            </li>

            <li id="search-bar">
                <input type="text" name="search" placeholder="Search.."></li>
        </ul>
        <hr>
    </nav>


    <div id="big-container-featured-recommended">
        <div id="container-featured">
            <div class="heading">FEATURED GAMES</div>
            <div class="carousel-featured">
                <div class="image-with-caption"><img src="<?= asset_url();?>imgs/featured_1.png" />
                    <div class="container-caption">
                        <div class="caption-title">
                            Title 1<br>
                            <div class="caption-description">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                        </div>
                    </div>
                </div>
                <div class="image-with-caption"><img src="<?= asset_url();?>imgs/featured_2.png" />
                    <div class="container-caption">
                        <div class="caption-title">
                            Title 2<br>
                            <div class="caption-description">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                        </div>
                    </div>
                </div>
                <div class="image-with-caption"><img src="<?= asset_url();?>imgs/featured_3.png" />
                    <div class="container-caption">
                        <div class="caption-title">
                            Title 3<br>
                            <div class="caption-description">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                        </div>
                    </div>
                </div>
            </div>

            <span class="browse-all-button">Browse All</span>
        </div>

        <div id="container-recommended">
            <div class="heading">RECOMMENDED GAMES</div>
            <ul>
                <li><img src="<?= asset_url();?>imgs/recommended-1.png" width="192px" height="274px"></li>
                <li style="float:right;"><img src="<?= asset_url();?>imgs/recommended-2.png" width="134px" height="176px"></li>
                <li style="float: right; margin-top: -87px;"><img src="<?= asset_url();?>imgs/recommended-3.png" width="134px" height="82px"></li>
                <li style="margin-top: 8px;"><img src="<?= asset_url();?>imgs/recommended-4.png" width="344px" height="184px"></li>
            </ul>

            <span class="browse-all-button">Browse All</span>
        </div>
    </div>

    <div id="container-wishlist">
        <div class="heading">YOUR WISHLIST</div>
        <div class="signin-notice-form-container">
            <h2 class="signin-notice">Sign in to your Cube account to view your wishlist and personalized recommendations.</h2>
            <a href="<? echo base_url();?>signin"><button id="signin-button">Sign In</button> </a></div>
    </div>

    <nav class="navbar-browse">
        <div class="heading">BROWSE CUBE</div>
        <div class="box-button">BY GENRE</div>
        <div class="box-button">BY RATING</div>
        <div class="box-button">BY SALES</div>
        <div class="box-button" id="end">BY TAGS</div>
    </nav>
</body>

</html>
