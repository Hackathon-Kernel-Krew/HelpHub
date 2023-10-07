<?php

session_start();
require "connection.php";

$comment = $_POST["comment"];
$commentorEmail = $_SESSION["user"]["email"];
$postId = $_POST["pid"];

if (empty($comment)) {
    echo "Please Enter Your Comment First";
} else if (isset($postId) && isset($commentorEmail)) {

    Database::iud("INSERT INTO `comments` (`posts_id`,`user_email`,`comment`)
        VALUES( '" . $postId . "','" . $commentorEmail . "','" . $comment . "')");

    echo "inserted";
} else {
    echo "Something Went Wrong";
}
