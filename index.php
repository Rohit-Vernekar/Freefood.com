<!DOCTYPE html>
<html>
	<head>
		<title>FreeFood - Food for Everyone</title>
		<link rel="stylesheet" href="style/login.css" type="text/css" />
		<link rel="stylesheet" href="style/mainPage.css" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script type="text/javascript" src="script/addListing.js"></script>
		<script type="text/javascript" src="script/login.js"></script>
		<script type="text/javascript" src="script/tabs.js"></script>
		<script type="text/javascript" src="script/map.js"></script>
	</head>
	<body>
		<nav>
			<section class="nav-container">
				<aside class="logo"><img src="res/logo.png" /></aside>
				<div class="nav">
  					<ul>
   						<li id="homeList" class="navlist"><button class="nav-link" onclick="openTab(event, 'home')" id="defaultOpen">HOME</button></li>
    					<li id="aboutUsList" class="navlist"><button class="nav-link" onclick="openTab(event, 'aboutUs')">ABOUT US</button></li>
    					<li id="addListingList" class="navlist"><button class="nav-link" onclick="openListing()">ADD A LISTING</button></li>
    					<li class="navlist"><button class="nav-link" id="login">LOGIN | REGISTER</button></li>
  					</ul>
				</div>
			</section>
		</nav>


		<div id="home" class="tabcontent">
  			<div id="map"></div>
		</div>
		<div id="marker" class="tabcontent">
  			<div class="split left">
			  <div class="centered">
			    <center><h1><em>Restaurant Details</em></h1></center>
			    <section><em>
                    <label class="Mtag">Name of Restaurant : </label>
                	<label id="Mname" class="Mtag">a</label>
                </section>
                <section>
                    <label class="Mtag">Address : </label>
                	<label id="Maddr" class="Mtag">a</label>
                </section>
                <section>
                    <label class="Mtag">Phone : </label>
                	<label id="Mphone" class="Mtag">p</label>
                </section>
                <section>
                    <label class="Mtag">Website : </label>
                	<label id="Mwebsite" class="Mtag">w</label></em>
                </section>
                <section>
                    <label class="Mtag">Description: </label>
                	<label id="Mdesc" class="Mtag">w</label></em>
                </section>
			  </div>
			</div>

			<div class="split right">
			  <div class="centered">
			    <center><h2><em>Food Available</em></h2></center>
			    <p>
			    	<ul id="foodItems">
			    		
			    	</ul>
			    </p>
			  </div>
			</div>
		</div>
		<div id="aboutUs" class="tabcontent">
  			<h1><em>About Us</em></h1>
  			<center><img src="res/logo.png" /></center>
  			<center><p><br/>FreeFood.com is about helping people. <br/>We created this website as a resource for users to find and add free food resources locally and nationwide.<br/><br/>
			Do you know of any food pantries, soup kitchens that are not listed on our site? Add them to our website. Follow the link on the navigation bar to ADD FREE FOOD PROGRAM.<br/><br/>
			Use the form below to contact us if you need assistance or are having problems with the website. <br/>Also for website updates. Send full info for all updates.<br/><br/><br/> 
			Thanks!<br/>
			The FreeFood.com Family<br/></p></center>
		</div>

		<div id="addListing" class="tabcontent">
  			<center><em><h1 id="welcome">Welcome </h1></em>
  			<form>
  				<section><em>
                    <label class="tag">Name of Restaurant : </label>
                	<label id="name" class="ans">a</label>
                </section>
                <section>
                    <label class="tag">Address : </label>
                	<label id="addr" class="ans">a</label>
                </section>
                <section>
                    <label class="tag">Phone : </label>
                	<label id="phone" class="ans">p</label>
                </section>
                <section>
                    <label class="tag">Website : </label>
                	<label id="website" class="ans">w</label></em>
                </section>
  			</form></center>
  			<center>
  				<form id="addFood">
  					<label class="tag">Food Description : </label>
  					<textarea id="foodDesc"></textarea>
  					<input type="button" class="btn" value="Add Food" onclick="addfood()" /><br/>
  					<input type="reset" class="btn" value="Clear" />
  				</form>
  			</center>
		</div>

		<div class="arrow-up"></div>
		<div class="login-form">
			<form>
				<div>
					<label>Username</label>
					<input type="text" id="username" placeholder=" Username" required />
				</div>
				<div>
					<label>Password</label>
					<input type="password" id="password" placeholder=" Password" required />
				</div>
				<div>
					<input type="button" id="loginBtn" value="Log In" onclick="login()" />
				</div>
				<div>
					<a href="registerPage.php" target="_blank" style="text-decoration: none; position: relative;top: 20px; font-size: 14px; color: #ccc;">New User? Register Here.</a>
				</div>
			</form>
		</div>

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs63_8bD3WF78at1v2nwb8446hyHlwt3s&callback=initMap">
    	</script>
	</body>
</html>
