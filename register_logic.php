<?php
 
 include "dbConnection.php";

 if ($connection-> error == false){
    if (isset($_POST["create_account"])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $password= $_POST["password"];


    $sql= "INSERT INTO users(name,email,password) 
    values ('$name', '$email' ,'$password')";
    

    $result= $connection->query($sql); 

    if($result == true){
        header("Location:loginUI.php");
        exit();
    }
    else{ 
        echo "Failed";
    }
    }
}
   



?>
