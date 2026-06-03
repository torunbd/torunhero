<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

date_default_timezone_set("Asia/Dhaka");

echo json_encode([
    "success" => true,
    "date" => date("Y-m-d"),
    "year" => date("Y"),
    "month" => date("m"),
    "day" => date("d"),
    "timestamp" => time()
]);

?>
