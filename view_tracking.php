<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

?>

    <form>
        <table width="450" border="1" align="center" id="rounded-corner">
            <caption>VIEW TRACKING</caption>
            <th>SHIP NAME</th>
            <th>TRACK LOCATION</th>
            <th>TRACK DATE </th>
            <th>TRACK TIME</th>
            <th>OPERATION</th>

            <?php
            $selquery="select * from tbl_tracking r,tbl_ship d where d.ship_id=r.ship_id";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                    <td>
                        <?php echo $row['ship_name'];?></td>
                    <td>  <?php echo $row['track_location'];?> </td>
                    <td>  <?php echo $row['track_date'];?> </td>
                    <td>  <?php echo $row['track_time'];?> </td>

                    <td><a href="tracking.php?del=1&id=<?php echo $row['track_id'];?>">Delete</a></td>


                </tr>


            <?php
            }
            ?>
        </table>
    </form>

<?php
include ("./mfooter.php");

?>