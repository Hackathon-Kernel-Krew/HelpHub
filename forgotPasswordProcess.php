<?php
require "connection.php";
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    if (strlen($email) < 1) {
        echo ("Please enter your email");
    } else {
        $adminResultset = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
        $adminRownumber = $adminResultset->num_rows;

        if ($adminRownumber > 0) {

            function generateUniqId($startNum, $idLenght)
            {
                $uniqId = uniqid();
                $newUniqId = substr($uniqId, intval($startNum), intval($idLenght));
                return $newUniqId;
            }
            $verificationCode = generateUniqId(5, 6);

            Database::iud("UPDATE `user` SET `verification_code`='". $verificationCode ."' WHERE `email`='". $email ."'");

            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'kerenlkrew@gmail.com';
            $mail->Password = 'wvbadwmvtljdwuyb';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('kerenlkrew@gmail.com', 'marketplace');
            $mail->addReplyTo('kerenlkrew@gmail.com', 'marketplace');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Admin Signin Verification Code';
            $bodyContent = '<div style="width: auto;height: auto;border-radius: 24px;background-image: linear-gradient(24deg, #3972eb, #59ccfa);padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
            <div style="text-align: center;font-size: 13px;font-weight:bold;padding-top:13px;">
                <span style="color: #fff;font-size:18px;">Verification Code Is</span>
                </div>
            <div style="margin-top: 30px;">
                <div style="padding-left:5px;padding-top:5px;padding-bottom:5px;padding-right:5px;border-radius: 24px;background-color: rgb(232, 255, 253);box-shadow: 0px 3px 5px 1px rgba(17, 14, 68, 0.1);text-align:center;">
                <h3 style="font-size: 14px;color: #135eff;">' . $verificationCode . '</h3>
                </div>
                </div>
                </div>';
            $mail->Body = $bodyContent;

            if (!$mail->send()) {
                Database::iud("UPDATE `user` SET `verification_code`='' WHERE `email`='". $email ."'");
                echo ("Verification code sending failed");
            } else {
                echo ("success");
            }
        } else {
            echo ("Email not matching");
        }
    }
} else {
    echo ("Something went wrong");
}
