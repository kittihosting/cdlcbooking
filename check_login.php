<?php
session_start();
header('Content-Type: application/json');

$response = array();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $response['logged_in'] = true;
} else {
    $response['logged_in'] = false;
}

echo json_encode($response);
?>
