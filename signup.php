<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Asterisk</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./asterisk/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div id="logo">
        <img src="./asterisk/images/logo3.jpg" alt=""></a>
        <!--        <p><a href="http://www.free-css.com/">Free CSS Template</a></p>-->
    </div>
    <div id="menu">
        <ul>
            <li class=""><a href="index.php">Home</a></li>
            <li class="active"><a href="login.php">Please Log In here....!</a></li>

        </ul>
    </div>
</div>
<hr />
<div id="wrapper">

<script type="text/javascript">
        function validateform()
        {
            var x=document.forms["form1"]["txtname"].value;
            if (x==null || x=="")
            {
                alert("enter your name");
                return false;
            }
            var x=document.forms["form1"]["txtaddress"].value;
            if (x==null || x=="")
            {
                alert("enter your address");
                return false;
            }
            if ( ( form1.gender[0].checked == false ) && ( form1.gender[1].checked == false ) )
            {
                alert ( "Please choose your Gender: Male or Female" );
                return false;
            }
            var x=document.forms["form1"]["txtage"].value;
            if (x==null || x=="")
            {
                alert("enter your age");
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

                    <?php
                    include('./database/dbconnection.php');
                    ?>

                    <form name="form1" method="post" action="">
                        <table height="500" align="center">
                            <caption style="font-size: 20px;color: #b1aaaa">
                                USER REGISTRATION
                            </caption>
                            <tr>
                                <td width="82"> Name</td>
                                <td width="192"><label for="txtname"></label>
                                    <input type="text" name="txtname" id="txtname"></td>
                            </tr>

                            <tr>
                                <td>Place</td>
                                <td><label for="txtplace"></label>
                                    <input type="text" name="txtplace" id="txtplace"></td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td><label for="txtstate"></label>
                                    <input type="text" name="txtstate" id="txtstate"></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><label for="txtcountry"></label>
                                    <input type="text" name="txtcountry" id="txtcountry"></td>
                            </tr>


                            <tr>
                                <td>phonenumber</td>
                                <td><label for="txtphone"></label>
                                    <input type="text" name="txtphone" id="txtphone" ></td>
                            </tr>
                            <tr>
                                <td>Emailid</td>
                                <td><label for="txtemailid"></label>
                                    <input type="text" name="txtemailid" id="txtemailid"></td>
                            </tr>
                            <tr>
                                <td>Usernmae</td>
                                <td><label for="txtuname"></label>
                                    <input type="text" name="txtuname" id="txtuname"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><label for="txtpassword"></label>
                                    <input type="password" name="txtpassword" id="txtpassword"></td>
                            </tr>



                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit" id="submit"value="Submit" onClick="return validateform(form1)"  ></td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    if(isset($_POST['submit']))
                    {
                        $name=$_POST['txtname'];
                        $place=$_POST['txtplace'];
                        $state=$_POST['txtstate'];
                        $country=$_POST['txtcountry'];





                        $phone=$_POST['txtphone'];
                        $email=$_POST['txtemailid'];
                        $uname=$_POST['txtuname'];
                        $password=$_POST['txtpassword'];



                        $insQuery="insert into tbl_user(user_name,user_place,user_state,user_country,user_phone,user_emailid,user_username,user_password,user_status)values('".$name."','".$place."','".$state."','".$country."','".$phone."','".$email."','".$uname."','".$password."','0')";
                        mysql_query($insQuery,$con) or die(mysql_error());
                        echo "<script> alert('You sign up successfully...the confirmation send to your mail')</script>";

                    }
                    ?>

</div>
<div id="wrapper2">
    <div id="footer">
        <ul>
            <li class="first">

            </li>


        </ul>
    </div>
    <p id="legal"> &copy;
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;
         <a target="_blank" href="http://www.freecsstemplates.org/"></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp;
         <a target="_blank" href="http://famfamfam.com/"></a><br />
        <a href="http://validator.w3.org/check/referer" class="xhtml"> <abbr title="eXtensible HyperText Markup Language"></abbr></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css"><abbr title="Cascading Style Sheets"></abbr></a> </p>
</div>
</body>
</html>
