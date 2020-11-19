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
                    <li class="current"><a href="index.php">Home</a></li>
                    <li class="with_ul"><a href="about.php">About</a>

                    </li>
                    <li><a href="commongallery.php">Gallery</a></li>
                    <li><a href="ship.php">Ship</a></li>

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
                <h3 style="margin-top: -28px;">Our Gallery</h3>
            </div>
            <div class="clear"></div>
            <div class="gallery">

                <?php
                include('./database/dbconnection.php');
                $id=$_REQUEST['id'];
                $selquery="select * from tbl_gallerysmall r,tbl_ship d where d.ship_id=r.ship_id and r.ship_id='".$id."'";
                $sel=mysql_query($selquery,$con);
                while($row=mysql_fetch_array($sel))
                {
                    ?>



<!--                        <img src="./upload/--><?php //echo $row["image"];?><!--"width="100" height="70"/></td>-->
                        <!--        <td><a href="add_cargo.php?del=1&id=--><?php //echo $row['cargo_id'];?><!--">delete</a></td>-->
                        <!--        <td><a href="edit_ship.php?edit=1&id=--><?php //echo $row['cargo_id'];?><!--">edit</a></td>-->




                <div class="grid_4"> <a href="./subadmin/upload/<?php echo $row["bimage"];?>" class="gal img_inner"><img src="./subadmin/upload/<?php echo $row["image"];?>" alt=""></a> </div>


                <?php
                }
                ?> <div class="clear"></div>
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