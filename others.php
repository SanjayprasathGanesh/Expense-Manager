<?php
$date = $_POST['date'];
$type = $_POST['type'];
$note  = $_POST['note'];
$totalamt = $_POST['totalamt'];

if (!empty($date) || !empty($type) || !empty($note) || !empty($totalamt) )
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "daily expense";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $INSERT = "INSERT Into others (date , type , note , totalamt )values('$date','$type','$note','$totalamt')";
if(mysqli_query($conn,$INSERT)){
      echo "Others record inserted sucessfully";
     } else {
      echo "OOPS Others record not inserted";
     }
     $conn->close();
    }
} else {
 echo "All field are required";
}