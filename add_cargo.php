<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
    <script type="text/javascript">
        function validateform()
        {
            if(document.form1.ship.selectedIndex==0)
            {

                alert("Select ship");
                return false;
            }
            var x=document.forms["form1"]["txtbuilt"].value;
            if (x==null || x=="")
            {
                alert("enter your ship built date");
                return false;
            }
            var x=document.forms["form1"]["txtcost"].value;
            if (x==null || x=="")
            {
                alert("enter your ship cost");
                return false;
            }
            var x=document.forms["form1"]["txtinsurance"].value;
            if (x==null || x=="")
            {
                alert("enter your ship ship insurance");
                return false;
            }
            var x=document.forms["form1"]["txttax"].value;
            if (x==null || x=="")
            {
                alert("enter your ship tax");
                return false;
            }
            var x=document.forms["form1"]["txtcapacity"].value;
            if (x==null || x=="")
            {
                alert("enter your ship capacity");
                return false;
            }
            var x=document.forms["form1"]["txtmspeed"].value;
            if (x==null || x=="")
            {
                alert("enter your ship maximum speed");
                return false;
            }
            var x=document.forms["form1"]["txtaspeed"].value;
            if (x==null || x=="")
            {
                alert("enter your ship average speed");
                return false;
            }
            var x=document.forms["form1"]["txtamount"].value;
            if (x==null || x=="")
            {
                alert("enter your ship amount per day");
                return false;
            }
            var x=document.forms["form1"]["txtspecal"].value;
            if (x==null || x=="")
            {
                alert("enter your ship ");
                return false;
            }
            var x=document.forms["form1"]["txtimport"].value;
            if (x==null || x=="")
            {
                alert("enter your ship ");
                return false;
            }
            if (document.form1.file.value == "")
            {
                alert("Please upload the image");
                document.form1.file.focus();
                return false;
            }

            var res_field = document.form1.elements["file"].value;
            var extension = res_field.substr(res_field.lastIndexOf('.') + 1).toLowerCase();
            var allowedExtensions = ['jpg', 'jpeg','gif','png'];
            if (res_field.length > 0)
            {
                if (allowedExtensions.indexOf(extension) === -1)
                {
                    alert('Upload Photo with Extension gif, png , jpg , jpeg');
                    return false;
                }
                else {
                    alert('Image uploaded successfully');
                }
            }
        }
    </script>

    <form name="form1" method="post" action="" enctype="multipart/form-data">
        <table width="290" border="1" align="center">
            <caption>
                ADD PARTY SHIP DETAILS
            </caption>
            <tr>
                <td>ship</td>
                <td>
                    <select name="ship">
                        <option value="sel">----select---</option>
                        <?php
                        $str="select * from tbl_ship";
                        $sel=mysql_query($str,$con)or die("error in fetching place");
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
                <td width="82">built</td>
                <td width="192"><label for="txtbuilt"></label>
                    <input type="text" name="txtbuilt" id="txtbuilt"></td>
            </tr>
            <tr>
                <td width="82">cost</td>
                <td width="192"><label for="txtcost"></label>
                    <input type="text" name="txtcost" id="txtcost"></td>
            </tr>
            <tr>
                <td width="82">insurance</td>
                <td width="192"><label for="txtinsurance"></label>
                    <input type="text" name="txtinsurance" id="txtinsurance"></td>
            </tr>
            <tr>
                <td width="82">tax</td>
                <td width="192"><label for="txttax"></label>
                    <input type="text" name="txttax" id="txttax"></td>
            </tr>
            <tr>
                <td width="82">capacity</td>
                <td width="192"><label for="txtcapacity"></label>
                    <input type="text" name="txtcapacity" id="txtcapacity"></td>
            </tr>
            <tr>
                <td width="82">maximum speed</td>
                <td width="192"><label for="txtmspeed"></label>
                    <input type="text" name="txtmspeed" id="txtmspeed"></td>
            </tr>
            <tr>
                <td width="82">average speed</td>
                <td width="192"><label for="txtaspeed"></label>
                    <input type="text" name="txtaspeed" id="txtaspeed"></td>
            </tr>
            <tr>
                <td width="82">amount</td>
                <td width="192"><label for="txtamount"></label>
                    <input type="text" name="txtamount" id="txtamount"></td>
            </tr>
            <tr>
                <td width="82">Specal</td>
                <td width="192"><label for="txtspecal"></label>
                    <input type="text" name="txtspecal" id="txtspecal"></td>
            </tr>
            <tr>
                <td width="82">Importance</td>
                <td width="192"><label for="txtimport"></label>
                    <input type="text" name="txtimport" id="txtimport"></td>
            </tr>
            <tr><td>image</td>
                <td><label for="file">Filename:</label>
                    <input type="file" name="file" id="file"><br></td>
            </tr>




            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="submit"  value="Submit" onClick="return validateform(form1)"
                        ></td>
            </tr>
        </table>
    </form>
<?php
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
        echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    }
    $image=  $_FILES["file"]["name"];

    $insQuery="insert into tbl_cargo(ship_id,cargo_built,cargo_cost,cargo_insurance,cargo_tax,cargo_capacity,cargo_mspeed,cargo_avgspeed,cargo_amount,specal,importance,image)values('".$ship."','".$built."','".$cost."','".$ins."','".$tax."','".$capacity."','".$mspeed."','".$aspeed."','".$amount."','".$specal."','".$import."','".$image."')";
    mysql_query($insQuery,$con) or die(mysql_error());
    echo "<script> alert('value added successfully')</script>";

}
?>
    <br><br><br>

    <form>
        <table width="1100" border="1" align="center" id="rounded-corner">
            <caption>PARTY SHIP</caption>
            <th> SHIP NO</th>
            <th> NAME</th>
            <th>BUILT</th>
            <th>COST</th>
            <th>INSURANCE</th>
            <th>TAX</th>
            <th>CAPACITY</th>
            <th>MAXIMUM SPEED</th>
            <th>AVERAGE SPEED</th>
            <th>AMOUNT</th>
            <th>SPECAL</th>
            <th>IMPORTANCE</th>
            <th>IMAGE</th>
            <th colspan="2">OPERATIONS</th>
            <?php
            $selquery="select * from tbl_cargo r,tbl_ship d where d.ship_id=r.ship_id";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                    <td>
                        <?php echo $row['cargo_id'];?></td>
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
                    <td><?php echo $row['specal'];?></td>
                    <td><?php echo $row['importance'];?></td>


                    <td><img src="../mainadminhome/upload/<?php echo $row["image"]?>"width="100" height="70"/></td>
                    <td><a href="add_cargo.php?del=1&id=<?php echo $row['cargo_id'];?>">Delete</a></td>
                    <td><a href="edit_ship.php?edit=1&id=<?php echo $row['cargo_id'];?>">Edit</a></td>


                </tr>


            <?php
            }
            ?>
            <?php
            if($_GET['del'])
            {
                $delQuery="delete from tbl_cargo where cargo_id='".$id."'";
                mysql_query($delQuery,$con);
                echo "<script> alert('value deleted successfully')</script>";
                echo "<meta http-equiv=Refresh content=1;url=add_cargo.php>";
            }
            ?>
        </table>
    </form>
<?php
include ("./mfooter.php");

?>