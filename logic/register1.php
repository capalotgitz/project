<?php
require 'db.php';
$conn = new mysqli($servername, $server_user, $server_pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (`name`, `username`, `password`, `email`, `phone`)
VALUES ('John', 'Doe', 'qwerty','john.doe@gmail.com', '0718723555')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Created Successfully");
?>