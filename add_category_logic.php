<?php


include "dbConnection.php";

if (isset($_POST["add_category"])) {
    $category_name = $_POST["category_name"]; 

$sql = "INSERT INTO categories (category_name) VALUES ('$category_name')";
    $result = $connection->query($sql);

if($result == true){
    header("location: dashboard.php");
    exit();
}else {
    echo "Error";
 }

}
?>