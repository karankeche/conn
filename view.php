<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$server = 'localhost' ;
$username = 'student' ;
$password = '123' ;
$dbname = 'student' ;

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error){
	die("connection Failed:-  ".$conn->connect_error);
}

$sql = "select * from record";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table border='1'>" ;
	echo "<tr><th>Roll</th><th>Name</th><th>Department</th><th>Action</th></tr>";
	while($row=$result->fetch_assoc()){
		echo "<tr>" ;
		echo "<td>".$row['roll']."</td>" ;
		echo "<td>".$row['name']."</td>" ;
		echo "<td>".$row['dept']."</td>" ;
		echo "<td>" ;
		echo "<form action = 'delete.php' method = 'POST'>" ;
		echo "<input type = 'hidden' name = 'roll' value = '".$row['roll']."'>" ;
		echo "<input type = 'submit' value = 'Delete'>" ;
		echo "</form>" ;
		echo "</td>" ;
		echo "<td>" ;
		echo "<form action = 'update.php' method = 'POST'>" ;
		echo "<input type = 'hidden' name = 'roll' value = '".$row['roll']."'>" ;
		echo "<input type = 'submit' value = 'update'>" ;
		echo "</form>" ;
		echo "</td>" ;
		echo "</tr>" ;
	}
	echo "</table>" ;
	echo "<a href='insert.html' >Add Student</a>" ;
}else {
	echo "0 record into the table";
}
$conn->close();
?>
