<?php
// Thiết lập header để trình duyệt hiểu rằng đây là dữ liệu JSON
header('Content-Type: application/json');

// Cho phép truy cập từ bất kỳ domain nào (CORS - Cross-Origin Resource Sharing)
// Điều này là cần thiết để Frontend (trên Somee) có thể gọi Backend (trên InfinityFree)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');


// --- Dữ liệu Mẫu ---
$response_data = array(
    'status' => 'success',
    'service' => 'PHP Backend API (InfinityFree)',
    'message' => 'Dữ liệu đã được gửi thành công từ Server!',
    'version' => '1.0.1',
    'timestamp' => date('Y-m-d H:i:s'), // Thời gian server hiện tại
    'payload' => array(
        'user_count' => 105,
        'server_load' => 0.52,
        'backend_status' => 'Operational'
    )
);

// Xử lý request (Ví dụ: chỉ trả về nếu là GET request)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    http_response_code(200); // Mã trạng thái HTTP 200 OK
    echo json_encode($response_data);
} else {
    http_response_code(405); // Mã trạng thái HTTP 405 Method Not Allowed
    echo json_encode(array('status' => 'error', 'message' => 'Chỉ cho phép phương thức GET.'));
}
