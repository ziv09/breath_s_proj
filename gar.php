<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>生活呼吸</title>
    <link href="./css/main_sy.css" rel="stylesheet">
    <link href="./css/gar_sy.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
</head>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var currentDate = new Date();
        var options = { year: 'numeric', month: 'numeric', day: 'numeric' };
        var formattedDate = currentDate.toLocaleDateString("zh-Hant", options);
        document.getElementById("datetxt").innerText = formattedDate;
    });

    function checkLogin() {
        // 檢查是否有登入
        <?php
        session_start();
        if (!isset($_SESSION['mail'])) {
            // 彈出視窗提示要求登入
            echo "alert('請先登入帳號');";
            // 導向到登入頁面
            echo "window.location.href = './login.php';";
        } else {
            require_once './php/conn.php';
            $mail = $_SESSION['mail'];
        }
        ?>
        }
</script>

<body class="body_slide" onload="checkLogin()">
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
    <div class="container">
        <div class="l-container">
            <div class="date">
                日常節省&ensp;|&ensp;<span id="datetxt"></span>
            </div>
            <form action="./php/gar.php" method="get">
                <div class="co_record">
                    <table class="table">
                        <tr>
                            <td>
                                <input name="ck_box" type="checkbox" class="">&thinsp;環保餐盒&ensp;
                                <select class="select" name="box_nums">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </td>
                            <td>
                                <input name="ck_straw" type="checkbox" class="">&thinsp;環保吸管&ensp;
                                <select class="select" name="straw_nums">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </td>
                            <td>
                                <input name="ck_traffic" type="checkbox" class="">&thinsp;大眾運輸&ensp;
                                <select class="select" name="traffic_nums">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="ck_bag" type="checkbox" class="">&thinsp;環保袋&emsp;&ensp;
                                <select class="select" name="bag_nums">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </td>
                            <td>
                                <input name="ck_chopsticks" type="checkbox" class="">&thinsp;環保筷&emsp;&ensp;
                                <select class="select" name="chopsticks_nums">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </td>
                            <td>
                                <input name="ck_cup" type="checkbox" class="">&thinsp;環保杯&emsp;&ensp;
                                <select class="select" name="cup_nums">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <input type="hidden" id="lat" name="lat">
                    <input type="hidden" id="lng" name="lng">
                    <button class="btn" type="submit">確&emsp;定</button>
                </div>
            </form>
            <div class="garrec">
                <?php
                    $sql = "SELECT * FROM `mytree` WHERE `mail` = '$mail';";
                    $result = mysqli_query($conn, $sql);
                    $mytree_data = mysqli_fetch_all($result, MYSQLI_BOTH);

                    $all_save = 0;

                    foreach ($mytree_data as $data) {
                        $mid = $data['mid'];
                        $sql = "SELECT * FROM `details` WHERE `mid` = '$mid';";
                        $result = mysqli_query($conn, $sql);
                        $details_data = mysqli_fetch_all($result, MYSQLI_BOTH);

                        foreach ($details_data as $data) {
                            $eid = $data['eid'];
                            $num = $data['num'];

                            $sql = "SELECT * FROM `environmental_friendly` WHERE `eid` = '$eid';";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $EFObject = $row['EFObject'];
                            $total_save = $num * $row['save'];

                            // 格式化为小数形式，保留十位小数
                            $total_save_decimal = rtrim(sprintf('%.10f', $total_save), '0');

                            // 如果最后一位是小数点，则去除
                            if (substr($total_save_decimal, -1) == '.') {
                                $total_save_decimal = rtrim($total_save_decimal, '.');
                            }

                            $all_save += $total_save;
                ?>
                                <div class="garrec-txt">
                                    <div>
                                        &emsp;<?= $EFObject; ?>&ensp;
                                        <span><?= $num; ?></span>個
                                    </div>
                                    <div>
                                        -<?= $total_save_decimal; ?>kg&emsp;
                                    </div>
                                </div>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="tree">
                <span class="span1">呼吸樹</span>
                <span class="span2"><?= (int) ($all_save / 0.06) ?></span>
                <span class="span1">顆&ensp;/&ensp;節省碳排</span>
                <span class="span2"><?= number_format($all_save, 1) ?></span>
                <span class="span1">公斤</span>
            </div>
        </div>
        <div class="r-container">
            <button onclick="window.location.href = './amount.php';" class="circle-btn" id="btn">
                <span>NEXT</span>
            </button>
        </div>
    </div>

    <script>
        // 獲取位置
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }
 
        function  showPosition(position) {
            var  latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            document.getElementById("lat").value = latitude;
            document.getElementById("lng").value = longitude;
        }
   
        function showError(error) {
            switch(error.code) {
                case  error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location  information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
            }
        }

        window.onload = function() {
            getLocation();
        };
        </script>
</body>

</html>