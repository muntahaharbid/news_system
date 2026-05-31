<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center>
        <h1>Hello in News Website</h1>
        <h2>Login Page</h2>
        
        <form action="login_logic.php" method= "post"  autocomplete="off">
            
            <label>Email:</label><br>
            <input type="email" name= "email" placeholder="email" autocomplete="new-password">
            <br>
            <label>Password:</label><br>
            <input type="password" name= "password" placeholder="password"  autocomplete="new-password">
            <br>
            <br>
            <input type="submit" value= "login" name="login">


        </form>
        <br>
        <a href="registerUI.php"> No account yet? Create New Account</a>

    </center>


</body>
</html>