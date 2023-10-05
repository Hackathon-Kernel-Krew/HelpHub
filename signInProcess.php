<?php
require "connection.php";

if(isset($_POST["email"]) & isset($_POST["password"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($email)){
        echo("Please enter your email");
    }else if(strlen($email) > 50){
        echo("Email address must <50 characters");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("Invalied email");
    }else if(empty($password)){
        echo("PLease enter you password!");
    }else if(($password) < 5 || strlen($password) > 20){
        echo("Password must have 8-16 characters");
    }else {
        $userResultset = Database::search("SELECT * FROM `user` WHERE `email`='". $email ."' AND `password`='" . $password . "'");
        $userRownumber = $userResultset->num_rows;

        if($userRownumber > 0){
            $_SESSION["user"] = $userResultset->fetch_assoc();
            echo("success");
        }else{
            echo("Invlied username or password");
        }
    }
}
?>
