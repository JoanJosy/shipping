<?php
include('./mheader.php');
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
<form>
    <table width="800" border="1" align="center" id="rounded-corner">
        <caption>USER VERIFICATION</caption>
        <th>USER NO</th>
        <th>USER NAME</th>
        <th>PLACE</th>
        <th>STATE</th>
        <th>COUNTRY</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th>STATUS</th>


        <th colspan="3">OPERATIONS</th>
        <?php
        $selquery="select * from tbl_user";
        $sel=mysql_query($selquery,$con);
        while($row=mysql_fetch_array($sel))
        {
            ?>
            <tr>
                <td><?php echo $row['user_id'];?></td>

                <td><?php echo $row['user_name'];?></td>
                <td> <?php echo $row['user_place'];?></td>
                <td> <?php echo $row['user_state'];?></td>
                <td> <?php echo $row['user_country'];?></td>
                <td> <?php echo $row['user_phone'];?></td>
                <td> <?php echo $row['user_emailid'];?></td>
                <td>
                    <?php if($row['user_status']==1)

                        echo "Active";
                    else
                        echo "Pending";
                    ?>
                </td>

                <td><a href="useraccept.php?id=<?php echo $row['user_id']?>">Accept</a></td>
                <td><a href="userreject.php?id=<?php echo $row['user_id']?>">Reject</a></td>
                <td><a href="uservarification.php?del=1&id=<?php echo $row['user_id']?>">Delete</a></td>
            </tr>


        <?php
        }
        ?>
        <?php
        if($_GET['del'])
        {
            $delQuery="delete from tbl_user where user_id='".$id."'";
            mysql_query($delQuery,$con);
            echo "<script> alert('value deleted successfully')</script>";
            echo "<meta http-equiv=Refresh content=1;url=uservarification.php>";
        }
        ?>
</table>
</form>

<?php
{
    include("./mfooter.php");
}
?>