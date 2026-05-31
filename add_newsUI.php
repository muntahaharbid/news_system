<?php
include "dbConnection.php";

$categories = $connection->query("SELECT * FROM categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add news</title>
</head>
<body>
   <center>
    <h1>Hello in add news page</h1>
   </center> 

   <center>
    <form action="add_news_logic.php" method="post" enctype="multipart/form-data">
     <input type="text" name="title" placeholder="news title">
            <br>
            <br>
            <input type="text" name="details" placeholder="news details">
            <br>
            <br>

            <select name="category_id">
                <option value="">Choose Category</option>

                <?php while($row = $categories->fetch_assoc()) { ?>
                <option value="<?php echo $row['id']; ?>">
                    <?php echo $row['category_name']; ?>

                </option>

                <?php } ?>

            </select>
            <br>
            <br>

            <input type="file" name="news_image">
            <br>
            <br>

            <input type="submit" value="add news" name="add_news">
  </form>
  <br>
  <br>
  <a href="dashboard.php">Back to Dashboard</a>
 </center>
</body>
</html>