<?php
session_start();
require "connection.php";

if(isset($_GET["ctgryId"])){
    $categoryId = $_GET["ctgryId"];

    $categoryResultset = Database::search("SELECT * FROM `user_has_category` WHERE `category_id`='" . $categoryId . "' AND `user_email`='" . $_SESSION["user"]["email"] . "'");
    $categoryRownumber = $categoryResultset->num_rows;
    $categoryData = $categoryResultset->fetch_assoc();

    if($categoryRownumber == 1){

        Database::iud("DELETE FROM `user_has_category` WHERE `id`='" . $categoryData["id"] . "'");
        echo("category removed");
    }else{
        Database::iud("INSERT INTO `user_has_category` (`user_email`,`category_id`) VALUES ('" . $_SESSION["user"]["email"] . "','" . $categoryId . "')");
        echo("category added");
    }
}
?>