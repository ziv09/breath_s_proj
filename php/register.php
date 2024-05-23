<?php
require_once 'conn.php';
session_start();

if (isset($_GET['name']))
    $name = $_GET['name'];
if (isset($_GET['mail']))
    $mail = $_GET['mail'];
if (isset($_GET['phone']))
    $phone = $_GET['phone'];
if (isset($_GET['pwd']))
    $pwd = $_GET['pwd'];

$sql = "INSERT INTO `account` (`mail`, `phone`, `name`, `pwd`) VALUES ('$mail', '$phone', '$name', '$pwd')";
if ($result = mysqli_query($conn, $sql)) {
    $_SESSION["mail"] = $mail;
    header("Location: ../account.php");
}
;