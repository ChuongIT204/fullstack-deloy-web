<?php
header("Content-Type: application/json; charset=UTF-8");

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
