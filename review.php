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
    
        <!--  ======================= Blogs =============================  -->
		

<section class="blog">
    <div class="container">
		<div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Blog</h1>
        </div>
        <div class="article-wrapper">
            <article class="card magic-shadow-sm">
                <div>
                    <a href="https://www.facebook.com/guapa.pilipina/posts/pfbid03867R45LeZk2MUW8fVBRwSg5ibpYM2bf3PB5x4J5CtuhUybpWsVpG8ViDtYUAcZjGl"><img src="img/earings/1.jpg" alt=""></a>
                </div>
                <div class="card-content">
                    <div class="post-meta flex items-center justify-between">
                        <span>March 8, 2023</span>
                        <div>
                            <span>Posted by <strong>Guapa Pilipina</strong></span>
                            <span class="comment-count">20 Reacts</span><span class="comment-count">14 Shares</span>
                        </div>
                    </div>

                    <h2>ABANTE, BABAE!🌸</h2>
                    <p>
						Happy International Women’s day, Ladies! Hindi ka basta babae LANG.<br>
						To celebrate Women’s Month, P50 for this collection until the end of the month.<br><br> 
						#guapapilipina</p>
                </div>
            </article>
            <article class="card magic-shadow-sm">
                <div>
                    <a href="https://www.facebook.com/guapa.pilipina/posts/pfbid0C6QMDbTc4uzKGpE2c3EVkfvRyX8Yy41VXYPr9etfGABRnYVmDBi81WG4SPYYAux2l"><img src="img/earings/2.jpg" alt=""></a>
                </div>
                <div class="card-content">
                    <div class="post-meta flex items-center justify-between">
                        <span>July 03, 2023</span>
                        <div>
                            <span>Posted by <strong>Guapa Pilipina</strong></span>
                            <span class="comment-count">15 Reacts</span><span class="comment-count">10 Shares</span>
                        </div>
                    </div>

                    <h2>This the season to be Jolly 🎅🎄 Looking for Christmas gift ideas? Here’s our Christmas bundle for only P249 with a special card! 🎁</h2>
                    <p>
					Inclusions: <br>
					(1) Customized phone strap<br>
					(1) pair of earrings <br>
					(1) Agatha necklace <br>
					We are also accepting bulk orders and giving a discount! So don’t hesitate to slide on our dm 💕Yas? Yas! ✨</p>
                </div>
            </article>
        </div>
    </div>
</section>

<!--  ======================= Reviews =============================  -->

<section class="customer">
    <div class="container">
        <div class="project-title pb-5">
			<h1 class="text-uppercase title-h1">Customers Review</h1>
		</div>
        <div class="slider">
            <button class="slider-btn prev-btn"><img src="./icons/pre.svg" alt=""></button>
            <button class="slider-btn next-btn"><img src="./icons/next.svg" alt=""></button>
            <div class="food-slider">
                <div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1596.png" alt="">
                    </div>
                    
                </div>
                <div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1597.png" alt="">
                    </div>
                    
                </div>
                <div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1598.png" alt="">
                    </div>
                    
                </div>
                <div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1599.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1600.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1601.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1602.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1605.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1606.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1607.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1608.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1609.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1610.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1611.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1612.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1603.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1604.png" alt="">
                    </div>
                                  
                </div>
				<div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="img/review/img_1615.png" alt="">
                    </div>
                                  
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review">
	<div class="row">
		<div class="col-sm-12 col-md-6 col-xl-4 reviewcol">
			<img src="img/boy.webp">
			<div>
			<p>I had an amazing experience at this jewelry shop! The staff was knowledgeable, friendly, and helped me find the perfect piece. The quality of the jewelry is exceptional, and the prices were reasonable. Highly recommend!</p>
			<h3>Juan Dela Cruz</h3>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-xl-4 reviewcol">
			<img src="img/girl.png">
			<div>
			<p>I visited this jewelry shop and found a beautiful necklace. The variety of designs was impressive, and the staff was helpful. However, I felt the prices were slightly higher compared to other stores. Nevertheless, the quality of the jewelry made it worth the purchase.</p>
			<h3>Maria Santos</h3>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-xl-4 reviewcol">
			<img src="img/girl.png">
			<div>
			<p>The jewelry shop had a decent collection, but I was disappointed with the customer service. The staff seemed disinterested and lacked knowledge about the products. The jewelry itself was average, nothing exceptional. It was an okay experience, but I expected better.</p>
			<h3>Sofia Reyes</h3>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-xl-4 reviewcol">
			<img src="img/boy.webp">
			<div>
			<p>I absolutely love this jewelry shop! The craftsmanship of their pieces is outstanding, and each piece feels unique and special. The staff was friendly and attentive, providing excellent recommendations. I'm a satisfied repeat customer!</p>
			<h3>Miguel Ramirez	</h3>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-xl-4 reviewcol">
			<img src="img/girl.png">
			<div>
			<p>I had high expectations when I visited this jewelry shop, but unfortunately, I was let down. The selection was limited, and the prices were exorbitant for the quality provided. Additionally, the staff seemed uninterested in assisting me. I won't be returning</p>
			<h3>Gabriel Hernandez</h3>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-xl-4 reviewcol">
			<img src="img/girl.png">
			<div>
			<p>I had a pleasant experience at this jewelry shop. The staff was polite and patient, helping me find a beautiful engagement ring. The prices were fair, and the quality of the jewelry was good. My only suggestion would be to expand the range of designs.</p>
			<h3>Isabella Fernandez</h3>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
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

    <script src="js/jquery.3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>