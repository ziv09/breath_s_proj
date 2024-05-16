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
                    <li><a href="./index.html" id="bar">Home</a></li>
                    <li><a href="./login.html" id="bar">Account</a></li>
                    <li><a href="./amount.html" id="bar">Money</a></li>
                    <li><a href="./map.html" id="bar">Map</a></li>
                    <li><a href="./about.html" id="bar">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="main_container">
            <div>
                <button class="btn1">支&ensp;出</button>
                <button class="btn2">收&ensp;入</button>
            </div>
            <div>
                <input class="input" type="date" min="yyyy-MM-dd">
            </div>
            <div class="cal_container">
                <div>
                    <div>
                        <div class="category">
                            <div class="caterow">
                                <div class="btnilldiv">
                                    <div>
                                        <input type="button" class="spendbtn" style=" background: url(./images/spend/早餐.png) no-repeat center;
                        background-size: 60px 60px;">
                                    </div>
                                    <div class="btnill">
                                        <span>早餐</span>
                                    </div>
                                </div>
                                <div class="btnilldiv">
                                    <div>
                                        <input type="button" class="spendbtn" style=" background: url(./images/spend/午餐.png) no-repeat center;
                        background-size: 60px 60px;">
                                    </div>
                                    <div class="btnill">
                                        <span>午餐</span>
                                    </div>
                                </div>
                                <div class="btnilldiv">
                                    <div>
                                        <input type="button" class="spendbtn" style=" background: url(./images/spend/晚餐.png) no-repeat center;
                        background-size: 60px 60px;">
                                    </div>
                                    <div class="btnill">
                                        <span>晚餐</span>
                                    </div>
                                </div>
                                <div class="btnilldiv">
                                    <div>
                                        <input type="button" class="spendbtn" style=" background: url(./images/spend/娛樂.png) no-repeat center;
                        background-size: 60px 60px;">
                                    </div>
                                    <div class="btnill">
                                        <span>娛樂</span>
                                    </div>
                                </div>
                            </div>
                            <div class="caterow">
                                <div class="btnilldiv">
                                    <div>
                                        <input type="button" class="spendbtn" style=" background: url(./images/spend/購物.png) no-repeat center;
                        background-size: 60px 60px;">
                                    </div>
                                    <div class="btnill">
                                        <span>購物</span>
                                    </div>
                                </div>
                                <div class="btnilldiv">
                                    <div>
                                        <input type="button" class="spendbtn" style=" background: url(./images/spend/日用品.png) no-repeat center;
                        background-size: 60px 60px;">
                                    </div>
                                    <div class="btnill">
                                        <span>日用品</span>
                                    </div>
                                </div>
                                <div class="btnilldiv">
                                    <div>
                                        <input type="button" class="spendbtn" style=" background: url(./images/spend/交通.png) no-repeat center;
                        background-size: 60px 60px;">
                                    </div>
                                    <div class="btnill">
                                        <span>交通</span>
                                    </div>
                                </div>
                                <div class="btnilldiv">
                                    <div>
                                        <input type="button" class="spendbtn" style=" background: url(./images/spend/其他.png) no-repeat center;
                        background-size: 60px 60px;">
                                    </div>
                                    <div class="btnill">
                                        <span>其他</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="sum">
                        <div class="sumdiv">
                            <div>
                                <img class="spendintr" src="./images/spend/早餐.png"> <!--要用php引入-->
                                <span class="spendintr_txt">早餐</span> <!--要用php引入-->
                            </div>
                            <input class="spendrecord" type="text">

                            <div class="column" id="calc-display-val">0</div>
                        </div>

                    </div>
                </div>
                <div class="journal">
                    <div class="journaldiv">
                        <div>
                            <div>
                                <span style="font-size: 30px;">垃圾量</span>
                            </div>
                            <div>
                                <input class="garbrecord" type="text">
                            </div>
                        </div>
                        <div>
                            <div>
                                <span style="font-size: 30px;">每日小記</span>
                            </div>
                            <div>
                                <input class="jourrecord" type="text">
                            </div>
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
                    </div>
                </div>
            </div>
            <div>
                <button class="btn3">確 定</button>
            </div>

        </div>
        <div class="v-line"></div>
        <div class="vice_container">
            <div class="recordsum">
                <div class="recordsum_txt">
                    <span style="font-size: 40px;">總支出</span>
                    &emsp;<span style="font-size: 50px; color: #218919;">2,000</span><!--要用php引入-->
                </div>
                <div>
                    <span style="font-size: 40px;">總收入</span>
                    &emsp;<span style="font-size: 50px; color: #218919;">1,000</span><!--要用php引入-->
                </div>
            </div>
            <div class="recordintr">
                <div class="col_vice"><!--數字串php-->
                    <div class="recordintr_txt"><span>•早餐</span>&ensp;<span>20%</span></div>
                    <div class="recordintr_txt"><span>•午餐</span>&ensp;<span>20%</span></div>
                    <div class="recordintr_txt"><span>•晚餐</span>&ensp;<span>20%</span></div>
                </div>
                <div class="col_vice"><!--數字串php-->
                    <div class="recordintr_txt"><span>•娛樂</span>&ensp;<span>20%</span></div>
                    <div class="recordintr_txt"><span>•購物</span>&ensp;<span>20%</span></div>
                    <div class="recordintr_txt"><span>•日用品</span>&ensp;<span>20%</span></div>
                </div>
                <div class="col_vice"><!--數字串php-->
                    <div class="recordintr_txt"><span>•交通</span>&ensp;<span>20%</span></div>
                    <div class="recordintr_txt"><span>•其他</span>&ensp;<span>20%</span></div>
                </div>
            </div>
            <div class="colldisplay">
                <div class="colldisplay_area"><!--紀錄群組(寫了3個)串php-->
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
                </div><!--紀錄群組(寫了3個)串php-->
            </div>
            

        </div>
    </div>


    <script src="./javascript/calculator.js"></script>
</body>

</html>