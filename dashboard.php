<?php

session_start();

include "dbConnection.php";

$sql = "SELECT news.*, categories.category_name, users.name AS author_name 
        FROM news 
        JOIN categories ON news.category_id = categories.id 
        JOIN users ON news.user_id = users.id 
        WHERE news.deleted = 0";
$all_news = $connection->query($sql);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <center>
        <h1>Hello in Dashboard</h1>
    </center>
    <h2>Manage the News</h2>
    <a href="add_categoryUI.php">Add Category</a>
    <br>
    <a href="view_categories_logic.php">View Categories</a>
    <br>
    <a href="add_newsUI.php">Add News</a>
    <br>
    <a href="dashboard.php">View All News</a>
    <br>
    <a href="deleted_news.php">View Deleted News</a>
    
<h2>News Now</h2>

    <table border= "2px" width="100%">
        <th>Title</th>
        <th>Details</th>
        <th>Image</th>
        <th>Operations</th>
        <th>Category</th>
        <th>Author</th>


        <?php
        if ($all_news->num_rows > 0) {
            while ($row = $all_news->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";
                echo "<td><img src='uploads/" . $row['image'] . "' width='250'></td>";

                echo "<td>
                        <a href='edit_news_logic.php?id=" . $row['id'] . "'>Edit</a>  
                        <a href='delete_news.php?id=" . $row['id']. "'>Delete</a>
                      </td>";
                echo "<td>" . $row['category_name'] . "</td>";
                echo "<td>" . $row['author_name'] . "</td>";
                
                echo "</tr>";
            }
        } else {
            echo "Empty";
        }


        ?>
    </table>
        </table>
</body>
</html>

