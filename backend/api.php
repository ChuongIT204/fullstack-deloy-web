<?php
header('Content-Type: application/json');


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');


$response_data = array(
    'status' => 'success',
    'service' => 'PHP Backend API (InfinityFree)',
    'message' => 'Dữ liệu đã được gửi thành công từ Server!',
    'version' => '1.0.1',
    'timestamp' => date('Y-m-d H:i:s'),
    'payload' => array(
        'user_count' => 105,
        'server_load' => 0.52,
        'backend_status' => 'Operational'
    )
);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    http_response_code(200);
    echo json_encode($response_data);
} else {
    http_response_code(405);
    echo json_encode(array('status' => 'error', 'message' => 'Chỉ cho phép phương thức GET.'));
}
