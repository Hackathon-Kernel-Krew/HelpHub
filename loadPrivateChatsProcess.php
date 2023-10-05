<?php
session_start();
require "connection.php";

$receiver = $_POST["toEmail"];

$receiverResultset = Database::search("SELECT * FROM `chat` WHERE (`from_user`='" . $_SESSION["user"]["email"] . "' AND `to_user`='" . $receiver . "') OR (`from_user`='" . $receiver . "' AND `to_user`='" . $_SESSION["user"]["email"] . "') ORDER BY `send_date_time` ASC");
$receiverRownumber = $receiverResultset->num_rows;
if ($receiverRownumber > 0) {
    for ($x = 0; $x < $receiverRownumber; $x++) {
        $receiverData = $receiverResultset->fetch_assoc();

        if ($receiverData["from_user"] != $_SESSION["user"]["email"]) {
?>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                    <img src="resources/images/profile_images/<?php echo ($receiverData["from_user"]); ?>.png" alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded"><?php echo ($receiverData["chat_content"]); ?></p>
            </li>
        <?php
        } else {
        ?>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded"><?php echo ($receiverData["chat_content"]); ?></p>
                <!-- avatar -->
                <div>
                    <img src="resources/images/profile_images/<?php echo ($_SESSION["user"]["email"]); ?>.png" alt="avatar" class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                </div>
            </li>
    <?php
        }
    }
    ?>
    <input type="text" class="d-none" value="<?php echo($receiver); ?>" id="receiver-email"/>
    <?php
} else {
    ?>
    <p class="bg-gray p-2 rounded">No Results</p>
<?php
}
?>