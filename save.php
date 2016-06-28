<?php
header("Access-Control-Allow-Origin: *");

$data = $_POST["imgBase64"];
$data = substr($data, 22);

$filename = "screenshots/" . time() . ".jpg";

$file = base64_decode($data);

file_put_contents($filename, $file);
