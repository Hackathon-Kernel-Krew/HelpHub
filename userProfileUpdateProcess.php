<?php
session_start();
require "connection.php";

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];
$email = $_SESSION["user"]["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$bio = $_POST["bio"];

if (isset($_FILES["image"])) {
    $image = $_FILES["image"];

    $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
    $file_extention = $image["type"];

    if (!in_array($file_extention, $allowed_image_extentions)) {
        echo ("Please select a valid image");
    } else {
        $new_file_extention;
        if ($file_extention == "image/jpg") {
            $new_file_extention = ".png";
        } else if ($file_extention == "image/jpeg") {
            $new_file_extention = ".png";
        } else if ($file_extention == "image/png") {
            $new_file_extention = ".png";
        } else if ($file_extention == "image/svg+xml") {
            $new_file_extention = ".png";
        }

        $file_name = "resources/images/profile_images/" . $email . $new_file_extention;
        move_uploaded_file($image["tmp_name"], $file_name);
    }
}

if (isset($firstName) & isset($lastName) & isset($username) & isset($email) & isset($password) & isset($bio)) {

    $query = "UPDATE `user` SET ";
    $isValiedOperation = false;

    if (!empty($firstName)) {
        if (strlen($firstName) > 50) {
            $isValiedOperation = false;
            echo ("First name must have <50 charcters");
        } else if (is_numeric($firstName)) {
            $isValiedOperation = false;
            echo ("Invalied first name");
        } else {
            $isValiedOperation = true;
            $query = $query . "`first_name`='" . $firstName . "'";
        }
    }

    if (!empty($lastName)) {
        if (strlen($lastName) > 50) {
            $isValiedOperation = false;
            echo ("Last name must have <50 charcters");
        } else if (is_numeric($lastName)) {
            $isValiedOperation = false;
            echo ("Invalied last name");
        } else {
            $isValiedOperation = true;
            $query = $query . ",`last_name`='" . $lastName . "'";
        }
    }

    if (!empty($username)) {
        if (strlen($username)  > 25) {
            $isValiedOperation = false;
            echo ("Username must have <25 charcters");
        } else {
            $isValiedOperation = true;
            $query = $query . ",`username`='" . $username . "'";
        }
    }

    if (!empty($password)) {
        if (strlen($password) > 16 | strlen($password) < 8) {
            $isValiedOperation = false;
            echo ("Password must have 8-16 charcters");
        } else {
            $isValiedOperation = true;
            $query = $query . ",`password`='" . $password . "'";
        }
    }

    if (!empty($mobile)) {
        if (strlen($mobile) != 10) {
            $isValiedOperation = false;
            echo ("Mobile must have 10 characters");
        } else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $mobile)) {
            $isValiedOperation = false;
            echo ("Invalied mobile");
        } else {
            $isValiedOperation = true;
            $query = $query . ",`mobile`='" . $mobile . "'";
        }
    }

    if(!empty($bio)){
        $isValiedOperation = true;
        $query = $query . ",`bio`='" . $bio . "'";
    }

    $query = $query . " WHERE `email`='" . $email . "'";

    if($isValiedOperation & !(empty($firstName) & empty($lastName) & empty($username) & empty($password) & empty($mobile) & empty($bio))){
        Database::iud($query);
    }
    echo ("success");
} else {
    echo ("Something went wrong");
}
