<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            padding: 50px 0;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .box {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        a {
            display: block;
            margin: 15px 0;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
            transform: translateY(-5px);
        }
        a:active {
            transform: translateY(2px);
        }
        .logout-btn {
            background-color: #dc3545;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>Welcome, Admin!</h2>
            <a href="view_login.php">View Login</a>
            <a href="view_registration.php">View Registration</a>
             <a href="view_orders.php">View Orders</a>
            <a href="view_bill.php">View Bill</a>
            <a href="view_contacts.php">View Contacts</a>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</body>
</html>
