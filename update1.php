<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$server = 'localhost' ;
$username = 'student' ;
$password = '123' ;
$dbname = 'student' ;

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error){
	die("Error Occured:- ".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$roll = $_POST['roll'] ;
	$name = $_POST['name'] ;
	$dept = $_POST['dept'] ;
	$sql = "update record set name = '$name', dept = '$dept'  where(roll = '$roll' )";
	$result = $conn->query($sql);
	if($conn->affected_rows > 0 ){
		echo "Data Updated Successfully";
	}
	else{
		echo "Error Occured";
	}
}
echo "<br>";
echo "<a href='view.php'>View</a>" ;
$conn->close();
?>
