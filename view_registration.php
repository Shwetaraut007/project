<?php
$con = mysqli_connect("localhost", "root", "", "cdj");

// Connection check
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$res = mysqli_query($con, "SELECT * FROM registration");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
    <style>
        body {
            background-color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 60px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            background-color: #4c4c9d;
            color: white;
            padding: 20px;
            font-size: 28px;
            margin-top: 0;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 14px;
            text-align: center;
        }

        th {
            background-color: #4c4c9d;
            color: white;
            font-size: 18px;
        }

        tr:nth-child(even) {
            background-color: #f3f3f3;
        }

        tr:hover {
            background-color: #e4dcf7;
        }

        td {
            color: #333;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registration Details</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Date</th>
            <th>Contact</th>
            <th>Pincode</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($res)): ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['pass']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
                <td><?= htmlspecialchars($row['date']) ?></td>
                <td><?= htmlspecialchars($row['contactno']) ?></td>
                <td><?= htmlspecialchars($row['pincode']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
<div style="text-align:center;">
    <button class="back-button"><a href="admin_dashboard.php">Back to Dashboard</a></button>
</div>
</body>
</html>
