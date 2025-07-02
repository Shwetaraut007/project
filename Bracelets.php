<!DOCTYPE html>
<html>
<head>
    <title>Bracelet Category</title>
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 20px;
            width: 250px;
            float: left;
            text-align: center;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .product img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<table width="100%">
    <tr>
        <td width="20%"><img src="logo.jpeg" width="75px" align="left"></td>
        <td width="50%" align="center">
            <img src="i2.png" width="20px">
            Email: <a href="mailto:giftshop1010@gmail.com">giftshop1010@gmail.com</a>
        </td>
        <td width="30%" align="right">
       <img src="i1.png" width="20px">
            Call Us: <a href="tel:+918765767032">+91 8765677032</a>
        </td>
    </tr>
</table>

   

<body bgcolor="#D4FOFO">

<table  width="100%"  height="5%" align="center">
<tr bgcolor="nev-blue" colspan="4">
  <th><a href="index.php">Home</a></th>
   <th><a href="about.php">About</a></th>
   <th><a href="category.php">Category</a></th>
   <th><a href="Contact.php">Contact</a></th>
</tr>
</table>
<table>
<font  color="#12345" size="30%">
  <h1 align="center"><i>Bracelets</h1>
</font>
</table>

<!-- Bracelet 1 -->
<div class="product">
    <img src="X1.jpeg" alt="Bracelet">
    <h3>Blue Diamond Bracelet</h3>
    <p>Price: ₹2339</p>

    <form method="POST" action="bill.php">
        <input type="hidden" name="product_id" value="601">
        <input type="hidden" name="name" value="Blue Diamond Bracelet">
        <input type="hidden" name="price" value="2339">
        Quantity: <input type="number" name="qty" min="1" required>
        <input type="submit" value="Buy">
    </form>
</div>

<!-- Bracelet 2 -->
<div class="product">
    <h3>Purple Diamond Bracelet</h3>
    <img src="X2.jpeg" alt="Purple Diamond Bracelet">
    <p>Price: ₹2459</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="602">
        <input type="hidden" name="name" value="Purple Diamond Bracelet">
        <input type="hidden" name="price" value="2459">
        <input type="hidden" name="image" value="X2.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 3 -->
<div class="product">
    <h3>White Diamond Bracelet</h3>
    <img src="X3.jpeg" alt="White Diamond Bracelet">
    <p>Price: ₹2689</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="603">
        <input type="hidden" name="name" value="White Diamond Bracelet">
        <input type="hidden" name="price" value="2689">
        <input type="hidden" name="image" value="X3.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 4 -->
<div class="product">
    <h3>Blue Leaves Bracelet</h3>
    <img src="X4.jpeg" alt="Blue Leaves Bracelet">
    <p>Price: ₹3499</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="604">
        <input type="hidden" name="name" value="Blue Leaves Bracelet">
        <input type="hidden" name="price" value="3499">
        <input type="hidden" name="image" value="X4.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 5 -->
<div class="product">
    <h3>Blue Butterfly Bracelet</h3>
    <img src="X5.jpeg" alt="Blue Butterfly Bracelet">
    <p>Price: ₹3669</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="605">
        <input type="hidden" name="name" value="Blue Butterfly Bracelet">
        <input type="hidden" name="price" value="3669">
        <input type="hidden" name="image" value="X5.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 6 -->
<div class="product">
    <h3>Black Butterfly Bracelet</h3>
    <img src="X6.jpeg" alt="Black Butterfly Bracelet">
    <p>Price: ₹2439</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="606">
        <input type="hidden" name="name" value="Black Butterfly Bracelet">
        <input type="hidden" name="price" value="2439">
        <input type="hidden" name="image" value="X6.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 7 -->
<div class="product">
    <h3>Silver Bracelet</h3>
    <img src="X7.jpeg" alt="Silver Bracelet">
    <p>Price: ₹2569</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="607">
        <input type="hidden" name="name" value="Silver Bracelet">
        <input type="hidden" name="price" value="2569">
        <input type="hidden" name="image" value="X7.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 8 -->
<div class="product">
    <h3>Rose Gold Bracelet</h3>
    <img src="X8.jpeg" alt="Rose Gold Bracelet">
    <p>Price: ₹2689</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="608">
        <input type="hidden" name="name" value="Rose Gold Bracelet">
        <input type="hidden" name="price" value="2689">
        <input type="hidden" name="image" value="X8.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 9 -->
<div class="product">
    <h3>Pink Diamond Bracelet</h3>
    <img src="X9.jpeg" alt="Pink Diamond Bracelet">
    <p>Price: ₹3459</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="609">
        <input type="hidden" name="name" value="Pink Diamond Bracelet">
        <input type="hidden" name="price" value="3459">
        <input type="hidden" name="image" value="X9.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 10 -->
<div class="product">
    <h3>Pink Diamond Bracelet</h3>
    <img src="X10.jpeg" alt="Pink Diamond Bracelet">
    <p>Price: ₹3489</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="610">
        <input type="hidden" name="name" value="Pink Diamond Bracelet">
        <input type="hidden" name="price" value="3489">
        <input type="hidden" name="image" value="X10.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 11 -->
<div class="product">
    <h3>Silver Ring Bracelet</h3>
    <img src="X11.jpeg" alt="Silver Ring Bracelet">
    <p>Price: ₹2499</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="611">
        <input type="hidden" name="name" value="Silver Ring Bracelet">
        <input type="hidden" name="price" value="2499">
        <input type="hidden" name="image" value="X11.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Bracelet 12 -->
<div class="product">
    <h3>Silver Bracelet</h3>
    <img src="X12.jpeg" alt="Silver Bracelet">
    <p>Price: ₹2569</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="612">
        <input type="hidden" name="name" value="Silver Bracelet">
        <input type="hidden" name="price" value="2569">
        <input type="hidden" name="image" value="X12.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>


</body>
<div style="clear:both; text-align:center; margin-top: 40px;">
    <center><button>
         <a href="category.php">Back</a>
       </button></center>
</div>
</body>
</html>