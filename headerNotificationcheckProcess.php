<?php
session_start();
require "connection.php";

if (isset($_SESSION["user"])) {
    $messageResultset = Database::search("SELECT * FROM `chat` WHERE `to_user`='" . $_SESSION["user"]["email"] . "' AND `chat_status_id`='2'");
    $messageRownumber = $messageResultset->num_rows;
    echo ($messageRownumber);
}
