<?php

include "dbConnection.php";

$sql = "SELECT news.*, categories.category_name, users.name AS author_name 
        FROM news 
        JOIN categories ON news.category_id = categories.id 
        JOIN users ON news.user_id = users.id 
        WHERE news.deleted = 1";
        
$deleted_news = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deleted News</title>
</head>
<body>
    <h2>Deleted News</h2>

    <a href="dashboard.php">Back to Dashboard</a>
    <br>
    <br>

    <table border="2px" width="100%">
        <tr>
            <th>Title</th>
            <th>Details</th>
            <th>Image</th>
            <th>Category</th>
            <th>Author</th>
        </tr>

        <?php
        if ($deleted_news->num_rows > 0) {
            while ($row = $deleted_news->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";

                echo "<td><img src='uploads/" . $row['image'] . "' width='250'></td>";

                echo "<td>" . $row['category_name'] . "</td>";

                echo "<td>" . $row['author_name'] . "</td>";

                echo "</tr>";
            }
        } else {
            echo "No deleted news found";
        }
        ?>
    </table>
</body>
</html>