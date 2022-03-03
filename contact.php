<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$country = filter_input(INPUT_POST, 'country');
$city = filter_input(INPUT_POST, 'city');
$subject = filter_input(INPUT_POST, 'subject');
if (!empty($fname)){
if (!empty($subject)){
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
$sql = "INSERT INTO contact 
values ('$fname','$lname','$country','$city' ,'$subject')";
if ($conn->query($sql)){
echo "Thanks for helping us to improve,your contact form submitted Sucessfully.";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "subject should not be empty";
die();
}
}
else{
echo "fname should not be empty";
die();
}
?>