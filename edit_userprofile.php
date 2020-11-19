
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
            <li class="active"><a href="login.php">change password</a></li>


        </ul>
    </div>
</div>
<hr />
<div id="wrapper">
</div>

<script type="text/javascript">
    function validateform()
    {
        var x=document.forms["form1"]["txtname"].value;
        if (x==null || x=="")
        {
            alert("enter your name");
            return false;
        }
        var x=document.forms["form1"]["txtplace"].value;
        if (x==null || x=="")
        {
            alert("enter your place");
            return false;
        }
        var x=document.forms["form1"]["txtstate"].value;
        if (x==null || x=="")
        {
            alert("enter your state");
            return false;
        }
        var x=document.forms["form1"]["txtcountry"].value;
        if (x==null || x=="")
        {
            alert("enter your country");
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
	list($user_id,$user_name,$user_place,$user_state,$user_country,$user_phone,$user_emailid)=mysql_fetch_array($sel);
}
	if(isset($_POST['update']))
{
	                    $name=$_POST['txtname'];
                        $place=$_POST['txtplace'];
                        $state=$_POST['txtstate'];
                        $country=$_POST['txtcountry'];
                        $phone=$_POST['txtphone'];
                        $email=$_POST['txtemailid'];
                        
	
	
	$updQuery="update tbl_user set user_name='".$name."',user_place='".$place."',user_state='".$state."',user_country='".$country."',user_phone='".$phone."',user_emailid='".$email."' where user_id=".$_SESSION['ID']."" ;
	mysql_query($updQuery);
//echo $updQuery;
	echo "<script> alert('your profile updated successfully')</script>";

}	
?>
<form name="form1" method="post" action="">
                        <table height="500" align="center">
                            <caption>
                                UPDATE USER PROFILE
                            </caption>
                            <tr>
                                <td width="82">User name</td>
                                <td width="192"><label for="txtname"></label>
                                    <input type="text" name="txtname" id="txtname" value="<?php echo $user_name;?>"></td>
                            </tr>
                            <tr>
                                <td>Place</td>
                                <td><label for="txtplace"></label>
                                    <input type="text" name="txtplace" id="txtplace" value=" <?php echo $user_place;?>"></td>
                            </tr>

                            <tr>
                                <td>State</td>
                                <td><label for="txtstate"></label>
                                    <input type="text" name="txtstate" id="txtstate" value="<?php echo $user_state;?>"></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><label for="txtcountry"></label>
                                    <input type="text" name="txtcountry" id="txtcountry"value=" <?php echo $user_country;?>"></td>
                            </tr>

                            <tr>
                                <td>phonenumber</td>
                                <td><label for="txtphone"></label>
                                    <input type="text" name="txtphone" id="txtphone" value="<?php echo $user_phone;?>" ></td>
                            </tr>
                            <tr>
                                <td>emailid</td>
                                <td><label for="txtemailid"></label>
                                    <input type="text" name="txtemailid" id="txtemailid" value="<?php echo $user_emailid;?>"></td>
                            </tr>
                            



                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="update" id="update"value="update" onClick="return validateform(form1)"  ></td>
                            </tr>
                        </table>
                    </form>		
		
		
		
        
        
        <div id="wrapper2">
    <div id="footer">
        <ul>
            <li class="first">

            </li>


        </ul>
    </div>

        <a href="http://validator.w3.org/check/referer" class="xhtml">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css">Valid <abbr title="Cascading Style Sheets">CSS</abbr></a> </p>
</div>
</body>
</html>
