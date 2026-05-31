<?php

session_start();

include "dbConnection.php";

if ($connection->error == false) {
    
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {

            $data = $result->fetch_assoc();
            
            if ($password == $data["password"]) {
                
                $_SESSION["authUser"] = $data;

                header("Location: dashboard.php");
                exit();
                
            } else {
                echo "Password is incorrect";
            }
            
        } else {
            echo "Login Failed"; 
        }
    }
}
?>