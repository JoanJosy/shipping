<?php
include ("./eheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>
    <script type="text/javascript">
        function validateform()
        {
            var x=document.forms["form1"]["txtfname"].value;
            if (x==null || x=="")
            {
                alert("enter your name");
                return false;
            }


            var x = document.forms["form1"]["txtemailid"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
            var x=document.forms["form1"]["txtmessage"].value;
            if (x==null || x=="")
            {
                alert("enter your name");
                return false;
            }
        }
    </script>
    <form name="form1" method="post" action="" enctype="multipart/form-data">
        <table width="350"  height="400"" align="center">
        <caption>
            Contact
        </caption>

        <tr>
            <td width="82">first name</td>
            <td width="192"><label for="txtfname"></label>
                <input type="text" name="txtfname" id="txtfname"></td>
        </tr>
        <tr>
            <td>emailid</td>
            <td  width="300"><label for="txtemailid"></label>
                <input type="text" name="txtemailid" id="txtemailid"></td>
        </tr>
        <tr>
            <td>message</td>
            <td><label for="txtmessage"></label>
                <textarea name="txtmessage" id="txtmessage" ></textarea></td>
        </tr>

        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" onClick="return validateform(form1)"  ></td>
        </tr>
        </table>
    </form>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['txtfname'];
    $email=$_POST['txtemailid'];
    $message=$_POST['txtmessage'];

    $insQuery="insert into tbl_empcontact(empc_name,empc_email,empc_message)values('".$name."','".$email."','".$message."')";
    mysql_query($insQuery,$con) or die(mysql_error());
    echo "<script> alert('request send successfully')</script>";

}
?>
<?php
include ("./efooter.php");

?>