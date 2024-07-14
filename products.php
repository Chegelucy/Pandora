<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> All products-pandora</title>
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
            min-width:250px;
            margin-bottom:30px;
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
            /*-----------------all products pages-------*/
                        
                        .row-2{
                            justify-content:space-between;
                            margin:100px auto 50px;
                        }
                        select{
                            border:1px solid #ff523b;
                            padding:5px;
                        }
                        select:focus{
                            outline:none;
                        }
                        .page-btn{
                            margin:0 auto 80px;

                        }
                        .page-btn span{
                            display:inline-block;
                            border:1px solid #ff523b;
                            margin-left:40px;
                            height:40px;
                            text-align:center;
                            line-height: 40px;
                            cursor:pointer; 

                        }
                        .page-btn span:hover{
                            background:#ff523b;
                            color:white;
                        
                        }
            /*-------media query for less than 600 screen size------*/ 
            @media only screen and(max-width:600px){
                .row{
                    text-align:center;
                }
                .col-2, .col-3, .col-4{
                    flex-basis:100%;
                }
            }

}

</style>
</head>
<body>



    <div class="navbar">
        <div class="image">
            <img src="log. jpeg.jpg" width="100px">

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
        
        <img src="menu icon.jpeg.jpg" class="menu-icon" onclick="menutoggle()">
    </div>
                </div>
                    <div class="small-container">
                <div class="row" row-2>
                    <h2>All products</h2>
                    <select>
                        <option>
                        <option>Default sorting</option>
                    <option>sort by price</option>
                <option>sort by popularity</option>
            <option>sort by sale</option>
            </select>
                    </div>
                        <div class="row">
                            <div class="col-4">
<a href="products details.html"><img src="product1.jpeg.jpg" width="100px"></a>
                                <h4>rings</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        <div class="col-4">
                            <img src="product2.jpeg.jpg">
                            <h4>gold coated necklace</h4>
                            <div class="rating">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        <div class="col-4">
                            <img src="product3.jpeg.jpg">
                            <h4> necklace</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    <div class="col-4">
                        <img src="product4.jpeg.jpg">
                        <h4> wrist watch</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>

                    </div>
<div class="col-4">
    <img src="latest product1.jpeg.jpg">
    <h5>gold coated necklace</h5>
    <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <img src="latest product2.jpeg.jpg">
        <h5>rings</h5>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
    </div>
    </div>
    <div class="row">
    <div class="col-4">
        <img src="latest product3.jpeg.jpg">
        <h5>watches</5>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>

        </div>
    <div class="col-4">
        <img src="latest product4.jpeg.jpg">
        <h5>anklet</5>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>

        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>

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
                        <li>twitter</li>
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
