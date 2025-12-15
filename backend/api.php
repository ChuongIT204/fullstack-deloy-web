<?php
header("Content-Type: application/json; charset=UTF-8");

echo json_encode([
    "success" => true,
    "message" => "Backend is working",
    "time" => date("Y-m-d H:i:s")
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
