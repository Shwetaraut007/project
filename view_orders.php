<?php
// ✅ Connect to DB
$con = mysqli_connect("localhost", "root", "", "cdj");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// ✅ Fetch data from view_orders table
$result = mysqli_query($con, "SELECT * FROM view_orders ORDER BY order_date DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            padding: 30px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h2>All Orders</h2>

<table>
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Price (₹)</th>
        <th>Quantity</th>
        <th>Total (₹)</th>
        <th>Order Date</th>
        <th>Status</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= htmlspecialchars($row['product_id']) ?></td>
            <td><?= htmlspecialchars($row['product_name']) ?></td>
            <td><?= htmlspecialchars($row['price']) ?></td>
            <td><?= htmlspecialchars($row['quantity']) ?></td>
            <td><?= htmlspecialchars($row['total']) ?></td>
            <td><?= htmlspecialchars($row['order_date']) ?></td>
            <td><?= htmlspecialchars($row['status']) ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
<?php
mysqli_close($con);
?>
