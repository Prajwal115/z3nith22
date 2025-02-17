<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$conn = mysqli_connect("localhost","root","","z3nith'22");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id = $_POST["num"];
$name = $_POST["uname"];
$points = $_POST["points"];

$sql = "INSERT INTO leaderboard (id,name,points) VALUES('$id','$name','$points')";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


  ?>
