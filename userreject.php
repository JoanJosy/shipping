<?php
//include('../admin/header.php');
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
mysql_query("UPDATE tbl_user SET user_status='0' WHERE user_id='$id'");
header("location:../mainadminhome/uservarification.php");
?>