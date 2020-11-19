<?php
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

mysql_query("UPDATE tbl_employee SET emp_status='1' WHERE emp_id='$id'");
header("location:../mainadminhome/employeevarification.php");
?>