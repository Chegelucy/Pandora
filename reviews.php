<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Testimonials Section | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
  background: #17a2b8;
}
::selection{
  background: rgba(23,162,184,0.3);
}
.wrapper{
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.wrapper .box{
  background: #fff;
  width: calc(33% - 10px);
  padding: 25px;
  border-radius: 3px;
  box-shadow: 0px 4px 8px rgba(0,0,0,0.15);
}
.wrapper .box i.quote{
  font-size: 20px;
  color: #17a2b8;
}
.wrapper .box .content{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding-top: 10px;
}
.box .info .name{
  font-weight: 600;
  font-size: 17px;
}
.box .info .job{
  font-size: 16px;
  font-weight: 500;
  color: #17a2b8;
}
.box .info .stars{
  margin-top: 2px;
}
.box .info .stars i{
  color: #17a2b8;
}
.box .content .image{
  height: 75px;
  width: 75px;
  padding: 3px;
  background: #17a2b8;
  border-radius: 50%;
}
.content .image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #fff;
}
.box:hover .content .image img{
  border-color: #fff;
}

@media (max-width: 1045px) {
  .wrapper .box{
    width: calc(50% - 10px);
    margin: 10px 0;
  }
}
@media (max-width: 702px) {
  .wrapper .box{
    width: 100%;
  }
}





    </style>
</head>
<body>
<li><a href="index.php">home</a></li>


  <div class="wrapper">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>"Your customer services is fantastic and your jewelry is beautiful.I am looking forward to my next purchase"</p>
      <div class="content">
        <div class="info">
          <div class="name">Alex Smith</div>
          <div class="job">Designer | Developer</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="profile1.jpeg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
<p>"i personally purchase items from pandora and the quality is expectional"</p>
      <div class="content">
        <div class="info">
          <div class="name">Steven Chris</div>
          <div class="job">YouTuber | Blogger</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="profile2.jpeg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>"I bought a beautiful pendant for my sister's birthday in tow months. Well, i like it is so much i gave it to her yesterday."</p>
      <div class="content">
        <div class="info">
          <div class="name">Kristina Bellis</div>
          <div class="job">Freelancer | Advertiser</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="profile3.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>

</body>
</html>
