<?php
include ("./eheader.php");
include('../database/dbconnection.php');
$id=$_REQUEST['id'];
session_start();
$empid=$_SESSION['ID'];

?>
<h2>
        <?php echo "WELCOME "." .... ". $name ;?></h2>

    <form>
        <table width="700" border="1" align="center" id="rounded-corner">
            <caption> DUTY LIST</caption>

            <th>SHIP TYPE</th>
            <th>DATE</th>
            <th>DUTY</th>
            <th> DESCRIPTION</th>
            <th colspan="2" >OPERATION</th>


            <?php
            $selquery="select * from tbl_duty r,tbl_employee d where d.emp_id=r.emp_id and d.emp_id=$empid";
            $sel=mysql_query($selquery,$con);
            while($row=mysql_fetch_array($sel))
            {
                ?>
                <tr>
                   <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['date'];?></td>

                  <td> <?php echo $row['duty_name'];?></td>
                    <td>  <?php echo $row['duty_description'];?> </td>

                    <td>
                        <?php if($row['duty_status']==0)

                            echo "Pending";
                        else
                            echo "Solved";
                        ?>
                    </td>
                    <td><a href="solveduties.php?id=<?php echo $row['duty_id']?>">Solve</a></td>
                </tr>


            <?php
            }
            ?>
        </table>

    </form>

<?php
include ("./efooter.php");

?>