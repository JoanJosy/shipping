<?php
include ("./mheader.php");
?>
    <script type="text/javascript">
        function validateform()
        {
            var x=document.forms["form1"]["txtname"].value;
            if (x==null || x=="")
            {
                alert("enter your name");
                return false;
            }
            var x=document.forms["form1"]["txtsubject"].value;
            if (x==null || x=="")
            {
                alert("enter your subject");
                return false;
            }
            var x=document.forms["form1"]["txtdescription"].value;
            if (x==null || x=="")
            {
                alert("enter your description");
                return false;
            }

            if (document.form1.txtphone.value == "")
            {
                alert("Please enter your phone number correctly");
                document.form1.txtphone.focus();
                return false;
            }
            else
            {
                if (/^\d{10}$/.test(form1.txtphone.value))
                {

                }
                else
                {
                    alert("Invalid phone number")
                    txtphone.focus()
                    return false;
                }
            }
            var x = document.forms["form1"]["txtemailid"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }
    </script>
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <div class="article"> <a href="#" class="com"><span>11</span></a>
                    <h2><span>Excellent Solution</span> For Your Business</h2>
                    <p class="infopost"><span class="date"></span> by <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;</a> &nbsp;&nbsp;|&nbsp;&nbsp; Log in here..1 <a href="#">templates</a>, <a href="#">internet</a></p>
                    <div class="clr"></div>
                    <div class="img"><img src="./template/images/images2.jpg" width="173" height="209" alt="" class="fl" /></div>
                    <div class="post_content">

                        <?php
                        include('./database/dbconnection.php');
                        ?>
                        <form name="form1" method="post" action="">
                            <table  height="300">
                                <caption>
                                    USER CONTACT FORM
                                </caption>
                                <tr>
                                    <td width="82"> name</td>
                                    <td width="192"><label for="txtname"></label>
                                        <input type="text" name="txtname" id="txtname"></td>
                                </tr>
                                <tr>
                                    <td>Subject</td>
                                    <td><label for="txtsubject"></label>
                                        <input type="text" name="txtsubject" id="txtsubject"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><label for="txtdescription"></label>
                                        <textarea name="txtdescription" id="txtdescription" ></textarea></td>
                                </tr>

                                <td>phonenumber</td>
                                <td><label for="txtphone"></label>
                                    <input type="text" name="txtphone" id="txtphone" ></td>
                                </tr>
                                <tr>
                                    <td>emailid</td>
                                    <td><label for="txtemailid"></label>
                                        <input type="email" name="txtemailid" id="txtemailid"></td>
                                </tr>




                                <tr>
                                    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" onClick="return validateform(form1)" ></td>
                                </tr>
                            </table>
                        </form>
                        <?php
                        if(isset($_POST['submit']))
                        {
                            $name=$_POST['txtname'];
                            $subject=$_POST['txtsubject'];
                            $description=$_POST['txtdescription'];
                            $phone=$_POST['txtphone'];
                            $email=$_POST['txtemailid'];



                            $insQuery="insert into tbl_contact(contact_name,contact_subject,contact_description,contact_phone,contact_email)values('".$name."','".$subject."','".$description."','".$phone."','".$email."')";
                            mysql_query($insQuery,$con) or die(mysql_error());
                            echo "<script> alert('contact form submitted successfully')</script>";

                        }
                        ?>
                        <br><br><br>


                    </div>
                    <div class="clr"></div>
                </div>

            </div>
            <div class="sidebar">
                <div class="searchform">

                </div>
                <div class="clr"></div>
                <div class="gadget">
                    <h2 class="star"><span>Sidebar</span> Menu</h2>
                    <div class="clr"></div>
                    <ul class="sb_menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">About us </a></li>
                        <li><a href="enquiry.php">Send enquiry</a></li>
                        <li><a href="contcatform.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="gadget">
                    <h2 class="star"><span>Sponsors</span></h2>
                    <div class="clr"></div>
                    <ul class="ex_menu">
                        <li><a href="#">Lorem ipsum dolor</a><br />
                            Donec libero. Suspendisse bibendum</li>
                        <li><a href="#">Dui pede condimentum</a><br />
                            Phasellus suscipit, leo a pharetra</li>
                        <li><a href="#">Condimentum lorem</a><br />
                            Tellus eleifend magna eget</li>
                        <li><a href="#">Fringilla velit magna</a><br />
                            Curabitur vel urna in tristique</li>
                        <li><a href="#">Suspendisse bibendum</a><br />
                            Cras id urna orbi tincidunt orci ac</li>
                        <li><a href="#">Donec mattis</a><br />
                            purus nec placerat bibendum</li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="fbg">
        <div class="fbg_resize">
            <div class="col c1">
                <h2><span>Image</span> Gallery</h2>
                <a href="#"><img src="./template/images/index1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
            <div class="col c2">
                <h2><span>Services</span> Overview</h2>
                <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
                <ul class="fbg_ul">
                    <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
                    <li><a href="#">Excepteur officia deserunt.</a></li>
                    <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
                </ul>
            </div>
            <div class="col c3">
                <h2><span>Contact</span> Us</h2>
                <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
                <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
                    <span>Telephone:</span> +123-1234-5678<br />
                    <span>FAX:</span> +458-4578<br />
                    <span>Others:</span> +301 - 0125 - 01258<br />
                    <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
            </div>
            <div class="clr"></div>
        </div>
    </div>
<?php
include ("./mfooter.php");

?>