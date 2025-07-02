<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Online Gift Shop</title>
    <style>
        
        body {
            background: url('images/background.jpg') no-repeat center center fixed;
            background-size: cover;
             font-family: Arial, sans-serif; 
             background-color: #f4f4f4; 
             text-align: center; }
        .container 
        { 
            max-width: 400px;
             margin: auto; 
            padding: 20px; 
            background: white; 
            border-radius: 10px;
             box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2
         { color: green; }
        input
         { width: 90%; padding: 10px;
             margin: 10px 0;
             
             
              border-radius: 5px; }
        button 
        { width: 100%; 
            padding: 10px; 
            background: green;
             color: white;
              border: none;
               border-radius: 5px; 
               cursor: pointer; }
        button:hover
         { background: darkgreen; }
        .error 
        { color: red; }
        .register-link
         { display: block; margin-top: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>    
 <form method="post" action="login1.php">

  <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>

    <a href="registration.php" class="register-link">New User? Register Here</a>
</div>

</body>
</html>