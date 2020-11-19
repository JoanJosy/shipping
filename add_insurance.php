<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

?>
    <form name="form1" method="post" action="">
        <table width="290" border="1" align="center">
            <caption>
                ADD SHIP INSURANCE
            </caption>
            <tr>
                <td>ship name</td>
                <td>
                    <select name="ship">
                        <option value="sel">----select---</option>
                        <?php
                        $str="select * from tbl_ship";
                        $sel=mysql_query($str,$con)or die("error in fetching name");
                        while($row=mysql_fetch_array($sel))
                        {
                            ?>
                            <option value="<?php echo $row['ship_id'];?>"><?php echo $row['ship_name'];?></option>
                        <?php
                        }

                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="82">insurance</td>
                <td width="192"><label for="txtinsurance"></label>
                    <input type="text" name="txtinsurance" id="txtinsurance"></td>
            </tr>
            <tr>
                <td width="82">year</td>
                <td width="192"><label for="txtyear"></label>
                    <input type="text" name="txtyear" id="txtyear"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"  ></td>
            </tr>
        </table>
    </form>
<?php
if(isset($_POST['submit']))
{
    $ship=$_POST['ship'];
    $amount=$_POST['txtinsurance'];
    $year=$_POST['txtyear'];
    $insQuery="insert into tbl_insurance(ship_id,insurance_amount,insurance_year)values('".$ship."','".$amount."','".$year."')";
    mysql_query($insQuery,$con) or die(mysql_error());
    echo "<script> alert('value added successfully')</script>";

}
?>
    <br><br><br>

    <form>
        <table width="750" border="1" align="center" id="rounded-corner">
            <caption>INSURANCE DETAILS</caption>
            <th>SHIP NAME</th>
            <th>AMOUNT</th>
            <th>YEAR</th>


            <th colspan="2">OPERATIONS</th>
            <?php
            $selquery="select * from tbl_insurance r,tbl_ship d where d.ship_id=r.ship_id";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                    <td>
                        <?php echo $row['ship_name'];?></td>
                    <td><?php echo $row['insurance_amount'];?></td>
                    <td><?php echo $row['insurance_year'];?></td>
                    <td><a href="add_insurance.php?del=1&id=<?php echo $row['insurance_id'];?>">delete</a></td>


                </tr>


            <?php
            }
            ?>
            <?php
            if($_GET['del'])
            {
                $delQuery="delete from tbl_insurance where insurance_id='".$id."'";
                mysql_query($delQuery,$con);
                echo "<script> alert('value deleted successfully')</script>";
                echo "<meta http-equiv=Refresh content=1;url=add_insurance.php>";
            }

            ?>
        </table>
    </form>


<?php
include ("./mfooter.php");

?>