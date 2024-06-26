<?php
require_once './php/conn.php';
session_start();

if (isset($_SESSION['mail']))
    $mail = $_SESSION['mail'];

$sql = "SELECT * FROM account WHERE mail = '$mail'";
$result = mysqli_query($conn, $sql);
$user_data = mysqli_fetch_array($result);

// 個人種樹
if (isset($_SESSION['mail'])) {
    $mail = $_SESSION['mail'];

    $all_save = 0;

    $sql = "SELECT d.eid, d.num, ef.save
        FROM mytree m
        JOIN details d ON m.mid = d.mid
        JOIN environmental_friendly ef ON d.eid = ef.eid
        WHERE m.mail = '$mail';";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($data as $row) {
        $total_save = $row['num'] * $row['save'];
        $all_save += $total_save;
    }

    $mytree = (int) ($all_save / 0.06);
} else {
    $mytree = 0;
}

// 登出功能
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>生活呼吸</title>
    <link href="./css/main_sy.css" rel="stylesheet">
    <link href="./css/account_sy.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="body">
    <div class="barcon">
        <img src="./images/logo.png" alt="">
        <div>
            <nav>
                <ul class="barstyle">
                    <li><a href="./index.php" id="bar">Home</a></li>
                    <li><a href="./login.php" id="bar">Account</a></li>
                    <li><a href="./gar.php" id="bar">Money</a></li>
                    <li><a href="./map.php" id="bar">Map</a></li>
                    <li><a href="./about.php" id="bar">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="accimf">
        <div class="imf">
            <img id="accimg" src="./images/unnamed.jpg"><!--頭貼要接php-->
            <span class="span3"><?= $user_data['name'] ?></span>&ensp;<a href="?logout">登出</a>
        </div>
    </div>
    <div class="accconec">
        <div>
            <label id="lable"> 電子郵件
                <input class="input" type="email" id="userID" value="<?= $user_data['mail'] ?>" readonly>
            </label>
        </div>
        <div>
            <label id="lable"> 連絡電話
                <input class="input" type="text" value="<?= $user_data['phone'] ?>" readonly>
            </label>
        </div>
    </div>
    <div class="tree">
        <span class="span1">呼吸樹</span><span class="span2"><?= $mytree ?></span><span class="span1">顆</span>
    </div>

</body>

</html>