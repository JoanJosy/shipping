<?php
include ("./eheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
    <form>
        <table width="650" border="1" align="center" id="rounded-corner">
            <caption>CARGO</caption>
            <th> NAME</th>
            <th>BUILT</th>
            <th>COST</th>
            <th>INSURANCE</th>
            <th>TAX</th>
            <th>CAPACITY</th>
            <th>MAXIMUM SPEED</th>
            <th>AVERAGE SPEED</th>
            <th>AMOUNT</th>
            <th>IMAGE</th>

            <?php
            $selquery="select * from tbl_cargo r,tbl_ship d where d.ship_id=r.ship_id";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                    <td>
                        <?php echo $row['ship_name'];?></td>
                    <td><?php echo $row['cargo_built'];?></td>
                    <td><?php echo $row['cargo_cost'];?></td>
                    <td><?php echo $row['cargo_insurance'];?></td>
                    <td><?php echo $row['cargo_tax'];?></td>
                    <td><?php echo $row['cargo_capacity'];?></td>
                    <td><?php echo $row['cargo_mspeed'];?></td>
                    <td><?php echo $row['cargo_avgspeed'];?></td>
                    <td><?php echo $row['cargo_amount'];?></td>
                    <td><img src="../mainadmin/upload/<?php echo $row["image"]?>"width="100" height="70"/></td>

                </tr>


            <?php
            }
            ?>
        </table>
    </form>

<?php
include ("./efooter.php");

?>