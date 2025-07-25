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
    
        <!--  ======================= about =============================  -->
		
<section class="about" id="about">
    <div class="container">
        <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">About</h1>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6 imgcol">
                <img src="img/bg/4.jpg" alt="">
            </div>
            <div class="col-sm-12 col-lg-6">
                <h2>Guapa Pilipina: Elevating Your Style with Exquisite Jewelry</h2>
                <p>Each piece in our collection showcases the rich heritage of Filipino craftsmanship, featuring intricate designs and meticulous details that capture the essence of femininity and grace. Whether you desire a delicate anklet, a bold statement bracelet, elegant earrings, or a sophisticated necklace, our thoughtfully curated selection offers something for every occasion.<br><br>				
				At Guapa Pilipina, we are dedicated to providing a seamless shopping experience, personalized attention, and exceptional customer service. Whether you're indulging in a self-care treat or searching for the perfect gift, our mission is to assist you in discovering the ideal accessory that reflects your distinctive style and celebrates the beauty of the Pilipina spirit</p>
            </div>
        </div>
    </div>
</section>	
<section class="history">
    <div class="container">
        <div class="project-title pb-5">
            
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-5" id="history">
				<h1 class="text-uppercase title-h1">history</h1>
                <p>On June 18, 2020, in the heart of Caloocan City, Guapa Pilipina began its journey at 12 De Jesus St., Barangay 82. With a vision to celebrate the beauty of Pilipinas, the business set out to create a range of exquisite jewelry pieces, including anklets, bracelets, earrings, necklaces, and rings.<br><br>From the very beginning, Guapa Pilipina aimed to showcase the rich heritage and craftsmanship of the Philippines. Collaborating with local artisans, the business sought to preserve traditional techniques and honor the artistry of Pilipina jewelry makers. Each piece was meticulously crafted with attention to detail, reflecting the elegance and grace that Pilipinas embody.<br><br>
				<span class="read-more-text">
                    As Guapa Pilipina gained recognition for its stunning jewelry, it also focused on building strong connections with the community. The business actively supported women's organizations and engaged in charitable initiatives, aiming to uplift the lives of Pilipinas and contribute to their empowerment.<br><br>
					Over the years, Guapa Pilipina has grown into a trusted brand, adored by customers who appreciate the beauty and quality of its products. From delicate anklets that grace the ankle to statement bracelets that capture attention, from elegant earrings that enhance features to sophisticated necklaces that exude charm, and from intricately designed rings that showcase style to precious gemstone accents that add glamour, Guapa Pilipina continues to offer a diverse selection to suit every occasion and personal taste.	
                </span>
				</p>
				<button class="read-more-btn btn btn-secondary">Read More</button>
				
            </div>
            <div class="col-sm-12 col-lg-5" id="nature">
                <h1 class="text-uppercase title-h1">nature</h1>
                <p>At Guapa Pilipina, we specialize in the creation of exquisite jewelry pieces, including anklets, bracelets, earrings, necklaces, and rings. Our company is dedicated to crafting timeless elegance inspired by the beauty and grace of Pilipinas.<br><br>
				With a deep appreciation for the rich cultural heritage of the Philippines, our skilled artisans meticulously design and handcraft each piece of jewelry. We are passionate about showcasing the intricate details and unique craftsmanship that reflect the essence of femininity and celebrate the beauty of the Pilipina spirit. Discover the allure of Guapa Pilipina and embrace the timeless elegance of our anklets, bracelets, earrings, necklaces, and rings<br><br>
				<span class="read-more-text">
                    Our collection is thoughtfully curated, offering a range of options to suit various preferences and occasions. From delicate anklets that grace your ankles to statement bracelets that captivate attention, from elegant earrings that enhance your features to sophisticated necklaces that exude charm, and from intricately designed rings that showcase your style to precious gemstone accents that add a touch of glamour, every piece is created with utmost care and precision.<br><br>
					Quality is of paramount importance to us, and we source only the finest materials to ensure that our jewelry stands the test of time. Each piece is crafted with attention to detail and a commitment to exceptional craftsmanship, resulting in jewelry that becomes treasured heirlooms passed down through generations. At Guapa Pilipina, we take pride in offering a seamless shopping experience and providing personalized attention to our valued customers. We believe that our jewelry not only enhances your style but also captures the essence of the Pilipina spirit, allowing you to express your unique beauty and grace.	
                </span>
				</p>
                <button class="read-more-btn btn btn-secondary">Read More</button>
            </div>
			<div class="col-sm-12 col-lg-5" id="mission">
				<h1 class="text-uppercase title-h1">mission vision</h1>
                <p>At Guapa Pilipina, our mission is to empower women by creating exquisite jewelry pieces that celebrate the beauty and elegance of Pilipinas. Through our anklets, bracelets, earrings, necklaces, and rings, we aim to inspire confidence, enhance personal style, and become a symbol of femininity and grace.<br><br>
				Our vision at Guapa Pilipina is to be the premier destination for stunning accessories that embody the spirit and heritage of Pilipinas. We strive to be a brand that not only offers exceptional jewelry but also fosters a sense of empowerment, cultural pride, and sustainability. With a commitment to quality, craftsmanship, and social responsibility, we aspire to make Guapa Pilipina a trusted and beloved name in the industry, both locally and internationally</p>
            </div>
            <div class="col-sm-12 col-lg-5" id="highlights">
                <h1 class="text-uppercase title-h1">highlights</h1>
                <p>One of the significant highlights in the journey of Guapa Pilipina is the successful expansion of its business to Japan. With its exquisite collection of anklets, bracelets, earrings, necklaces, and rings, Guapa Pilipina captured the attention of customers in Japan, marking a significant milestone for the brand.<br><br>
				The global appeal of Guapa Pilipina's products became evident as orders from Japan started pouring in. The stunning designs, intricate craftsmanship, and attention to detail resonated with the discerning tastes of the Japanese market, creating a strong connection between Guapa Pilipina and its customers in Japan.<br><br>
				<span class="read-more-text">
                    This expansion showcased Guapa Pilipina's ability to transcend borders and cultural boundaries, with its jewelry serving as a bridge between Filipino-inspired designs and the appreciation for elegance and beauty in Japan. The brand's commitment to quality, style, and cultural fusion allowed it to establish a foothold in the competitive Japanese market.<br><br>
					Reaching customers in Japan not only contributed to the growth and recognition of Guapa Pilipina but also paved the way for stronger international connections. It demonstrated the brand's ability to adapt and cater to diverse markets while maintaining its core values of craftsmanship, elegance, and celebrating the beauty of Pilipinas.<br><br>
					The successful journey of Guapa Pilipina reaching orders in Japan is a testament to the brand's vision, dedication, and commitment to creating jewelry that transcends borders, celebrates culture, and brings joy to customers around the world.	
                </span>
				</p>
                <button class="read-more-btn btn btn-secondary">Read More</button>
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
	<script>
		const parentContainer =  document.querySelector('.history');
		
		parentContainer.addEventListener('click', event=>{
		
			const current = event.target;
		
			const isReadMoreBtn = current.className.includes('read-more-btn');
		
			if(!isReadMoreBtn) return;
		
			const currentText = event.target.parentNode.querySelector('.read-more-text');
		
			currentText.classList.toggle('read-more-text--show');
		
			current.textContent = current.textContent.includes('Read More') ? "Read Less" : "Read More";
		
		})
	</script>
    <script src="js/jquery.3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>