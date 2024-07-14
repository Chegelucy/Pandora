<!DOCTYPE html>
<html lang="en">
<head>
    <title>search bar</title>
    <style>
        *{
        margin:0;
        padding:0;
        }
body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:lightpink;
}
.box{
    height:30px;
    display:flex;
    cursor:pointer;
    padding:10px 20px;
    background:#ffff;
    border-radius:30px;
    align-items:center;
    box-shadow: 0 10px 25px;
}
.box:hover input{
    width:400px;

}
.box input{
    width:0;
    outline:none;
    border:none;
    font-weight:600;
    transition:0.8s;
    background:transparent;
}
.box a.fas{
    color:black;
    font-size:18px;
}



    </style>
</head>
<body>
    <div class="box">
        <input type="text" placeholder="search...">
        <a href="#">
            <i class="fas fa-search"></i>
        </a>

    </div>
</body>
</html>