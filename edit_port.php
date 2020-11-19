<?php
include('./mheader.php');
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
<?php
if($_GET['edit'])
{

    $selQuery="select * from  tbl_port where port_id='".$id."'";
    $sel=mysql_query($selQuery);
    list($ship_id,$ship_name)=mysql_fetch_array($sel);
}
if(isset($_POST['submit']))
{
    //echo $id;
    $name=$_POST['txtname'];


    $updQuery=mysql_query("update tbl_port set port_name='".$name."'where port_id='".$id."'") or die(mysql_error());
    echo "<script> alert('value updated successfully')</script>";
    echo "<meta http-equiv=Refresh content=1;url=add_port.php>";

}
?><br><br><br>
    <form name="form1" method="post" action="">
        <table width="390" border="1" align="center">
            <caption>
                UPDATE PORT NAME
            </caption>
            <tr>
                <td width="82">Port name</td>
                <td width="192"><label for="txtname"></label>
                    <input type="text" name="txtname" id="txtname" value="<?php echo $port_name;?>"</td>
            </tr>


            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"  ></td>
            </tr>
        </table>
    </form>
<?php
//include("./mfooter.php");
?>