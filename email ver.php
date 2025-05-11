<?php
require './includes/db_connect.php';

if (!isset($_GET['token'])) {
    die("No token provided");
}
$token = $_GET['token'];

// Look up user by verification token
$stmt = $conn->prepare("SELECT id, is_verified FROM users WHERE verification_token = ?");
$stmt->bind_param("s", $token);
$stmt->execute();
$stmt->bind_result($id, $is_verified);
if ($stmt->fetch()) {
    if ($is_verified) {
        echo "Your account is already verified.";
    } else {
        // Verify the user
        $stmt->close();
        $update = $conn->prepare("UPDATE users SET is_verified = 1, verification_token = NULL WHERE id = ?");
        $update->bind_param("i", $id);
        $update->execute();
        echo "Your email has been verified! You can now log in.";
    }
} else {
    echo "Invalid verification link.";
}
?>