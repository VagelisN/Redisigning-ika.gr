
	<?php
		include_once 'header.php'
	?>
	<div class="container">
		<div class="row" style="height: 35px; width: 60%; padding:0;">
			<ul class="breadcrumb" style="background-color: white;">
				<li><a href="index.php">Αρχική</a></li>
				<li><a href="services.php">Υπηρεσίες ασφαλισμένου</a></li>
				<li class="active">Αίτηση ασφάλισης τέκνου</li>
			</ul>
		</div>
		<div class="row" style="height: 500px;">
			<div class="col-md-3 sidenav" style="height:100%; background-color: white ;">
          <h2 style="font-size: 19px; padding-top: 10px; padding-bottom: 25px; color: black;">Υπηρεσίες για Ασφαλισμένους</h2>
          <ul class="nav nav-sidebar services">

            <li style="font-size: 20px; height: 70px; padding-top: 12px; border: 1px solid black;"><a href="insurance.php">Ασφαλιστική Ικανότητα</a></li>
            <li style="font-size: 20px; height: 70px; padding-top: 12px; border: 1px solid black; border-top:none;"><a href="child_insurance.php">Ασφάλιση Τέκνου</a></li>
            <li style="font-size: 20px; height: 70px; padding-top: 12px; border: 1px solid black; border-top:none;"><a href="#">Έλεγχος Εισφορών</a></li>
			<li style="font-size: 20px; height: 70px; padding-top: 12px; border: 1px solid black; border-top:none;"><a href="#">Έλεγχος Αδειών</a></li>
			<li style="font-size: 20px; height: 70px;  border: 1px solid black; border-top:none;"><a href="benefit_calc.php">Εργαλείο Υπολογισμού Σύνταξης</a></li>
          </ul>
		</div>


			<?php
			if (isset($_GET['tek_first']))
			{
				echo
				'
				<h3 class="text-center" style="color: green; padding-top: 15px;" >Η υποβολή του αιτήματος ολοκληρώθηκε με επιτυχία.</h3>
				<h4	>Θα ενημερωθείτε για την διεκπεραίωση του αιτηματός σας στην ηλ. διεύθυνση: '.$_GET['email'].'</h4>
				';
			}

			?>
	        <div class="col-md-9 text-center" style="margin-top: 5px;">
		        <h3 class="text-center" style="padding: 0 100px; margin-bottom: 20px;">Συμπληρώστε τα παρακάτω στοιχεία για υποβολή αιτήματος ασφάλισης τέκνου:</h3>
				<?php
						$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						if (strpos($fullUrl, "insured_not_found"))
						{
							echo '<h3 class="text-center" style="color: red; padding-bottom: 15px;" >Δεν βρέθηκε ασφαλισμένος με αυτό το Α.Φ.Μ.!</h3>';
						}
				?>
	            <form action="background/child_insurance_background.php" method="post" role="form" id="form_val">
	            <fieldset>

	              <div class="form-group">
	                  <label for="afm">Α.Φ.Μ Γονέα: </label>
	                  <input style="width: 400px; margin: 0 auto;" class="form-control"  type="text" name="afm" id = "afm"/>
	              </div>

				  <div class="form-group">
					<label for="email">Ηλεκτρονική Διεύθυνση (Email): </label>
					<input style="width: 400px; margin: 0 auto;" class="form-control" type="text" name="email" id = "email"/>
		       	  </div>
	              <div class="form-group">
	                  <label for="firstname">Όνομα Τέκνου: </label>
	                  <input style="width: 400px; margin: 0 auto;" class="form-control" type="text" name="child_firstname" id = "firstname"/>
	              </div>

	              <div class="form-group">
	                  <label for="lastname">Επώνυμο Τέκνου: </label>
	                      <input style="width: 400px; margin: 0 auto;" class="form-control" type="text" name="child_lastname" id = "lastname"/>
	              </div>

		          <div class="form-group text-center">
		              <input class="btn btn-primary" type="submit" name="submit_reg" value="Καταχώρηση" style="width: 120px;">
		          </div>
		           </fieldset>
	            </form>
	        </div>
	</div>
	</div>
  <?php
    include_once 'footer.php'
  ?>
