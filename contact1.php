<?php
  $con=mysqli_connect("localhost","root", "");
      if($con==false)
          die("error in connection");
     else
{
   mysqli_query($con,"use cdj");
     $name=$_POST["t1"];
     $email=$_POST["t2"];
     $contactno=$_POST["t3"];
     $massege=$_POST["t4"];
  
 
 
      $k=mysqli_query($con,"insert into contact values('$name','$email','$contactno','$massege')");
      if($k==false)
             echo("table not found");
       else
             echo("<script>
               alert('your request has been receive');
    window.location.href = 'index.php';
    

    </script>");
     }

     
?>