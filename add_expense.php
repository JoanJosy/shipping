<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

?>
    <form name="form1" method="post" action="">
        <table width="290" border="1" align="center">
            <caption>
                ADD SHIP EXPENSE
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
                <td width="82">food expense</td>
                <td width="192"><label for="txtfood"></label>
                    <input type="text" name="txtfood" id="txtfood"></td>
            </tr>
            <tr>
                <td width="82">travel expense</td>
                <td width="192"><label for="txttravel"></label>
                    <input type="text" name="txttravel" id="txttravel"></td>
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
    $food=$_POST['txtfood'];
    $travel=$_POST['txttravel'];

    $insQuery="insert into tbl_expense(ship_id,expense_food,expense_travel)values('".$ship."','".$food."','".$travel."')";
    mysql_query($insQuery,$con) or die(mysql_error());
    echo "<script> alert('value added successfully')</script>";

}
?>
    <br><br><br>
    <form>
        <table width="550" border="1" align="center" id="rounded-corner">
            <caption>EXPENSE DETAILS</caption>
            <th>SHIP NAME</th>
            <th>FOOD EXPENSE</th>
            <th>TRAVEL EXPENSE</th>


            <th colspan="2">OPERATIONS</th>
            <?php
            $selquery="select * from tbl_expense r,tbl_ship d where d.ship_id=r.ship_id";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                    <td>
                        <?php echo $row['ship_name'];?></td>
                    <td><?php echo $row['expense_food'];?></td>
                    <td><?php echo $row['expense_travel'];?></td>
                    <td><a href="add_expense.php?del=1&id=<?php echo $row['expense_id'];?>">delete</a></td>
                    <td><a href="edit_expns.php?edit=1&id=<?php echo $row['expense_id'];?>">edit</a></td>



                </tr>


            <?php
            }
            ?>
            <?php
            if($_GET['del'])
            {
                $delQuery="delete from tbl_expense where expense_id='".$id."'";
                mysql_query($delQuery,$con);
                echo "<script> alert('value deleted successfully')</script>";
                echo "<meta http-equiv=Refresh content=1;url=add_expense.php>";
            }

            ?>
        </table>
    </form>


<?php
include ("./mfooter.php");

?>