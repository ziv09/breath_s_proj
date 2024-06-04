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
        document.getElementById("current-date").innerText = formattedDate;
    });


    document.getElementById('btn').addEventListener('click', functio n() {
        window.location.href = 'amount.php';
    });



</script>

<body class="body">
    <div class="barcon">
        <img src="./images/logo.png" alt="">
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
    <div class="container">
        <div class="l-container">
            <div class="date">
                日常節省&ensp;|&ensp;<span id="current-date"></span>
            </div>
            <div class="co_record">
                <table class="table">
                    <tr>
                        <td><input type="checkbox" class="">&thinsp;環保餐盒&ensp;<select class="select" name="numbers">
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
                            </select></td>
                        <td><input type="checkbox" class="">&thinsp;環保吸管&ensp;<select class="select" name="numbers">
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
                            </select></td>
                        <td><input type="checkbox" class="">&thinsp;大眾運輸&ensp;<select class="select" name="numbers">
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
                            </select></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="">&thinsp;環保袋&emsp;&ensp;<select class="select"
                                name="numbers">
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
                            </select></td>
                        <td><input type="checkbox" class="">&thinsp;環保筷&emsp;&ensp;<select class="select"
                                name="numbers">
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
                            </select></td>
                        <td><input type="checkbox" class="">&thinsp;環保杯&emsp;&ensp;<select class="select"
                                name="numbers">
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
                            </select></td>
                    </tr>
                </table>
            </div>
            <div>
                <button class="btn" type="button">確&emsp;定</button>
            </div>
            <div class="garrec">
                <div class="garrec-txt">
                    <div>
                        &emsp;環保餐盒&ensp;<span>1
                            <!--數量-->
                        </span>個
                    </div>
                    <div>
                        -0.0003kg&emsp;
                    </div>
                </div>
                <div class="garrec-txt">
                    <div>
                        &emsp;環保餐盒&ensp;<span>1
                            <!--數量-->
                        </span>個
                    </div>
                    <div>
                        -0.0003kg&emsp;
                    </div>
                </div>
                <div class="garrec-txt">
                    <div>
                        &emsp;環保餐盒&ensp;<span>1
                            <!--數量-->
                        </span>個
                    </div>
                    <div>
                        -0.0003kg&emsp;
                    </div>
                </div>

            </div>
            <div class="tree">
                <span class="span1">呼吸樹</span><span class="span2">2</span><span
                    class="span1">顆&ensp;/&ensp;節省碳排</span><span class="span2">10</span><span class="span1">公斤</span>
            </div>
        </div>
        <div class="r-container">
            <button onclick="window.location.href = './amount.php';" class="circle-btn"
                id="btn"><span>NEXT</span></button>
        </div>
    </div>
</body>

</html>