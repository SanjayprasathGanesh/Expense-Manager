<?php
$date = $_POST['date'];
$type = $_POST['type'];
$quantity  = $_POST['quantity'];
$totalamt = $_POST['totalamt'];

if (!empty($date) || !empty($type) || !empty($quantity) || !empty($totalamt) )
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
  $INSERT = "INSERT Into dairy (date , type , quantity , totalamt )values('$date','$type','$quantity','$totalamt')";
if(mysqli_query($conn,$INSERT)){
      echo "Dairy record inserted sucessfully";
     } else {
      echo "OOPS Dairy record not inserted";
     }
     $conn->close();
    }
} else {
 echo "All field are required";
}