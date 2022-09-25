<?php
$date = $_POST['date'];
$type = $_POST['type'];
$totalamt = $_POST['totalamt'];

if (!empty($date) || !empty($type) || !empty($totalamt) )
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
  $INSERT = "INSERT Into salary (date , type , totalamt )values('$date','$type','$totalamt')";
if(mysqli_query($conn,$INSERT)){
      echo "Salary record inserted sucessfully";
     } else {
      echo "OOPS Salary record not inserted";
     }
     $conn->close();
    }
} else {
 echo "All field are required";
}