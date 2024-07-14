<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>payment</title>
        <style>
            body{
                margin:0;
                padding:0;
                box-sizing:border-box;
                outline:none;
                border:none;
                text-transform: capitalize;
                transition:all .2s linear;

            }
            .container{
                display:flex;
                justify-content: center;
                align-items:center;
                padding: 25px;
                min-height: 100vh;
                background:linear-gradient(90deg,#2ecc71 60%, #27ae60 40.1%);
                padding-bottom:70px;
            }
            .container form{
                padding: 20px;
                width:700px;
                background:#fff;
                box-shadow: 0 5px 10px rgba(0, 0, 0,1);
            }
            .container form .row{
                display:flex;
                flex-wrap: wrap;
                gap: 15px;
            }
            .container form .row .col{
                flex:1 1 250px;
            }
            .container form .row .col.title{
                font-size: 20px;
                color:#333;
                padding-bottom: 5px;
                text-transform: uppercase;
            }
            .container form .row .col ,inputbox{
                margin:15px 0;

            }
            .container form .row .col ,inputbox .span{
                margin-bottom: 10px;
                display:block;
            }
            .container form .row .col ,inputbox input{
                width:100px;
                border:1px solid #ccc;
                padding:10px 15px;
                font: size 15px;
                text-transform: none;
            }
            .container form .row .col ,inputbox input:focus{
                border: 1px solid #000;
            }
            .container form .row .col .flex{
                display: flex;
                gap: 15px;
            }
            .container form .row .col .flex .inputbox{
                margin-top:5px;
            }
            .container form .row .col .flex .inputbox img{
                height:34px;
                margin-top:5px;
                filter:drop-shadow(0 0 1px #000);
            }
            .container form .submit-btn{
                width:100px;
                padding:12px;
                font-size:17px;
                background:#27ae60;
                color:#fff;
                margin-top:5px;
                cursor:pointer;
            }
            .container form .submit-btn:hover{
                background: #2ecc71;
            }

        </style>
        </head>
        <body>
            <div class="container">
                <form action="">

                <div class="row">
                    <div class="col">
                        <h3 class="title">billing address</h3>

                        <div class="inputbox">
                            <span>full name:</span>
                            <input type="text" placeholder="joe doe">

                        </div>

                        <div class="inputbox">
                            <span>email:</span>
                            <input type="text" placeholder="example@example.com">
                            </div>

                        <div class="inputbox">
                            <span>address:</span>
                            <input type="text" placeholder="room- street -locality">
                            </div>

                        <div class="inputbox">
                            <span>city:</span>
                            <input type="text" placeholder="nairobi">
                            </div>
                            <div class="flex">

                        <div class="inputbox">
                            <span>state:</span>
                            <input type="text" placeholder="kenya">
                            </div>

                        <div class="inputbox">
                            <span>zip code:</span>
                            <input type="text" placeholder="123 456">
                        </div>
                            </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">payment</h3>
                    <div class="inputbox">
                            <span>modes of payment accepted :</span>
                            <img src="mode of payment.png">
                        </div>
                    <div class="inputbox">
                            <span>name on card:</span>
                            <input type="text" placeholder="MR.Joe Doe">
                        </div>
                    <div class="inputbox">
                            <span>credit card number:</span>
                            <input type="number" placeholder="1111-2222-3333-4444">
                        </div>
                    <div class="inputbox">
                        <span>exp month:</span>
                        <input type="text" placeholder="january">
                    </div>
                    <div class="flex">
                    <div class="inputbox">
                        <span>exp year:</span>
                        <input type="number" placeholder="2023">
                    </div>
                    <div class="inputbox">
                        <span>cw:</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
        </div>
        <a href="index.php">sign out</a>


                </form>
            </div>
        </body>




</html>
