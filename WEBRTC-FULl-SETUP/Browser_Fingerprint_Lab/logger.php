<?php
$data = file_get_contents("php://input");
file_put_contents("logs.txt", date("Y-m-d H:i:s") . " - " . $data . PHP_EOL, FILE_APPEND);
echo "Logged";
?>