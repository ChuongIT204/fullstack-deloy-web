<?php
header('Content-Type: application/json; charset=UTF-8');

$backendUrl = 'https://thechuongnguyen.byethost7.com/api/api.php';

$ch = curl_init($backendUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Không kết nối được Backend',
        'detail' => curl_error($ch)
    ]);
    exit;
}

curl_close($ch);

http_response_code($httpCode);
echo $response;
