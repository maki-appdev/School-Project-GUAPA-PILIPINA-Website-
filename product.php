<?php
    include("php/signup.php");
    include("php/signin.php");
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
    
    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="img/logo/img_1278.jpg" alt="logo" width="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.php">products</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="commercial.php">commercial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="personel.php">personnel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="review.php">Reviews</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="support.php">support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#LoginModal"><i class="bi bi-cart-plus"></i> Shop Now</a><hr style="width: 80%;">
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#RegisterModal"><i class="bi bi-person-plus"></i>  Sign Up</a>
                        </li>

                    </ul>
                </div>
            </nav>
            
        </div>
        
        <!-- Login Modal -->
    <form method="POST" action="php/signin.php">
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" id="exampleModalCenterTitle">
                    <div class="modal-header">
                        <h5 class="modal-title" ><i class="bi bi-person"></i>  SIGN IN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Lemail"><i class="bi bi-envelope-at"></i> Email address</label>
                            <input type="email" name="Lemail" class="form-control" id="Lemail" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><i class="bi bi-shield-lock"></i> Password</label>
                            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-toggle="modal" data-target="#RegisterModal" data-dismiss="modal">Don't have an account? Sign Up Here!</a>
                        <input name = "Login" type = "submit" id = "Login" value="Login">
                        
                    </div>
                </div>
            </div>
        </div>
    </form> 
   
        <!-- Register Modal -->
        <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><i class="bi bi-person-plus"></i> SIGN UP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                    <form method="POST" action="php/signup.php">
                        <div class="row form-group">
                            <div class="col-5">
                                <label for="fn"><i class="bi bi-person"></i> First Name* :</label>
                                <input type="text" class="form-control" id="fn" name="fn" placeholder="First Name" value="<?php echo $return_fn; ?>" required>
                                <span style="color:red;"><?php echo $error_fn; ?></span>
                            </div>
                            <div class="col-4">
                                <label for="ln"><i class="bi bi-person"></i> Last Name* :</label>
                                <input type="text" class="form-control" id="ln" name="ln" placeholder="Last Name" value="<?php echo $return_ln; ?>" required>
                                <span style="color:red;"><?php echo $error_ln; ?></span>
                            </div>

                            <div class="col-3">
                                <label for="mi"> <i class="bi bi-person"></i> M.I* :</label>
                                <input type="text" class="form-control" id="mi" name="mi" placeholder="Middle Initial" value="<?php echo $return_mi; ?>" required>
                                <span style="color:red;"><?php echo $error_mi; ?></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <label for="address"><i class="bi bi-geo-alt"></i> Address* :</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Complete Address" value="<?php echo $return_address; ?>" required>
                                <span style="color:red;"><?php echo $error_address; ?></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <label for="cn"><i class="bi bi-telephone"></i> Contact Number* :</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><img style="width: 20px;" src="img/philipines.png"> +63</span>
                                    </div>
                                    <input type="text" class="form-control" id="cn" name="cn" placeholder="Contact Number" aria-label="Contact Number" aria-describedby="basic-addon1" value="<?php echo $return_cn; ?>" required>
                                    
                                </div>
                                <span style="color:red;"><?php echo $error_cn; ?></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <label for="email"><i class="bi bi-envelope-at"></i> Email Address* :</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $return_email; ?>" required>
                                <span style="color:red;"><?php echo $error_email; ?></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <label for="pass"><i class="bi bi-shield-lock"></i> Password* :</label>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="password" required>
                                <span style="color:red;"><?php echo $error_pass; ?></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <label for="cpass">  <i class="bi bi-shield-check"></i> Confirm Password* :</label>
                                <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password" required>
                                <span style="color:red;"><?php echo $error_cpass; ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 items">
                                <center><input name = "signup" type = "submit" id = "signup" value="SIGN UP"></center>
                            </div>
                        </div>
                    </form> 
                    </div>
                </div>
            </div>
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

      </div>
    </section>
	
        <!--  ======================= Product =============================  -->
		
<form name="JSOrder" id="JSOrder">		
<main class="site-main">
<section class="project-area" id="product">
    <div class="container">
        <div class="project-title pb-5">
            <a href="" class="shownow" data-toggle="modal" data-target="#LoginModal">Shop Now<i class="bi bi-cart-plus"></i></a>
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
        </div>

        <div class="row grid">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/1.jpg">
                            <img src="img/anklet/1.jpg" alt="portfolio-1" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Palawan</h4>
                        <span class="text-secondary">Php 100.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Bracelet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/bracelet/1.png">
                            <img src="img/bracelet/1.png" alt="portfolio-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">bracelet A</h4>
						<span class="text-secondary">Php 100.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/earings/img_1283.png">
                            <img src="img/earings/img_1283.png" alt="portfolio-3" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Earrings a</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/earrings/abby.jpg">
                            <img src="img/earrings/abby.jpg" alt="portfolio-4" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Earrings b</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/1.png">
                            <img src="img/necklace/1.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">coron</h4>
                        <span class="text-secondary">Php 150.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Rings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/rings/img_1224.png">
                            <img src="img/rings/img_1224.png" alt="portfolio-6" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Rings set a</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Summer">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/summer col/img_1279.png">
                            <img src="img/summer col/img_1279.png" alt="portfolio-7" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Summer Col A</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/2.jpg">
                            <img src="img/anklet/2.jpg" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Coron</h4>
                        <span class="text-secondary">Php 100.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Bracelet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/bracelet/2.png">
                            <img src="img/bracelet/2.png" alt="portfolio-9" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Bracelet b</h4>
                        <span class="text-secondary">Php 100.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/earings/img_1284.png">
                            <img src="img/earings/img_1284.png" alt="portfolio-10" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Earrings c</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/earrings/adeline.jpg">
                            <img src="img/earrings/adeline.jpg" alt="portfolio-11" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Earrings d</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/2.png">
                            <img src="img/necklace/2.png" alt="portfolio-12" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">palawan</h4>
                        <span class="text-secondary">Php 150.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Rings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/rings/img_1288.png">
                            <img src="img/rings/img_1288.png" alt="portfolio-13" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Rings set b</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Summer">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/summer col/img_1280.png">
                            <img src="img/summer col/img_1280.png" alt="portfolio-14" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Summer Col b</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/3.jpg">
                            <img src="img/anklet/3.jpg" alt="portfolio-1" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">boracay</h4>
                        <span class="text-secondary">Php 100.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Bracelet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/bracelet/3.png">
                            <img src="img/bracelet/3.png" alt="portfolio-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Bracelet c</h4>
                        <span class="text-secondary">Php 100.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/earings/img_1285.png">
                            <img src="img/earings/img_1285.png" alt="portfolio-3" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Earrings e</h4>
                        <span class="text-secondary">Php 70.00</span><br><br>
						<a>Qty </a><input type="number" id="z11 " name="e5" min="0">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/earrings/ariza.jpg">
                            <img src="img/earrings/ariza.jpg" alt="portfolio-4" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Earrings f</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/3.png">
                            <img src="img/necklace/3.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Boracay</h4>
                        <span class="text-secondary">Php 150.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Rings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/rings/img_1289.png">
                            <img src="img/rings/img_1289.png" alt="portfolio-6" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Rings set c</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Summer">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/summer col/img_1281.png">
                            <img src="img/summer col/img_1281.png" alt="portfolio-7" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Summer Col c</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/4.jpg">
                            <img src="img/anklet/4.jpg" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">siargao</h4>
                        <span class="text-secondary">Php 100.00</span><br>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/earrings/amara.png">
                            <img src="img/earrings/amara.png" alt="portfolio-9" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Earrings g</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/earings/img_1286.png">
                            <img src="img/earings/img_1286.png" alt="portfolio-10" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Earrings h</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/5.jpg">
                            <img src="img/anklet/5.jpg" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">calayan</h4>
                        <span class="text-secondary">Php 100.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/6.jpg">
                            <img src="img/anklet/6.jpg" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">yellow</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/7.jpg">
                            <img src="img/anklet/7.jpg" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">smiley</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/8.png">
                            <img src="img/anklet/8.png" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">nadine</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/9.png">
                            <img src="img/anklet/9.png" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">celestia</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/10.png">
                            <img src="img/anklet/10.png" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">cystal</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/11.png">
                            <img src="img/anklet/11.png" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">willow</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/anklet/12.png">
                            <img src="img/anklet/12.png" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">matchy</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/4.png">
                            <img src="img/necklace/4.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">siargao</h4>
                        <span class="text-secondary">Php 150.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/5.png">
                            <img src="img/necklace/5.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">calayan</h4>
                        <span class="text-secondary">Php 150.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/6.png">
                            <img src="img/necklace/6.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">pride white</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/7.png">
                            <img src="img/necklace/7.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">pride black</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/8.png">
                            <img src="img/necklace/8.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">classy</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/9.png">
                            <img src="img/necklace/9.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">bianca</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/10.png">
                            <img src="img/necklace/10.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">kyo</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/11.png">
                            <img src="img/necklace/11.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">jolly</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/12.png">
                            <img src="img/necklace/12.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">kenti</h4>
                        <span class="text-secondary">Php 50.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/13.png">
                            <img src="img/necklace/13.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">slone</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/14.png">
                            <img src="img/necklace/14.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">nina</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/necklace/15.png">
                            <img src="img/necklace/15.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">sabel</h4>
                        <span class="text-secondary">Php 70.00</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
</form>
<section class="order" id="order">
	<div class="order-form">
        <form name="JSInfo"  id="JSInfo">
            <input type="name" name="Name" placeholder="Name" value="" required>
            <input type="phone" name="Phone" placeholder="Phone" value="" required>
            <input type="email" name="Email" placeholder="Email" value="" required>
            <input type="button" value="Purchase Order" class="submit" onclick="PurchasedOrder()">
			

        </form>
    </div>
    <div class="content-text container">
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<h4>Name: </h4>
			</div>
			<div class="col-sm-12 col-md-7">
				<h5><div id="NameValue"></div></h5>
			</div>
			<div class="col-sm-12 col-md-5">
				<h4>Phone: </h4>
			</div>
			<div class="col-sm-12 col-md-7">
				<h5><div id="PhoneValue"></div></h5>
			</div>
				
			<div class="col-sm-12 col-md-5">
				<h4>Email: </h4>
			</div>
			<div class="col-sm-12 col-md-7">
				<h5><div id="EmailValue"></div></h5>
			</div>
			<div class="col-sm-12 col-md-5">
				<h4>Total Amount: </h4>
			</div>
			<div class="col-sm-12 col-md-7">
				<h3><div id="TotalAmountValue"></div></h3>
			</div>
		</div>
    </div>

    

</section>



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
	
	<script language="Javascript">
		function PurchasedOrder(){
			var name = JSInfo.Name.value;
			var phone = JSInfo.Phone.value;
			var email = JSInfo.Email.value;
			var a1 = JSOrder.a1.value;	
			var a2 = JSOrder.a2.value;
			var a3 = JSOrder.a3.value;
			var a4 = JSOrder.a4.value;
			var a5 = JSOrder.a5.value;	
			var a6 = JSOrder.a6.value;
			var a7 = JSOrder.a7.value;
			var a8 = JSOrder.a8.value;
			var a9 = JSOrder.a9.value;	
			var a10 = JSOrder.a10.value;
			var a11 = JSOrder.a11.value;
			var a12 = JSOrder.a12.value;
			var b1 = JSOrder.b1.value;			
			var b2 = JSOrder.b2.value;
			var b3 = JSOrder.b3.value;
			var e1 = JSOrder.e1.value;	
			var e2 = JSOrder.e2.value;
			var e3 = JSOrder.e3.value;
			var e4 = JSOrder.e4.value;
			var e5 = JSOrder.e5.value;	
			var e6 = JSOrder.e6.value;
			var e7 = JSOrder.e7.value;
			var e8 = JSOrder.e8.value;
			var n1 = JSOrder.n1.value;			
			var n2 = JSOrder.n2.value;
			var n3 = JSOrder.n3.value;
			var n4 = JSOrder.n4.value;			
			var n5 = JSOrder.n5.value;
			var n6 = JSOrder.n6.value;
			var n7 = JSOrder.n7.value;			
			var n8 = JSOrder.n8.value;
			var n9 = JSOrder.n9.value;
			var n10 = JSOrder.n10.value;			
			var n11 = JSOrder.n11.value;
			var n12 = JSOrder.n12.value;
			var n13 = JSOrder.n13.value;			
			var n14 = JSOrder.n14.value;
			var n15 = JSOrder.n15.value;
			var r1 = JSOrder.r1.value;			
			var r2 = JSOrder.r2.value;
			var r3 = JSOrder.r3.value;
			var s1 = JSOrder.s1.value;			
			var s2 = JSOrder.s2.value;
			var s3 = JSOrder.s3.value; 
			
			var fee = 0;

			if (a1 >= 1 || a2 >= 1 || a3 >= 1 || a4 >= 1 || a5 >= 1 || a6 >= 1 || a7 >= 1 || a8 >= 1 || a9 >= 1 || a10 >= 1 || a11 >= 1 || a12 >= 1 || b1 >= 1 || b2 >= 1 || b3 >= 1 || e1 >= 1 || e2 >= 1 || e3 >= 1 || e4 >= 1 || e5 >= 1 || e6 >= 1 || e7 >= 1 || e8 >= 1 || n1 >= 1 || n2 >= 1 || n3 >= 1 || n4 >= 1 || n5 >= 1 || n6 >= 1 || n7 >= 1 || n8 >= 1 || n9 >= 1 || n10 >= 1 || n11 >= 1 || n12 >= 1 || n13 >= 1 || n14 >= 1 || n15 >= 1 || r1 >= 1 || r2 >= 1 || r3 >= 1 || s1 >= 1 || s2 >= 1 || s3 >= 1)
			{
				fee += (a1 * 100);
				fee += (a2 * 100);
				fee += (a3 * 100);
				fee += (a4 * 100);
				fee += (a5 * 100);
				fee += (a6 * 70);
				fee += (a7 * 70);
				fee += (a8 * 70);
				fee += (a9 * 70);
				fee += (a10 * 70);
				fee += (a11 * 70);
				fee += (a12 * 70);
				fee += (b1 * 100);
				fee += (b2 * 100);
				fee += (b3 * 100);
				fee += (e1 * 70);
				fee += (e2 * 70);
				fee += (e3 * 70);
				fee += (e4 * 70);
				fee += (e5 * 70);
				fee += (e6 * 70);
				fee += (e7 * 70);
				fee += (e8 * 70);
				fee += (n1 * 150);
				fee += (n2 * 150);
				fee += (n3 * 150);
				fee += (n4 * 150);
				fee += (n5 * 150);
				fee += (n6 * 70);
				fee += (n7 * 70);
				fee += (n8 * 70);
				fee += (n9 * 70);
				fee += (n10 * 70);
				fee += (n11 * 70);
				fee += (n12 * 50);
				fee += (n13 * 70);
				fee += (n14 * 70);
				fee += (n15 * 70);
				fee += (r1 * 70);
				fee += (r2 * 70);
				fee += (r3 * 70);
				fee += (s1 * 70);
				fee += (s2 * 70);
				fee += (s3 * 70);	
			}

			var totalamount = fee;
			
			

			document.getElementById("NameValue").innerHTML = name; 
			document.getElementById("PhoneValue").innerHTML = phone; 
			document.getElementById("EmailValue").innerHTML = email; 
			document.getElementById("TotalAmountValue").innerHTML = totalamount; 
			//alert("Alert");
		}
	</script>

</body>

</html>