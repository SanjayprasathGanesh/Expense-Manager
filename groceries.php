<?php
$date = filter_input(INPUT_POST, 'date');
$type = filter_input(INPUT_POST, 'type');
$quantity = filter_input(INPUT_POST, 'quantity');
$totalamt = filter_input(INPUT_POST, 'totalamt');
if (!empty($date)){
if (!empty($type)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "daily expense";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO groceries 
values ('$date','$type','$quantity','$totalamt')";
if ($conn->query($sql)){
echo "Groceries record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "date should not be empty";
die();
}
}
else{
echo "type should not be empty";
die();
}
?>