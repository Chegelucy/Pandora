<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>cart</title>
        <script src="js/functions.js"></script>
        <style>
            *{
                box-sizing:border-box;
                font-family:'poppins'
            }
            body{
                padding:0;
                margin:0;
                display:flex;
                align-items:center;
                justify-content:center;
                height:100vh;
            }
            .container{
                height:100%;
                width:80%;
                border-radius:10px;
                box-shadow:0px, 0px, 10px gray;
            }
            .header{
                height:10vh;
                width:100%;
                display:flex;
                align-items:center;
                justify-content:flex-end;
                border-bottom:1px solid #ccc;
                padding:0px 20px;
            }
            span{
                height:30px;
                width:30px;
                border-radius: 30px;
                background-color:orangered;
                color:white;
                display:flex;
                align-items:center;
                justify-content: center;

            }
            .product{
                display:flex;
                align-items:center;
                width:100%;
            }
            .box{
                display:flex;
                align-items:center;
                height:max-content;
                border:1px solid #ccc;
                width:100%;
                margin-top:100px;
                padding:10px;
            }
            .inner ,#img{
                width:100%;
            }
            img{
                height:170px;
            }
            h3, h4{
                padding:0;
                margin:0;
            }
            button{
                border:none;
                border-radius: 5px;
                background-color: orangered;
                padding:7px 25px;
                color:white;
            }
            button:hover{
                background-color: #333;
                cursor:pointer;
            }
            table{
                width: 100%;
                background-color: #ffd6d6;
                border-radius: 5px;
                margin-bottom: 20px;
            }
            table th{
                background-color: #fff;
                height: 50px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <a href="index.php"><button class="btn-b" >Home</button></a>
                
            </div>
            <div class="product">
                <div class="box">
                    <div class="inner">
                        <?php
                            // Retrieve the cart items from the session storage
                            $cartItems = isset($_SESSION['cart_items']) ? $_SESSION['cart_items'] : array();

                            // Initialize total price
                            $totalPrice = 0;

                            // Loop through the cart items and display them in a table
                            if (!empty($cartItems)) {
                            echo "<table>";
                            echo "<tr><th>Item Name</th><th>Price</th><th></th></tr>";
                            foreach ($cartItems as $item) {
                                $itemId = $item['id'];
                                $itemName = $item['name'];
                                $itemPrice = $item['price'];
                                $totalPrice += $itemPrice;
                                //echo $itemId;
                                echo "<tr>";
                                echo "<tr id='item-{$itemId}'>";
                                echo "<td>{$itemName}</td>";
                                echo "<td>{$itemPrice}</td>";
                                echo "<td><button onclick=\"removeItem('{$itemId}')\">Remove</button></td>";

                                echo "</tr>";
                            }
                            echo "<tr><td><strong>Total</strong></td><td>{$totalPrice}</td><td></td></tr>";
                            echo "</table>";
                            } else {
                            echo "<p>Your cart is empty.</p>";
                            }
                        ?>
                        <a href="./payment.php"><button class="btn-b" >Checkout</button></a>
                        
                        <button class="btn-b" onclick="removeAllItems()">Remove All</button>
                    </div>
                </div>
                
            </div>
        </div>
        
    </body>
</html>
