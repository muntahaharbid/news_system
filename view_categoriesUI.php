
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Categories</title>
</head>
<body>
    <h2>All Categories</h2>
    <a href="dashboard.php">Back to Dashboard</a>
<br>
<br>

<table border ="2px" width= "100%">
    <tr>
        <th>Category Id</th>
        <th>Category Name</th>
    </tr>

    <?php

    if ($all_categories->num_rows > 0) {
    
      while ($row = $all_categories->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['category_name'] . "</td>";
        echo "</tr>";
    }


    } else {
            echo "No Categories Found";
        }


    ?>
</table>
</body>
</html>