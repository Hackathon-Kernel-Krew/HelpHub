<?php
session_start();
require "connection.php";

if (isset($_POST["message"]) & isset($_POST["receiver"])) {
    $message = $_POST["message"];
    $receiver = $_POST["receiver"];

    $date = new DateTime();
    $timezone = new DateTimeZone("Asia/colombo");
    $date->setTimezone($timezone);
    $newDate = $date->format("Y-m-d H:i:s");

    Database::iud("INSERT INTO `chat` (`from_user`,`to_user`,`chat_content`,`chat_status_id`,`send_date_time`) VALUE ('" . $_SESSION["user"]["email"] . "','" . $receiver . "','" . $message . "','2','" . $newDate . "')");

    echo("success");
}
?>