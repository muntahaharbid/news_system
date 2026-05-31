<?php

include "dbConnection.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "UPDATE news SET deleted = 1 WHERE id = $id";
    $result = $connection->query($sql);
    
    if($result == true){

    header("Location: dashboard.php");
        exit();
    }
}
?>