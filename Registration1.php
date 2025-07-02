<?php
$con = mysqli_connect("localhost", "root", "", "cdj");
if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}

$name = $_POST["t1"];
$email = $_POST["t2"];
$pass = $_POST["t3"];
$address = $_POST["t4"];
$date = $_POST["t5"];
$contactno = $_POST["t6"];
$pincode = $_POST["t7"];

 mysqli_query($con,"insert into Registration values('$name','$email','$password','$address','$date','$contactno','$pincode',)");
      if(true)
    {
    $k=1;
  echo("h1");
  echo"<script>
   alert('Registration Successful');
    window.location.href='home.php';
</script>";
}


?>

