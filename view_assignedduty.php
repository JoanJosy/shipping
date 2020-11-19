<?php
include ("./mheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];

?>

    <form>
        <table width="800" border="1" align="center" id="rounded-corner">
            <caption>VIEW EMPLOYEE DUTY VERIFICATION</caption>
            <th>DUTY NO</th>
            <th>EMPLOY NAME</th>
            <th>SHIP TYPE</th>
            <th>DATE</th>
            <th>DUTY</th>
            <th>DUTY DESCRIPTION </th>
            <th>OPERATION</th>




            <?php
            $selquery="select * from tbl_duty r,tbl_employee d where d.emp_id=r.emp_id ";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                    <td><?php echo $row['duty_id'];?></td>
                    <td><?php echo $row['emp_fname'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['date'];?></td>


                    <td>  <?php echo $row['duty_name'];?></td>
                    <td>  <?php echo $row['duty_description'];?> </td>


                    <td>
                        <?php if($row['duty_status']==1)

                            echo "solved";
                        else
                            echo "Pending";
                        ?>
                    </td>


                </tr>


            <?php
            }
            ?>
        </table>
    </form>

<?php
include ("./mfooter.php");

?>