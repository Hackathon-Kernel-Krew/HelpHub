<?php

session_start();
require "connection.php";

$postId = $_POST["pid"];
$userEmail = $_SESSION["user"]["email"];

if (isset($postId) && isset($userEmail)) {

    $vote_rs = Database::search("SELECT * FROM `vote` WHERE `user_email`='".$userEmail."' AND `posts_id`='".$postId."'");
    $vote_data = $vote_rs->fetch_assoc();
    $vote_num = $vote_rs->num_rows;

    if($vote_num==0){

        Database::iud("INSERT INTO `vote` (`count`,`posts_id`,`user_email`)
        VALUES( '1','" . $postId . "','" . $userEmail . "')");

        echo "liked";

    }else if ($vote_num==1 && $vote_data['count'] == 1) {

        Database::iud("DELETE FROM `vote` WHERE `user_email`='".$userEmail."' AND `posts_id`='".$postId."'");
        echo "disliked";

    } 

}else{
    echo "Something Went Wrong" ;
}