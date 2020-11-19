<!DOCTYPE html>
<html lang="en">
<head>
    <title>Journey</title>
    <meta charset="utf-8">
    <link rel="icon" href="./template/images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="./template/css/style.css">
    <link rel="stylesheet" href="./template/css/slider.css">
    <script src="./template/js/jquery.js"></script>
    <script src="./template/js/jquery-migrate-1.1.1.js"></script>
    <script src="./template/js/superfish.js"></script>
    <script src="./template/js/sForm.js"></script>
    <script src="./template/js/jquery.jqtransform.js"></script>
    <script src="./template/js/jquery.equalheights.js"></script>
    <script src="./template/js/jquery.easing.1.3.js"></script>
    <script src="./template/js/tms-0.4.1.js"></script>
    <script src="./template/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="./template/js/jquery.ui.totop.js"></script>
    <script>
        $(window).load(function () {
            $('.slider')._TMS({
                show: 0,
                pauseOnHover: false,
                prevBu: '.prev',
                nextBu: '.next',
                playBu: false,
                duration: 800,
                preset: 'random',
                pagination: false, //'.pagination',true,'<ul></ul>'
                pagNums: false,
                slideshow: 8000,
                numStatus: false,
                banners: true,
                waitBannerAnimation: false,
                progressBar: false
            });
            $("#tabs").tabs();
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <!--[if lt IE 9]>
    <script src="./template/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="./template/css/ie.css">
    <![endif]-->
</head>
<body class="page1">
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index.php"><img src="./template/images/logo3.jpg" alt=""></a></h1>
            <div class="clear"></div>
        </div>
        <div class="menu_block">
            <nav>
                <ul class="sf-menu">
                    <li class="current"><a href="index.php">Home</a></li>
                    <li class="with_ul"><a href="about.php">About</a>

                    </li>
                    <li><a href="commongallery.php">Gallery</a></li>
                    <li><a href="#">Ship</a>
                        <ul>
                            <li><a href="ship.php">party Cruise</a></li>
                            <li><a href="dayship.php">Day Cruise</a></li>
                        </ul>
                    </li>


                    <li><a href="contactus.php">Contacts</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>

</header>
<div class="main">
    <div class="container_12">
        <div class="grid_12">
            <div class="slider-relative">
                <div class="slider-block">
                    <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
                        <ul class="items">
                            <li><img src="./template/images/slide211.jpg" alt="">
                                <div class="banner">
                                    <div>The most modern fleet in the world</div>
                                    <br>
                                    <span> The mediterranean way of life</span> </div>
                            </li>
                            <li><img src="./template/images/slide222.jpg" alt=""></li>
                            <li><img src="./template/images/slide.jpg" alt=""></li>
                            <li><img src="./template/images/slide3.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container_12">
            <div class="grid_12">
                <h3>Top Features</h3>
            </div>
            <div class="boxes">
                <div class="grid_4">
                    <figure>
                        <div><img src="./template/images/weddinh.jpg"style="width: 360px;height: 337px;" alt=""></div>
                        <figcaption>
                            <h3>wedding special</h3>
                            Our Wedding or reception cruise will ensure an incredibly memorable and special day. Your guests will feel special and bond very quickly on a wedding cruise .
                            <a href="wed.php" class="btn bt1">Details</a></div>
                <div class="grid_4">
                    <figure>
                        <div><img src="./template/images/excursion.jpg"style="width: 360px;height: 337px" alt=""></div>
                        <figcaption>
                            <h3>Week-end special</h3> Our ship provides planned activities for day and night, parents can unwind however they like while kids do their own thing. Everyone can enjoy each moments.

                            <a href="weakend.php" class="btn bt1">Details</a>. </figcaption>
                    </figure>
                </div>
                <div class="grid_4">
                    <figure>
                        <div><img src="./template/images/wedg.jpg"style="height: 335px;" alt=""></div>
                        <figcaption>
                            <h3>Food and Dinning</h3>
                            Once you step onboard the choices are all yours — including what and when to eat. Variety is the spice of life, especially when it comes to dining.So we provide it for you
                            <a href="fooding.php" class="btn bt1">Details</a></figcaption>
                    </figure>
                </div>
                <div class="clear"></div>
            </div>
            <div class="grid_8">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">onboard our ship</a></li>

                    </ul>
                    <div class="clear"></div>
                    <div class="tab_cont" id="tabs-1"> <img src="./template/images/service1.jpg" alt="">
                        <div class="extra_wrapper">
                            <div class="text1">Services</div>
                            <p class="style1" >
                                Always at the heart of the customers, experience is our warm and award-winning style of service that is never in the way and never out of reach. We  providing the intuitive, gracious service that has long defined classic cruising. Our extensive onboard services, from special dining requests to full service laundry and dry cleaning services, are designed with your comfort and convenience in mind. Our specially trained crew takes pride in anticipating and fulfilling your every wish .</p>
                            <div class="clear "></div>
                        </div>
                        <div class="clear cl1"></div>
                        <img src="./template/images/service21.jpg" alt="">
                        <div class="extra_wrapper">
                            <br>
                            <div class="text1 tx1">Entertainment</div>
                            <p class="style1" >

                            Evenings on board glitter with choices. Arrive in a lounge to the strains of a lively dance band. Take in a thrilling show on stage. Share a martini flight in Mix; sing along in the Piano Bar. Stay up late into the night.                            <div class="clear"></div>

                            <div class="clear "></div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="grid_4">
                <div class="newsletter_title">NewsLetter </div>
                <div class="n_container">
                    <form id="newsletter" action="#">
                        <div class="success">Your subscribe request has been sent!</div>
                        <div class="text1">Sign up to receive our newsletters </div>
                        <label class="email">
                            <input type="email" value="email address" >
                            <span class="error">*This is not a valid email address.</span> </label>
                        <div class="clear"></div>
                        <a href="#" class="" data-type="submit"></a>
                    </form>
                    <ul class="list">
                        <li><a href="login.php">Log in Here....! </a></li>
                        <li><a href="registration.php">Register Now</a></li>
                        <li><a href="ship.php">Book your ship </a></li>

                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>