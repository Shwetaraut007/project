<?php
   $con=mysqli_connect("localhost","root","");
   if($con==false)
   die("error in connection");

    mysqli_query($con,"use cdj");
  $email=$_POST["email"];
  $password=$_POST["password"];

 mysqli_query($con,"insert into login values('$email','$password')");
      if(true)
    {
    $k=1;
  echo("h1");
  echo"<script>
   alert('Login Successful');
    window.location.href='home.php';
</script>";
}

  
?>











