<?php
require "connection.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $massage = $_POST["massage"];

    if(empty($name)){
        echo("Please enter your Full name");
    }else if(empty($email)){
        echo("Please enter your email");
    }else if(strlen($email) > 50){
        echo("Email address must <50 characters");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("Invalied email");
    }else if(empty($massage)){
        echo("PLease enter you massage !");
    }else {

        $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
    $num = $rs->num_rows;

    if ($num == 0) {
        echo "There is no Emil like this";
    } else {
        
        Database::iud("INSERT INTO `help_desk` (`user_email`,`message`) VALUES ('" . $email . "','" . $massage . "')");

        echo ("success");

    }
        
    }
