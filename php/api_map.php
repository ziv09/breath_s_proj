<?php
header('Content-Type: application/json');
require_once 'conn.php';
session_start();

$sql = "SELECT `lat`, `lng` FROM mytree";
if (!$result = mysqli_query($conn, $sql)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Query failed: ' . mysqli_error($conn)
    ]);
    mysqli_close($conn);
    exit();
} else {
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = [
            'lat' => (float) $row['lat'],
            'lng' => (float) $row['lng']
        ];
    }
    // 返回JSON响应
    echo json_encode([
        'records' => $data // 将数据放在 "records" 键下
    ]);
}

// 关闭数据库连接
mysqli_close($conn);
?>