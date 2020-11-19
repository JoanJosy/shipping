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



    <?php
    include('./database/dbconnection.php');

    if(isset($_POST['login']))
    {
        session_start();
        echo  $username=$_POST['txtuname'];
        echo  $password=$_POST['txtpassword'];

        $sql = "select * from tbl_admin where admin_username='".$username."' and admin_password='".$password."'";
        $result = mysql_query($sql,$con);
        $records = mysql_num_rows($result);
        $row = mysql_fetch_array($result);
        if ($records==0)
        {
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
        }
        else
        {
            $_SESSION['ID']=$row['admin_id'];
            $_SESSION['Name']=$row['admin_username'];
            header("location:../shipping/mainadminhome/mainadminhome.php");
        }
        $sql = "select * from tbl_sadmin where sadmin_username='".$username."' and sadmin_password='".$password."'";
        $result = mysql_query($sql,$con);
        $records = mysql_num_rows($result);
        $row = mysql_fetch_array($result);
        if ($records==0)
        {
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'mainhomecontent.php\';</script>';
        }
        else
        {
            $_SESSION['ID']=$row['sadmin_id'];
            $_SESSION['Name']=$row['sadmin_username'];
            header("location:../shipping/subadmin/subadminhome.php");
        }
        $sql = "select * from tbl_employee where emp_username='".$username."' and emp_password='".$password."' and emp_status=1 ";
        $result = mysql_query($sql,$con);
        $records = mysql_num_rows($result);
        $row = mysql_fetch_array($result);
        if ($records==0 && $sql==0)
        {
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'mainhomecontent.php\';</script>';
        }
        else
        {
            $_SESSION['ID']=$row['emp_id'];
            $_SESSION['Name']=$row['emp_username'];
            header("location:../shipping/employee/employeehome.php");
        }
        $sql = "select * from tbl_user where user_username='".$username."' and user_password='".$password."' and user_status=1";
        $result = mysql_query($sql,$con);
        $records = mysql_num_rows($result);
        $row = mysql_fetch_array($result);
        if ($records==0)
        {
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'mainhomecontent.php\';</script>';
        }
        else
        {
            $_SESSION['ID']=$row['user_id'];
            $_SESSION['Name']=$row['user_username'];
            header("location:../shipping/userhome.php");
        }
    }

    ?>
    <div style="height: 300px;">
    <form name="form1" method="post" action="">
        <p>&nbsp;</p>
        <table width="246"  align="center">
            <tr>
                <td width="85">Username</td>
                <td width="145"><label for="txtuname"></label>
                    <input type="text" name="txtuname" id="txtuname"></td>
            </tr>
            <tr>
                <tr>
                <tr>
                <td>Password</td>
                <td><label for="txtpassword"></label>
                    <input type="password" name="txtpassword" id="txtpassword"></td>
            </tr>
            <tr>
                <br>
                <tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" name="login" id="login" value="login"></td>
            </tr>
        </table>
        <div style="margin-left: 600px;" ><a href="signup.php">sign up</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgetpassword.php">Forget password</a>
        <p>&nbsp;</p>
    </form>
        </div>
</div>
<div id="wrapper2">
    <div id="footer">
        <div style="height: 200px;"
        <ul>
            <li class="first">

            </li>

</div>
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
