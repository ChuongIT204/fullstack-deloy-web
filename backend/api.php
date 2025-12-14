<?php
// =======================
// CORS
// =======================
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Max-Age: 86400");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// =======================
// DATA GIẢ LẬP
// =======================
$tasks = [
    [
        "id" => 1,
        "title" => "Hoàn thành frontend",
        "status" => "done"
    ],
    [
        "id" => 2,
        "title" => "Kết nối backend",
        "status" => "in_progress"
    ],
    [
        "id" => 3,
        "title" => "Deploy lên hosting",
        "status" => "todo"
    ]
];

// =======================
// RESPONSE
// =======================
echo json_encode([
    "success" => true,
    "count" => count($tasks),
    "data" => $tasks
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
