<?php
require_once 'conn.php';
session_start();

if (isset($_GET['mail']))
    $mail = $_GET['mail'];
if (isset($_GET['pwd']))
    $pwd = $_GET['pwd'];

$sql = "SELECT * FROM account WHERE mail = '$mail' AND pwd = '$pwd'";
$result = mysqli_query($conn, $sql);
$user_data = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
    ?>
    <script type="text/javascript">
        alert("登入成功!");
    </script>
    <?php
    $_SESSION["mail"] = $mail;
    header("Location: ../account.php");
} else {
    ?>
    <script type="text/javascript">
        alert("登入失敗!");
        window.location.href = document.referrer;
    </script>
    <?php
}
;
