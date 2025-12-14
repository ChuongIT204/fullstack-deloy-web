<?php
// =======================
// CORS CONFIG (BẮT BUỘC)
// =======================
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Xử lý preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// =======================
// JSON RESPONSE
// =======================
header("Content-Type: application/json; charset=UTF-8");

$response = [
    "status" => "success",
    "service" => "Backend API (ByetHost)",
    "message" => "CORS enabled - Backend OK",
    "timestamp" => date("Y-m-d H:i:s"),
    "payload" => [
        "user_count" => 105,
        "server_load" => 0.52,
        "backend_status" => "Operational"
    ]
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
