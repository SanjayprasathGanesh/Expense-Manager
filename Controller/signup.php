<?php
$usrname = filter_input(INPUT_POST, 'usrname');
$email = filter_input(INPUT_POST, 'email');
$psw = filter_input(INPUT_POST, 'psw');
$reppsw = filter_input(INPUT_POST, 'reppsw');
if (!empty($usrname)){
if (!empty($email)){
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
$sql = "INSERT INTO signup 
values ('$usrname','$email','$psw','$reppsw')";
if ($conn->query($sql)){
echo "Signup Created Successfully";
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