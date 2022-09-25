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
  $INSERT = "INSERT Into personal (date , type , quantity , totalamt )values('$date','$type','$quantity','$totalamt')";
if(mysqli_query($conn,$INSERT)){
      echo "Personal record inserted sucessfully";
     } else {
      echo "OOPS Personal record not inserted";
     }
     $conn->close();
    }
} else {
 echo "All field are required";
}