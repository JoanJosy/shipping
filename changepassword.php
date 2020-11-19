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

<?php

    include('./database/dbconnection.php');
    $id=$_REQUEST['id'];
	session_start();
$NAME=$_SESSION['Name'];
    ?>
    <h2>
        <?php echo "WELCOME "." .... ". $NAME ;?></h2>
 <form id="form1" name="form1" method="post" action="">
<table width="400" align="center" height="50">
<caption>
      CHANGE PASSWORD
    </caption>      
       
        <?php
		
		$selquery="select * from tbl_user  where  user_id='".$_SESSION['ID']."' ";
$sel=mysql_query($selquery,$con);

while($row=mysql_fetch_array($sel))
{
?>

<tr>
<td> YOUR CURENT PASSWORD</td>
<td>
<?php echo $row['user_password'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="changepasswordedit.php?edit=1&id=<?php echo $_SESSION['ID'];?>"><strong>change</strong></a>

</td>
</tr>



<?php
}
?>
</table>
		
</form>


<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>



</div>
<div id="wrapper2">
    <div id="footer">
        <ul>
            <li class="first">
                <h2>Lorem Ipsum Dolor</h2>
                <ul>
                    <li><a href="http://www.free-css.com/">Nulla luctus eleifend purus</a></li>
                    <li><a href="http://www.free-css.com/">Praesent scelerisque scelerisque erat</a></li>
                    <li><a href="http://www.free-css.com/">Ut nonummy rutrum sem</a></li>
                    <li><a href="http://www.free-css.com/">Pellentesque tempus quam quis nulla</a></li>
                    <li><a href="http://www.free-css.com/">Fusce ultrices fringilla metus</a></li>
                    <li><a href="http://www.free-css.com/">Praesent mattis condimentum nisl</a></li>
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
