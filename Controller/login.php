<?php
$uname = filter_input(INPUT_POST, 'uname');
$psw = filter_input(INPUT_POST, 'psw');
if (!empty($uname)){
if (!empty($psw)){
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
$sql = "INSERT INTO login
values ('$uname','$psw')";
if ($conn->query($sql)){
echo "Login Done Successfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "email should not be empty";
die();
}
}
else{
echo "Plz Tick the checkbox";
die();
}
?>