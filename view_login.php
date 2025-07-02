<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "cdj");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch login data
$sql = "SELECT * FROM login";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Login Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2>Login Users List</h2>

<table>
    <tr>
       
        <th>Email</th>
        <th>Password</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    
                    <td>{$row['email']}</td>
                    <td>{$row['password']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No login data found</td></tr>";
    }

    mysqli_close($con);
    ?>
</table>

</body>
</html>
