<?php
	session_start();
	if(	$_SESSION["member"] != "yes"){
		header("Location: /#signup");
		exit();
	}

	$url = "https://www.bitstamp.net/api/ticker/";
	$fgc = file_get_contents($url);
	$json = json_decode($fgc, TRUE);
	$lastPrice = $json["last"];
	$date = date("m/d/Y   h:i:sa");
?>

<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	
	<head>
		<title>Joystick</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
			
				<nav-ul>
  					<button onclick="reload_home()">Home</button>
					<button onclick="reload_store()">Shop Now</button>
					<button onclick="reload_upload()">Custom Stickers</button>
  					<button onclick="reload_about()">About Us</button>
  					<button onclick="reload_logout()">Logout</button>
  					<button onclick="reload_contact()">Contact Us</button>
				</nav-ul>
				<script>
					function reload_home()
					{
						location.href = "#";
					}
					function reload_about()
					{	
						location.href = "#about";
					}
					function reload_store()
					{
						location.href = "#store";
					}
					function reload_logout()
					{
						location.href = "#logout";
					}
					function reload_upload()
					{
						location.href = "#upload";
					}
					function reload_contact()
					{
						location.href = "#contact";
					}
					function reload_payment(amount)
					{
						location.href = "#payment";
						var element = document.getElementById("amount");
						element.innerHTML = "Total Amount: " + amount + " BTC";
						
						element = document.getElementById("amount_input");
						element.value = amount;
					}
				</script>
			
				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>

						</div>
						<div class="content">
							<div class="inner">
								<h1>MEMBER PAGE</h1>
								<p>Premium quality stickers
								<br>Supplied directly from artists
								<br>New stock uploaded daily
								<br>Joystick: De-borify your laptop</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#logout">Logout</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

							<!-- Logout -->
							<article id="logout">
								<h2 class="major">Logout?</h2>
								<form action="logout.php" method="POST">
									<ul class="actions">
										<li><input type="submit" value="Yes" class="primary" /></li>
									</ul>
								</form>
							</article>

							<!-- About -->
							<article id="about">
								<h2 class="major">About Us</h2>
				
								<p>Joystick is an online shopping center for premium stickers. We aim to give every individual the ability to showcase their passions however they want to and to give artists a platform to showcase their creations.</p>
								
								<p style="text-align:center;"><img src="images/logo.png" alt="Logo"></p>							 

								<p>Our slogan "de-borify your laptop" is a call to arms, encouraging people to be unafraid to show what they are passionate about. We believe that everyone should be able to proudly display who they are and we want to be an outlet for that expression.</p>								
								<p>Each sticker is designed by an independent artist working with Joystick. We display their designs, print the stickers, and deliver the final product to you. This means that you get a great looking sticker and support an artist pursuing their dream at the same time!</p>
								
								<p style="text-align:center;"><img src="images/stickers.jpg" alt="Stickers"></p>

								<p>You will find that our vast collection of stickers can satisfy even the most peculiar of interests. Additionally, by working directly with artists, we can ensure that this collection continues to grow every day!</p>								
								<p>Find the stickers that best suit you on Joystick!</p>
								<button><a href="#signup">Signup Now</a></button>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact Us</h2>
								<form action="sendContactMessage.php" method="POST">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
						
						 <!-- Contact Success-->
							<article id="contact_success">
								<h2 class="major">Contact Us</h2>
								<h3>Feedback received, thank you for your comments!</h3>
								<form action="sendContactMessage.php" method="POST">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

						<script>
									function onBasic(){
									  var list = document.getElementsByClassName("sticker");
										for(var i=0; i<list.length; i++){
	          								list[i].checked = false;
        								}
										document.getElementById("basic1").checked = true;
										document.getElementById("basic2").checked = true;
										document.getElementById("basic3").checked = true;
										document.getElementById("basic4").checked = true;
										document.getElementById("basic5").checked = true;
        								checkboxes();
									}
								 </script>
								 <script>
									function onLAX(){
									  var list = document.getElementsByClassName("sticker");
										for(var i=0; i<list.length; i++){
	          								list[i].checked = false;
        								}
										document.getElementById("lax1").checked = true;
										document.getElementById("lax2").checked = true;
										document.getElementById("lax3").checked = true;
										document.getElementById("lax4").checked = true;
        								checkboxes();
									}
								 </script>
								 <script>
									function onUVA(){
									  var list = document.getElementsByClassName("sticker");
										for(var i=0; i<list.length; i++){
	          								list[i].checked = false;
        								}
										document.getElementById("uva1").checked = true;
										document.getElementById("uva2").checked = true;
										document.getElementById("uva3").checked = true;
										document.getElementById("uva4").checked = true;
										document.getElementById("uva5").checked = true;
        								checkboxes();
									}
								 </script>
								 <script>
									function onVSCO(){
									  var list = document.getElementsByClassName("sticker");
										for(var i=0; i<list.length; i++){
	          								list[i].checked = false;
        								}
										document.getElementById("vsco1").checked = true;
										document.getElementById("vsco2").checked = true;
										document.getElementById("vsco3").checked = true;
										document.getElementById("vsco4").checked = true;
										document.getElementById("vsco5").checked = true;
        								checkboxes();
									}
							</script>
							
						<!-- Store -->
							<article id="store">
								<h2 class="major">Shop</h2>
								<section>
									<div id="container">
										<table width="100%">
										<tr>
											<td rowspan="3" width="60%" id="lastPrice">
											<?php echo "1 BTC = $", number_format($lastPrice, 2); ?>
											</td>
											<td align="bottom" colspan="2" id="dateTime">
											<?php echo $date; ?>
											</td>
										</tr>
										</table>
									</div>
									<form method="post" action="#">
									  <div>
									  <ul class="actions">
									    <h3 class="major">4-Packs</h3>
											<li style="float:left"><input type="button" onClick="onLAX()" value="LAX Bro" /></li>
											<li style="float:left"><input type="button" onClick="onVSCO()" value="VSCO Girl" /></li>
											<li style="float:left"><input type="button" onClick="reload_payment(0.001)" value="Buy Now (0.001 BTC)" /></li>
										</ul>
										</div>
										<div>
									  <ul class="actions">
									    <h3 class="major">5-Packs</h3>
											<li style="float:left"><input type="button" onClick="onBasic()" value="Basic AF" /></li>
											<li style="float:left"><input type="button" onClick="onUVA()" value="Cartoons" /></li>
											<li style="float:left"><input type="button" onClick="reload_payment(0.002)" value="Buy Now (0.002 BTC)" /></li>
										</ul>
										</div>
										<div class="fields">
										  <div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="vsco2" name="vsco2">
												<label for="vsco2"><img src="images/vsco2.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic1" name="basic1">
												<label for="basic1"><img src="images/basic1.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva2" name="uva2">
												<label for="uva2"><img src="images/uva2.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="lax3" name="lax3">
												<label for="lax3"><img src="images/lax3.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva1" name="uva1">
												<label for="uva1"><img src="images/uva1.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic2" name="basic2">
												<label for="basic2"><img src="images/basic2.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="lax2" name="lax2">
												<label for="lax2"><img src="images/lax2.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva3" name="uva3">
												<label for="uva3"><img src="images/uva3.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="vsco1" name="vsco1">
												<label for="vsco1"><img src="images/vsco1.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic3" name="basic3">
												<label for="basic3"><img src="images/basic3.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic4" name="basic4">
												<label for="basic4"><img src="images/basic4.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva4" name="uva4">
												<label for="uva4"><img src="images/uva4.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="lax4" name="lax4">
												<label for="lax4"><img src="images/lax4.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic5" name="basic5">
												<label for="basic5"><img src="images/basic5.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="lax1" name="lax1">
												<label for="lax1"><img src="images/lax1.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="vsco3" name="vsco3">
												<label for="vsco3"><img src="images/vsco3.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva5" name="uva5">
												<label for="uva5"><img src="images/uva5.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="vsco4" name="vsco4">
												<label for="vsco4"><img src="images/vsco4.jpg" width="150" height="150"></label>
											</div>
										</div>
										<ul class="actions">
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>
							</article>

						<!-- Store Success-->
							<article id="store_success">
									<h2 class="major">Shop</h2>
									<h3>Purchase sucessful, thank you!</h3>
								<section>
									<div id="container">
										<table width="100%">
										<tr>
											<td rowspan="3" width="60%" id="lastPrice">
											<?php echo "1 BTC = $", number_format($lastPrice, 2); ?>
											</td>
											<td align="bottom" colspan="2" id="dateTime">
											<?php echo $date; ?>
											</td>
										</tr>
										</table>
									</div>
									<form method="post" action="#">
									  <div>
									  <ul class="actions">
									    <h3 class="major">4-Packs</h3>
											<li style="float:left"><input type="button" onClick="onLAX()" value="LAX Bro" /></li>
											<li style="float:left"><input type="button" onClick="onVSCO()" value="VSCO Girl" /></li>
											<li style="float:left"><input type="button" onClick="reload_payment(0.001)" value="Buy Now (0.001 BTC)" /></li>
										</ul>
										</div>
										<div>
									  <ul class="actions">
									    <h3 class="major">5-Packs</h3>
											<li style="float:left"><input type="button" onClick="onBasic()" value="Basic AF" /></li>
											<li style="float:left"><input type="button" onClick="onUVA()" value="Cartoons" /></li>
											<li style="float:left"><input type="button" onClick="reload_payment(0.002)" value="Buy Now (0.002 BTC)" /></li>
										</ul>
										</div>
										<div class="fields">
										  <div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="vsco2" name="vsco2">
												<label for="vsco2"><img src="images/vsco2.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic1" name="basic1">
												<label for="basic1"><img src="images/basic1.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva2" name="uva2">
												<label for="uva2"><img src="images/uva2.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="lax3" name="lax3">
												<label for="lax3"><img src="images/lax3.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva1" name="uva1">
												<label for="uva1"><img src="images/uva1.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic2" name="basic2">
												<label for="basic2"><img src="images/basic2.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="lax2" name="lax2">
												<label for="lax2"><img src="images/lax2.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva3" name="uva3">
												<label for="uva3"><img src="images/uva3.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="vsco1" name="vsco1">
												<label for="vsco1"><img src="images/vsco1.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic3" name="basic3">
												<label for="basic3"><img src="images/basic3.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic4" name="basic4">
												<label for="basic4"><img src="images/basic4.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva4" name="uva4">
												<label for="uva4"><img src="images/uva4.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="lax4" name="lax4">
												<label for="lax4"><img src="images/lax4.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="basic5" name="basic5">
												<label for="basic5"><img src="images/basic5.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="lax1" name="lax1">
												<label for="lax1"><img src="images/lax1.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="vsco3" name="vsco3">
												<label for="vsco3"><img src="images/vsco3.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="uva5" name="uva5">
												<label for="uva5"><img src="images/uva5.jpg" width="150" height="150"></label>
											</div>
											<div class="field half">
												<input class="sticker" type="checkbox" onclick="return false;" id="vsco4" name="vsco4">
												<label for="vsco4"><img src="images/vsco4.jpg" width="150" height="150"></label>
											</div>
										</div>
										<ul class="actions">
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>
							</article>

						<!-- Payment -->
							<article id="payment">
								<h2 class="major"> Confirm Payment</h2>
								<h3 id="amount">N/A</h3>
								<form action="payment-member.php" method="POST">
										<div class="fields">
											<div class="field">
												<label for="name">Send Confirmation Email To</label>
												<input type="text" name="email" id="email" />
											</div>
											<input type="hidden" name="amount_input" id="amount_input"/>
											
										</div>
										<ul class="actions">
											<li><input type="submit" value="Comfirm and Pay" class="primary" /></li>
											<li><input type="reset" value="Reset"/></li>
										</ul>
								</form>
							</article>
							
							
							
							<!-- Upload -->
							<article id="upload">
								<h2 class="major">Welcome, Members!</h2>

								<section>
									<p>Stickers the way <i>you</i> want them, because <i>you</i> design them. Get ready for the coolest stickers you've ever seen!
									<h3 class="major">Your Custom Sticker Experience Starts Now</h3>
									<form action="upload.php" method="post" enctype="multipart/form-data">
									  Select image to upload:
									  <input type="file" name="fileToUpload" id="fileToUpload">
									  <p> </p>
									  <div class="field">
																						<label for="demo-message">Notes?</label>
																						<textarea name="demo-message" id="demo-message" placeholder="Let us know if there's anything specific we should do with your image." rows="6"></textarea>
																					</div>
																					<p> </p>
										<ul class="actions">
									  <li><input type="button" onClick="onUpload()" value="Upload Sticker Idea" name="upload1" class="primary"></li>
									  <li><input type="reset" value="Reset"/></li>
									  </ul>
									</form>
									</section>
									<script>
										function onUpload()
										{
											location.href = "#uploaded";
										}
									</script>
							</article>
							
							<!-- Uploaded -->
							<article id="uploaded">
							  <section>
								<h2 class="major"> Woo!</h2>
								<h3>We've recieved your sticker idea!</h3>
								<p> </p>
								</section>
							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; JoyStick. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
			</body>
</html>
