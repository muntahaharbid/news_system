<?php

include "dbConnection.php";

$id = $_GET["id"];
$categories = $connection->query("SELECT * FROM categories");

$news_result = $connection->query("SELECT * FROM news WHERE id = $id");
$news_data = $news_result->fetch_assoc();

include "edit_newsUI.php";

?>