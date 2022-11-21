<?php
include("connection.php");
$user_id=$_POST['id'];
$vehi_no=$_POST['vehi_no'];
$rec_no=$_POST['rec_no'];
$time=$_POST['time'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$query="INSERT INTO `transaction`(`tran_id`, `user_id`, `vehicle_no`, `receipt_no`, `time`, `date_of_trans`, `amount`) VALUES ('','$user_id','$vehi_no','$rec_no','$time','$date','$amount')";
$result=mysqli_query($conn,$query);
if($result==TRUE)
{
    echo"inserted successfully";
    $sql1="UPDATE `lots` SET `user_id`='0',`lot_status`='OUT' WHERE user_id='$user_id'";
    $result1=mysqli_query($conn,$sql1);
    if($result1==TRUE)
    {
        echo"updated";
        $sql2="UPDATE `vehicles` SET `status`='OUT' WHERE user_id='$user_id'";
        $result2=mysqli_query($conn,$sql2);
        if($result2==TRUE)
        {
            echo"updated";
        }
        else
        echo"not updated";
    }
    else
    echo"not updated";

}
else
echo"not inserted";
?>