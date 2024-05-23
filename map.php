<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>生活呼吸</title>
    <link href="./css/main_sy.css" rel="stylesheet">
    <link href="./css/map_sy.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
</head>
<script src="./javascript/mapset.js"></script>

<body class="body_map">
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
    <div class="treeamout">
        <div class="amoumt">
            <div>
                <img id="img" src="./images/tree_logo.png">
            </div>
            <div class="treeinter">
                <div>
                    <span>個人累積:</span>
                    <br><span style="font-size:40px; color:#218919 ; margin: 0px;">150</span>
                    <span>顆</span>
                </div>
                <div>
                    <span>累積總數:</span>
                    <br><span style="font-size:40px; color:#DB3579 ;">2000</span>
                    <span>顆</span>
                </div>
            </div>
        </div>

    </div>
    <div id="map"></div>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBZeCbyATr_E80XuTkboA_t1-PlukqI8&callback=initMap">
            var url = 'https://ruienyuski.github.io/git_test/itaiwan.json';
        </script>
</body>

</html>