<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
<form name="form1" method="post" action="">
    <table width="290" border="1" align="center">
        <caption>
            ADD COUNTRY
        </caption>
        <tr>
            <td width="82">country name</td>
            <td width="192"><label for="txtname"></label>
                <input type="text" name="txtname" id="txtname"></td>
        </tr>

        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"  ></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['txtname'];

    $desc=$_POST['txtdesc'];
    $insQuery="insert into tbl_country(country_name)values('".$name."')";
    mysql_query($insQuery,$con) or die(mysql_error());
    echo "<script> alert('value added successfully')</script>";

}
?>
<br><br><br>

<form>
    <table width="450" border="1" align="center" id="rounded-corner">
        <caption>COUNTRY</caption>
        <th>COUNTRY NAME</th>

        <th colspan="2">OPERATIONS</th>
        <?php
        $selquery="select * from tbl_country";
        $sel=mysql_query($selquery,$con);
        while($row=mysql_fetch_array($sel))
        {
            ?>
            <tr>
                <td>
                    <?php echo $row['country_name'];?></td>

                <td><a href="add_country.php?del=1&id=<?php echo $row['country_id'];?>">delete</a></td>
                <td><a href="edit_country.php?edit=1&id=<?php echo $row['country_id'];?>">edit</a></td>


            </tr>


        <?php
        }
        ?>
        <?php
        if($_GET['del'])
        {
            $delQuery="delete from tbl_country where country_id='".$id."'";
            mysql_query($delQuery,$con);
            echo "<script> alert('value deleted successfully')</script>";
            echo "<meta http-equiv=Refresh content=1;url=add_country.php>";
        }

        ?>
    </table>
</form>
<?php
include ("./mfooter.php");

?>
