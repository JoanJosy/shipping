<!DOCTYPE html>
<html lang="en">
<head>
    <title>Journey | Contacts</title>
    <meta charset="utf-8">
    <link rel="icon" href="./template/images/favicon.ico">
    <link rel="shortcut icon" href="./template/images/favicon.ico">
    <link rel="stylesheet" href="./template/css/style.css">
    <link rel="stylesheet" href="./template/css/form.css">
    <script src="./template/js/jquery.js"></script>
    <script src="./template/js/forms.js"></script>
    <script src="./template/js/jquery-migrate-1.1.1.js"></script>
    <script src="./template/js/superfish.js"></script>
    <script src="./template/js/jquery.equalheights.js"></script>
    <script src="./template/js/jquery.easing.1.3.js"></script>
    <script src="./template/js/jquery.ui.totop.js"></script>
    <script type="text/javascript">
        function validateform()
        {
            var x=document.forms["form1"]["txtname"].value;
            if (x==null || x=="")
            {
                alert("enter your name");
                return false;
            }
            var x = document.forms["form1"]["txtemailid"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
            var x=document.forms["form1"]["txtsubject"].value;
            if (x==null || x=="")
            {
                alert("enter your message");
                return false;
            }
            var x=document.forms["form1"]["txtdescription"].value;
            if (x==null || x=="")
            {
                alert("enter your description");
                return false;
            }
        }
    </script>


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
                    <li><a href="commongallery.php">Gallery</a></li>
                    <li><a href="ship.php">Ship</a>
                    <ul>
                        <li><a href="ship.php">party Cruise</a></li>
                        <li><a href="dayship.php">Day Cruise</a></li>
                    </ul></li>
                    <li class="current"><a href="contactus.php">Contacts</a></li>
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
                <h3>Stay in Touch</h3>
                <div class="map">
                    <figure class="img_inner fleft">
                        <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                    </figure>
                    <address>
                        <dl>
                            <dt> 8901 Marmora Road,<br>
                                Australia, D04 89GR. </dt>
                            <dd><span>Freephone:</span>+1 800 559 6580</dd>
                            <dd><span>Telephone:</span>+1 800 603 6035</dd>
                            <dd><span>FAX:</span>+1 800 889 9898</dd>
                            <dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
                        </dl>
                    </address>
                    <address class="mb0">
                        <dl>
                            <dt> 9870 St Vincent Place,<br>
                                Glasgow, DC 45 Fr 45. </dt>
                            <dd><span>Freephone:</span>+1 800 559 6580</dd>
                            <dd><span>Telephone:</span>+1 800 603 6035</dd>
                            <dd><span>FAX:</span>+1 800 889 9898</dd>
                            <dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
                        </dl>
                    </address>
                </div>
            </div>
            <div class="grid_3">
                <h3>Contact Us</h3>
                <?php
                include('./database/dbconnection.php');
                ?>
               </div>
                        </div>
        <form name="form1" method="post" action="">
            <table  height="300">

                <tr>
                    <td width="82"> name</td>
                    <td width="192"><label for="txtname"></label>
                        <input type="text" name="txtname" id="txtname"></td>
                </tr>
                <td>emailid</td>
                <td><label for="txtemailid"></label>
                    <input type="email" name="txtemailid" id="txtemailid"></td>
                </tr>

                <tr>
                    <td>Subject</td>
                    <td><label for="txtsubject"></label>
                        <input type="text" name="txtsubject" id="txtsubject"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><label for="txtdescription"></label>
                        <textarea name="txtdescription" id="txtdescription" style="width: 145px;height: 150px;"></textarea></td>
                </tr>






                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" onClick="return validateform(form1)" ></td>
                </tr>
            </table>
        </form>
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
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['txtname'];
    $email=$_POST['txtemailid'];
    $subject=$_POST['txtsubject'];

    $description=$_POST['txtdescription'];



    $insQuery="insert into tbl_contact(contact_name,contact_email,contact_subject,contact_description)values('".$name."','".$email."','".$subject."','".$description."')";
    mysql_query($insQuery,$con) or die(mysql_error());
    echo "<script> alert('contact form submitted successfully')</script>";

}
?>