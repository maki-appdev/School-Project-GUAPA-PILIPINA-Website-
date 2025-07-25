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
    
        <!--  ======================= about =============================  -->
	<div class="homes">
            <div class="content" data-aos="zoom-out-right">
                <h3>Guapa Pilipina
                </h3>
                <h2><span class="changecontent"></span></h2>
                <p>Welcome to Guapa Filipina, your ultimate destination for stunning accessories that perfectly complement your individual style. Our extensive range of anklets, bracelets, earrings, necklaces, and rings takes inspiration from the timeless elegance of Filipinas.
                </p>
                <a href="product.html#product" class="btn">SHOP NOW</a>
            </div>
            <div class="img"  data-aos="zoom-out-left">
                <img src="img/bg/ss.jpg" alt="">
            </div>
        </div>
		
<section class="home">
	<div class="container" id="cards">
    <div class="row">
      <div class="col-md-12 col-lg-6 py-3 py-md-0">
        <div class="card">
          <img src="img/bg/8.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Advocacy</h3><br>
            <p>Empowering Pilipina Artisans and Supporting Sustainable Practices. At Guapa Pilipina, we are not just passionate about creating exquisite jewelry; we are committed to making a positive impact on the lives of Pilipina artisans and promoting sustainable practices in the industry.<br><br>
			Empowering Pilipina Artisans: We believe in celebrating the rich heritage and craftsmanship of Pilipina artisans. By partnering with local talents, we provide them with opportunities to showcase their skills and preserve traditional artistry. Through fair trade practices, we ensure that our artisans are recognized, valued, and receive fair compensation for their exceptional work.</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6 py-3 py-md-0">
        <div class="card">
          <img src="img/bg/9.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Environment</h3><br>
            <p>At Guapa Pilipina, we believe that preserving the beauty of nature is as important as creating stunning accessories. As we offer a diverse range of anklets, bracelets, earrings, necklaces, and rings, we are committed to minimizing our environmental impact and promoting sustainable practices.<br><br>
			Responsibly Sourced Materials: We carefully select materials for our jewelry, giving priority to ethically and sustainably sourced options. By partnering with suppliers who adhere to responsible practices, we ensure that our products are crafted with materials that have minimal impact on the environment.
			</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top: 30px;">
      <div class="col-md-12 col-lg-4 py-3 py-md-0">
        <div class="card">
          <img src="img/bg/6.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Nature</h3><br>
            <p>Crafters of Timeless Elegance in Jewelry.<br><br>
			At Guapa Pilipina, we specialize in the creation of exquisite jewelry pieces, including anklets, bracelets, earrings, necklaces, and rings. Our company is dedicated to crafting timeless elegance inspired by the beauty and grace of Pilipinas.
			</p>
            <button id="rn" onclick = "window.location.href='about.html#nature';">Read more</button>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-4 py-3 py-md-0">
        <div class="card">
          <img src="img/bg/5.jpg" alt="">
          <div class="card-img-overlay">
            <h3>History</h3><br>
            <p>Celebrating Beauty since June 18, 2020<br><br>

			Guapa Pilipina began its journey at 12 De Jesus St., Barangay 82. With a vision to celebrate the beauty of Pilipinas, the business set out to create a range of exquisite jewelry pieces, including anklets, bracelets, earrings, necklaces, and rings.
			</p>
            <button id="rn" onclick = "window.location.href='about.html#history';">Read more</button>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-4 py-3 py-md-0">
        <div class="card">
          <img src="img/bg/7.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Products</h3><br>
            <p>
			Guapa Pilipina takes great pride in offering a stunning collection of jewelry pieces that are meticulously designed and crafted to enhance your style. Our range of products includes anklets, bracelets, earrings, necklaces, and rings, each exuding timeless elegance and celebrating the beauty of Pilipinas.
			</p>
            <button id="rn" onclick = "window.location.href='product.html#product';">Shop Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!---------------------------- MissionVision ---------------------------------->

<section class="missionvision">
	<div class="section-center">
		<div class="image">
			<img src="img/anklet/13.png" alt="" />
		</div>
		<div class="tabs">

			<div class="btn-container">
			<button class="button live" data-id="Mission">Mission</button>
			<button class="button" data-id="Vision">Vision</button>
			<button class="button" data-id="Objectives">Objectives</button>
			<button class="button" data-id="Goals">Goals</button>
			</div>
			<div class="tabs-content">
				<div class="content live" id="Mission">
					<div class="project-title pb-5">
						<h1 class="text-uppercase title-h1">Mission</h1>
					</div>
					<p>
					At Guapa Pilipina, our mission is to empower women by creating exquisite jewelry pieces that celebrate the beauty and elegance of Pilipinas. Through our anklets, bracelets, earrings, necklaces, and rings, we aim to inspire confidence, enhance personal style, and become a symbol of femininity and grace.</p>
				</div>
				
				<div class="content" id="Vision">
					<div class="project-title pb-5">
						<h1 class="text-uppercase title-h1">Vision</h1>
					</div>
					<p>
					Our vision at Guapa Pilipina is to be the premier destination for stunning accessories that embody the spirit and heritage of Pilipinas. We strive to be a brand that not only offers exceptional jewelry but also fosters a sense of empowerment, cultural pride, and sustainability. With a commitment to quality, craftsmanship, and social responsibility, we aspire to make Guapa Pilipina a trusted and beloved name in the industry, both locally and internationally</p>
				</div>
				
				<div class="content" id="Objectives">
					<div class="project-title pb-5">
						<h1 class="text-uppercase title-h1">Objectives</h1>
					</div>
					<p>
					<b>Product Innovation:</b> Guapa Pilipina aims to continually innovate and introduce new designs and styles to its collection of anklets, bracelets, earrings, necklaces, and rings.<br>
					<b>Customer Satisfaction:</b> Guapa Pilipina is committed to providing exceptional customer satisfaction. The goal is to exceed customer expectations by offering high-quality products, personalized service..<br>
					<b>Market Expansion:</b> Guapa Pilipina seeks to expand its market reach and establish a strong presence both locally and internationally. The goal is to reach new customers and explore opportunities in different regions.<br>
					<b>Sustainable Practices:</b> Guapa Pilipina aims to prioritize sustainability in its business operations.

					</p>
		
				</div>
				
				<div class="content" id="Goals">
					<div class="project-title pb-5">
						<h1 class="text-uppercase title-h1">Goals</h1>
					</div>
					<p>
					<b>Cultural Appreciation and Representation:</b> Guapa Pilipina aspires to celebrate and honor the cultural heritage of the Philippines. The goal is to continue incorporating Filipino-inspired designs and elements into its jewelry.<br>
					<b>Collaboration with Local Artisans:</b> Guapa Pilipina aims to collaborate with and support local artisans in the Philippines. The goal is to preserve traditional craftsmanship, empower local communities.<br>
					<b>Brand Recognition and Reputation:</b> Guapa Pilipina seeks to build a strong brand reputation and gain recognition as a trusted name in the jewelry industry. Building brand equity and creating a positive brand image are fundamental objectives.
					</p>
				</div>
			
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


</body>

</html>