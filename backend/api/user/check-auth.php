<?php
session_start();
header('Content-Type: application/json');

if (isset($_SESSION['user_id'])) {
    echo json_encode([
        'success' => true,
        'message' => 'Authenticated',
        'username' => $_SESSION['username']
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Not authenticated'
    ]);
}
?>