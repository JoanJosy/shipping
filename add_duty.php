<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
<script type="text/javascript">
    function validateform()
    {
        if(document.form1.employee.selectedIndex==0)
        {

            alert("Select employee");
            return false;
        }
        var x=document.forms["form1"]["txtbuilt"].value;
        if (x==null || x=="")
        {
            alert("enter your ship built date");
            return false;
        }
    }
    </script>
    <form name="form1" method="post" action="">
        <table width="95%" border="1" align="center" style="margin-bottom: 30px;">
            <caption>
                ADD DUTY FOR EMPLOYEE
            </caption>
            <tr>

                <td class="pad-L-15">employee name</td>
                <td>
                    <select name="employee" style="width: 100%;">
                        <option value="select">----select---</option>
                        <?php
                        $str = "select * from tbl_employee";
                        $sel = mysql_query($str, $con)or die("error in fetching name");
                        while ($row = mysql_fetch_array($sel)) {
                            ?>
                            <option value="<?php echo $row['emp_id']; ?>"><?php echo $row['emp_fname']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="82">Ship Type</td>
                <td width="192"><input type="radio" name="ships" value="party cruise">Party cruise
                    <input type="radio" name="ships" value="day cruise">day cruise
                </td>
            </tr>
            <tr>
                <td> Date</td>
                <td><label for="txtname"></label>
                    <input type="date" name="txtdate" id="txtdate"></td>
            </tr>

            <tr>
                <td> duty title</td>
                <td><label for="txtname"></label>
                    <input type="text" name="txtname" id="txtname"></td>
            </tr>
            <tr>
                <td>duty description</td>
                <td><label for="txtdescription"></label>
                    <label for="txtdescription"></label>
                    <textarea name="txtdescription" id="txtdescription" ></textarea></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input class="sub-btn" type="submit" name="submit" id="submit" value="Submit"onClick="return validateform(form1)"  ></td>
            </tr>

        </table>
    </form>

<?php
if (isset($_POST['submit'])) {
    $emp = $_POST['employee'];
    $type=$_POST['ships'];
    $date=$_POST['txtdate'];


    $title = $_POST['txtname'];

    $desc = $_POST['txtdescription'];

    $insQuery = "insert into tbl_duty(emp_id,type,date,duty_name,duty_description,duty_status)values('" . $emp . "','".$type."','".$date."','" . $title . "','" . $desc . "','.0.')";
    mysql_query($insQuery, $con) or die(mysql_error());
    echo "<script> alert('duty assigned successfully')</script>";
}
?>
<?php
include ("./mfooter.php");

?>
