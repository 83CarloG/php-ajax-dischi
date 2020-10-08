<?php
include __DIR__.'/../config/db/db.php';
//
header('Content-Type: application/json');
//
echo json_encode($database);

?>
