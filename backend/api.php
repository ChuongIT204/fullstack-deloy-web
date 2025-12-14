<?php
// =======================
// CORS - FIX CHẮC CHẮN
// =======================

// CHO PHÉP FRONTEND SOMEE
header("Access-Control-Allow-Origin: http://htmldemo.somee.com");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Max-Age: 86400");
header("Content-Type: application/json; charset=UTF-8");

// Preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// =======================
// DATA
// =======================
$data = [
    ["id" => 1, "title" => "Hoàn thành frontend", "status" => "done"],
    ["id" => 2, "title" => "Kết nối backend", "status" => "in_progress"],
    ["id" => 3, "title" => "Deploy lên hosting", "status" => "todo"]
];

echo json_encode([
    "success" => true,
    "count" => count($data),
    "data" => $data
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
