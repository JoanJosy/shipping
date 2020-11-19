<!DOCTYPE html>
<html lang="en">
<head>
    <title>Journey | Tours</title>
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
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
        $(function () {
            $(".form1").jqTransform();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
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
                    <li class="current"><a href="index.php">Home</a></li>
                    <li class="with_ul"><a href="about.php">About</a>

                    </li>
                    <li><a href="commongallery.php">Gallery</a></li>
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
            <div class="grid_9">
                <h3>Our  day Ship's</h3>
                <div class="tours">

                    <?php
                    include('./database/dbconnection.php');
                    $id=$_REQUEST['id'];
                    $selquery="select * from dayship_dtls r,dayship d where d.dship_id=r.dship_id";
                    $sel=mysql_query($selquery,$con);
                    while($row=mysql_fetch_array($sel))
                    {
                        ?>
                        <div class="grid_4 alpha">
                            <div class="tour"> <img src="./mainadminhome/upload/<?php echo $row["image"]?>" alt="" class="img_inner fleft">
                                <div class="extra_wrapper">
                                    <p class="text1"><?php echo $row['name'];?> </p>
                                    <p class="price">Max Passangers:<?php echo $row['capacity'];?>  </p>
                                    <p class="price">Price per Person:<?php echo $row['amount'];?> </p>


                                    <a href="dayship_info.php?edit=1&id=<?php echo $row['dship_id'];?>" class="btn">Details</a> </div><br>
                                <br>

                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="clear"></div>


                    <div class="clear"></div>


                </div>
            </div>
            <div class="grid_3">
                <h3>Contact</h3>
                <address>
                    <dl>
                        <dt> 8901 Marmora Road,<br>
                            Glasgow, D04 89GR. </dt>
                        <dd><span>Freephone:</span>+1 800 559 6580</dd>
                        <dd><span>Telephone:</span>+1 800 603 6035</dd>
                        <dd><span>FAX:</span>+1 800 889 9898</dd>
                        <dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
                    </dl>
                </address>

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