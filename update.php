<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$server = 'localhost';
$username = 'student';
$password = '123' ;
$dbname = 'student' ;

$conn = new mysqli($server, $username, $password, $dbname);
if($conn->error){
	die("Connection Failed:- ".$conn->error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$roll = $_POST['roll'];
	echo "<h1>Update Student</h1>" ;
	echo "<form action='update1.php' method='POST'>";
	echo "Roll : <input type= 'number' name = 'roll' value = '$roll'> <br>";
	echo "name : <input type = 'text' name = 'name'><br>" ;
	echo "dept : <input type = 'text' name = 'dept'> <br>" ;
	echo "<input type= 'submit' value = 'Update Student'>" ;
	echo "</form>";
}	
$conn->close();
?>
