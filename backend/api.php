<?php
// .htaccess thường cần thiết để định tuyến, nhưng file này là mẫu đơn giản

header('Content-Type: application/json');

// Dữ liệu mẫu
$data = array(
    'status' => 'success',
    'message' => 'API Backend (PHP) đang hoạt động trên InfinityFree!',
    'service' => 'Backend API',
    'timestamp' => date('Y-m-d H:i:s') // Lấy thời gian server hiện tại
);

// Xử lý request GET đơn giản
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data['method'] = 'GET Request Received';
} else {
    $data['method'] = 'Non-GET Request Received';
}

// Trả về dữ liệu dưới dạng JSON
echo json_encode($data);
