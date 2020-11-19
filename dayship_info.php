<?php
//include('./database/dbconnection.php');
//$id=$_REQUEST['id'];
//if($_GET['edit'])
//{
//
//    $selQuery="select * from  tbl_ship where ship_id='".$id."'";
//    $sel=mysql_query($selQuery);
//    list($ship_id,$ship_name)=mysql_fetch_array($sel);
//}
//echo $ship_id;
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Journey | About</title>
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
            <h1><a href="index.html"><img src="./template/images/logo3.jpg" alt=""></a></h1>
            <div class="clear"></div>
        </div>
        <div class="menu_block">
            <nav>
                <ul class="sf-menu">
                    <li class=""><a href="index.php">Home</a></li>
                    <li class="with_ul"><a href="about.php">About</a>

                    </li>
                    <li><a href="commongallery.php">Gallery</a></li>
                    <li><a href="ship.php">Ship</a>
                        <ul>
                            <li><a href="ship.php">party Cruise</a></li>
                            <li><a href="dayship.php">Day Cruise</a></li>
                        </ul></li>

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
                <div class="">
                    <h3 style="margin-top: -40px;">Ship Details</h3>
                    <img src="./template/images/dayyy.jpg" alt="" class="img_inner fleft">
                    <p class="text1"><a href="#"><br> </a></p>
                    <?php
                    include('./database/dbconnection.php');
                    $id=$_REQUEST['id'];
                    $selquery="select importance from dayship_dtls where day_id='".$id."' ";
                    $sel=mysql_query($selquery,$con);
                    while($row=mysql_fetch_array($sel))
                    {
                    ?>
                    <div style="margin-top: 100px;margin-top: -30px;" > <?php echo $row['importance'];?><br></div>
                    <?php
                    }
                    ?></p>

                    <div class="clear"></div>
                    <br>
                    <p style="font-size: 20px;font: sans-serif"> Ship Suitability</p>
                    It is for your private enjoyment Trips,Travelling,Hollyday Trip,Excersion
                    <p> We offer luxurious private events. An extremely comfortable venue with great catering options, the Cruises has all the facilities needed for a fantastic private event.

                        .</p>
                </div>
            </div>
            <div class="grid_3">
                <h3>More Features </h3>
                <ul class="list1">
                    <li>
                        <div class="count">1</div>
                        <div class="extra_wrapper">

                            <div class="text1"><?php
                                include('./database/dbconnection.php');
                                $id=$_REQUEST['id'];
                                $selquery="select * from dayship_image r,dayship d where d.dship_id=r.dship_id and r.dship_id='".$id."'";
                                $sel=mysql_query($selquery,$con);
                                while($row=mysql_fetch_array($sel))
                                {
                                ?>
                                <a href="dayship_galery.php?edit=1&id=<?php echo $row['dship_id'];?>"><?php }
                                    ?>Gallery</a></div>
                            You can view our ship images here </div>

                    </li>
                    <li>
                        <div class="count">2</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="contactus.php">Contact Us </a></div>
                            TEL: 1-800-234-5678<br> </div>
                    </li>
                    <li>
                        <div class="count">3</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="login.php">Book Your Ship </a></div>
                            You can book your ship after sign up </div>
                    </li>
                    <li>
                        <div class="count">4</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="moreinfo.php">Port Location</a></div>
                            Click here and know about pic up point</div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="grid_12">
                <div class="hor_sep"></div>
            </div>
            <div class="clear"></div>
            <div class="grid_9">
                <h3 class="head1">What We Offer</h3>
                <p class="text1 tx2">
                <p><?php
                    include('./database/dbconnection.php');
                    $id=$_REQUEST['id'];
                    $selquery="select specal from dayship_dtls where dship_id='".$id."' ";
                    $sel=mysql_query($selquery,$con);
                    while($row=mysql_fetch_array($sel))
                    {
                    ?>
                <div style="margin-top: 100px;margin-top: -30px;" > <?php echo $row['specal'];?><br></div>
                <?php
                }
                ?></p>

                <div>
                    <?php
                    include('./database/dbconnection.php');
                    $id=$_REQUEST['id'];
                    $selquery="select * from dayship_dtls r,dayship d where d.dship_id=r.dship_id and r.dship_id='".$id."' ";
                    $sel=mysql_query($selquery,$con);
                    while($row=mysql_fetch_array($sel))
                    {
                    ?>

                    <div >
                        <div style="margin-left: 150px;">
                            <p style="font-size: 15px;">Specifications</p>


                            <div >Built     : <?php echo $row['built'];?><br></div>
                            <div > capacity:<?php echo $row['capacity'];?><br></div>
                            <div>maximum speed:<?php echo $row['mspeed'];?><br></div>
                            <div> average speed:<?php echo $row['avgspeed'];?><br></div>
                            <div>amount:<?php echo $row['amount'];?><br>
                            </div>
                        </div>


                        <?php
                        }
                        ?>

                    </div>




                </div>


                <!--
                   <ul class="list2">-->
                <!--                    <li><a href="#">Vcem psum dr sit </a></li>-->
                <!--                    <li><a href="#">Zdfem psum dr sittr amewe </a></li>-->
                <!--                    <li><a href="#">Game sum dr sit ame conse</a></li>-->
                <!--                    <li><a href="#">Dem psum dr sit ametekot </a></li>-->
                <!--                </ul>-->
                <div class="clear"></div>
            </div>
            <div class="grid_3">
                <h3 class="head1">Further Details</h3>
                <blockquote>
                    <p class="text1"> “ Please call the friendly trip  Escapes team with any enquiries
                        Telephone 02 9328 4748 (Open 7 days)”</p>
                    <div class="bq_bot">
                        <div class="text1">Mark Johnson</div>
                        Director of Ship Management </div>
                </blockquote>
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