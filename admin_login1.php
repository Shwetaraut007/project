<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// You can make this dynamic using a database
if ($username === 'shweta' && $password === '2005') {
    $_SESSION['admin'] = $username;
    header("Location: admin_dashboard.php");
} else {
    echo "<script>alert('Invalid credentials'); window.location.href='admin_login.php';</script>";
}
?>