<?php
if (
    isset($_POST['product_id']) &&
    isset($_POST['name']) &&
    isset($_POST['price']) &&
    isset($_POST['quantity'])
) {
    $id = htmlspecialchars($_POST['product_id']);
    $name = htmlspecialchars($_POST['name']);
    $price = floatval($_POST['price']);
    $quantity = intval($_POST['quantity']);
    $total = $price * $quantity;
    $date = date("Y-m-d"); // MySQL DATE format

    // ✅ Connect to DB
    $con = mysqli_connect("localhost", "root", "", "cdj");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // ✅ Insert into bill table
    $stmt = mysqli_prepare($con, "INSERT INTO bill (product_name, price, quantity, total, bill_date) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($con));
    }
    mysqli_stmt_bind_param($stmt, "sidds", $name, $price, $quantity, $total, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // ✅ Insert into view_orders table
    $order_stmt = mysqli_prepare($con, "INSERT INTO view_orders (product_id, product_name, price, quantity, total, order_date, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$order_stmt) {
        die("Order Prepare failed: " . mysqli_error($con));
    }
    $status = "Confirmed";
    mysqli_stmt_bind_param($order_stmt, "ssiddss", $id, $name, $price, $quantity, $total, $date, $status);
    mysqli_stmt_execute($order_stmt);
    mysqli_stmt_close($order_stmt);

    // ✅ Close DB
    mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f5f5f5;
        }
        .invoice-box {
            border: 1px solid #ccc;
            background: #fff;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        h2 {
            text-align: center;
        }
        .invoice-details p {
            font-size: 16px;
            margin: 10px 0;
        }
        .print-btn {
            margin-top: 20px;
            display: block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .print-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="invoice-box">
        <h2>Gift Shop</h2>
        <center><h3>Bill</h3></center>
        <div class="invoice-details">
            <p><strong>Product ID:</strong> <?= $id ?></p>
            <p><strong>Product Name:</strong> <?= $name ?></p>
            <p><strong>Unit Price:</strong> ₹<?= $price ?></p>
            <p><strong>Quantity:</strong> <?= $quantity ?></p>
            <p><strong>Total:</strong> ₹<?= $total ?></p>
            <p><strong>Date:</strong> <?= $date ?></p>
            <p><strong>Status:</strong> Confirmed</p>
        </div>
    </div>
    <center>
        <button class="print-btn" onclick="window.print()">Print Bill</button>
    </center>
</body>
</html>
<?php
} else {
    echo "<p style='text-align:center; color:red;'>No product data received.</p>";
}
?>
