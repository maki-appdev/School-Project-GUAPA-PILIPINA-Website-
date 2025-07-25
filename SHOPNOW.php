<?php
    include("php/shopnow.php");
    include("php/dbconn.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GUAPA PILIPINA</title>
    <link rel="icon" href="img/logo/img_1278.jpg" >
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./1/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="./1/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./1/owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>


    <!--  ======================= Header ============================== -->

    <header>
        <div class="text-center">
            <img class="mt-5 ml-5" src="img/logo/img_1278.jpg" alt="logo" width="100px">
            <img class="mt-5 mr-5 float-right" src="img/carts.png"  width="60px">
            <br>
            <span class="text-center display_user">Hi! <?php echo $name; ?></span>
        </div>
        
    </header>
    <!------------------------ Services --------------------->

    <section class="services" id="services">
      <div class="container">

        <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Services</h1>
        </div>

        <div class="row" style="margin: auto auto;">

          <div class="col-lg-4 col-md-6 py-3 ">

            <div class="card">
              <i class="fa-solid fa-truck"></i>
              <div class="card-body">
                <h3>Free Shipping</h3>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 py-3">

            <div class="card">
              <i class="fa-solid fa-rotate-left"></i>
              <div class="card-body">
                <h3>30 Day Free Return</h3>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 py-3">

            <div class="card">
              <i class="fa-solid fa-truck-fast"></i>
              <div class="card-body">
                <h3>Fast Delivery</h3>
              </div>
            </div>

          </div>




          <div class="col-lg-4 col-md-6 py-3">

            <div class="card">
              <i class="fa-solid fa-cart-shopping"></i>
              <div class="card-body">
                <h3>Secure Shopping</h3>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 py-3">

            <div class="card">
              <i class="fa-solid fa-headset"></i>
              <div class="card-body">
                <h3>Support 24/7</h3>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 py-3">

            <div class="card">
              <i class="fa-solid fa-thumbs-up"></i>
              <div class="card-body">
                <h3>Big Choice of Products</h3>
              </div>
            </div>

          </div>



        </div>
    <br>
      </div>
    </section>
    
	
        <!--  ======================= Product =============================  -->
		
<form method="POST" action="php/shopnow.php">		
<main class="site-main">
<section class="project-area" id="product">
    <div class="container">
        <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Products</h1>
        </div>

        <div class="button-group">
            <button type="button" class="active" id="btn1" data-filter="*">All</button>
            <button type="button" data-filter=".Anklet">Anklet</button>
            <button type="button" data-filter=".Bracelet">Bracelet</button>
			      <button type="button" data-filter=".Earrings">Earrings</button>
            <button type="button" data-filter=".Necklace">Necklace</button>
			      <button type="button" data-filter=".Rings">Rings</button>
            <button type="button" data-filter=".Summer">Summer Collection</button>
            <?php 
	 
                $sql = "SELECT * FROM products";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                  while ($products = mysqli_fetch_assoc($res)) {  ?>
                    
                  
              <div class="card gap-3" style="width: 18rem;">
                <img src="uploads/<?=$products['Image']?>">
              <div class="card-body">
                <h5 class="card-title"><?=$products['ProdName']?></h5>
                <p class="card-text">₱ <?=$products['Price']?></p>
                <a href="#" class="btn btn-primary"><i class="bi bi-cart-check"></i>  Add to Cart</a>
              </div>
              </div>
                    
              <?php } }?>
    </div>
</section>
</main>
</form>




 <!---------------------------- FOOTER ---------------------------------->
  
  
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>G</span>uapa <span>P</span>ilipina</h1>
      </div>
      <h2>Our Final Project</h2>
      <p>Copyright © 2023 Bajamonde, Dela Cruz, Manuel, and Villanueva. All rights reserved</p>
    </div>
  </section>



    <script src="./js/jquery.3.4.1.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./1/isotope/isotope.min.js"></script>
    <script src="./1/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="./1/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="./js/main.js"></script>
	
	

</body>

</html>