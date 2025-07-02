

<html>
<head>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View orders</title>
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Inter", sans-serif;
  color: #343a40;
  background: lightgray;
  line-height: 1;
  display: flex;
  justify-content: center;
}

table {
  width: 800px;
  height: 300px;
  margin-top: 50px;
  font-size: 18px;
  border-collapse: collapse;
  background: whitesmoke;
  border-color: white;
  }

td{
  padding: 16px 24px;
  text-align: center;
}

th {
  padding: 12px 20px;
  text-align: center;
  background: #b36982;
  color: white;
  width: 25%;
}
</style>
</head>
<body >
<table border="2">
        <tr>
            <th colspan='7'>Customer  Bill</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Product Name </th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Date Time</th>

        </tr>

<?php
$con = mysqli_connect('localhost','root','');
/*if($con){
    echo"<script>alert('database connected');</script>";
}*/
mysqli_query($con,'use cdj');

$query=mysqli_query($con,"select * from bill");
while($r3=mysqli_fetch_array($query))
{
    echo"<td>".$r3[0]."</td>
    <td>".$r3[1]."</td>
    <td>".$r3[2]."</td>
    <td>".$r3[3]."</td>
    <td>".$r3[4]."</td>
    <td>".$r3[5]."</td>

</tr>";
}
echo"</table>";
mysqli_close($con);

?> 

   </body>

   </html>