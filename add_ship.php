<?php
include ("./mheader.php");

include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
    <form name="form1" method="post" action="">
        <table width="290" border="1" align="center">
            <caption>
                ADD SHIP
            </caption>
            <tr>
                <td width="82">ship name</td>
                <td width="192"><label for="txtname"></label>
                    <input type="text" name="txtname" id="txtname"></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"  ></td>
            </tr>
        </table>
    </form>
    <br><br><br>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['txtname'];

    $desc=$_POST['txtdesc'];
    $insQuery="insert into tbl_ship(ship_name)values('".$name."')";
    mysql_query($insQuery,$con) or die(mysql_error());
    echo "<script> alert('value added successfully')</script>";

}
?>
    <br><br><br>

    <form>
        <table width="400" border="1" align="center" id="rounded-corner">
            <caption>SHIP</caption>
            <th>SHIP NAME</th>

            <th colspan="2">OPERATIONS</th>
            <?php
            $selquery="select * from tbl_ship";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                    <td>
                        <?php echo $row['ship_name'];?></td>

                    <td><a href="add_ship.php?del=1&id=<?php echo $row['ship_id'];?>">delete</a></td>
                    <td><a href="ship(editpage).php?edit=1&id=<?php echo $row['ship_id'];?>">edit</td>
                </tr>


            <?php
            }
            ?>
            <?php
            if($_GET['del'])
            {
                $delQuery="delete from tbl_ship where ship_id='".$id."'";
                mysql_query($delQuery,$con);
                echo "<script> alert('value deleted successfully')</script>";
                echo "<meta http-equiv=Refresh content=1;url=add_ship.php>";
            }
            ?>
        </table>
    </form>

<?php
include ("./mfooter.php");

?>