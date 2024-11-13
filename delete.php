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
	$sql = "delete from record where (roll = '$roll')";
	$result = $conn->query($sql);
	if($conn->affected_rows > 0){
		echo "Delete Succesfully" ;
	}
	else{
		echo "Not Deleted" ;
	}
}
echo "<br>";
echo "<a href='view.php'>View</a>" ;
$conn->close();
?>
