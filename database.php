<?php

$servername = "sql112.infinityfree.com";
$username = "if0_42505281";
$password = "FhEzDbfszcx";
$dbname = "if0_42505281_amjadtask1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>