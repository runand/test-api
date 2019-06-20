<?php
$data = ['key' => 'value'];
header('Content-Type: application/json');
 header("Access-Control-Allow-Origin: *");
echo json_encode($data);

