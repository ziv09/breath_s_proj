<?php
session_start();
require_once './php/conn.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $current_time = date("Y-m-d H:i:s");

    if (isValidEmail($email) && !empty($message)) {
        $sql = "INSERT INTO messageboard (time, mail, message) VALUES ('$current_time', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64'; 

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'breathlive00@gmail.com'; 
                $mail->Password = 'gezt dlmp xzcj iozg'; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // 收件人
                $mail->setFrom('no-reply@yourdomain.com', '意見回饋');
                $mail->addAddress('breathlive00@gmail.com');

                // 內容
                $mail->isHTML(true);
                $mail->Subject = '新的意見回饋';
                $mail->Body = "您收到一條新的意見回饋:<br><br>時間: $current_time<br>Email: $email<br>訊息: $message<br>";
                $mail->AltBody = "您收到一條新的意見回饋:\n\n時間: $current_time\nEmail: $email\n訊息: $message\n";

                $mail->send();
                echo "<script>alert('郵件已成功發送');</script>";
            } catch (Exception $e) {
                echo "<script>alert('但郵件發送失敗。錯誤: {$mail->ErrorInfo}');</script>"; 
            }
        } else {
            echo "<script>alert('資料庫錯誤: " . $conn->error . "');</script>"; 
        }
    } else {
        echo "<script>alert('請輸入有效的電子郵件和訊息。');</script>"; 
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>生活呼吸</title>
    <link href="./css/main_sy.css" rel="stylesheet">
    <link href="./css/about_sy.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="body">
    <div class="barcon">
        <div>
            <nav>
                <ul class="barstyle">
                    <li><a href="./index.php" id="bar">Home</a></li>
                    <li><a href="./login.php" id="bar">Account</a></li>
                    <li><a href="./tree.php" id="bar">Money</a></li>
                    <li><a href="./map.php" id="bar">Map</a></li>
                    <li><a href="./about.php" id="bar">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="div2">
        <div class="div1">
            <div>
                <span style="font-size:65px">About</span>
            </div>
            <div class="inter">
                消費適量，垃圾減量<br>
                讓我們一起有質感生活，讓生活重新呼吸。<br>
            </div>
            <div>
                -
            </div>
            <div class="feedGroup">
                <span style="font-size:55px">意見回饋</span>
            </div>
            <div>
                <form method="POST">
                    <div class="emailGroup">
                        <label id="lable">Email:
                            <input class="input" type="email" name="email" required>
                    </div>
                    <div>
                        <textarea class="textarea" name="message" required></textarea>
                        <button class="btn" type="submit">Send</button>
                    </div>
                </form>
            </div>
            <?php
            if (isset($feedback)) {
                echo "<div class='feedback'>$feedback</div>";
            }
            ?>
        </div>
        <div>
            <img class="img" src="./images/logo.png">
        </div>
    </div>

</body>

</html>