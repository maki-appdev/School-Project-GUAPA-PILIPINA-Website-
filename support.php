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
    
        <!--  ======================= Support =============================  -->
		
<section class="support">
	<div class="section-center">
        <article class="question">
            <div class="question-title">
				<p>How do I place an order?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Visit Guapa Pilipina's Website:</b> Go to the official website of Guapa Pilipina using your web browser.</li>
					<li><b>Browse the Products:</b> Explore the website and navigate to the section or category that features the specific jewelry items you are interested in, such as anklets, bracelets, earrings, necklaces, or rings. Use the provided filters or search functionality to narrow down your options.</li>
					<li><b>Select the Items:</b> Click on the desired jewelry item(s) to view more details, including product images, descriptions, materials used, and pricing. Choose the specific options or variations you prefer, such as size, color, or style.</li>
					<li><b>Add to Cart:</b> Once you have selected an item, click on the "Add to Cart" button. This action typically adds the item to your virtual shopping cart. If you wish to purchase additional items, repeat this step for each product.</li>
					<li><b>Review Your Cart:</b> Access your shopping cart, usually indicated by a cart icon or a "View Cart" button. Review the items in your cart to ensure that the correct products, quantities, and options are included.</li>
					<li><b>Proceed to Checkout:</b> Click on the "Checkout" or "Proceed to Checkout" button to initiate the ordering process. This will take you to the checkout page.</li>
					<li><b>Provide Shipping Information:</b> Enter your shipping details, including your name, address, contact information, and any specific instructions for delivery. Ensure the accuracy of this information to avoid any shipping issues.</li>
					<li><b>Select Shipping Method:</b> Choose the shipping method you prefer from the available options provided by Guapa Pilipina. This may include standard shipping, express delivery, or any other shipping services they offer.</li>
					<li><b>Choose Payment Method:</b> Select your preferred payment method. Guapa Pilipina may offer various options such as credit or debit card payments, online payment gateways, or other digital payment services. Follow the instructions to enter your payment details accurately.</li>
					<li><b>Review Order Summary:</b> Take a moment to review the order summary, including the selected items, quantities, prices, shipping costs, and any applicable taxes or fees. Make sure all the details are correct before proceeding.</li>
					<li><b>Place the Order:</b> Click on the "Place Order" or "Confirm Purchase" button to finalize your order. By doing so, you are authorizing the payment and confirming your purchase.</li>
					<li><b>Order Confirmation:</b> After successfully placing your order, Guapa Pilipina should provide you with an order confirmation page or send you a confirmation email. This confirmation will include details such as your order number, a summary of the purchased items, and an estimated delivery date.</li>
				</ul>
            </div>
        </article>
			<article class="question">
				<div class="question-title">
				<p>How do I track my order or shipment?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
				</div>

				<div class="question-text">
				<ul>
					<li><b>Order Confirmation:</b> Locate the order confirmation email or order confirmation page you received from Guapa Pilipina after placing your order. This email or page typically contains important information, including your order number and any tracking details or links.</li>
					<li><b>Tracking Link:</b> If Guapa Pilipina provided a tracking link in the order confirmation email or on their website, click on the provided link. This link will usually redirect you to the tracking page or portal of the shipping carrier responsible for delivering your order.</li>
					<li><b>Enter Tracking Number:</b> If a tracking link was not provided, visit the website of the shipping carrier directly. Look for the section or page dedicated to tracking shipments and enter the tracking number associated with your order. This tracking number should be provided in the order confirmation email or on Guapa Pilipina's website.</li>
					<li><b>Check Tracking Status:</b> Once you have entered the tracking number, click on the "Track" or "Submit" button. The system will retrieve the latest tracking information related to your shipment. This may include the current location of the package, estimated delivery date, and any relevant updates.</li>
					<li><b>Delivery Updates:</b> Monitor the tracking information provided by the shipping carrier to stay informed about the progress of your shipment. Check for updates as the package moves through different stages, such as pickup, transit, sorting, and delivery.</li>
					<li><b>Contact Guapa Pilipina:</b> If you have any questions or concerns about tracking your order or if you require additional assistance, reach out to Guapa Pilipina's customer support. They will be able to provide you with further information and support regarding the status of your shipment.</li>
				</ul>
				</div>
			</article>
        <article class="question">
            <div class="question-title">
				<p>What is your return/exchange policy?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Eligible Items:</b> Guapa Pilipina accepts returns/exchanges for jewelry items such as anklets, bracelets, earrings, necklaces, and rings that are in their original condition, unworn, and undamaged.</li>
					<li><b>Time Frame:</b> Items must be returned/exchanged within a specified time frame, typically within 30 days from the date of purchase. The exact time frame may vary depending on Guapa Pilipina's policy.</li>
					<li><b>Proof of Purchase:</b> Customers should provide proof of purchase, such as an order number or receipt, when requesting a return or exchange for jewelry items.</li>
					<li><b>Packaging and Tags:</b> The jewelry items should be returned/exchanged with their original packaging, including any jewelry boxes, pouches, or tags that were included.</li>
					<li><b>Customized or Personalized Items:</b> If the jewelry items are customized or personalized according to the customer's specifications, they may not be eligible for return or exchange unless there is a defect or error in the customization.</li>
					<li><b>Return/Exchange Process:</b> Customers may need to follow a specific process provided by Guapa Pilipina to initiate a return or exchange. This could involve contacting customer support, filling out a return form, or using a designated online portal.</li>
					<li><b>Refunds/Store Credit:</b> Depending on Guapa Pilipina's policy, eligible returns may be refunded to the original payment method or provided as store credit for future purchases.</li>
				</ul>
            </div>
        </article>
		<article class="question">
            <div class="question-title">
				<p>How do I cancel or modify my order?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Review the Order:</b> Locate your order confirmation email or order details on Guapa Pilipina's website. Take note of your order number and the specific items you wish to cancel or modify.</li>
					<li><b>Contact Customer Support:</b> Reach out to Guapa Pilipina's customer support as soon as possible to request a cancellation or modification of your order. You can usually find their contact information on their website or in the order confirmation email. Common contact methods include email, phone, or live chat.</li>
					<li><b>Provide Order Details:</b> When contacting customer support, provide them with your order number, the specific items you want to cancel or modify, and the reason for the request. Be clear and concise in your communication to help expedite the process.</li>
					<li><b>Follow Instructions:</b> Guapa Pilipina's customer support will guide you through the cancellation or modification process. They may have specific instructions or requirements for handling such requests. Follow their guidance and provide any additional information or documentation they may require.</li>
					<li><b>Be Mindful of Timeframe:</b> It's important to act promptly as cancellation or modification requests may be subject to certain time constraints. If you contact customer support after your order has already been processed or shipped, it may not be possible to cancel or modify the order. Therefore, it's recommended to reach out as soon as you decide to cancel or modify your order.</li>
					<li><b>Keep Documentation:</b> During the process, make sure to keep a record of your communication with Guapa Pilipina's customer support, including any email exchanges or reference numbers. This can be useful for reference or if any issues arise later.</li>
				</ul>	
            </div>
        </article>
		<article class="question">
            <div class="question-title">
				<p>How do I contact customer support?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Visit Guapa Pilipina's Website:</b> Go to the official website of Guapa Pilipina using your web browser.</li>
					<li><b>Locate the "Contact" or "Customer Support" Page:</b> Look for a "Contact" or "Customer Support" link on Guapa Pilipina's website. This link is typically found in the main navigation menu, footer, or in the header of the website. Click on the link to access the customer support page.</li>
					<li><b>Find Contact Information:</b> On the customer support page, you should find contact information for reaching out to Guapa Pilipina's customer support team. This may include their email address, phone number, or a contact form to fill out.</li>
					<li><b>Choose a Contact Method:</b> Select the contact method that is most convenient for you. If an email address is provided, you can compose an email explaining your query or concern. If a phone number is listed, you can call the customer support line directly. Alternatively, if there is a contact form, you can fill it out with the necessary details.</li>
					<li><b>Provide Relevant Information:</b> When contacting customer support, be sure to include relevant information such as your order number, specific product details, and a clear explanation of your inquiry, question, or issue. This will help customer support assist you more effectively.</li>
					<li><b>Send Your Message or Make the Call:</b> Send your email or submit the contact form with your message or call the provided phone number to connect with Guapa Pilipina's customer support team.</li>
					<li><b>Await a Response:</b> After reaching out to customer support, allow some time for them to review and respond to your inquiry. The response time can vary depending on the volume of requests they receive, but they should aim to provide you with a timely and helpful response.</li>
				</ul>
            </div>
        </article>
		<article class="question">
            <div class="question-title">
				<p>What payment methods do you accept?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Visit Guapa Pilipina's Website:</b> Go to the official website of Guapa Pilipina using your web browser.</li>
					<li><b>Explore the Payment Information:</b> Look for a dedicated page or section on Guapa Pilipina's website that provides information about accepted payment methods. This information is usually located in the footer, FAQ section, or during the checkout process.</li>
					<li><b>Payment Icons or Symbols:</b> On the website, keep an eye out for icons or symbols of various payment methods. Common payment methods often include credit cards (Visa, MasterCard, American Express, etc.), debit cards, PayPal, Apple Pay, Google Pay, or bank transfers.</li>
					<li><b>Checkout Process:</b> As you proceed to make a purchase, Guapa Pilipina's checkout process should display the available payment options. This could be on the same page where you enter your shipping and billing information.</li>
					<li><b>Contact Customer Support:</b> If you cannot find the information about accepted payment methods on the website, you can contact Guapa Pilipina's customer support directly. They should be able to provide you with detailed information about the payment methods they accept for their products.</li>
				</ul>	
            </div>
        </article>
		<article class="question">
            <div class="question-title">
				<p>How do I apply a discount code or coupon?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Visit Guapa Pilipina's Website:</b> Go to the official website of Guapa Pilipina using your web browser.</li>
					<li><b>Add Products to Cart:</b> Browse the available products and select the items you wish to purchase. Add them to your shopping cart by clicking on the "Add to Cart" or similar button.</li>
					<li><b>View Your Cart:</b> Once you have added the desired items to your cart, locate the shopping cart icon or a link that allows you to view your cart. Click on it to proceed to the cart page.	</li>
					<li><b>Enter the Discount Code or Coupon:</b> On the cart page or during the checkout process, look for a field or box labeled "Discount Code," "Coupon Code," or similar. This is where you will enter the code to apply the discount. The field may be labeled differently, but it should be easily identifiable.</li>
					<li><b>Apply the Code:</b> Enter the discount code or coupon in the designated field. Ensure that you type it correctly, without any spaces or additional characters. Some websites may have an "Apply" button next to the field that you need to click to activate the discount.</li>
					<li><b>Update the Cart:</b> After entering the code, click on the "Update Cart" or similar button to apply the discount to your order. The cart total should reflect the discounted price, and any eligible items should be adjusted accordingly.</li>
					<li><b>Proceed to Checkout:</b> Once you have applied the discount code and reviewed your updated cart total, proceed to the checkout page to complete your purchase.</li>
				</ul>
            </div>
        </article>
		<article class="question">
            <div class="question-title">
				<p>What are the shipping options and costs?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Visit Guapa Pilipina's Website:</b> Go to the official website of Guapa Pilipina using your web browser.</li>
					<li><b>Add Products to Cart:</b> Browse the available products and select the items you wish to purchase. Add them to your shopping cart by clicking on the "Add to Cart" or similar button.</li>
					<li><b>Proceed to Checkout:</b> Once you have added the desired items to your cart, click on the shopping cart icon or a "Checkout" button to proceed to the checkout process.</li>
					<li><b>Enter Shipping Information:</b> During the checkout process, you will be prompted to enter your shipping address or location details. Provide the necessary information accurately to ensure the correct shipping options and costs are displayed.</li>
					<li><b>Shipping Options and Costs:</b> After entering your shipping information, Guapa Pilipina's website should display the available shipping options for your location. This may include different carriers (such as USPS, FedEx, DHL) or shipping methods (such as standard shipping, express shipping). The associated costs for each shipping option should also be displayed.</li>
					<li><b>Choose Shipping Option:</b> Review the available shipping options and their associated costs. Select the option that best meets your requirements and budget.</li>
				</ul>
            </div>
        </article>
		<article class="question">
            <div class="question-title">
				<p>How long does it take to process an order?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Visit Guapa Pilipina's Website:</b> Go to the official website of Guapa Pilipina using your web browser.</li>
					<li><b>Browse Product Pages:</b> Explore the product pages of the specific items you are interested in purchasing. Look for any information provided regarding the processing time for orders. This information is usually mentioned in the product description, FAQ section, or during the checkout process.</li>
					<li><b>Check Shipping and Policies:</b> Additionally, review any shipping or policies page on Guapa Pilipina's website. Often, businesses include details about order processing times in these sections. Look for terms such as "processing time," "fulfillment time," or "handling time."</li>
					<li><b>Contact Customer Support:</b> If you cannot find specific information about the processing time on the website, you can contact Guapa Pilipina's customer support directly. They should be able to provide you with the most accurate and up-to-date information about the expected processing time for your order.</li>			
				</ul>
            </div>
        </article>
		<article class="question">
            <div class="question-title">
				<p>How do I request a refund?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Review the Refund Policy:</b> Visit Guapa Pilipina's official website and locate their refund policy. This information is typically found in the terms and conditions, FAQ section, or customer service pages. Familiarize yourself with their refund policy to understand the eligibility criteria, timeframes, and any specific requirements for initiating a refund.</li>
					<li><b>Contact Customer Support:</b> Reach out to Guapa Pilipina's customer support team to request a refund. You can usually find their contact information on their website, such as an email address, phone number, or a live chat option. Explain your situation and provide the necessary details, such as your order number, the specific items you want to refund, and the reason for the refund request.</li>
					<li><b>Follow Instructions:</b> Guapa Pilipina's customer support will guide you through the refund process. They may have specific instructions for initiating a refund, such as returning the items, filling out a refund request form, or providing additional documentation. Follow their instructions closely to ensure a smooth refund process.</li>
					<li><b>Return the Items (if applicable):</b> If Guapa Pilipina requires you to return the items for a refund, they will provide you with instructions on how to do so. Follow their guidelines for packaging and shipping the items back to them. It's important to adhere to any deadlines or requirements specified by Guapa Pilipina for returning the items.</li>
					<li><b>Await Confirmation and Processing:</b> Once you have initiated the refund request and followed the necessary steps, Guapa Pilipina will review your request and process the refund. The time it takes to receive the refund can vary depending on factors such as their internal processes and the payment method used for the original purchase. Guapa Pilipina's customer support should be able to provide you with an estimated timeframe for the refund process.</li>
					<li><b>Keep Documentation:</b> Throughout the refund process, keep a record of all communication with Guapa Pilipina's customer support, including any emails, reference numbers, or receipts. This documentation can be useful for reference and clarification in case of any issues or disputes.</li>
				</ul>
            </div>
        </article>
		<article class="question">
            <div class="question-title">
				<p>How do I provide feedback or report a problem?</p>
				<button type="button" class="question-btn">
					<span class="plus-icon">
					<i class="far fa-plus-square"></i>
					</span>
					<span class="minus-icon">
					<i class="far fa-minus-square"></i>
					</span>
				</button>
            </div>
            <div class="question-text">
				<ul>
					<li><b>Visit Guapa Pilipina's Website:</b> Go to the official website of Guapa Pilipina using your web browser.</li>
					<li><b>Look for Contact Information:</b> Explore the website to find their contact information. This is typically located in the footer, "Contact Us," or customer service section. Guapa Pilipina may provide an email address, phone number, contact form, or other means of communication.</li>
					<li><b>Choose the Preferred Method:</b> Select the communication method that suits you best. You can choose to send an email, make a phone call, or use a contact form if available. Consider the urgency and nature of your feedback or problem to determine the most appropriate method.</li>
					<li><b>Prepare Your Feedback or Report:</b> Before contacting Guapa Pilipina, organize your thoughts and be specific about the feedback or problem you want to address. If applicable, gather relevant information such as your order number, specific product details, and any supporting documentation or evidence.</li>
					<li><b>Contact Guapa Pilipina:</b> Reach out to Guapa Pilipina using your preferred method of communication. Clearly and concisely describe your feedback or problem, providing all relevant details. If you encountered an issue, be sure to explain the problem, the impact it had on your experience, and any suggestions for resolution.</li>
					<li><b>Follow Up:</b> If you don't receive a response or resolution within a reasonable timeframe, consider following up with Guapa Pilipina. You can send a polite reminder or escalate your concern to a higher level of customer support if necessary.</li>
					<li><b>Provide Honest and Constructive Feedback:</b> When providing feedback, it's important to be honest, specific, and constructive. Focus on providing actionable feedback that can help Guapa Pilipina improve their products or services.</li>
				</ul>	
            </div>
        </article>
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
	const questions = document.querySelectorAll(".question");

	questions.forEach(function (question) {
	const btn = question.querySelector(".question-btn");
	
	btn.addEventListener("click", function () {
		question.classList.toggle("show-text");
	});
	});
	</script>

    <script src="js/jquery.3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>