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
</div>
 <?php

    include('./database/dbconnection.php');
    $id=$_REQUEST['id'];
	session_start();
$NAME=$_SESSION['Name'];
    ?>
    <h2>
        <?php echo "WELCOME "." .... ". $NAME ;?></h2>
 <form id="form1" name="form1" method="post" action="">
<table width="330" border="1" align="center" height="300">
<caption>
      YOUR PROFILE DEATILS
    </caption>      
       
        <?php
		
		$selquery="select * from tbl_user  where  user_id='".$_SESSION['ID']."' ";
$sel=mysql_query($selquery,$con);

while($row=mysql_fetch_array($sel))
{
?>

<tr>
<td width="94">Your name</td>
<td width="163">
<?php echo $row['user_name'];?>
</td>
</tr>

<tr>
<td>place</td>
<td>
<?php echo $row['user_place'];?>
</td>
></tr>

<tr>
<td>State</td>
<td>
<?php echo $row['user_state'];?>
</td>
</tr>
<tr>
<td>Country</td>
<td>
<?php echo $row['user_country'];?>
</td>
</tr>

<tr>
<td>phone number</td>
<td>
<?php echo $row['user_phone'];?>
</td>
</tr>

<tr>
<td>email id</td>
<td>
<?php echo $row['user_emailid'];?>

</td>
</tr>

<tr ><td colspan="2" align="center"><a href="edit_userprofile.php?edit=1&id=<?php echo $_SESSION['ID'];?>"><strong>Edit profile</strong></a></td></tr>

<?php
}
?>
</table>
		
</form>		







<div id="wrapper2">
    <div id="footer">
        <ul>
            <li class="first">
                <h2></h2>
                <ul>

                </ul>
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
