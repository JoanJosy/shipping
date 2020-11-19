<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

?>

    <form>
        <table width="650" border="1" align="center" id="rounded-corner">
            <caption>VIEW BOOKING</caption>
            <th>SHIP NAME</th>
            <th>PORT</th>
            <th>NAME</th>
            <th>DATE </th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>OPERATION</th>

            <?php
            $selquery="select * from party_booking r,tbl_ship d,tbl_user u ,tbl_port p where d.ship_id=r.ship_id and u.user_id=r.user_id  and p.port_id=r.port_id";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                    <td>
                        <?php echo $row['ship_name'];?></td>

                    <td>  <?php echo $row['port_name'];?> </td>
                    <td>  <?php echo $row['user_name'];?> </td>
                    <td>  <?php echo $row['cargob_date'];?> </td>
                    <td>  <?php echo $row['cargob_phone'];?> </td>
                    <td>  <?php echo $row['cargob_email'];?> </td>
                    <td><a href="view_booking.php?del=1&id=<?php echo $row['party_id'];?>">Delete</a></td>



                </tr>


            <?php
            }
            ?>
            <?php
            if($_GET['del'])
            {
                $delQuery="delete from tbl_user where party_id='".$id."'";
                mysql_query($delQuery,$con);
                echo "<script> alert('value deleted successfully')</script>";
                echo "<meta http-equiv=Refresh content=1;url=view_booking.php>";
            }
            ?>
        </table>
    </form>

<?php
include ("./mfooter.php");

?>