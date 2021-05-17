<?php
session_start();
 $connect = mysqli_connect("localhost", "rootdarsh", "darsh@123", "cakery");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Gateau Area</title>
</head>
<body style="background-color:lavender">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#CG">Cake Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bday Cakes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Valentines Cakes</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Make Your Own Cake</a>
          </li>
        </ul>
      </nav>
    <section id="home">
      <h1 style="text-align: center;">Welcome To The Gateau Area</h1> <br>
      
      <h5 style="float: right;">Download Our App,<br> Gateau Area</h5>
      <img src="https://i.pinimg.com/originals/e5/63/d9/e563d97183e6468f0f32f4a01c424e68.png" height="100px" style="float: right;">
      
      <h4 style="text-align: center; margin-left: 350px;">Where the most varieties of cakes and the best are.</h4>
      <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
        
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://www.biggerbolderbaking.com/wp-content/uploads/2017/08/1C5A0056.jpg" height="500px" width="1000px" style="display: block; margin-left: auto; margin-right: auto;">
            </div>
            <div class="carousel-item">
              <img src="https://www.hummingbirdhigh.com/wp-content/uploads/2020/03/01_nutellafaultlinecake_IMG_3974-500x500.jpg" height="500px" width="1000px" style="display: block; margin-left: auto; margin-right: auto;">
            </div>
            <div class="carousel-item">
              <img src="https://storcpdkenticomedia.blob.core.windows.net/media/recipemanagementsystem/media/recipe-media-files/recipes/retail/x17/16714-birthday-cake-600x600.jpg" height="500px" width="1000px" style="display: block; margin-left: auto; margin-right: auto;">
            </div>
          </div>
        
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        
        </div>
        <br><br><p style="text-align: center;">Welcome to the Gâteau Area. Here you can find countless varieties <br>of cakes ranging from a delicious cheesecake to the amazing FunFetti cake.  Go to the cake gallery<br> to see some of them. </p>
        <br><br><br>
      </section>  
      <section id="CG">
        <h3 style="text-align: center;">Cake Gallery</h3><br><br>
        <div class="container-fluid">
          <div class="row">
            <div class="col-3"><img style="padding-left: 200px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFIva4KW5iF-D9SuJuFCiweQOTye4vY4TqsH5iBIL6YLimjifZT7BiT8l_dQ&usqp=CAc"></div>
            <div class="col-3"><img style="padding-left: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY9y74Mc0Vhht3Bbn1WhPdS1JnwzBY0BE3svjxS0xGxES1IoyjAXcdITzcTT32tnGAn6dL1VU&usqp=CAc"></div>
            <div class="col-3"><img style="padding-left: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpAB3Z9sQS2BKh9_m-L0hJJBVdA05oSzD81zhGmdbG4pSLKBWVgO0kKoJ8Ptn4eUuev7JgUU03&usqp=CAc"></div>
            <div class="col-3"><img style="padding-left: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjIdi8-WkeJRQRmY45lX3LxpfSoYT-lonB7g&usqp=CAU"></div>
          </div><br>
          <div class="row">
            <div class="col-2"><p style="float: left; padding-left: 250px;">$30</p></div>
            <div class="col-2"><p style="float: left; padding-left: 240px;">$50</p></div>
            <div class="col-2"><p style="float: left; padding-left: 240px;">$70</p></div> 
            <div class="col-2"><p style="float: left; padding-left: 160px;">$100</p></div>
          </div>
        </div>
        <br><br>
        
        <img style="padding-left: 250px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx1BPw59eQ-un8XGvZxVeEK73CWmu04kQE6I5fba7yXKOPcN23c8BrI8WNWP9EWA7jOfc_AhSk&usqp=CAc"><img style="padding-left: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReh7h39gRxDCwDzB5loMBkvmNq_waBXLPbHO5aLy-YQHjS4uGyR6QxFsHdyPvpBsTb3iWeN9mv&usqp=CAc"><img style="padding-left: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2u7dG18e8kCvZe_LsBlWoKMEgrP33nh1eCvvodRyRyVpYH-NCbECGfQNIlsc&usqp=CAc"><img style="padding-left: 20px;" src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT9IKnAoXYpBmFpLftCs3DOsHdMXsrF4XNfc9aq3V7r6yOMCUNq4r8cQKSae-PJRUcXvsnSc5Wl3E2Bh6LYD8xFKcaI4Bgj76fHr9GsEoM&usqp=CAE"><br>
        <p style="float: left; padding-left: 300px;"
        >$140</p><p style="float: left; padding-left: 200px;">$170</p><p style="float: left; padding-left: 150px;">$200</p><p style="float: left; padding-left: 130px;">$790</p><br><br><br><br><br>
      </section>
      <section id="BCG">
        <h3 style="text-align: center;">BDAY Cakes</h3><br><br>
        <img style="padding-left: 150px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjouX6WG7cYTx0Df0xTBWnuW2E9ZoP7_G-VQ&usqp=CAU"><img style="padding-left: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt5zIVkzSz_upIwp69DhkB1QMVucxnNn33FkTe6-3iz7cpRWDHh8zzhwjtpQ8&usqp=CAc"><img style="padding-left: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRiHWPPrlXDrMpjD46ir3B1A0NFGYYtN1aX-2m_lCBqyu_uezTsvgLPSBMY7uuhoYE67L6iNhO&usqp=CAc"><img style="padding-left: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsKTVmAcB1OGarb73iFqIurLRJgz262APy4w&usqp=CAU"><br><p style="float: left; padding-left: 250px;"
        >$30</p><p style="float: left; padding-left: 250px;">$50</p><p style="float: left; padding-left: 200px;">$70</p><p style="float: left; padding-left: 225px;">$100</p><br><br><br><br>
      </section>
      <section id="VCG">
        <h3 style="text-align: center;">Valentines Day Cakes</h3>
        <img style=" width: 200px; height: 200px; margin-left: 250px;" src="https://i.pinimg.com/originals/9a/c9/6c/9ac96c5d6177b275ff70bcac61acbc36.jpg"><img style=" width: 200px; height: 200px;padding-left: 20px;" src="https://lh3.googleusercontent.com/sWOGrG3oKzUqVrd3gKrsf40FOSLwC9-xgsuqVamcp4c_EJjbqOjqmscGH7m2_66Al36rcA=s85"><img style=" width: 200px; height: 200px;padding-left: 20px;" src="https://lh3.googleusercontent.com/dhlF6LHfYcitTQ3-xjEzhZ1lr8AXB3ihDhS11mGSHWFbL6ETDiJYJcvOqCWmdafqABhSEg=s85"><img style=" width: 200px; height: 200px;padding-left: 20px;" src="https://lh3.googleusercontent.com/_ynVHDVSfxPJIOQRkltIzmC25qebuAA4rpp-9OchWkcO5rWGcDjyi6itYY3dgm61Oe-zFQ=s115"><br>
        <p style="float: left; padding-left: 300px;"
        >$140</p><p style="float: left; padding-left: 200px;">$170</p><p style="float: left; padding-left: 150px;">$200</p><p style="float: left; padding-left: 200px;">$790</p><br><br>
      </section>  
</body>
</html>