<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit news</title>
</head>
<body>
    <center>
        <h2>Edit News</h2>
        <form action="edit_news_logic.php" method="post" enctype="multipart/form-data">

            
            <input type="text" name="title" value="<?php echo $news_data['title']; ?>" >
            <br>
            <br>
            <input type="text" name="details" value="<?php echo $news_data['details']; ?>" >
            <br>
            <br>

            <select name="category_id">
                <?php while($row = $categories->fetch_assoc()) { 
                    $selected = ($row['id'] == $news_data['category_id']) ? "selected" : "";
                ?>
                <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>>
                    <?php echo $row['category_name']; ?>
                </option>
                <?php } ?>
            </select>
            <br><br>

            <input type="file" name="news_image"><br>
            <br>
            <br>
            
            <input type="submit" value=" Update News" name="update_news">
        </form>
        <br>
        <a href="dashboard.php" Cancel and back to dachboard</a>
    </center>
</body>
</html>