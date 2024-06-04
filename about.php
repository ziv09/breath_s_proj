<?php
require_once './php/conn.php'; // 使用 conn.php 來設置資料庫連接
session_start();


// 處理表單提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $time = date("Y-m-d H:i:s");

    // 插入資料到資料表
    $sql = "INSERT INTO messageboard (time, mail, message) VALUES ('$time', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        $feedback = "意見回饋已成功提交！";

        // 發送郵件
        $to = "breathlive00@gmail.com";
        $subject = "新意見回饋";
        $body = "您收到一條新的意見回饋:\n\n" .
                "時間: $time\n" .
                "Email: $email\n" .
                "訊息: $message\n";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $feedback .= " 郵件已成功發送！";
        } else {
            $feedback .= " 但郵件發送失敗。";
        }
    } else {
        $feedback = "錯誤: " . $sql . "<br>" . $conn->error;
    }

    // 關閉連接
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
