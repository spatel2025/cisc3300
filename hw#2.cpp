<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Premium Vintage Shoe Store</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .product-list { margin-top: 20px; }
        .external-link { color: blue; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: left; }
        .footer { margin-top: 30px; }
        img
        {
          max-width: 100%;
          height: 200px;
          display: block;
        }
    </style>
</head>
<body>

    <h1>Welcome to the Premium Vintage Shoe Store</h1>
    <h2>Find New Weekly Products</h2>

    <p>Explore our range of new vintage products every week and enjoy a unique shopping experience.</p>

    <div class="product-list">
        <h3>Our Shoes this Week:</h3>
        <ul>
            <li>Nike Blazer Low '77 </li>
            <li>Adidas Samba OG</li>
            <li>Reebok Club C Ground Sneaker</li>
            <li>Elan Sneakers by Gola </li>
        </ul>
    </div>

    <a href="checkout.html">Proceed to Checkout</a><br>
    <a href="https://www.nike.com/" class="external-link">Visit One of our Partner Sites</a>

    <h3>Best Sellers</h3>
    <img src="https://img.stadiumgoods.com/adidas-samba-og-wmns-putty-grey_22561961_48147788_1000.jpg" alt="Adidas Samba OG" style = "width: 20%">
    <img src="https://www.golausa.com/images/gola-classics-womens-elan-sneakers-p2821-17511_image.jpg" alt="Elan Sneakers by Gola" style = "width: 15%" >

    <h3>Pricing Table</h3>
    <table>
        <tr>
            <th>Shoe</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Nike Blazer Low '77</td>
            <td>$98</td>
        </tr>
        <tr>
            <td>Adidas Samba OG</td>
            <td>$130</td>
        </tr>
        <tr>
            <td>Reebok Club C Ground Sneaker</td>
            <td> $90</td>
        </tr>
        <tr>
            <td>Elan Sneakers by Gola</td>
            <td> $110</td>
        </tr>
    </table>

    <h3>Contact Us</h3>
    <form action="/submit-form" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <input type="submit" value="Submit">
    </form>

    <div>
        <p>Follow us on social media for the latest updates.</p>
    </div>

    <div>
        <span>Terms of Service</span> | <span>Privacy Policy</span>
    </div>

    <div class="footer">
        <p>&copy; 2024 Premium Vintage Shoe Store. All rights reserved.</p>
    </div>

</body>
</html>
