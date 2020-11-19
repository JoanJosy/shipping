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
            if (document.form1.txtname.value == "")
            {
                alert("Please enter your phone number correctly");
                document.form1.txtname.focus();
                return false;
            }
            else
            {
                if (/^\d{10}$/.test(form1.txtname.value))
                {

                }
                else
                {
                    alert("Invalid phone number")
                    txtname.focus()
                    return false;
                }
            }

        }
    </script>

    <?php
    include('./database/dbconnection.php');
    ?>
    <div style="height: 200"
    <form name="form1" method="post" action="">
        <table height="250" align="center">
            <caption>
               FORGET PASSWORD?
            </caption>
            <tr>
                <td width="190">Enter your phone number:</td>
                <td width="192"><label for="txtname"></label>
                    <input type="text" name="txtname" id="txtname"></td>
            </tr>


            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="submit"value="Submit" onClick="return validateform(form1)"  ></td>
            </tr>
        </table>
    </form>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['txtname'];



        $insQuery="insert into forget(phone) values('".$name."')";
        mysql_query($insQuery,$con) or die(mysql_error());
        echo "<script> alert('A conformation code will be send to your mobile')</script>";

    }
    ?>

</div>
<div id="wrapper2">
    <div id="footer">
        <div style="height: 300px;"

        <ul>
            <li class="first">

            </li>


        </ul>
        </div>
    </div>
    <p id="legal"> &copy;2007 Asterisk. All Rights Reserved.
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        Design by <a target="_blank" href="http://www.freecsstemplates.org/">Free CSS Templates</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        Icons by <a target="_blank" href="http://famfamfam.com/">FAMFAMFAM</a>. <br />
        <a href="http://validator.w3.org/check/referer" class="xhtml">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css">Valid <abbr title="Cascading Style Sheets">CSS</abbr></a> </p>
</div>
</body>
</html>
