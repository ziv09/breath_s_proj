<?php
require_once './php/conn.php';
session_start();

if (isset($_GET['spendintr']))
    $spendintr = $_GET['spendintr'];
else
    $spendintr = "早餐";

if (isset($_SESSION['mail']))
    $mail = $_SESSION['mail'];
else
    header("Location: ./login.php");

function getExpenditureRatio($conn, $mail, $total_expend, $class)
{
    // 获取用户在特定类别的支出金额
    $sql_class_expend = "SELECT SUM(price) AS class_expend FROM buyitems WHERE mail = '$mail' AND record = '支出' AND class = '$class'";
    $result_class_expend = mysqli_query($conn, $sql_class_expend);
    $row_class_expend = mysqli_fetch_assoc($result_class_expend);
    $class_expend = $row_class_expend['class_expend'] ?? 0;

    // 计算类别支出占总支出的比例
    if ($total_expend > 0) {
        $class_ratio = ($class_expend / $total_expend) * 100;
    } else {
        $class_ratio = 0;
    }

    // 格式化比例到小数点后两位
    $class_ratio = number_format($class_ratio, 2);

    // 返回结果
    return $class_ratio;
}

$sql = "SELECT * FROM buyitems WHERE mail = '$mail'";
$result = mysqli_query($conn, $sql);
// 支出
$sql = "SELECT SUM(price) FROM buyitems WHERE mail = '$mail' AND record = '支出'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_expend = $row['SUM(price)'] == "" ? "0" : $row['SUM(price)'];
// 收入
$sql = "SELECT SUM(price) FROM buyitems WHERE mail = '$mail' AND record = '收入'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_income = $row['SUM(price)'] == "" ? "0" : $row['SUM(price)'];
// 各項支出比例
$breakfast_r = getExpenditureRatio($conn, $mail, $total_expend, "早餐"); // 早餐
$Lunch_r = getExpenditureRatio($conn, $mail, $total_expend, "午餐"); // 午餐
$dinner_r = getExpenditureRatio($conn, $mail, $total_expend, "晚餐"); // 晚餐
$entertainment_r = getExpenditureRatio($conn, $mail, $total_expend, "娛樂"); // 娛樂
$Shopping_r = getExpenditureRatio($conn, $mail, $total_expend, "購物"); // 購物
$necessary_r = getExpenditureRatio($conn, $mail, $total_expend, "日用品"); // 日用品
$traffic_r = getExpenditureRatio($conn, $mail, $total_expend, "交通"); // 交通
$other_r = getExpenditureRatio($conn, $mail, $total_expend, "其他"); // 其他

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>生活呼吸</title>
    <link href="./css/main_sy.css" rel="stylesheet">
    <link href="./css/amount_sy.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
    <link href="./calculator.js">
</head>

<body class="body">
    <div class="barcon">
        <img src="./images/logo.png" alt="">
        <div>
            <nav>
                <ul class="barstyle">
                    <li><a href="./index.php" id="bar">Home</a></li>
                    <li><a href="./login.php" id="bar">Account</a></li>
                    <li><a href="./amount.php" id="bar">Money</a></li>
                    <li><a href="./map.php" id="bar">Map</a></li>
                    <li><a href="./about.php" id="bar">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <form action="./php/amount.php" method="get">
            <div class="main_container">
                <div>
                    <button class="btn1 btn1-style" id="btn1">支&ensp;出</button>
                    <input id="record" type="hidden" name="record" value="支出">
                </div>
                <div>
                    <input id="time" class="input" type="date" name="time" min="yyyy-MM-dd">
                </div>
                <div class="cal_container">
                    <div>
                        <div>
                            <div class="category">
                                <div class="caterow">
                                    <a class="btnilldiv" href="./amount.php?spendintr=早餐">
                                        <div>
                                            <input type="button" class="spendbtn"
                                                style=" background: url(./images/spend/早餐.png) no-repeat center; background-size: 60px 60px;">
                                        </div>
                                        <div class="btnill"><span>早餐</span></div>
                                    </a>
                                    <a class="btnilldiv" href="./amount.php?spendintr=午餐">
                                        <div>
                                            <input type="button" class="spendbtn"
                                                style=" background: url(./images/spend/午餐.png) no-repeat center; background-size: 60px 60px;">
                                        </div>
                                        <div class="btnill">
                                            <span>午餐</span>
                                        </div>
                                    </a>
                                    <a class="btnilldiv" href="./amount.php?spendintr=晚餐">
                                        <div>
                                            <input type="button" class="spendbtn"
                                                style=" background: url(./images/spend/晚餐.png) no-repeat center; background-size: 60px 60px;">
                                        </div>
                                        <div class="btnill">
                                            <span>晚餐</span>
                                        </div>
                                    </a>
                                    <a class="btnilldiv" href="./amount.php?spendintr=娛樂">
                                        <div>
                                            <input type="button" class="spendbtn"
                                                style=" background: url(./images/spend/娛樂.png) no-repeat center; background-size: 60px 60px;">
                                        </div>
                                        <div class="btnill">
                                            <span>娛樂</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="caterow">
                                    <a class="btnilldiv" href="./amount.php?spendintr=購物">
                                        <div>
                                            <input type="button" class="spendbtn"
                                                style=" background: url(./images/spend/購物.png) no-repeat center; background-size: 60px 60px;">
                                        </div>
                                        <div class="btnill">
                                            <span>購物</span>
                                        </div>
                                    </a>
                                    <a class="btnilldiv" href="./amount.php?spendintr=日用品">
                                        <div>
                                            <input type="button" class="spendbtn"
                                                style=" background: url(./images/spend/日用品.png) no-repeat center; background-size: 60px 60px;">
                                        </div>
                                        <div class="btnill">
                                            <span>日用品</span>
                                        </div>
                                    </a>
                                    <a class="btnilldiv" href="./amount.php?spendintr=交通">
                                        <div>
                                            <input type="button" class="spendbtn"
                                                style=" background: url(./images/spend/交通.png) no-repeat center; background-size: 60px 60px;">
                                        </div>
                                        <div class="btnill">
                                            <span>交通</span>
                                        </div>
                                    </a>
                                    <a class="btnilldiv" href="./amount.php?spendintr=其他">
                                        <div>
                                            <input type="button" class="spendbtn"
                                                style=" background: url(./images/spend/其他.png) no-repeat center; background-size: 60px 60px;">
                                        </div>
                                        <div class="btnill">
                                            <span>其他</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sum">
                            <div class="sumdiv">
                                <div>
                                    <img class="spendintr" src="./images/spend/<?= $spendintr ?>.png"> <!--要用php引入-->
                                    <span class="spendintr_txt"><?= $spendintr ?></span> <!--要用php引入-->
                                </div>
                                <input type="hidden" name="class" value="<?= $spendintr ?>">
                                <input class="spendrecord" type="text" name="object">
                                <input class="column input_reset" id="calc-display-val" name="price" value="0" read>
                            </div>
                        </div>
                    </div>
                    <div class="journal">
                        <div class="journaldiv">
                            <div>
                                <div><span style="font-size: 30px;">垃圾量</span></div>
                                <div><input class="garbrecord" type="text" name="garbageAmount"></div>
                            </div>
                            <div>
                                <div><span style="font-size: 30px;">每日小記</span></div>
                                <div><textarea class="jourrecord" type="text" name="memo"></textarea></div>
                            </div>
                        </diV>
                    </div>
                </div>

                <div class="calculate">
                    <div class="calculate_cut">
                        <div>
                            <div class="row">
                                <div class="calc-btn calc-btn-num column" id="calc-seven">7</div>
                                <div class="calc-btn calc-btn-num column" id="calc-eight">8</div>
                                <div class="calc-btn calc-btn-num column" id="calc-nine">9</div>
                                <div class="calc-btn calc-btn-operator column" id="calc-plus">+</div>
                            </div>
                            <div class="row">
                                <div class="calc-btn calc-btn-num column" id="calc-four">4</div>
                                <div class="calc-btn calc-btn-num column" id="calc-five">5</div>
                                <div class="calc-btn calc-btn-num column" id="calc-six">6</div>
                                <div class="calc-btn calc-btn-operator column" id="calc-minus">-</div>
                            </div>
                            <div class="row">
                                <div class="calc-btn calc-btn-num column" id="calc-one">1</div>
                                <div class="calc-btn calc-btn-num column" id="calc-two">2</div>
                                <div class="calc-btn calc-btn-num column" id="calc-three">3</div>
                                <div class="calc-btn calc-btn-operator column" id="calc-mutiply">x</div>
                            </div>
                            <div class="row">
                                <div class="calc-btn calc-btn-num column" id="calc-zero">0</div>
                                <div class="calc-btn column" id="calc-decimal">.</div>
                                <div class="calc-btn calc-btn-operator column" id="calc-divide">÷</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="calc-btn column" id="calc-clear">AC</div>
                            <div class="calc-btn column" id="calc-backspace">◀︎</div>
                            <div class="calc-check-btn column" id="calc-equals">=</div>
                            <input type="hidden" id="lat" name="lat">
                            <input type="hidden" id="lng" name="lng">
                        </div>
                    </div>
                </div>
                <input class="btn3" type="submit" value="確 定">
            </div>
        </form>
        <div class="v-line"></div>
        <div class="vice_container">
            <div class="recordsum">
                <div class="recordsum_txt">
                    <span style="font-size: 40px;">總支出</span>
                    &emsp;<span style="font-size: 50px; color: #218919;"><?= $total_expend ?></span>
                </div>
                <div>
                    <span style="font-size: 40px;">總收入</span>
                    &emsp;<span style="font-size: 50px; color: #218919;"><?= $total_income ?></span>
                </div>
            </div>
            <div class="recordintr">
                <div class="col_vice"><!--數字串php-->
                    <div class="recordintr_txt"><span>•早餐</span>&ensp;<span><?= $breakfast_r ?>%</span></div>
                    <div class="recordintr_txt"><span>•午餐</span>&ensp;<span><?= $Lunch_r ?>%</span></div>
                    <div class="recordintr_txt"><span>•晚餐</span>&ensp;<span><?= $dinner_r ?>%</span></div>
                </div>
                <div class="col_vice"><!--數字串php-->
                    <div class="recordintr_txt"><span>•娛樂</span>&ensp;<span><?= $entertainment_r ?>%</span></div>
                    <div class="recordintr_txt"><span>•購物</span>&ensp;<span><?= $Shopping_r ?>%</span></div>
                    <div class="recordintr_txt"><span>•日用品</span>&ensp;<span><?= $necessary_r ?>%</span></div>
                </div>
                <div class="col_vice"><!--數字串php-->
                    <div class="recordintr_txt"><span>•交通</span>&ensp;<span><?= $traffic_r ?>%</span></div>
                    <div class="recordintr_txt"><span>•其他</span>&ensp;<span><?= $other_r ?>%</span></div>
                </div>
            </div>
            <div class="colldisplay">
                <div class="colldisplay_area">
                    <div class="colldisplay_header">
                        <div class="colldisplay_header-close">
                            <img src="./images/close.png">
                        </div>
                        <div class="colldisplay_header-date">
                            <div>
                                &ensp;<span>2024/04/18</span>
                            </div>
                            <div>
                                <span>-800</span>&ensp;
                            </div>
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                </div>
                <div class="colldisplay_area">
                    <div class="colldisplay_header">
                        <div class="colldisplay_header-close">
                            <img src="./images/close.png">
                        </div>
                        <div class="colldisplay_header-date">
                            <div>
                                &ensp;<span>2024/04/18</span>
                            </div>
                            <div>
                                <span>-800</span>&ensp;
                            </div>
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                </div>
                <div class="colldisplay_area">
                    <div class="colldisplay_header">
                        <div class="colldisplay_header-close">
                            <img src="./images/close.png">
                        </div>
                        <div class="colldisplay_header-date">
                            <div>
                                &ensp;<span>2024/04/18</span>
                            </div>
                            <div>
                                <span>-800</span>&ensp;
                            </div>
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                    <div class="colldisplay_container-txt "><!--紀錄文字-->
                        <div>
                            早餐
                        </div>
                        <div>
                            -800
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <script src="./javascript/calculator.js"></script>
    <script src="./javascript/amount.js"></script>
</body>

</html>