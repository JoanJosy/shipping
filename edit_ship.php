<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

?>
<?php
if($_GET['edit'])
{

    $selQuery="select * from  tbl_cargo where cargo_id='".$id."'";
    $sel=mysql_query($selQuery);
    list($cargo_id,$ship_id,$built,$cost,$ins,$tax,$capacity,$mspeed,$aspeed,$amount,$specal,$import,$image)=mysql_fetch_array($sel);
}
if(isset($_POST['submit']))
{


    $ship=$_POST['ship'];
    $built=$_POST['txtbuilt'];
    $cost=$_POST['txtcost'];
    $ins=$_POST['txtinsurance'];
    $tax=$_POST['txttax'];
    $capacity=$_POST['txtcapacity'];
    $mspeed=$_POST['txtmspeed'];
    $aspeed=$_POST['txtaspeed'];
    $amount=$_POST['txtamount'];
    $specal=$_POST['txtspecal'];
    $import=$_POST['txtimport'];

    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    if (file_exists("upload/" . $_FILES["file"]["name"]))
    {
        echo $_FILES["file"]["name"] . " already exists. ";
    }
    else
    {
        move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/" . $_FILES["file"]["name"]);
        echo "Stored in: " . ".upload/" . $_FILES["file"]["name"];
    }
    $image=  $_FILES["file"]["name"];
if ($image == '' || $image == null) {
  $updQuery=mysql_query("update tbl_cargo set ship_id='".$ship."',cargo_built='".$built."',cargo_cost='".$cost."',cargo_insurance='".$ins."',cargo_tax='".$tax."',cargo_capacity='".$capacity."',cargo_mspeed='".$mspeed."',cargo_avgspeed='".$aspeed."',cargo_amount='".$amount."',specal='".$specal."',importance='".$import."'where cargo_id='".$id."'") or die(mysql_error());
}
    else{
        $updQuery=mysql_query("update tbl_cargo set ship_id='".$ship."',cargo_built='".$built."',cargo_cost='".$cost."',cargo_insurance='".$ins."',cargo_tax='".$tax."',cargo_capacity='".$capacity."',cargo_mspeed='".$mspeed."',cargo_avgspeed='".$aspeed."',cargo_amount='".$amount."',specal='".$specal."',importance='".$import."',image='".$image."'where cargo_id='".$id."'") or die(mysql_error());

    }
    echo "<script> alert('value updated successfully')</script>";
    echo "<meta http-equiv=Refresh content=1;url=add_cargo.php>";


    // echo "<meta http-equiv=Refresh content=1;url=editSample.php>";

}
?>
<div style="margin-left: 50px;">
<form name="form1" method="post" enctype="multipart/form-data" >
    <table width="290" border="1" align="center">
        <caption>
            EDIT CARGO  INFORMATION
        </caption>
        <tr>
            <td width="82">ship</td>
            <td>
                <select name="ship">
                    <option value="sel"></option>
                    <?php
                    $str="select * from tbl_ship";
                    $sel=mysql_query($str,$con)or die("error in fetching place");
                    while($row=mysql_fetch_array($sel))
                    {
                        ?>
                    <option value="<?php echo $row['ship_id']; ?>"<?php  if($row['ship_id']==$ship_id){?> selected="selected"<?php }?>> <?php echo $row['ship_name']; ?>
                    <?php
                    }

                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td width="82">built</td>
            <td width="192"><label for="txtbuilt"></label>
                <input type="text" name="txtbuilt" id="txtbuilt" value=" <?php echo $built;?>"></td>
        </tr>
        <tr>
            <td width="82">cost</td>
            <td width="192"><label for="txtcost"></label>
                <input type="text" name="txtcost" id="txtcost"value=" <?php echo $cost;?>"></td>
        </tr>
        <tr>
            <td width="82">insurance</td>
            <td width="192"><label for="txtinsurance"></label>
                <input type="text" name="txtinsurance" id="txtinsurance"value=" <?php echo $ins;?>"></td>
        </tr>
        <tr>
            <td width="82">tax</td>
            <td width="192"><label for="txttax"></label>
                <input type="text" name="txttax" id="txttax"value=" <?php echo $tax;?>"></td>
        </tr>
        <tr>
            <td width="82">capacity</td>
            <td width="192"><label for="txtcapacity"></label>
                <input type="text" name="txtcapacity" id="txtcapacity"value=" <?php echo $capacity;?>"></td>
        </tr>
        <tr>
            <td width="82">maximum speed</td>
            <td width="192"><label for="txtmspeed"></label>
                <input type="text" name="txtmspeed" id="txtmspeed"value=" <?php echo $mspeed;?>"></td>
        </tr>
        <tr>
            <td width="82">average speed</td>
            <td width="192"><label for="txtaspeed"></label>
                <input type="text" name="txtaspeed" id="txtaspeed"value=" <?php echo   $aspeed;?>"></td>
        </tr>
        <tr>
            <td width="82">amount</td>
            <td width="192"><label for="txtamount"></label>
                <input type="text" name="txtamount" id="txtamount"value=" <?php echo $amount;?>"></td>
        </tr>
        <tr>
            <td width="82">Specal</td>
            <td width="192"><label for="txtspecal"></label>
                <input type="text" name="txtspecal" id="txtspecal"value=" <?php echo $specal;?>"></td>
        </tr>
        <tr>
            <td width="82">Importance</td>
            <td width="192"><label for="txtimport"></label>
                <input type="text" name="txtimport" id="txtimport"value=" <?php echo $import;?>"></td>
        </tr>
        <tr><td>image</td>
            <td><label for="file" >Filename:</label>
                <img src="../mainadminhome/upload/<?php echo $image;?>" width="60" height="60"/>
                <input type="file" name="file" id="file"><br></td>
        </tr>




        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="submit"></td>
        </tr>
    </table>
</form>
    </div>
