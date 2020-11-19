<!DOCTYPE html>
<html lang="en">
<head>
    <title>Journey | Gallery</title>
    <meta charset="utf-8">
    <link rel="icon" href="./template/images/favicon.ico">
    <link rel="shortcut icon" href="./template/images/favicon.ico">
    <link rel="stylesheet" href="./template/css/style.css">
    <link rel="stylesheet" href="./template/css/touchTouch.css">
    <script src="./template/js/jquery.js"></script>
    <script src="./template/js/jquery-migrate-1.1.1.js"></script>
    <script src="./template/js/superfish.js"></script>
    <script src="./template/js/jquery.equalheights.js"></script>
    <script src="./template/js/jquery.easing.1.3.js"></script>
    <script src="./template/js/jquery.ui.totop.js"></script>
    <script src="./template/js/touchTouch.jquery.js"></script>
    <script>
        $(window).load(function () {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
        $(function () {
            $('.gallery a.gal').touchTouch();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="./template/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="./template/css/ie.css">
    <![endif]-->
</head>
<body>
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index.php"><img src="./template/images/logo3.jpg" alt=""></a></h1>
            <div class="clear"></div>
        </div>
        <div class="menu_block">
            <nav>
                <ul class="sf-menu">
                    <li class=""><a href="index.php">Home</a></li>
                    <li class="with_ul"><a href="about.php">About</a>

                    </li>
                    <li class="current"><a href="commongallery.php">Gallery</a></li>
                    <li><a href="ship.php">Ship</a>
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
    <div class="content">
        <div class="container_12">
            <div class="grid_12">
                <h3>Our Gallery</h3>
            </div>
            <div class="clear"></div>
            <div class="gallery">
                <div class="grid_4"> <a href="./template/images/wed111.jpg" class="gal img_inner"><img src="./template/images/wed111.jpg" alt=""></a> </div>
                <div class="grid_4"> <a href="./template/images/Starship.jpg" class="gal img_inner"><img src="./template/images/Starship.jpg" alt=""></a> </div>
                <div class="grid_4"> <a href="./template/images/Aussie.jpg" class="gal img_inner"><img src="./template/images/Aussie.jpg" alt=""></a> </div>
                <div class="clear"></div>
                <div class="grid_4"> <a href="./template/images/Starship3.jpg" class="gal img_inner"><img src="./template/images/Starship3.jpg" alt=""></a> </div>
                <div class="grid_4"> <a href="./template/images/bed.jpg" class="gal img_inner"><img src="./template/images/bed.jpg" alt=""></a> </div>
                <div class="grid_4"> <a href="./template/images/Karisma_950x650_DJ.jpg" class="gal img_inner"><img src="./template/images/Karisma_950x650_DJ.jpg" alt=""></a> </div>
                <div class="clear"></div>
                <div class="grid_4"> <a href="./template/images/Masteka2-950x650-jacuzzi-2.jpg" class="gal img_inner"><img src="./template/images/Masteka2-950x650-jacuzzi-2.jpg" alt=""></a> </div>
                <div class="grid_4"> <a href="./template/images/s666.jpg" class="gal img_inner"><img src="./template/images/s666.jpg" alt=""></a> </div>
                <div class="grid_4"> <a href="./template/images/pies4.jpg" class="gal img_inner"><img src="./template/images/pies4.jpg" alt=""></a> </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="bottom_block">
        <div class="container_12">
            <div class="grid_2 prefix_2">
                <ul>
                    <li><a href="#">FAQS Page</a></li>
                    <li><a href="#">People Say</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="#">Useful links</a></li>
                    <li><a href="#">Partners</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="#">Insurance</a></li>
                    <li><a href="#">Family Travel</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h4>Contact Us:</h4>
                TEL: 1-800-234-5678<br>
                <a href="#">info@demolink.org</a> </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<footer>
    <div class="container_12">
        <div class="grid_12">
            <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
            <div class="copy"> Journey &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
        </div>
        <div class="clear"></div>
    </div>
</footer>
</body>
</html>