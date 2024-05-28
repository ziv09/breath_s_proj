<?php
require_once 'conn.php';
session_start();

if (isset($_SESSION['mail']))
    $mail = $_SESSION['mail'];
else
    header("Location: ../login.php");
if (isset($_GET['record']) && !empty($_GET['record']))
    $record = $_GET['record'];
if (isset($_GET['class']) && !empty($_GET['class']))
    $class = $_GET['class'];
if (isset($_GET['object']) && !empty($_GET['object']))
    $object = $_GET['object'];
if (isset($_GET['price']) && !empty($_GET['price']))
    $price = $_GET['price'];
if (isset($_GET['garbageAmount']))
    $garbageAmount = $_GET['garbageAmount'];
if (isset($_GET['memo']))
    $memo = $_GET['memo'];
if (isset($_GET['lat']))
    $lat = $_GET['lat'];
if (isset($_GET['lng']))
    $lng = $_GET['lng'];
if (isset($_GET['time']))
    $time = $_GET['time'];

$sql = "INSERT INTO `buyitems` (`mail`, `record`, `class`, `object`, `price`, `garbageAmount`, `memo`, `lat`, `lng`, `time`) 
        VALUES ('$mail', '$record', '$class', '$object', '$price', '$garbageAmount', '$memo', '$lat', '$lng', '$time')";
if ($result = mysqli_query($conn, $sql)) {
    header("Location: ../amount.php");
}