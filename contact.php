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
    <script>
        $(window).load(function () {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="./template/css/ie.css">
    <![endif]-->
</head>
<body>
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index.html"><img src="./template/images/logo.png" alt=""></a></h1>
            <div class="clear"></div>
        </div>
        <div class="menu_block">
            <nav>
                <ul class="sf-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a>
                        <ul>
                            <li><a href="#">Agency</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="tours.html">Tours</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="current"><a href="contacts.html">Contacts</a></li>
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
                                Glasgow, D04 89GR. </dt>
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
                <form id="form" method="post">
                    <div class="success_wrapper">
                        <div class="success">Contact form submitted!<br>
                            <strong>We will be in touch soon.</strong> </div>
                    </div>
                    <fieldset>
                        <label class="name">
                            <input type="text" name="txtname" value="Name">
                            <br class="clear">
                            <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
                        <label class="email">
                            <input type="text" name="txtemailid" value="Email">
                            <br class="clear">
                            <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
                        <label class="name">
                            <input type="text" name="txtsubject" value="Subject">
                            <br class="clear">
                            <span class="error error-empty">*This is not a valid subject.</span><span class="empty error-empty">*This field is required.</span> </label>
                        <label class="message">
                            <textarea name="txtdescription">Message</textarea>
                            <br class="clear">
                            <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                        <div class="clear"></div>
                        <div class="btns"><a data-type="reset" class="btn">Clear</a>
                            <div class="none"></div>
                            <a data-type="submit"name="submit" class="btn">Send</a>
                            <div class="clear"></div>
                        </div>
                    </fieldset>
                </form>
                <?php
                if(isset($_POST['submit']))
                {
                    $name=$_POST['txtname'];
                    $subject=$_POST['txtemailid'];
                    $phone=$_POST['txtsubject'];

                    $description=$_POST['txtdescription'];



                    $insQuery="insert into tbl_contact(contact_name,contact_email,contact_subject,contact_description)values('".$name."','".$email."','".$subject."','".$description."')";
                    mysql_query($insQuery,$con) or die(mysql_error());
                    echo "<script> alert('contact form submitted successfully')</script>";

                }
                ?>
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