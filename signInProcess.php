<?php
session_start();
require "connection.php";

if(isset($_POST["email"]) & isset($_POST["password"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rememberme = $_POST["rememberme"];

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
        $customerResultset = Database::search("SELECT * FROM `user` WHERE `email`='". $email ."' AND `password`='" . $password . "'");
        $customerRownumber = $customerResultset->num_rows;

        if($customerRownumber > 0){
            $_SESSION["user"] = $customerResultset->fetch_assoc();

            if($rememberme == "true"){

                setcookie("email",$email,time()+(60*60*24*365));
                setcookie("password",$password,time()+(60*60*24*365));
    
            }else{
    
                setcookie("email","",-1);
                setcookie("password","",-1);
    
            }

            echo("success");
        }else{
            echo("Invlied username or password");
        }
    }
}
?>