
<!doctype html>
<html lang="en-us">
<head>
	<title>Free Food | Member area</title>
	<link rel="stylesheet" href="style/register.css">
    <script type="text/javascript" src="script/register.js"></script>
</head>

<body id="wizard">
		<header>
			<div id="logo">
				<center><img src="res/logo.png" /></center>
			</div>
		</header>
		<section id="content">
                <h1>Register to add a new free food resources now</h1>
                <p>It's free and easy</p>
                <form id="form">
                    <fieldset>
                        <label>Basic listing information</label>
                        <section>
                            <label for="title">Name of Restaurant<span class='red'>*</span></label>
                            <div>
                                <input type="text" id="title" name="title" value="" class="w_70" required>
                            </div>
                        </section>
                        
                        <section>                    
                            <label for="address">Address<span class='red'>*</span></label>
                            <div>
                                <input type="text" id="address" name="address" value="" required>
                            </div>
                        </section>
                        
                        <section>                    
                            <label for="city">City<span class='red'>*</span></label>
                            <div>
                                <input type="text" id="city" name="city" value="" class="w_70" required>
                            </div>
                        </section>
                        
                        <section>
                            <label for="state">State<span class='red'>*</span></label>
                            <div>					
                                <input type="text" id="state" name="state" value="" class="w_30" required>
                            </div>
                        </section>
        
                        <section>                    
                            <label for="zip">Zip Code<span class='red'>*</span></label>
                            <div>
                                <input type="text" id="zip" name="zip" value="" class="w_20" required>
                            </div>
                        </section>
                        
                        <section>                    
                            <label for="phone">Phone<span class='red'>*</span></label>
                            <div>
                                <input type="text" id="phone" name="phone" value="" class="w_30" required>
                            </div>
                        </section>
                        <section>                    
                            <label for="phone">Co-ordinates<span class='red'>*</span></label>
                            <div>
                                <input type="text" id="lat" name="lat" placeholder="Latitude" value="" class="w_30" required>
                                <input type="text" id="lng" name="lng" placeholder="Longitude" value="" class="w_30" required>
                            </div>
                        </section>
                        <section>
                            <label for="website">Website</label>
                            <div>
                                <input type="text" id="website" name="website" value="" class="w_60" >
                            </div>
                        </section>

                        <section>
                            <label for="business_email">Business Email</label>
                            <div>
                                <input type="text" id="business_email" name="business_email" value="" class="w_60" >
                            </div>
                        </section>

                     <section>
                            <label for="description">Description (Add as much information as possible including hours)</label>
                            <div><textarea id="description" name="description" rows="10"></textarea></div>
                        </section>
		    
		    
		    
		    </fieldset>
                    <fieldset>
                        <label>Your contact information</label>
                        <section>
                            <label for="email">Your Email<span class='red'>*</span></label>
                            <div>
                                <input type="text" id="email" name="email" value="" class="w_60" required>
                                Will not be published
                            </div>
                        </section>

                        <section>
                            <label for="password">Create a password<span class='red'>*</span></label>
                            <div>
                                <input type="password" id="password" name="password" value="" class="w_60" required>
                            </div>
                        </section>                        
                        <section>              
                            <div>
                                <input type="hidden" name="submitted" value="1" />
                                <input type="button" class="submit blue big" name="submitbuttonname" value="Register" onclick="register()"></button>
                            </div>
                        </section>
                    </fieldset>
                </form>
			</section>
</body>
</html>
