<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>User Form</h2>

<form action="n.php" method="GET">

    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Age:</label><br>
    <input type="number" name="age"><br><br>

    <input type="submit" value="Submit">

</form>

<hr>

<h2>Users</h2>
<script>

function toggleStatus(id){

    fetch("toggle.php?id=" + id)
    .then(response => response.text())
    .then(data => {
		if(data=="success"){
    let cell = document.getElementById("status" + id);

    if(cell.innerHTML == "0"){
        cell.innerHTML = "1";
    }else{
        cell.innerHTML = "0";
    }
    }
        else{
            alert("Error");
        }
    });

}

</script>
</body>
</html>
<?php

include "database.php";

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Status</th>";
echo "<th>Action</th>";
echo "</tr>";

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["age"]."</td>";
        echo "<td id='status".$row["id"]."'>".$row["status"]."</td>";
		echo "<td><button onclick=\"toggleStatus(".$row['id'].")\">Toggle</button></td>";
        echo "</tr>";

    }

}

echo "</table>";

$conn->close();

?>