<?php
require 'db_connect.php';

$username = $_POST['username'] ?? '';
$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

//  validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}
if (empty($username) || empty($password)) {
    die("All fields are required");
}

//  if email already exists
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    die("Email is already registered");
}
$stmt->close();

//  verification token and hash password
$verification_token = bin2hex(random_bytes(16)); // random 32-char token
$hashedPwd = password_hash($password, PASSWORD_BCRYPT);

// Insert new user 
$insert = $conn->prepare("INSERT INTO users (username, email, password, verification_token) VALUES (?, ?, ?, ?)");
$insert->bind_param("ssss", $username, $email, $hashedPwd, $verification_token);
if ($insert->execute()) {
    //  Sending verification email
    $verifyLink = "http://localhost/yourapp/verify.php?token=$verification_token";
    $subject = "Verify Your Account";
    $message = "Hello $username,\n\nPlease click the link below to verify your email address:\n$verifyLink\n\nThank you!";
    $headers = "From: no-reply@yourdomain.com\r\n";
    
    //  using mail()
    mail($email, $subject, $message, $headers);
    
    echo "Registration successful! Please check your email to verify your account.";
} else {
    echo "Error: " . $conn->error;
}
?>