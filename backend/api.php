<?php
header('Content-Type: application/json; charset=UTF-8');

$response = [
    'status' => 'success',
    'service' => 'Backend API (ByetHost)',
    'message' => 'Dữ liệu trả về từ Backend gốc',
    'timestamp' => date('Y-m-d H:i:s'),
    'payload' => [
        'user_count' => 105,
        'server_load' => 0.52,
        'backend_status' => 'Operational'
    ]
];

http_response_code(200);
echo json_encode($response);
