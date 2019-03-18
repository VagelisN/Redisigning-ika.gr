
<?php
	include_once 'header.php';
 ?>

<section>

	<div class="container">
		<div class="col" style="width: 100%; margin-bottom: 300px;">
			<div class="well" style = "margin:0 auto; width:750px; height:450px; background-color: white;">
				<div class="form-group" style="padding-top: 10px; width: 60%; margin: 0 auto;">
					<h2 style="text-align: center;">Σύνδεση στον προσωπικό σας λογαριασμό!</h2>
						<?php
							$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							if (strpos($fullUrl, "login=no_user_found"))
							{

								echo '<h3 class="text-center" style="color: red; padding-top: 15px;" >Δεν υπάρχει χρήστης με αυτό το username!</h3>';
							}
							elseif (strpos($fullUrl, "login=wrong_password"))
							{
								echo '<h3 class="text-center" style="color: red; padding-top: 15px;" >Λάθος κωδικός πρόσβασης!</h3>';
							}
						?>
						<form action = "background/login_background.php" method="post" class="form-horizontal" id="form_val">
							<div class="form-group input-group" style="width: 60%; margin: 0 auto; padding-top: 25px;">
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
								</span>

								<input  type="text" name="username" class="form-control" placeholder="Όνομα Χρήστη">
							</div>
							<div class="form-group input-group" style="width: 60%; margin: 0 auto; padding-top: 5px;">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" name="password" class="form-control" placeholder="Κωδικός Χρήστη">
							</div>
							<div class="container" style="width: 100%; text-align: center; padding-top: 20px;">
								<button class="btn btn-primary" name ="login_submit" style="width: 20%; margin: 0 auto;">
									Σύνδεση
								</button>
							</div>
							<div class="form-group" style="width: 100%; text-align: center; padding-top: 30px;">
								<a href="#" style="color: darkblue;">Ξεχάσατε τον κωδικό προόσβασης;</a>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>

</section>

<?php
	include_once 'footer.php';
 ?>
