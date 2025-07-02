<!DOCTYPE html>
<html>
<head>
    <title>Mugs Category</title>
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
  <h1 align="center"><i>Coffee Mugs</h1>
</font>
</table>

<!-- Mug 1 -->
<div class="product">
    <h3>Printed Mug</h3>
    <img src="Z1.jpeg" alt="Printed Mug">
    <p>Price: ₹250</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="401">
        <input type="hidden" name="name" value="Printed Mug">
        <input type="hidden" name="price" value="250">
        <input type="hidden" name="image" value="images/printed-mug.jpg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 2 -->
<div class="product">
    <h3>Pink Flower Mug</h3>
    <img src="Z2.jpeg" alt="Pink Flower Mug">
    <p>Price: ₹300</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="402">
        <input type="hidden" name="name" value="Pink Flower Mug">
        <input type="hidden" name="price" value="300">
        <input type="hidden" name="image" value="Z2.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 3 -->
<div class="product">
    <h3>Tree Printed Mug</h3>
    <img src="Z3.jpeg" alt="Tree Printed Mug">
    <p>Price: ₹350</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="403">
        <input type="hidden" name="name" value="Tree Printed Mug">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="Z3.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 4 -->
<div class="product">
    <h3>Nature Printed Mug</h3>
    <img src="Z4.jpeg" alt="Nature Printed Mug">
    <p>Price: ₹350</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="405">
        <input type="hidden" name="name" value="Nature Printed Mug">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="Z4.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 5 -->
<div class="product">
    <h3>Pink Mug</h3>
    <img src="Z5.jpeg" alt="Pink Mug">
    <p>Price: ₹350</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="405">
        <input type="hidden" name="name" value="Pink Mug">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="Z5.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 6 -->
<div class="product">
    <h3>Combo Mug</h3>
    <img src="Z6.jpeg" alt="Combo Mug">
    <p>Price: ₹350</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="406">
        <input type="hidden" name="name" value="Combo Mug">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="Z6.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 7 -->
<div class="product">
    <h3>Mounten View Mug</h3>
    <img src="Z7.jpeg" alt="Mounten View Mug">
    <p>Price: ₹350</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="407">
        <input type="hidden" name="name" value="Mounten View Mug">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="Z7.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 8 -->
<div class="product">
    <h3>Photo Printed Mug</h3>
    <img src="Z8.jpeg" alt="Photo Printed Mug">
    <p>Price: ₹350</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="408">
        <input type="hidden" name="name" value="Photo Printed Mug">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="Z8.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 9 -->
<div class="product">
    <h3>Dotted Tree Mug</h3>
    <img src="Z9.jpeg" alt="Dotted Tree Mug">
    <p>Price: ₹350</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="409">
        <input type="hidden" name="name" value="Dotted Tree Mug">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="Z9.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 10 -->
<div class="product">
    <h3>Green Tree Mug</h3>
    <img src="Z10.jpeg" alt="Green Tree Mug">
    <p>Price: ₹350</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="410">
        <input type="hidden" name="name" value="Green Tree Mug">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="Z10.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 11 -->
<div class="product">
    <h3>Kate Mug</h3>
    <img src="Z11.jpeg" alt="Kate Mug">
    <p>Price: ₹439</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="411">
        <input type="hidden" name="name" value="Kate Mug">
        <input type="hidden" name="price" value="439">
        <input type="hidden" name="image" value="Z10.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Mug 12 -->
<div class="product">
    <h3>Green Tree Mug</h3>
    <img src="Z12.jpeg" alt="Green Tree Mug">
    <p>Price: ₹499</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="412">
        <input type="hidden" name="name" value="Green Tree Mug">
        <input type="hidden" name="price" value="499">
        <input type="hidden" name="image" value="Z10.jpeg">
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
</html>
u