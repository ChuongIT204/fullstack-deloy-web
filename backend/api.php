<?php

/**
 * Backend API - PHP (ByetHost)
 * Tương thích frontend Somee (cross-origin)
 * Author: CI/CD Demo
 */

/* =========================
   CORS CONFIGURATION
   ========================= */

// Cho phép mọi domain (phù hợp demo & frontend Somee)
header("Access-Control-Allow-Origin: *");

// Cho phép các method cần thiết
header("Access-Control-Allow-Methods: GET, OPTIONS");

// Cho phép header từ client
header("Access-Control-Allow-Headers: Content-Type");

// Xử lý preflight request (OPTIONS)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

/* =========================
   RESPONSE CONFIGURATION
   ========================= */

header("Content-Type: application/json; charset=UTF-8");

/* =========================
   BUSINESS LOGIC (DEMO)
   ========================= */

$response = [
    "status" => "success",
    "service" => "Backend API (ByetHost)",
    "message" => "Dữ liệu trả về từ Backend gốc",
    "version" => "1.0.0",
    "timestamp" => date("Y-m-d H:i:s"),
    "payload" => [
        "user_count" => 105,
        "server_load" => 0.52,
        "backend_status" => "Operational",
        "environment" => "Production",
        "php_version" => phpversion()
    ]
];

/* =========================
   ROUTING (SIMPLE)
   ========================= */

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    http_response_code(200);
    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

// Method không được hỗ trợ
http_response_code(405);
echo json_encode([
    "status" => "error",
    "message" => "Method not allowed"
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
