<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
?>

<body>
<form id="form1" name="form1" method="post" action="">
    <table width="1000" border="1" align="center">
        <caption>
            EMPLOYEE DETAILS
        </caption>
        <th> REG NO</th>
        <th >EMPLOYEE NAME</th>
        <th > AGE</th>
        <th >CONTACT NUMBER</th>
        <th >EMAIL ID</th>
        <th >QUALIFICATION</th>
        <th >DATE OF JOINING</th>
        <th >STATUS</th>
        <th colspan="4">OPERATIONS</th>

        <?php

        $selquery="select * from tbl_employee";
        $sel=mysql_query($selquery,$con);
        while($row=mysql_fetch_array($sel))
        {
            ?>
            <tr>
                <td>
                    <?php echo $row['emp_id'];?>
                </td>
                <td>
                    <?php echo $row['emp_fname'];?>
                </td>
                <td>
                    <?php echo $row['emp_age'];?>
                </td>
                <td>
                    <?php echo $row['emp_phoneno'];?>
                </td>
                <td>
                    <?php echo $row['emp_emailid'];?>
                </td>
                <td>
                    <?php echo $row['emp_qualification'];?>
                </td>
                <td>
                    <?php echo $row['emp_doj'];?>
                </td>
                <td>
                    <?php if($row['emp_status']==1)

                        echo "Active";
                    else
                        echo "Pending";
                    ?>
                </td>


                <td><a href="empaccept.php?id=<?php echo $row['emp_id']?>">Accept</a></td>
                <td><a href="empreject.php?reject=1&id=<?php echo $row['emp_id'];?>">Reject</a></td>
                <td><a href="employeevarification.php?del=1&id=<?php echo $row['emp_id'];?>">Delete</a></td>
            </tr>

        <?php
        }
        ?>
        <?php
        if($_GET['del'])
        {
            $delQuery="delete from tbl_employee where emp_id='".$id."'";
            mysql_query($delQuery,$con);
            echo "<script> alert('value deleted successfully')</script>";
            echo "<meta http-equiv=Refresh content=1;url=employeevarification.php>";
        }
        ?>
    </table>
</form>
<?php
include ("./mfooter.php");
?>