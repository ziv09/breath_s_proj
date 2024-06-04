<?php
session_start();

if (isset($_SESSION['mail']))
    header("Location: ./account.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>生活呼吸</title>
    <link href="./css/main_sy.css" rel="stylesheet">
    <link href="./css/login_sy.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body class="body_login">
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
    <div class="login">
        <div class="login_set">
            <div class="login_txt">
                <form action="./php/login.php" method="get">
                    <h1 id="login_tit">LOGIN</h1>
                    <div class="loginGroup">
                        <label id="lable"> 帳號
                            <input class="input" type="email" name="mail" id="userID">
                        </label>
                    </div>
                    <div class="loginGroup">
                        <label id="lable">密碼
                            <input class="input" type="password" name="pwd">
                        </label>
                    </div>
                    <div class="btnGroup">
                        <button class="btn">登入</button>
                    </div>
                    <div class="forGroup">
                        <a href="./register.php" id="register">註冊帳號</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>