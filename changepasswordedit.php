
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
            <li class=""><a href="userhome.php">Home</a></li>
            <li class="active"><a href="view(userprofile).php">edit profile</a></li>
            <li class="active"><a href="changepassword.php">change password</a></li>


        </ul>
    </div>
</div>
<hr />
<div id="wrapper">
    <script type="text/javascript">
        function validateform()
        {
            var x=document.forms["form1"]["txtpassword"].value;
            if (x==null || x=="")
            {
                alert("enter your new password");
                return false;
            }
            var x=document.forms["form1"]["txt"].value;
            if (x==null || x=="")
            {
                alert("re enter your new password");
                return false;
            }
        }
        </script>

<?php

    include('./database/dbconnection.php');
    $id=$_REQUEST['id'];
	session_start();
$NAME=$_SESSION['Name'];
    ?>
    <h2>
        <?php echo "WELCOME "." .... ". $NAME ;?></h2>


<?php
		if($_GET['edit'])
{
	session_start();
	
	$selQuery="select * from  tbl_user where user_id='".$_SESSION['ID']."'";
	$sel=mysql_query($selQuery);
	list($user_id,$user_password)=mysql_fetch_array($sel);
}
	if(isset($_POST['update']))
{
	
                        $password=$_POST['txtpassword'];
                       
	
	$updQuery="update tbl_user set user_password='".$password."' where user_id=".$_SESSION['ID']."" ;
	mysql_query($updQuery);
//echo $updQuery;
	echo "<script> alert('your password change successfully')</script>";
	echo "<meta http-eqiv=refresh content=1;url=changepasswordedit.php>";
	//header("location:./userhome.php");
	
}	
?>
    <div style="height: 400px;">
<form name="form1" method="post" action="">
                        <table height="100" align="center" width="500">
                            <caption>
                                UPDATE YOUR CURRENT PASSWORD
                            </caption>
                            
                            <tr>
                                <td width="82"> enter new password</td>
                                <td width="192"><label for="txtpassword"></label>
                                    <input type="password" name="txtpassword" id="txtpassword" ></td>
                            </tr>
                            <tr>
                                <td width="82">Re enter new password</td>
                                <td width="192"><label for="txt"></label>
                                    <input type="password" name="txt" id="txt" ></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="update" id="update"value="update" onClick="return validateform(form1)"  ></td>
                            </tr>
		</table>
        </form>
<br><br><br>
<br><br><br>


</div>
</div>
<div id="wrapper2">
    <div id="footer">
        <ul>
            <li class="first">



        </ul>
    </div>
    <p id="legal"> &copy;
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;

        <a href="http://validator.w3.org/check/referer" class="xhtml"><abbr title="eXtensible HyperText Markup Language"></abbr></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css"><abbr title="Cascading Style Sheets"></abbr></a> </p>
</div>
</body>
</html>
