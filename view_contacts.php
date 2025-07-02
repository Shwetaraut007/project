<?php
$con = mysqli_connect("localhost", "root", "", "cdj");
$res = mysqli_query($con, "SELECT * FROM contact");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>
    <style>
        body {
            background-color: #ccc;
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
            box-shadow: 0 0 30px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            background-color: #9c4668;
            color: white;
            margin-top: 0;
            padding: 20px;
            font-size: 28px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
            border-radius: 12px;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #9c4668;
            color: #fff;
            font-size: 18px;
        }

        tr:nth-child(even) {
            background-color: #f0f0f0;
        }

        tr:hover {
            background-color: #f7d6e0;
        }

        td {
            color: #333;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contact Messages</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Message</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($res)): ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['contactno']) ?></td>
                <td><?= htmlspecialchars($row['massege']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
<div style="text-align:center;">
    <button class="back-button"><a href="admin_dashboard.php">Back to Dashboard</a></button>
</div>
</body>
</html>
