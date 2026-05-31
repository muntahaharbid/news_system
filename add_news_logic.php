<?php

session_start();

include "dbConnection.php";

if (isset($_POST["add_news"])) {
    $title = $_POST["title"];
    $details = $_POST["details"];
    $category_id = $_POST["category_id"];
}

$user_id = $_SESSION["authUser"]["id"];


$image_name = $_FILES["news_image"]["name"];
$image_tmp = $_FILES["news_image"]["tmp_name"];
move_uploaded_file($image_tmp, "uploads/" . $image_name);

$sql = "INSERT INTO news (title, details, image, category_id, user_id, deleted) 
VALUES ('$title', '$details', '$image_name', '$category_id', '$user_id', 0)";

$result = $connection->query($sql);

    if ($result == true) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error" ;
    }





?>
