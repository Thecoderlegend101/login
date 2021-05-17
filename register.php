<?php 
$conn = mysqli_connect("localhost", "rootdarsh", "darsh@123", "cakery");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
		
$user_name = mysqli_real_escape_string($conn, $_REQUEST['user_name']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

$sql = "INSERT INTO user (user_name, password)VALUES ('$user_name', '$password')";

if ($conn->query($sql) === TRUE) {
  header("Location: login.php");
exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

        mysqli_close($conn);
?>
