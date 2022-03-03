<!DOCTYPE html>
<html>
<hr>
<h1 style="color:green;" align="center"><i>Expense Manager</i></h1>
<hr>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: black;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 10px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: red;
}

.active {
  background-color: black;
}
</style>
<body>

<div class="icon-bar">
  <a class="active" href="https://expensemanager.w3spaces.com/index.html"><i class="fa fa-home"></i></a> 
  <a href="https://dailyexpenses.w3spaces.com/index.html"><i class="fa fa-search"></i></a> 
  <a href="https://bankaccloginem.w3spaces.com/index.html"><i class="fa fa-bank"></i></a> 
  <a href="http://localhost/emdaily/vishualpage.php"><i class="fa fa-envelope"></i></a> 
  <a href="http://localhost/emdaily/lastpage.html"><i class="fa fa-gear"></i></a> 
</div>
</body>


<!DOCTYPE html>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM fuel ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Expense Manager User Details</title>
<style>
table {
	margin: 0 auto;
	font-size: large;
	border: 1px solid black;
}

h1 {
	text-align: center;
	color: red;
	font-size: xx-large;
	font-family: 'Gill Sans', 'Gill Sans MT',
	' Calibri', 'Trebuchet MS', 'sans-serif';
}

h2 {
	text-align: center;
	color: blue;
	font-size: xx-large;
	font-family: 'Gill Sans', 'Gill Sans MT',
	' Calibri', 'Trebuchet MS', 'sans-serif';
}

td {
	background-color: gold;
	border: 1px solid black;
}

th{
	background-color: crimson;
	color:white;
	font-weight: bold;
	border: 1px solid black;
	padding: 10px;
	text-align: center;
}
	
td {
	font-weight: bold;
	border: 1px solid black;
	padding: 10px;
	text-align: center;
}

td {
	font-weight: lighter;
}
</style>
</head>

<body>
<section>
	<hr>
	<h1>Daily Expenses</h1>
	<hr>
    <h2>Fuel</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
</table>
</section>
<br>
<hr>

<table>
<section>
    <?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM food ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Food</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
</table>
</section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM fruits ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>  
    <h2>Fruits</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM transport ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Transport</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM groceries ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>   
    <h2>Groceries</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
</table>
</section>
<br>

<body>
<section>
	<hr>
	<h1>Necessary Monthly Expenses</h1>
	<hr>
    <h2>Groceries</h2>
	<table>
    <?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM groceries ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>   
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
</table>
</section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM rent ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>House Rent</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
</table>
</section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM clothing ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>  
    <h2>Clothing</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM fuel ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Fuel</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM gas ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>   
    <h2>Gas Cylinder</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
</table>
</section>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM eb ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Electricity Bill</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM wifi ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Wifi Bill</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM recharge ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Mobile Recharge</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM cable ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Cable TV/Dish</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM fruits ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Fruits and Vegetables</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM studies ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Studies</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM medical ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Medical</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM insurance ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Insurance</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM personal ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Personal works</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM household ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Household Things</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM nonveg ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Non veg</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM transport ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Transportation Fare</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM fee ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Childrens Fees</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM newspaper ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Newspaper Fees</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM appliances ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Buying Appliances</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM furnitures ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Furnitures</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM outfoods ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
	<hr>
	<h1>Unnecessary Monthly Expenses</h1>
    <hr>
    <h2>Outfoods</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM shopping ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Online Shopping</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM entertainment ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Entertainment</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM repair ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Repair Works</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM maintenence ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Maintenence</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM parlour ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Beauty Parlour</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM travelling ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Travelling</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Quantity</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['quantity'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>

<table>
<section>
<hr>
<h1>Monthly Income</h1>
<hr>
<br>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM salary ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Salary</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM rent ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>House Rent</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM bank ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Bank Interest</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM profit ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Bussiness Profit</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>

<table>
<section>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM capital ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Capital Assests</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>

<table>
<section>
<hr>
<h1>Tax</h1>
<hr>
<br>
<?php
$user = 'root';
$password = '';
$database = 'daily expense';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM tax ORDER BY date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <h2>Personal Income Tax</h2>
	<table>
	<tr>
		<th>Date</th>
		<th>Type</th>
		<th>Duration</th>
		<th>Total Amount</th>
	</tr>
	<?php
	while($rows=$result->fetch_assoc())
	{
	?>
	<tr>
		<td><?php echo $rows['date'];?></td>
		<td><?php echo $rows['type'];?></td>
		<td><?php echo $rows['duration'];?></td>
		<td><?php echo $rows['totalamt'];?></td>
	</tr>
	<?php
	}
	?>
<table>
<section>
<br>
<hr>
</body>
</html>

<h3>Just if you want to download your progress,just download your statement here</h3>
<button onclick="window.print()">Print this page</button>
<br>
<br>
<hr>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-instagram {
  background: crimson;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
</style>
</head>
<body>

<h2><i>Contact us in </i></h2>
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://mobile.twitter.com/explore" class="fa fa-twitter"></a>
<a href="https://www.google.co.in/" class="fa fa-google"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a> 
<a href="https://www.youtube.com/" class="fa fa-youtube"></a> 
<a href="https://in.linkedin.com/" class="fa fa-linkedin"></a> 
</body>
</html> 
<hr>
<br>

<!DOCTYPE html>
<html>
<head>
<h2>Digital/Online Payment Options</h2>
<hr>
<h3><i>Note : We ask this payment details to link your net banking with our website,so that you can easily able to track your daily expenses</i></h3><hr>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: ghostwhite;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: crimson;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid black;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method = "POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Personal Information</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="Submit" onclick="alert('Thanks for having digital Transaction with us')" class="btn">
      </form>
    </div>
  </div>
</body>
</html>
<hr>