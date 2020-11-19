<?php
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

mysql_query("UPDATE tbl_duty SET duty_status='1' WHERE duty_id='$id'");
header("location:../employee/view_duties.php");
?>