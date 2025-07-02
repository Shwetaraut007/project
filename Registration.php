<!DOCTYPE html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .login-form h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }

        .form-group input[type="submit"]:hover {
            background-color:red;
        }

        .form-group a {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body style="background-image:
                  url(b5.jpeg);background-size:cover;">
   <body>
 <div class="login-form">
        <h2>User Registration</h2>
       <form method="post" action="Registration1.php">
 enter Name:
<div class=form-group>
              <input type="text" name="t1"><br>
</div>
enter Email:
<div class=form-group>
              <input type="email" name="t2"><br>
</div>
enter Password:
<div class=form-group>
              <input type="password" name="t3"><br>
</div>
enter Address:
<div class=form-group>
              <input type="textarea" name="t4"><br>
</div>
enter Date:
<div class=form-group>
            <input type="Date" name="t5"><br>
</div>
 enter Contact no:
<div class=form-group>
             <input type="text" name="t6"><br>
</div>
enter Pincode:
<div class=form-group>
           <input type="text" name="t7"><br>
</div>
<div class=form-group>
               <input type="Submit" name="b1" value="registr">
</div>
</div>
     
 </form>
  </body>
</html>



