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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="1/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="1/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="1/owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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
                        <form method="POST" action="<?php $_PHP_SELF ?>">
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
    
        <!--  ======================= Commercial =============================  -->
		
<section class="commercial">
    <div class="container">
	    <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Commercial</h1>
        </div>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-xl-4 adscol">
				<div class="col-sm-12">
					<iframe src="img/ads/ads1.mp4" height="534" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				</div>
				<div class="col-sm-12">
					<h2>P70 per/pair only!</h2>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-xl-4 adscol">
				<div class="col-sm-12">
					<iframe src="img/ads/ads2.mp4" height="534" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				</div>
				<div class="col-sm-12">
					<h2>It’s Anklet Party!</h2>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-xl-4 adscol">
				<div class="col-sm-12">
					<iframe src="img/ads/ads3.mp4" height="534" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				</div>
				<div class="col-sm-12">
					<h2>Coron Collection</h2>						
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-xl-4 adscol">
				<div class="col-sm-12">
					<iframe src="img/ads/ads4.mp4" height="534" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				</div>
				<div class="col-sm-12">
					<h2>You look stunning</h2>						
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-xl-4 adscol">
				<div class="col-sm-12">
					<iframe src="img/ads/ads5.mp4" height="534" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				</div>
				<div class="col-sm-12">
					<h2>Happy Anniversarry!</h2>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-xl-4 adscol">				
				<div class="col-sm-12">
					<iframe src="img/ads/ads6.mp4" height="534" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				</div>
				<div class="col-sm-12">
					<h2>Anklets and Earrings</h2>						
				</div>
			</div>
		</div>
    </div>
  </section>

<main class="model">
<section class="project-area">
    <div class="container">
        <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Models</h1>
        </div>

        <div class="button-group">
            <button type="button" class="active" id="btn1" data-filter="*"></button>
            <button type="button" data-filter=".Anklet"></button>
            <button type="button" data-filter=".Bracelet"></button>
			<button type="button" data-filter=".Earrings"></button>
            <button type="button" data-filter=".Necklace"></button>
			<button type="button" data-filter=".Rings"></button>
            <button type="button" data-filter=".Summer"></button>
        </div>

        <div class="row grid">
			<div class="col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_1592.jpg">
                            <img src="img/models/img_1592.jpg" alt="portfolio-3" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
          
			<div class="col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_9453.heic">
                            <img src="img/models/img_9453.heic" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-12 element-item Bracelet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_1589.png">
                            <img src="img/models/img_1589.png" alt="portfolio-2" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
			
            <div class="col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_1593.png">
                            <img src="img/models/img_1593.png" alt="portfolio-4" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
			<div class=" col-lg-4 col-md-6 col-sm-12 element-item Anklet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_1587.png">
                            <img src="img/models/img_1587.png" alt="portfolio-1" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item Necklace">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_1594.png">
                            <img src="img/models/img_1594.png" alt="portfolio-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item Rings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_1595.png">
                            <img src="img/models/img_1595.png" alt="portfolio-6" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 element-item Bracelet">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_9485.heic">
                            <img src="img/models/img_9485.heic" alt="portfolio-9" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                       
                    </div>
                </div>
            </div>
			
			<div class="col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/1.jpg">
                            <img src="img/models/1.jpg" alt="portfolio-8" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
			<div class="col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/img_9624.jpg">
                            <img src="img/models/img_9624.jpg" alt="portfolio-10" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
			<div class="col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/review/DE7911B3-88E3-4CD2-8B09-87464C3400A0.jpg">
                            <img src="img/review/DE7911B3-88E3-4CD2-8B09-87464C3400A0.jpg" alt="portfolio-10" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
			<div class="col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/review/F7D12CE4-5FD6-4069-8B9C-88CFC7523582.jpg">
                            <img src="img/review/F7D12CE4-5FD6-4069-8B9C-88CFC7523582.jpg" alt="portfolio-10" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
			<div class="col-lg-4 col-md-6 col-sm-12 element-item Earrings">
                <div class="our-project">
                    <div class="img">
                        <a class="test-popup-link" href="img/models/DOMECILLO, KATHLEEN JOY.jpeg">
                            <img src="img/models/DOMECILLO, KATHLEEN JOY.jpeg" alt="portfolio-10" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        
                    </div>
                </div>
            </div>
		</div>
	</div>	
</section>
</main>

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

    <script src="js/jquery.3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="1/isotope/isotope.min.js"></script>
    <script src="1/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="1/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>