<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>生活呼吸</title>
    <link href="./css/main_sy.css" rel="stylesheet">
    <link href="./css/register_sy.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body class="body_index">
    <form action="./php/register.php" method="get" id="myForm">
        <div class="div1">
            <div>
                <img class="img" src="./images/logo.png" alt="Logo">
            </div>
            <div class="div2">
                <div class="titleGroup">
                    <span style="font-size: 50px;">Register&nbsp;註冊</span>
                </div>
                <div class="interGroup">
                    <label class="lable">Name
                        <br><input class="input2" name="name" type="text" required>
                    </label>
                </div>
                <div class="interGroup">
                    <label class="lable">Email
                        <br><input class="input1" name="mail" type="email" required>
                    </label>
                </div>
                <div class="interGroup">
                    <label class="lable">Phone
                        <br><input class="input1" name="phone" type="tel" required>
                    </label>
                </div>
                <div class="interGroup">
                    <label class="lable">Password
                        <br><input class="input1" id="pwd" name="pwd" type="password" required>
                    </label>
                </div>
                <div class="interGroup">
                    <label class="lable">Confirm Password
                        <br><input class="input1" id="cpwd" name="cpwd" type="password" required>
                    </label>
                </div>
                <div class="btnGroup">
                    <button class="btn" type="submit">Send</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>

<script>
    document.getElementById('myForm').addEventListener('submit', function (event) {
        var pwd = document.getElementById('pwd').value;
        var cpwd = document.getElementById('cpwd').value;
        var errorElement = document.getElementById('error');

        if (pwd !== cpwd) {
            alert("Passwords do not match.");
            event.preventDefault();
        } else {
            errorElement.textContent = ''; // Clear any previous error message
        }
    });
</script>
