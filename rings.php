<!DOCTYPE html>
<html>
<head>
    <title>Rings Category</title>
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
  <h1 align="center"><i>Rings</h1>
</font>
</table>

<!-- Ring 1 -->
<div class="product">
    <h3>Diamond Ring</h3>
    <img src="L1.jpeg" alt="Diamond Ring">
    <p>Price: ₹2529</p>

    <form action="Bill.php" method="post">
    <form action="insert_order.php" method="post">
        <input type="hidden" name="product_id" value="101">
        <input type="hidden" name="name" value="Diamond Ring">
        <input type="hidden" name="price" value="2529">
        <input type="hidden" name="image" value="L1.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 2 -->
<div class="product">
    <h3>Diamond Ring</h3>
    <img src="L2.jpeg" alt="Diamond Ring">
    <p>Price: ₹2789</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="102">
        <input type="hidden" name="name" value="Diamond Ring">
        <input type="hidden" name="price" value="2789 ">
        <input type="hidden" name="image" value="L2.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 3 -->
<div class="product">
    <h3>Diamond Ring</h3>
    <img src="L3.jpeg" alt="Diamond Ring">
    <p>Price: ₹3599</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="103">
        <input type="hidden" name="name" value="Diamond Ring">
        <input type="hidden" name="price" value="3599">
        <input type="hidden" name="image" value="L3.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 4 -->
<div class="product">
    <h3>Diamond Ring</h3>
    <img src="L4.jpeg" alt="Diamond Ring">
    <p>Price: ₹3669</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="104">
        <input type="hidden" name="name" value="Diamond Ring">
        <input type="hidden" name="price" value="3669">
        <input type="hidden" name="image" value="L4.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 5 -->
<div class="product">
    <h3>Diamond Ring</h3>
    <img src="L5.jpeg" alt="Diamond Ring">
    <p>Price: ₹2779</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="105">
        <input type="hidden" name="name" value="Diamond Ring">
        <input type="hidden" name="price" value="2779">
        <input type="hidden" name="image" value="L5.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 6 -->
<div class="product">
    <h3>Diamond Ring</h3>
    <img src="L6.jpeg" alt="Diamond Ring">
    <p>Price: ₹3789</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="106">
        <input type="hidden" name="name" value="Diamond Ring">
        <input type="hidden" name="price" value="3789">
        <input type="hidden" name="image" value="L6.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 7 -->
<div class="product">
    <h3>Gold Ring</h3>
    <img src="L7.jpeg" alt="Gold Ring">
    <p>Price: ₹2569</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="107">
        <input type="hidden" name="name" value="Gold Ring">
        <input type="hidden" name="price" value="2569">
        <input type="hidden" name="image" value="L7.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 8 -->
<div class="product">
    <h3>Gold Ring</h3>
    <img src="L8.jpeg" alt="Gold Ring">
    <p>Price: ₹3399</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="108">
        <input type="hidden" name="name" value="Gold Ring">
        <input type="hidden" name="price" value="3399">
        <input type="hidden" name="image" value="L8.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 9 -->
<div class="product">
    <h3>Gold Ring</h3>
    <img src="L9.jpeg" alt="Gold Ring">
    <p>Price: ₹2349</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="109">
        <input type="hidden" name="name" value="Gold Ring">
        <input type="hidden" name="price" value="2349">
        <input type="hidden" name="image" value="L9.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 10 -->
<div class="product">
    <h3>Gold Ring</h3>
    <img src="L10.jpeg" alt="Gold Ring">
    <p>Price: ₹2569</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="110">
        <input type="hidden" name="name" value="Gold Ring">
        <input type="hidden" name="price" value="2569">
        <input type="hidden" name="image" value="L10.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 11 -->
<div class="product">
    <h3>Gold Ring</h3>
    <img src="L11.jpeg" alt="Gold Ring">
    <p>Price: ₹2579</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="111">
        <input type="hidden" name="name" value="Gold Ring">
        <input type="hidden" name="price" value="2579">
        <input type="hidden" name="image" value="L11.jpeg">
        Quantity: <input type="number" name="quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">Buy</button>
    </form>
</div>

<!-- Ring 12 -->
<div class="product">
    <h3>Gold Ring</h3>
    <img src="L12.jpeg" alt="Gold Ring">
    <p>Price: ₹2589</p>

    <form action="Bill.php" method="post">
        <input type="hidden" name="product_id" value="112">
        <input type="hidden" name="name" value="Gold Ring">
        <input type="hidden" name="price" value="2589">
        <input type="hidden" name="image" value="L12.jpeg">
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