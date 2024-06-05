<?php
require_once 'conn.php';
session_start();

if (isset($_SESSION['mail']))
    $mail = $_SESSION['mail'];
else
    header("Location: ../login.php");

function processCheckbox($checkbox, $checkboxName, $numName, $conn, $mail, $mid)
{
    if (isset($_GET[$checkbox])) {
        // 新增details資料 - 獲取"環保用具id"、"使用數量"
        $sql = "SELECT * FROM `environmental_friendly` WHERE `EFObject` = '$checkboxName';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $eid = $row['eid'];
        $num = $_GET[$numName];

        // 新增details資料 - 進入資料庫
        $sql = "INSERT INTO `details` (`eid`, `num`, `mid`) VALUES ('$eid', '$num', '$mid')";
        mysqli_query($conn, $sql);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // 新增mytree資料
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    $sql = "INSERT INTO `mytree` (`mail`, `lat`, `lng`) VALUES ('$mail', '$lat', '$lng')";
    $result = mysqli_query($conn, $sql);
    $mid = mysqli_insert_id($conn);

    // 環保餐盒
    processCheckbox("ck_box", "環保餐盒", "box_nums", $conn, $mail, $mid);
    // 環保吸管
    processCheckbox("ck_straw", "環保吸管", "straw_nums", $conn, $mail, $mid);
    // 大眾運輸
    processCheckbox("ck_traffic", "大眾運輸", "traffic_nums", $conn, $mail, $mid);
    // 環保袋
    processCheckbox("ck_bag", "環保袋", "bag_nums", $conn, $mail, $mid);
    // 環保筷
    processCheckbox("ck_chopsticks", "環保筷", "chopsticks_nums", $conn, $mail, $mid);
    // 環保杯
    processCheckbox("ck_cup", "環保杯", "cup_nums", $conn, $mail, $mid);

    header("Location: ../gar.php");
} else {
    echo "表單未提交。";
}

