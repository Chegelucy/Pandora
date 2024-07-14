<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>pandora</title>
    <link rel= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/js/star-rating.min.js">
    <script src="js/functions.js"></script>
    <style>
        body{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .navbar{
            display:flex;
            align-items:center;
            padding:20px;
        }
        nav{
            flex:1;
            text-align:right;
        }
        nav ul{
            display:inline-block;
            list-style-type: none;
        
        }
        nav ul li{
            display :inline-block;
            margin-right:20px;
        }
        a{
            text-decoration:none;
            color:#555;
        
        }
        p{
            color:#555;
        }
        .container{
            max-width:1300px;
            margin:auto;
            padding-left:25px;
            padding-right:25px;
        }
        .row{
            display:flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .col-2{
            flex-basis: 50%;
            min-width:300px;
        }
        .col-2 img{
            max-width:100%;
            padding:50px 0;
        }
        .col-2 h1{
            font-size:50px;
            line-height: 60px;
            margin: 25px;
        }
        .btn{
            display:inline-block;
            background: #ff52ff;
            color:#fff;
            padding:8px 30px;
            margin:30px 0px;
            border-radius: 30px;
            transition: 0.5s;
        }
        .btn:hover{
            background:#563434 ;
        }
        .header{
            background:radial-gradient(#fff,#ffd6d6);
        }
        header .row{
            margin-top:70px;

        }
        .categories{
            margin: 70px 0;
        }
        .col-3{
            flex-basis:30px;
            height: max-content;
            min-width:100%;
            margin-bottom:30px;
            display: flex;
            flex-direction: row;

        }
        .col-3 img{
            width:100%;
        }
        .small-container{
            max-width: 1080px;
            margin:auto;
            padding-left:25px;
            padding-right:25px;

        }
        .col-4{
            flex-basis:25px;
            padding:10px;
            min-width:200px;
            margin-bottom:50px;
            transition:transform 0.5s;

        }
        .col-4 img{
            width:100%;
        }
        .title{
            text-align: center;
            margin:0 auto 80px;
            position:relative;
            line-height: 60px;
            color:#555;

        }
        .title::after{
            content:"";
            background:#ff523b;
            width:80px;
            height:5px;
            border-radius: 5px;
            position:absolute;
            bottom:0;
            left:50%;
            transform: translateX(-50);


        }
        h4{
            color:#555;
            font-weight: normal;
        }
        col-4 p{
            font-size:14px;

        }
        .rating.fa{
            color:#ff523b

        }
        .col-4:hover{
            transform:translateY(-5px)

        }
        /*---------testimonial-------*/
        .testimonial{
            padding-top:100px;

        }
        .testimonial .col-1{
            text-align: center;
            padding:40px 20px;
            box-shadow:0 0 20px 0px rgba(0, 0, 0, 0,1);
            cursor:pointer;
            transition: transform 0.5s;
        }
        .testimonial .col-1:hover{
            transform:translateY(-10px)
        }
        .fa.fa-quote-left{
            font-size:34px;
            color:#ff523b;
        }
        .col-1 p{
            font: size 12px;
            margin:12px;
            color:#777;
        }
        /*-----------brands---------*/
        .brands{

            margin:100px auto;
        }
        .col-2{
            width:160px;
        }
        .col-2 img{
            width:100%;
            cursor:pointer;
            filter:grayscale(100%)


        }
        .col-2 img:hover{
            filter:grayscale(0%)
        }
        
        .footer{
            background:black;
            color:#8a8a8a;
            font-size:14px;
            padding:60px 0 20px;
        }
        .footer p{
            color:#8a8a8a;
        }
        .footer h3{
            color:#fff;
            margin-bottom: 20px;
        }
        .footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
            min-width:250px;
            margin-bottom:20px;

        }
        .footer-col-1{
            flex-basis: 20%;
        }
        .footer-col-2{
            flex:1; 
            text-align:center;

        }
        .footer-col-2 img{
            width:180px;
            margin-bottom:20px ;
        }
        .footer-col-3, .footer-col-4{
            flex-basis: 12%;
            text-align: center;
        }
        ul{
            list-style-type: none;
        }
        .app-logo{
            margin-top:20px;
        }
        .app-logo img{
            width:140px;
        }
        .footer hr{
            border:none;
            background: #b5b5b5;
            height:1px;
            margin:20px 0;

        }
        .copyright{
            text-align:center;
        }
        .menu-icon{
            width: 28px;
            margin-left: 20px;
            display:none;
        }
        .cards-container{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            overflow: auto;
        }
        .cards-container .card{
            width: 350px;
            height: 500px;
            margin-top: 10px;
            background-color: #ffd6d6;
            margin-bottom: 10px;
            padding: 10px 10px;
            margin-left: 20px;
            border-radius: 5px;
            text-align: center;

        }
        .cards-container .card .card-img{
            width: 100%;
            height: 60%;
            border-radius: 5px;
        }
        .cards-container .card .card-title{
            font-size: 18px;

        }
        .cards-container .card .add-to-cart-btn{
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 5px;
            background-color: #ff423b;
            cursor: pointer;
        }
        .cards-container .card .add-to-cart-btn :hover{
            background-color: #ff515b;
        }
        /*----------media query for menu--------*/
        @media only screen and (max-width:800px){
            nav ul{
            position:absolute;
                top:70px;
                left:0;
                background:#333;
                width:100%;
                overflow:hidden;
                transition:  max-height 0.5s;

            }
            nav ul li{
                display: block;
                margin-right: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            nav ul li a{
                color:white;

            }
            .menu icon{
                display: block;
            cursor:pointer;
            }
        }
        /*-------media query for less than 600 screen size------*/ 
        @media only screen and(max-width:800px){

        
            .row{
                text-align:center;
            }

            
            .col-2, .col-3, .col-4{
            flex-basis:100%;}
        } 
        .search{
            width:330px;
            float:left;
            margin-left:270px;
        }
        .search{
            font-family:'times new '
        }
    </style>
</head>
<body>

    <div class="header">
 <div class="container">
    <div class="navbar">
        <div class="image">  
            
            <a href="index.php"><img src="log. jpeg.jpg" width="50px">
  
        </div>
        <nav>
            <ul id="menu items">
                <li><a href="index.php">home</a></li>
                <li><a href="products.php">products</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="reviews.php">reviews</a></li>

            </ul>
        </nav>
        <a href="account.php"><img src="person.png.png" width="30px" height="30px"></a>
        <a href="cart.php"><img src="cart.jpeg.jpg" width="30px" height="30px"></a>
        <a href=""><img src="search.png.png" width="30px" height="30px"></a>

        <img src="menu icon.jpeg.jpg" class="menu-icon" onclick="menutoggle()">
    
    </div>
    
    <h1>GIVE YOUR OUTFIT A NEW LOOK!</h1>
    <a href="products.php">explore now</a>
    
            


        
    </div>
    </div>
    <!----------featured categories--------->
    <div class="categories">
        <div class="small-container">
            <h2 class="title">featured products</h2>
        <div class="row">
            <div class="col-3"> 
                <?php
                //this populates the products randomly use a search query for specific products
                    $randomResults = include 'includes/randomproducts.inc.php';
                    // Display the search results
                    if (count($randomResults) > 0) {
                        echo "<div class='cards-container'>";
                        foreach ($randomResults as $result) {
                            echo "<div class='card'>";
                            $filename = basename($result['item_image']);
                            echo "<img class='card-img' src='images/productImages/$filename'>";
                            echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>{$result['item_name']}</h5>";
                            echo "<p class='card-price'>Ksh:{$result['item_price']}</p>";
                            //when we press the add to cart button
                            echo "<button class='add-to-cart-btn' data-item-id='{$result['item_id']}' data-item-name='{$result['item_name']}' data-item-price='{$result['item_price']}'
                            onclick='addToCart({$result['item_id']}, \"{$result['item_name']}\", {$result['item_price']})'>Add to cart</button>";
                            echo "</div>"; // card-body
                            echo "</div>"; // card
                        }
                        echo "</div>"; // cards-container
                    } else {
                        echo "<p class='no-results'>No results found.</p>";
                    }
                
                    
                ?>
            </div>
        </div>
    </div>
                </div>

             </div>
    
        <!-------------------testimonial------->
        <div class="testimonial">
       <div class="small-container">
            <div class="col-1">
                <i class="fa fa-quote-left"></i>
                <p>YOU CANT CRY ON A DIAMOND SHOULDER & IT WILL NOT KEEP YOU WARM AT NIGHT<BR>,IT WILL SHINE THOUGH

            </div>
            <h3>Elizabeth Taylor</h3>
        </div>
        </div>
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="gucci.jpeg.jpg">
                    </div>
                    <div class="col-2">
                        <img src="chanel logo.jpeg.jpg">
                </div>
            </div>
        </div>
        </div>
        
        <!------------footer------>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download our app</h3>
                        <p>Download app for android phones.</p>

                    </div>
                    <div class="footer-col-2">
                        <img src="log. jpeg.jpg">
                        <p>our purpose is to make you look stunning. An outfit is not complete without a jewelry.</p>
                        <div class="app-logo">
                            <img src="playstore.jpeg.jpeg">
                        </div>

                    </div>
                    <div class="footer-col-3">
                        <h3>Follow us</h3>
                        <ul>
                            <li>facebook</li>
                            <li>twiter</li>
                            <li>instagram</li>
                            </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Useful links</h3>
                    <ul>
                      <li>coupons</li>
                      <li>blog</li>
                      <li>return policy</li>  
                    </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">copyright 2023</p>
        </div>
        </div>
        <!----------js for toggle menu------>
        <script>
            var menuitems=document.getElementById("menuitems");
            menuitems.style.maxHeight="0px";
            function menutoggle()
             if (menuitems.style.maxHeight=="0px")
             
             {
                menitems.style.maxHeight="200px"

             }
             else
             {
                menitems.style.maxHeight="0px"


             }    
            
        </script>
</body>
</html>