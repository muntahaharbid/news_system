<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Page</title>
</head>
<body>
    <center>
        <h1>Hello in News Website</h1>
        <h2>Create New Account</h2>
        <form action="register_logic.php" method= "post"  autocomplete="off">
            <label>Name: </label><br>
            <input type="text" Name= "name" placeholder="name" autocomplete="off">
            <br>
            <label>Email:</label> <br>
            <input type="email" name= "email" placeholder="email" autocomplete="new-password">
            <br>
             <label>Password:</label><br>
            <input type="password" name= "password" placeholder="password" autocomplete="new-password">
            <br>
            <br>
            <input type="submit" value= "Create" name="create_account">


        </form>
        <br>
        <a href="loginUI.php">Already have an account? Login here</a>
    </center>
</body>
</html>