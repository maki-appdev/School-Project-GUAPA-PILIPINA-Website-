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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
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
    
        <!--  ======================= Contact =============================  -->
	
<section class="contact">
	<div class="container">
        <div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="project-title pb-5">
					<h1 class="text-uppercase title-h1">Contact</h1>
				</div>
				<div class="contact-info">
					<div>
						<div>
							<i class="fa fa-map-marker"></i>
							<div>
								<b><span>Address </span></b>
								<span>12 Gregorio de Jesus Bagong Barrio Caloocan City</span>
							</div>			
						</div>
						<div>
							<a href="https://www.instagram.com/guapa.pilipina/">
							<i class="fab fa-instagram"></i></a>
							<div>
								<b><span>Instagram </span></b>
								<span>Guapa Pilipina</span>
							</div>						
						</div>
						<div>
							<a href="https://www.facebook.com/guapa.pilipina">
							<i class="fab fa-facebook"></i></a>
							<div>
								<b><span>Facebook </span></b>
								<span>Guapa Pilipina</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.957283093526!2d120.99541407483457!3d14.658365685834852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6856afd3fb7%3A0x3e512f0293a671f8!2s12%20Gregorio%20de%20Jesus%2C%20Bagong%20Barrio%20West%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1684821252780!5m2!1sen!2sph" width="95%" height="95%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
        
    </div>
    
</section>

 <!---------------------------- FOOTER ---------------------------------->
  
  
  <section id="footer" class="footercontact">
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
</body>

</html>