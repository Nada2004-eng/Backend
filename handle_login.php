<?php
require 'db_connect.php';

//  login data
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    die("Please enter email and password");
}

// email
$stmt = $conn->prepare("SELECT id, username, password, is_verified FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($id, $username, $hashedPwd, $is_verified);
if ($stmt->fetch()) {
    //  if email is verified
    if (!$is_verified) {
        die("Please verify your email before logging in.");
    }
    //  Verify password
    if (password_verify($password, $hashedPwd)) {
        // 5. Password correct – create a session token
        $session_token = bin2hex(random_bytes(16));
        $update = $conn->prepare("UPDATE users SET session_token = ? WHERE id = ?");
        $update->bind_param("si", $session_token, $id);
        $update->execute();
        // Set cookies ( expires in 30 days)
        setcookie("user_id", $id, time()+60*60*24*30, "/");
        setcookie("session_token", $session_token, time()+60*60*24*30, "/");
        echo "Login successful! Welcome, $username.";
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "No account found with that email.";
}
?>




