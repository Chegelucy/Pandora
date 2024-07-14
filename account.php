<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>account</title>
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
        width:50%;
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
        width:50%;
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
            width:50%;
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
            width:50px;
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
            top: 70px;
            left: 0;
            background: #333;
            width: 100%;
            overflow:hidden;
            transition: max-height 0.5s;
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
                            /*----------single product details----*/
                            .single-product{
                                margin-top: 80px;
                            }
                            single-product .col-2 img{
                                padding:0;
                            }
                            single-product .col-2{
                                padding:20px;
                            }

                            .single-product h4{
                                margin: 20px 0;
                                font-size: 22px;
                                font-weight:bold;
                            }
                            .single-product select{
                                display:block;
                                padding:10px;
                                margin-top:20px;
                            }
                            .single-product input{
                                width:50px;
                                height:40px;
                                padding-left:10px;
                                font-size:20px;
                                margin-right: 10px;
                                border:1px solid #ff523b;
                            }
                            input:focus{
                                outline:none;
                            }
                            .single-product .fa{
                                color:#ff523b;
                                margin-left:10px;
                            }
                            .small-img-row{
                                display:flex;
                                justify-content: space-between;
                            }
                            .small-img-col{
                                flex-basis: 24%;
                                cursor: pointer;
                            }
                 /*--------cart item-----*/
                 .cart-page{
                    margin:80px auto;
                 }
                 table{
                    width:100px;
                    border-collapse: collapse;
                 }
                 .cart-info{
                    display:flex;
                    flex-wrap:wrap;
                 }
                 th{
                    text-align:left;
                    padding:5px;
                    color:#fff;
                    background:#ff523b;
                    font-weight: normal;
                 }
                 td{
                    padding:10px 5px;
                 }
                 td input{
                    width:40px;
                    height:30px;
                    padding:5px;
                 }
                 td a{
                    color:#ff523b;
                    font-size:12px;
                 }
                 td img{
                    width:80px;
                    height:80px;
                    margin-right:10px;
                 }
                .total-price{
                    display:flex;
                    justify-content: flex-end;
                }
                .total-price{
                    border-top:3px solid #ff523b;
                    width:100%;
                    max-width: 400px;
                }
                td :last-child{
                    text-align: right;
                }
                td last-child{
                    text-align:right;
                }
                /*-------------account-page----*/
                .account-page{
                    padding:50px 0;
                    background:radial-gradient(#fff,#ffd6d6);
                }
                .form-container{
                    background: white;
                    width:300px;
                    height:400px;
                    position:relative;
                    text-align:center;
                    padding:20px 0;
                    margin:auto;
                    box-shadow:0 0 20px 0px rgba(0, 0, 0, 0,1);
                    overflow: hidden; 
                }
                .form-container span{
                    font-weight:bold;
                    padding:0 10px;
                    color:#555;
                    cursor:pointer;
                    width:100px;
                    display:inline-block;
                }
                .form-btn{
                    display:inline-block;

                }
                .form-container form{
                    max-width:300px;
                    padding:0 20px;
                    position:absolute;
                    top:130px;
                    transition:transform 1s;

                }
                form input{
                    width:100px;
                    height:30px;
                    margin: 10px 0;
                    padding:0 10px;
                    border:1px solid #ccc;
                }
                form.btn{
                    width:100px;
                    border:none;
                    cursor:pointer;
                    margin:10px 0;
                }
                form.btn:focus{
                    outline:none;
                    
                }
                loginform{
                    left:-300px;
                }
                regform{
                    left:0;
                }
                form a{
                    font-size:12px;
                }
                indicator{
                    width:100px;
                    border:none;
                    background:#ff523b;
                    height:3px;
                    margin-top:8px;
                    transform:translateX(100px);
                    transform:transform 1s;

                }

            }

        /*-------media query for less than 600 screen size------*/ 
        @media only screen and(max-width:600px){
        .row{
            text-align:center;
        }
        .col-2, .col-3, .col-4{
            flex-basis:100%;
        }
 .single-product .row{
    text-align:left;
 }
    .single-product .col-2{
    padding:20px 0;
    }
    .single-product hi{
        font-size:26px;
        line-height:32pc;
    
    }
    .cart-info p{
        display:none;
    }
}
</style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="image">

    </a>
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
  <a href="index.php"><img src="search.png.png" width="30px" height="30px"></a>



  <img src="menu icon.jpeg.jpg" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>


    
    <!--------account-page------>
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="image1.jpeg.jpg" width="50px">
                    </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
              <span onclick="login()">login</span>
            <span onclick="register()">register</span>
                            <hr id="indicator">
                            </div>
                            <form id="loginform">
     <input type="text" placeholder="username">
         <input type="password" placeholder="password">
         <a href="products.php"class="btn">login</a>

                <a href="">forgot password</a>
                                </form>


                                <form id="regform">
                <input type="text" placeholder="username">
                <input type="email" placeholder="email">
                <input type="password" placeholder="password">
     <button type="submit" class="btn">register</button>
                </form>
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
                        <img src="playstore.jpeg.jpeg" width="30px">
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
<!-------js for toggle form----->
<script>
    var loginform= document.getElementById("loginform")
    var regform= document.getElementById("regform")
    var indicator= document.getElementById("indicator")
function register(){
    regform.style.transform="translateX(0px)";
    loginform.style.transform="translateX(0px)";
    indicator.style.transform="translateX(100px)";
}
function login(){
    regform.style.transform="translateX(300px)";
    loginform.style.transform="translateX(300px)";
    indicator.style.transform="translateX(0px)";
}

    </script>
</body>
</html>