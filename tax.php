<?php
$date = $_POST['date'];
$type = $_POST['type'];
$duration  = $_POST['duration'];
$totalamt = $_POST['totalamt'];

if (!empty($date) || !empty($type) || !empty($duration) || !empty($totalamt) )
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
  $INSERT = "INSERT Into tax (date , type , duration , totalamt )values('$date','$type','$duration','$totalamt')";
if(mysqli_query($conn,$INSERT)){
      echo "Income Tax record inserted sucessfully";
     } else {
      echo "OOPS Income Tax record not inserted";
     }
     $conn->close();
    }
} else {
 echo "All field are required";
}