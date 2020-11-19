<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
    <script type="text/javascript">
        function validateform()
        {
            var x=document.forms["form1"]["ship"].value;
            if (x==null || x=="")
            {
                alert("enter your ship name");
                return false;
            }
            var x=document.forms["form1"]["txtseat"].value;
            if (x==null || x=="")
            {
                alert("enter your seat number");
                return false;
            }
            var x=document.forms["form1"]["txtbanquet"].value;
            if (x==null || x=="")
            {
                alert("enter your ship banquet");
                return false;
            }
            var x=document.forms["form1"]["txtcocktail"].value;
            if (x==null || x=="")
            {
                alert("enter your ship ship cocktail");
                return false;
            }
            var x=document.forms["form1"]["txttable"].value;
            if (x==null || x=="")
            {
                alert("enter your ship table number");
                return false;
            }

        }
    </script>

    <form name="form1" method="post" action="" enctype="multipart/form-data">
        <table width="290" border="1" align="center">
            <caption>
                ADD CARGO
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
                <td width="82">total seat</td>
                <td width="192"><label for="txtseat"></label>
                    <input type="text" name="txtseat" id="txtseat"></td>
            </tr>
            <tr>
                <td width="82">Banquet</td>
                <td width="192"><label for="txtbanquet"></label>
                    <input type="text" name="txtbanquet" id="txtbanquet"></td>
            </tr>
            <tr>
                <td width="82">Cocktail</td>
                <td width="192"><label for="txtcocktail"></label>
                    <input type="text" name="txtcocktail" id="txtcocktail"></td>
            </tr>
            <tr>
                <td width="82">Table</td>
                <td width="192"><label for="txttable"></label>
                    <input type="text" name="txttable" id="txttable"></td>
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
    $seat=$_POST['txtseat'];
    $banquet=$_POST['txtbanquet'];
    $cocktail=$_POST['txtcocktail'];
    $table=$_POST['txttable'];





    $insQuery="insert into ship_seating(ship_id,total_seat,banquet,cocktail,tableno)values('".$ship."','".$seat."','".$banquet."','".$cocktail."','".$table."')";
    mysql_query($insQuery,$con) or die(mysql_error());
    echo "<script> alert('value added successfully')</script>";

}
?>
    <br><br><br>


<?php
include ("./mfooter.php");

?>