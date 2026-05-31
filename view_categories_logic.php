<?php

include "dbConnection.php";

$sql = "SELECT * FROM categories";
$all_categories = $connection->query($sql);

include "view_categoriesUI.php";


?>