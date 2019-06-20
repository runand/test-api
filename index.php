<?php
$data = ['version' => 'ISSUE-2'];
header('Content-Type: application/json');
 header("Access-Control-Allow-Origin: *");
echo json_encode($data);

