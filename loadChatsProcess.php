<?php
session_start();
require "connection.php";

if (isset($_POST["email"])) {
    $email = $_POST["email"];

    Database::iud("UPDATE `chat` SET `chat_status_id`='1' WHERE `from_user`='" . $_SESSION["user"]["email"] . "'");

    $chatResultset = Database::search("SELECT DISTINCT `from_user` FROM `chat` WHERE `from_user`<>'".$_SESSION["user"]["email"]."' AND `to_user`='".$_SESSION["user"]["email"]."'");
    $chatRownumber = $chatResultset->num_rows;

    if ($chatRownumber > 0) {
        for ($x = 0; $x < $chatRownumber; $x++) {
            $chatData = $chatResultset->fetch_assoc();

            $chatResultset2 = Database::search("SELECT * FROM `chat` WHERE `from_user`='". $chatData["from_user"] ."'");
            $chatData2 = $chatResultset2->fetch_assoc();

            $receiverResultset;
            if ($chatData2["from_user"] == $email) {
                $receiverResultset = Database::search("SELECT * FROM `user` WHERE `email`='" . $chatData2["to_user"] . "'");
            } else if ($chatData2["to_user"] == $email) {
                $receiverResultset = Database::search("SELECT * FROM `user` WHERE `email`='" . $chatData2["from_user"] . "'");
            }

            $receiverData = $receiverResultset->fetch_assoc();
            $sendDateTimeObject = strtotime($chatData2["send_date_time"]);
            $timeString = date('h.i a - M n, Y', $sendDateTimeObject);
?>
            <!-- chat profile -->
            <button onclick="loadPrivateChats('<?php echo ($receiverData['email']); ?>');" data-bs-dismiss="modal" aria-label="Close">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-evenly">
                        <div class="p-2">
                            <img src="resources/images/profile_images/<?php echo ($receiverData["email"]); ?>.png" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                        </div>
                        <div class="d-flex flex-column align-items-start">
                            <p class="fs-7 m-0"><?php echo ($receiverData["first_name"] . " " . $receiverData["last_name"]); ?></p>
                            <span class="fs-7 text-muted"><?php echo ($chatData2["chat_content"]); ?> &#8226; <?php echo ($timeString); ?></span>
                        </div>
                    </div>
                    <div class="p-2">
                        <img src="resources/images/profile_images/<?php echo ($receiverData["email"]); ?>.png" alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover" />
                    </div>
                </div>
            </button>
            <!-- chat profile -->
<?php
        }
    }
}
?>