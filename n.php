<?php

include "database.php";

$name = $_GET['name'];
$age = $_GET['age'];

$sql = "INSERT INTO user (id, name, age , status ) 
VALUES ('', '$name', '$age', 0 )";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>