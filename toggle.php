<?php

include "database.php";

$id = $_GET['id'];

$sql = "UPDATE user
SET status = IF(status=0,1,0)
WHERE id=$id";

if($conn->query($sql)==TRUE){
    echo "success";
}
else{
    echo "error";
}

$conn->close();

?>