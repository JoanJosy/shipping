<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

?>

    <form>
        <table width="700" border="1" align="center" id="rounded-corner">
            <caption>VIEW  DAY SHIP BOOKING</caption>

             <TH>NUMBER</TH>
            <th>SHIP NAME</th>

            <th>PORT</th>
            <th>NAME</th>
            <th>DATE </th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th colspan="2">OPERATION</th>


            <?php
            $selquery="select * from daycru_booking r,dayship d,tbl_user u ,tbl_port p where d.dship_id=r.dship_id and u.user_id=r.user_id and p.port_id=r.port_id";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr> <td> <?php echo $row['daycru_id'];?></td>

                       <td> <?php echo $row['name'];?></td>
                    <td>  <?php echo $row['port_name'];?> </td>

                    <td>  <?php echo $row['user_name'];?> </td>
                    <td>  <?php echo $row['bdate'];?> </td>
                    <td>  <?php echo $row['phone'];?> </td>
                    <td>  <?php echo $row['mailid'];?> </td>
                    <td><a href="view_dayship.php?del=1&id=<?php echo $row['daycru_id'];?>">Delete</a></td>



                </tr>


            <?php
            }
            ?>
            <?php
            if($_GET['del'])
            {
                $delQuery="delete from tbl_user where daycru_id='".$id."'";
                mysql_query($delQuery,$con);
                echo "<script> alert('value deleted successfully')</script>";
                echo "<meta http-equiv=Refresh content=1;url=viewdayship.php>";
            }
            ?>
        </table>
    </form>

<?php
include ("./mfooter.php");

?>