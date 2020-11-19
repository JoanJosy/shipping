<?php
include ("./sheader.php");

include('../database/dbconnection.php');
$id=$_REQUEST['id'];
session_start();
$NAME=$_SESSION['Name'];
?>
    <h2>
        <?php echo "WELCOME "." .... ". $NAME ;?></h2>
    <br><br>
    <br><br>
    <br><br>
    <br><br>

<?php
include ("./sfooter.php");

?>