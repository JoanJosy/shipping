<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

?>
<?php
if($_GET['edit'])
{
    $selQuery="select * from  tbl_employee where emp_id='".$id."'";
    $sel=mysql_query($selQuery);
    list($emp_id,$emp_fname,$emp_lname,$emp_address,$emp_gender,$emp_age,$emp_phoneno,$emp_emailid,$emp_qualification,$emp_doj)=mysql_fetch_array($sel);
}
if(isset($_POST['update']))
{
    $fname=$_POST['txtfname'];
    $lname=$_POST['txtlname'];
    $address=$_POST['txtaddress'];
    $gender=$_POST['gender'];
    $age=$_POST['txtage'];
    $phonenumber=$_POST['txtphonenumber'];
    $emailid=$_POST['txtemailid'];

    $qualification=$_POST['txtqualification'];

    $dateofjoin=$_POST['txtdateofjoining'];

    $updQuery=mysql_query("update tbl_employee set emp_fname='".$fname."',emp_lname='".$lname."',emp_address='".$address."',emp_gender='".$gender."',emp_age='".$age."',emp_phoneno='".$phonenumber."',emp_emailid='".$emailid."',emp_qualification='". $qualification."',emp_doj='".$dateofjoin."'where emp_id='".$id."'") or die(mysql_error());
    echo "<script> alert('value updated successfully')</script>";
    echo "<meta http-equiv=Refresh content=1;url=employeevarification.php>";


    // echo "<meta http-equiv=Refresh content=1;url=editSample.php>";

}
?>
<div>
<form name="form1" method="post" action="">
    <table width="270" border="1" align="center">
        <caption>
            EMPLOYEE PROFILE
        </caption>
        <tr>
            <td width="121">first name</td>
            <td width="133"><label for="txtfname"></label>
                <input type="text" name="txtfname" id="txtfname" value=" <?php echo $emp_fname;?>"></td>
        </tr>
        <tr>
            <td>last name</td>
            <td><label for="txtlname"></label>
                <input type="text" name="txtlname" id="txtlname"value=" <?php echo $emp_lname;?>"></td>
        </tr>
        <tr>
            <td>address</td>
            <td><label for="txtaddress"></label>
                <label for="txtaddress"></label>
                <textarea name="txtaddress" id="txtaddress" ><?php echo $emp_address;?></textarea></td>
        </tr>
        <tr>
            <td width="88">gender</td>
            <td width="167"><input type="radio" name="gender" value="male"
                    <?php
                    if($emp_gender=="male")
                    {
                        ?>
                        checked="checked"
                    <?php
                    }
                    ?>
                    />
                male
                <input type="radio" name="gender" value="female"
                    <?php
                    if($emp_gender=="female")
                    {
                        ?>
                        checked="checked"
                    <?php
                    }
                    ?>/>female

            </td>
        </tr>
        <tr>
            <td>age</td>
            <td><label for="txtage"></label>
                <input type="text" name="txtage" id="txtage" value=" <?php echo $emp_age;?>"></td>
        </tr>
        <tr>
            <td>phone number</td>
            <td><label for="txtphonenumber"></label>
                <input type="text" name="txtphonenumber" id="txtphonenumber" value=" <?php echo $emp_phoneno;?>"></td>
        </tr>
        <tr>
            <td>emailid</td>
            <td><label for="txtemailid"></label>
                <input type="text" name="txtemailid" id="txtemailid"value=" <?php echo $emp_emailid;?>"></td>
        </tr>
        <tr>
            <td>qualification</td>
            <td><label for="txtqualification"></label>
                <input type="text" name="txtqualification" id="txtqualification"value=" <?php echo $emp_qualification;?>"></td>
        </tr>

        <tr>
            <td>date of joining</td>
            <td><label for="txtdateofjoining"></label>
                <input type="date" name="txtdateofjoining" id="txtdateofjoining"value=" <?php echo $emp_doj;?>"></td>
        </tr>


        <tr>
            <td colspan="2" align="center"><input type="submit" name="update" id="update" value="update"  ></td>
        </tr>
    </table>
</form>
</div>

