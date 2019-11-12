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
					<button onclick="reload_upload()">Custom Upload</button>
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
					function reload_upload()
					{
						location.href = "#upload";
					}
					function reload_logout()
					{
						location.href = "#logout";
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
								<h1>JOYSTICK</h1>
								<p>Premium quality stickers
								<br>Supplied directly from artists
								<br>New stock uploaded daily
								<br>Joystick: De-borify your laptop
								<br>(Member Home)</p>
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
								<form action="sendContactMessage-member.php" method="POST">
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
									<h3 class="major">Your Custom Sticker Experience Starts Now</h3>

									<p>Stickers the way <i>you</i> want them,
									<br>Because <i>you</i> design them. 
									<br>Get ready for the coolest stickers you've ever seen!</p>
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
									  <li><input type="submit" value="Upload Sticker Idea"></li>
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

							<!-- Upload Success -->
							<article id="upload_success">
								<section>
									<h3 class="major">Your Custom Sticker Experience Starts Now</h3>
									<h3>Sticker upload successfully</h3>
									<p>Stickers the way <i>you</i> want them,
									<br>Because <i>you</i> design them. 
									<br>Get ready for the coolest stickers you've ever seen!</p>
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
									  <li><input type="submit" value="Upload Sticker Idea"></li>
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

							<!-- Upload Return -->
							<article id="upload_return">
								<section>
									<h3 class="major">Your Custom Sticker Experience Starts Now</h3>
									<h3>Sticker upload failed</h3>
									<h3 class="major">Upload Requirements:</h3>
									<h4>Uniquely named
									<br>JPG, JPEG, PNG or GIF file type
									<br>Under 500,000 bytes</h4>
									<p>Stickers the way <i>you</i> want them,
									<br>Because <i>you</i> design them. 
									<br>Get ready for the coolest stickers you've ever seen!</p>
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
									  <li><input type="submit" value="Upload Sticker Idea"></li>
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

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

									while (!deck.isInOrder()) {
										print 'Iteration ' + i;
										deck.shuffle();
										i++;
									}

										print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
																		</section>

																		<section>
																			<h3 class="major">Lists</h3>

																			<h4>Unordered</h4>
																			<ul>
																				<li>Dolor pulvinar etiam.</li>
																				<li>Sagittis adipiscing.</li>
																				<li>Felis enim feugiat.</li>
																			</ul>

																			<h4>Alternate</h4>
																			<ul class="alt">
																				<li>Dolor pulvinar etiam.</li>
																				<li>Sagittis adipiscing.</li>
																				<li>Felis enim feugiat.</li>
																			</ul>

																			<h4>Ordered</h4>
																			<ol>
																				<li>Dolor pulvinar etiam.</li>
																				<li>Etiam vel felis viverra.</li>
																				<li>Felis enim feugiat.</li>
																				<li>Dolor pulvinar etiam.</li>
																				<li>Etiam vel felis lorem.</li>
																				<li>Felis enim et feugiat.</li>
																			</ol>
																			<h4>Icons</h4>
																			<ul class="icons">
																				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
																				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
																				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
																				<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
																			</ul>

																			<h4>Actions</h4>
																			<ul class="actions">
																				<li><a href="#" class="button primary">Default</a></li>
																				<li><a href="#" class="button">Default</a></li>
																			</ul>
																			<ul class="actions stacked">
																				<li><a href="#" class="button primary">Default</a></li>
																				<li><a href="#" class="button">Default</a></li>
																			</ul>
																		</section>

																		<section>
																			<h3 class="major">Table</h3>
																			<h4>Default</h4>
																			<div class="table-wrapper">
																				<table>
																					<thead>
																						<tr>
																							<th>Name</th>
																							<th>Description</th>
																							<th>Price</th>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<td>Item One</td>
																							<td>Ante turpis integer aliquet porttitor.</td>
																							<td>29.99</td>
																						</tr>
																						<tr>
																							<td>Item Two</td>
																							<td>Vis ac commodo adipiscing arcu aliquet.</td>
																							<td>19.99</td>
																						</tr>
																						<tr>
																							<td>Item Three</td>
																							<td> Morbi faucibus arcu accumsan lorem.</td>
																							<td>29.99</td>
																						</tr>
																						<tr>
																							<td>Item Four</td>
																							<td>Vitae integer tempus condimentum.</td>
																							<td>19.99</td>
																						</tr>
																						<tr>
																							<td>Item Five</td>
																							<td>Ante turpis integer aliquet porttitor.</td>
																							<td>29.99</td>
																						</tr>
																					</tbody>
																					<tfoot>
																						<tr>
																							<td colspan="2"></td>
																							<td>100.00</td>
																						</tr>
																					</tfoot>
																				</table>
																			</div>

																			<h4>Alternate</h4>
																			<div class="table-wrapper">
																				<table class="alt">
																					<thead>
																						<tr>
																							<th>Name</th>
																							<th>Description</th>
																							<th>Price</th>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<td>Item One</td>
																							<td>Ante turpis integer aliquet porttitor.</td>
																							<td>29.99</td>
																						</tr>
																						<tr>
																							<td>Item Two</td>
																							<td>Vis ac commodo adipiscing arcu aliquet.</td>
																							<td>19.99</td>
																						</tr>
																						<tr>
																							<td>Item Three</td>
																							<td> Morbi faucibus arcu accumsan lorem.</td>
																							<td>29.99</td>
																						</tr>
																						<tr>
																							<td>Item Four</td>
																							<td>Vitae integer tempus condimentum.</td>
																							<td>19.99</td>
																						</tr>
																						<tr>
																							<td>Item Five</td>
																							<td>Ante turpis integer aliquet porttitor.</td>
																							<td>29.99</td>
																						</tr>
																					</tbody>
																					<tfoot>
																						<tr>
																							<td colspan="2"></td>
																							<td>100.00</td>
																						</tr>
																					</tfoot>
																				</table>
																			</div>
																		</section>

																		<section>
																			<h3 class="major">Buttons</h3>
																			<ul class="actions">
																				<li><a href="#" class="button primary">Primary</a></li>
																				<li><a href="#" class="button">Default</a></li>
																			</ul>
																			<ul class="actions">
																				<li><a href="#" class="button">Default</a></li>
																				<li><a href="#" class="button small">Small</a></li>
																			</ul>
																			<ul class="actions">
																				<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
																				<li><a href="#" class="button icon solid fa-download">Icon</a></li>
																			</ul>
																			<ul class="actions">
																				<li><span class="button primary disabled">Disabled</span></li>
																				<li><span class="button disabled">Disabled</span></li>
																			</ul>
																		</section>

																		<section>
																			<h3 class="major">Form</h3>
																			<form method="post" action="#">
																				<div class="fields">
																					<div class="field half">
																						<label for="demo-name">Name</label>
																						<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
																					</div>
																					<div class="field half">
																						<label for="demo-email">Email</label>
																						<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
																					</div>
																					<div class="field">
																						<label for="demo-category">Category</label>
																						<select name="demo-category" id="demo-category">
																							<option value="">-</option>
																							<option value="1">Manufacturing</option>
																							<option value="1">Shipping</option>
																							<option value="1">Administration</option>
																							<option value="1">Human Resources</option>
																						</select>
																					</div>
																					<div class="field half">
																						<input type="radio" id="demo-priority-low" name="demo-priority" checked>
																						<label for="demo-priority-low">Low</label>
																					</div>
																					<div class="field half">
																						<input type="radio" id="demo-priority-high" name="demo-priority">
																						<label for="demo-priority-high">High</label>
																					</div>
																					<div class="field half">
																						<input type="checkbox" id="demo-copy" name="demo-copy">
																						<label for="demo-copy">Email me a copy</label>
																					</div>
																					<div class="field half">
																						<input type="checkbox" id="demo-human" name="demo-human" checked>
																						<label for="demo-human">Not a robot</label>
																					</div>
																					<div class="field">
																						<label for="demo-message">Message</label>
																						<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
																					</div>
																				</div>
																				<ul class="actions">
																					<li><input type="submit" value="Send Message" class="primary" /></li>
																					<li><input type="reset" value="Reset" /></li>
																				</ul>
																			</form>
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
			<script>
				$(document).ready(function() {
				  $('#sub').submit(function(e) {
				    var email = $('#email').val();
				    var password = $('#password').val();
						var name = $('#name').val();
						var address = $('#address').val();
						var city = $('#city').val();
						var state = $('#state').val();
						var zipcode = $('#zipcode').val();
						var space = new RegExp("[\\s]");
						$(".error").remove();
						if (email.length < 1) {
							$('#email').after('<span class="error" style="color:red">Please enter your email</span>');
							e.preventDefault();
						}
						else if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)){
							$('#email').after('<span class="error" style="color:red">Must be of the form: *@*.*</span>');
							e.preventDefault();
						}
						if (password.length < 8 && password.length > 0) {
							$('#password').after('<span class="error" style="color:red">Must be 8 characters or more</span>');
							e.preventDefault();
						}
						if (password.length < 1) {
							$('#password').after('<span class="error" style="color:red">Please enter your password</span>');
							e.preventDefault();
						}
						if(name.length < 1) {
							$('#name').after('<span class="error" style="color:red">Please enter your name</span>');
							e.preventDefault();
						}
						if (!/^[a-zA-Z\s]*$/.test(name)){
							$('#name').after('<span class="error" style="color:red">No numbers or special characters allowed</span>');
							e.preventDefault();
						}
						if(address.length < 1){
							$('#address').after('<span class="error" style="color:red">Please enter your address</span>');
							e.preventDefault();
						}
						else if (!space.test(address)){
							$('#address').after('<span class="error" style="color:red">This is not a valid address</span>');
							e.preventDefault();
						}
						if(city.length < 1) {
							$('#city').after('<span class="error" style="color:red">Please enter your city</span>');
							e.preventDefault();
						}
						else if (!/^[a-zA-Z\s]*$/.test(city)){
							$('#city').after('<span class="error" style="color:red">No numbers or special characters allowed</span>');
							e.preventDefault();
						}
						if(zipcode.length < 1) {
							$('#zipcode').after('<span class="error" style="color:red">Please enter your zip code</span>');
							e.preventDefault();
						}
						else if(!/^[0-9][0-9][0-9][0-9][0-9]$/.test(zipcode)){
							$('#zipcode').after('<span class="error" style="color:red">Must be exactly 5 numbers</span>');
							e.preventDefault();
						}
						if(state == ""){
							$('#state').after('<span class="error" style="color:red">Please select a state</span>');
							e.preventDefault();
						}
					});
				 });
			</script>
	</body>
</html>
