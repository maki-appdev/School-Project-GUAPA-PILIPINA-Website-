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
    
        <!--  ======================= Personnel =============================  -->
		
<section class="personnel">
      <div class="container text-center">
        <div class="row">
          
          <div class="col-sm-12 col-md-6">
            <div class="panel text-left">
              <h1>KATHLEEN JOY MACARAEG</h1>
			  <h4>Founder/Owner of Guapa Pilipina</h4>
              <p class="pt-4">
                In a world that values self-expression and uniqueness, being an owner of bead accessories is a captivating endeavor that allows individuals to embrace their creativity, empower others, and make a lasting impact. Beads, with their vibrant colors, textures, and versatility, possess an undeniable allure. As an owner of bead accessories, you embark on a journey to unlock the hidden potential of these tiny treasures. The endless variety of bead types, from glass and crystal to seed beads and gemstones, opens up a world of creative possibilities, igniting your passion for designing unique and meaningful pieces.
              </p>
              <p>
                As an owner, you delve deep into the art of beadwork, cultivating your creativity and honing your skills. With each creation, you learn to weave intricate patterns, experiment with different techniques such as stringing and master the delicate balance of color and design. Your ability to envision and bring to life a piece that reflects your artistic vision becomes a source of immense satisfaction and personal growth.
              </p>
            </div>
          </div>
		  <div class="col-sm-12 col-md-6">
            <div class="pray">
              <img src="img/models/DOMECILLO, KATHLEEN JOY.jpeg" alt="Pray" class="" />
            </div>
          </div>
        </div>
      </div>	
    </section>
<section class="personnel2">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12 col-md-4 persocol">
            <div class="pray">
              <img src="img/models/IMG_1587.PNG" alt="Pray" class="" />
            </div>
          </div>
          <div class="col-sm-12 col-md-4 persocol">
            <div class="panel text-left">
              <p class="pt-4">
                Owning a bead accessory business is about more than just creating beautiful pieces, it is about forging connections with customers. Each bead accessory becomes a conduit for self-expression and personal storytelling. As an owner, you have the privilege of working closely with individuals, understanding their desires, and translating their aspirations into tangible pieces of wearable art. These connections foster a sense of belonging and empower customers to highlight their unique identities.
              </p>
              <p>
                Being an owner of bead accessories extends beyond personal creativity, it becomes a platform for empowerment. Additionally, you can use your platform to advocate for ethical and sustainable practices, promoting responsible sourcing of materials and contributing to the greater good of the community and the environment. Lastly, as an owner of bead accessories, I embody the transformative power of art and craft, and through my work, I inspire others to embrace their own creativity and embrace the beauty of self-expression.
              </p>
            </div>
          </div>
		  <div class="col-sm-12 col-md-4 persocol">
            <div class="pray">
              <img src="img/models/IMG_1589.PNG" alt="Pray" class="" />
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
    <script src="1/isotope/isotope.min.js"></script>
    <script src="1/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="1/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>