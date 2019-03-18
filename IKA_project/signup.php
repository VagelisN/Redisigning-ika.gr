
	<?php
		include_once 'header.php'
	?>
	<div class="container">
		<div class="row" style="height: 35px; width: 40%; padding:0;">
			<ul class="breadcrumb" style="background-color: white;">
				<li><a href="index.php">Αρχική</a></li>
				<li><a href="bef_signup.php">Εγγραφή ως</a></li>
				<li class="active">Εγγραφή ως ασφαλισμένος</li>
			</ul>
		</div>
		<div class ="jumbotron" id="jum" style="background-color: white; margin: 0; padding: 0;">
		<div class="row" style="background-color: white;">
			<h3 class="text-center">Για την εγγραφή ως ασφαλισμένος συμπληρώστε τις παρακάτω πληροφόρίες:</h3>
	        <div class="col-md-6 col-md-offset-3" style="margin-top: 25px;">
	            <form action="background/signup_form_submit.php" method="post" role="form" id="form_val">
	            <fieldset>
				<?php
					$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if (strpos($fullUrl, "signup=afm_doesnt_exists"))
					{
						echo '<h3 class="text-center" style="color: red; padding-bottom: 15px;" >Δεν υπάρχει ασφαλισμένος με αυτό το Α.Φ.Μ.!</h3>';
					}
					elseif (strpos($fullUrl, "signup=username_exists"))
					{
						echo '<h3 class="text-center" style="color: red; padding-top: 15px;" >Υπάρχει ήδη χρήστης με αυτό το username!</h3>';
					}
					elseif (strpos($fullUrl, "signup=success"))
					{
						echo '<h3 class="text-center" style="color: green; padding-top: 15px;" >Η εγγραφή ολοκληρώθηκε με επιτυχία!</h3>';
					}
				?>
				<div class="form-group">
					<label for="afm">Α.Φ.Μ: </label>
					<input class="form-control"  type="text" name="afm" id = "afm"/>
				</div>
	            <div class="form-group">
	                <label for="email">Ηλεκτρονική Διεύθυνση (Email): </label>
	                <input class="form-control" type="text" name="email" id = "email"/>
	            </div>
	            <div class="form-group">
	                <label for="username">Username:  </label>
	                <input class="form-control" type="text" name="username" id = "username" placeholder="Τουλάχιστον 5 χαρακτήρες"  />
	            </div>

	            <div class="form-group">
	                <label for="password">Κωδικός: </label>
	                <input  name="password" type="password" class="form-control"   id="pass1" /> </p>
	                <label for="password2">Επιβεβαίωση κωδικού: </label>
	                <input  name="password2" type="password" class="form-control"  id="pass2" />
	            </div>

	            <div class="form-group text-center">
	                <input class="btn btn-warning" type="submit" name="submit_reg" value="Εγγραφή" style="width: 100px;">
	            </div>
	            </fieldset>
	            </form>
	        </div>
		</div>
	</div>
	</div>
  <?php
    include_once 'footer.php'
  ?>
