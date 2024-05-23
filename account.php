<<<<<<< HEAD
=======
<?php
require_once './php/conn.php';
session_start();

if (isset($_SESSION['mail']))
    $mail = $_SESSION['mail'];

$sql = "SELECT * FROM account WHERE mail = '$mail'";
$result = mysqli_query($conn, $sql);
$user_data = mysqli_fetch_array($result);

?>
>>>>>>> 2a96164 (123)
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
<<<<<<< HEAD
                    <li><a href="./index.html" id="bar">Home</a></li>
                    <li><a href="./login.html" id="bar">Account</a></li>
                    <li><a href="./amount.html" id="bar">Money</a></li>
                    <li><a href="./map.html" id="bar">Map</a></li>
                    <li><a href="./about.html" id="bar">About</a></li>
=======
                    <li><a href="./index.php" id="bar">Home</a></li>
                    <li><a href="./login.php" id="bar">Account</a></li>
                    <li><a href="./amount.php" id="bar">Money</a></li>
                    <li><a href="./map.php" id="bar">Map</a></li>
                    <li><a href="./about.php" id="bar">About</a></li>
>>>>>>> 2a96164 (123)
                </ul>
            </nav>
        </div>
    </div>
    <div class="accimf">
        <div class="imf">
            <img id="accimg" src="./images/unnamed.jpg"><!--頭貼要接php-->
<<<<<<< HEAD
            <span class="span3">王小名</span>
=======
            <span class="span3"><?= $user_data['name'] ?></span>
>>>>>>> 2a96164 (123)
        </div>

    </div>
    <div class="accconec">
        <div>
            <label id="lable"> 電子郵件
<<<<<<< HEAD
                <input class="input" type="email" id="userID">
=======
                <input class="input" type="email" id="userID" value="<?= $user_data['mail'] ?>" readonly>
>>>>>>> 2a96164 (123)
            </label>
        </div>
        <div>
            <label id="lable"> 連絡電話
<<<<<<< HEAD
                <input class="input" type="text">
=======
                <input class="input" type="text" value="<?= $user_data['phone'] ?>" readonly>
>>>>>>> 2a96164 (123)
            </label>
        </div>
    </div>
    <div class="tree">
        <span class="span1">呼吸樹</span><span class="span2">150</span><span class="span1">顆</span>
    </div>

</body>

</html>