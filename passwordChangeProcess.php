<?php
require "connection.php";

    $code = $_POST["code"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $email = $_POST["email"];

    if(empty($code)){
        echo("PLease enter verification code");
    }else if(strlen($code) != 6){
        echo("Verification code must have 6 characters");
    }else if(empty($email)){
        echo("Please enter your email");
    }else if(strlen($email) > 50){
        echo("Email address must <50 characters");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("Invalied email");
    }else if(empty($password1)){
        echo("PLease enter new password");
    }else if(strlen($password1) < 5 | strlen($password1) > 16){
        echo("Password must have 8-16 characters");
    }else if(empty($password2)){
        echo("Please enter confirm password");
    }else if($password1 != $password2){
        echo("Passwords not matching");
    }else{
        $verificationResultset = Database::search("SELECT * FROM `user` WHERE `verification_code`='". $code ."' AND `email`='". $email ."'");
        $verificationRownumber = $verificationResultset->num_rows;

        if($verificationRownumber > 0){
            Database::iud("UPDATE `user` SET `password`='". $password1 ."' WHERE `email`='". $email ."'");
            Database::iud("UPDATE `user` SET `verification_code`='' WHERE `email`='". $email ."'");
            echo("success");
        }else{
            echo("Invlied verification code and Email");
        }
    }
?>