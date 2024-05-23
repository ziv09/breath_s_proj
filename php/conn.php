<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "breath";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
    die("無法連線資料庫伺服器");

mysqli_set_charset($conn, "utf8");