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
            <li class=""><a href="index.php">Log out</a></li>
            <li class="active"><a href="view(userprofile).php">edit profile</a></li>
            <li class="active"><a href="changepassword.php">change password</a></li>
            <li class="active"><a href="party_booking.php">party cruise</a></li>
            <li class="active"><a href="daycru_booking.php">day cruise</a></li>




        </ul>
    </div>
</div>
<hr />
<div id="wrapper">

    <script type="text/javascript">
        function validateform()
        {
            var x=document.forms["form1"]["ship"].value;
            if (x==null || x=="")
            {
                alert("select your ship");
                return false;
            }


            var x=document.forms["form1"]["txtdate"].value;
            if (x==null || x=="")
            {
                alert("select your date");
                return false;
            }
            $date=[y/m/d]
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
    $id=$_REQUEST['id'];
    session_start();
    $NAME=$_SESSION['Name'];
    $userid=$_SESSION['ID'];
    ?>
    <h2>
        <?php echo "WELCOME "." .... ". $NAME ;?></h2>
    <form name="form1" method="post" action="">
        <table  align="center"  height="300">
            <caption>
               Party  Ship Booking
            </caption>
            <tr>
                <td>Ship</td>
                <td>
                    <select name="ship">
                        <option value="sel">----select---</option>
                        <?php
                        $str="select * from tbl_ship";
                        $sel=mysql_query($str,$con)or die("error in fetching place");
                        while($row=mysql_fetch_array($sel))
                        {
                            ?>
                            <option value="<?php echo $row['ship_id'];?>"><?php echo $row['ship_name'];?></option>
                        <?php
                        }

                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Pick up</td>
                <td>
                    <select name="port">
                        <option value="sel">----select---</option>
                        <?php
                        $str="select * from tbl_port";
                        $sel=mysql_query($str,$con)or die("error in fetching place");
                        while($row=mysql_fetch_array($sel))
                        {
                            ?>
                            <option value="<?php echo $row['port_id'];?>"><?php echo $row['port_name'];?></option>
                        <?php
                        }

                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Drop off</td>
                <td>
                    <select name="port">
                        <option value="sel">----select---</option>
                        <?php
                        $str="select * from tbl_port";
                        $sel=mysql_query($str,$con)or die("error in fetching place");
                        while($row=mysql_fetch_array($sel))
                        {
                            ?>
                            <option value="<?php echo $row['port_id'];?>"><?php echo $row['port_name'];?></option>
                        <?php
                        }

                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date</td>
                <td><label for="txtdate"></label>
                    <input type="date" name="txtdate" id="txtdate" ></td>
            </tr>
             <tr>
            <td>Phonenumber</td>
            <td><label for="txtphone"></label>
                <input type="text" name="txtphone" id="txtphone" ></td>
            </tr>

            <tr>
                <td>Emailid</td>
                <td><label for="txtemailid"></label>
                    <input type="email" name="txtemailid" id="txtemailid"></td>
            </tr>




            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" onClick="return validateform(form1)"  ></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $ship=$_POST['ship'];
        $port=$_POST['port'];

        // $name=$_POST['txtname'];
        $date=$_POST['txtdate'];

        $phone=$_POST['txtphone'];


        $email=$_POST['txtemailid'];



        $insQuery="insert into party_booking(ship_id,port_id,user_id,cargob_date,cargob_phone,cargob_email)values('".$ship."','".$port."','".$userid."','".$date."','".$phone."','".$email."')";
        mysql_query($insQuery,$con) or die(mysql_error());
        echo "<script> alert('ship booking successfully...pls check your mail')</script>";

    }
    ?>
    <br><br><br>


</div>
<div id="wrapper2">
    <div id="footer">
        <ul>
            <li class="first">

            </li>


        </ul>
    </div>
    <p id="legal"> &copy;2007 Asterisk. All Rights Reserved.
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        Design by <a target="_blank" href="http://www.freecsstemplates.org/">Free CSS Templates</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        Icons by <a target="_blank" href="http://famfamfam.com/">FAMFAMFAM</a>. <br />
        <a href="http://validator.w3.org/check/referer" class="xhtml">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css">Valid <abbr title="Cascading Style Sheets">CSS</abbr></a> </p>
</div>
</body>
</html>
