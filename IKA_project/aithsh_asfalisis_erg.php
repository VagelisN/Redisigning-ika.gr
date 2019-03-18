<?php
	include_once 'header.php';
?>

<dir class="container-fluid">
	<div class="row" style="height: 35px; width: 60%; padding:0;">
			<ul class="breadcrumb" style="background-color: white;">
				<li><a href="index.php">Αρχική</a></li>
				<li><a href="erg_services.php">Υπηρεσίες εργοδοτών</a></li>
				<li class="active">Αίτηση ασφάλισης εργαζομένου</li>
			</ul>
		</div>
	<div class="row" style="height: 500px;">
		<div class="row" style="height: 700px;">
			<div class="col-md-3 sidenav" style="height:100%; background-color: white ;">
	          <h2 style="font-size: 19px; padding-top: 10px; padding-bottom: 25px; color: black;">Υπηρεσίες για Εργοδότες</h2>
	          <ul class="nav nav-sidebar services">

	            <li style="font-size: 20px; height: 70px;  border: 1px solid black;"><a href="asf_enhm.php">Βεβαίωση Ασφαλιστικής Ενημερότητας</a></li>
	            <li style="font-size: 20px; height: 70px;  border: 1px solid black; border-top:none;"><a href="mon_calc.php">Εργαλείο υπολογισμού μισθού</a></li>
	            <li style="font-size: 20px; height: 70px; padding-top: 12px; border: 1px solid black; border-top:none;"><a href="aithsh_asfalisis_erg.php">Ασφάλιση Εργαζομένου</a></li>
				<li style="font-size: 20px; height: 70px; border: 1px solid black; border-top:none;"><a href="#">Οικονομική καρτέλα εργοδότη</a></li>
				<li style="font-size: 20px; height: 70px; padding-top: 10px; border: 1px solid black; border-top:none;"><a href="#">Υπολογισμός Εισφορών</a></li>
	          </ul>
			</div>
			<div class="col-md-9 text-center">
				<?php
				if (isset($_GET['email']))
				{
					echo
					'
					<h3 class="text-center" style="color: green; padding-top: 15px;" >Η υποβολή του αιτήματος ολοκληρώθηκε με επιτυχία.</h3>
					<h4	>Θα ενημερωθείτε για την διεκπεραίωση του αιτηματός σας στην ηλ. διεύθυνση: '.$_GET['email'].'</h4>
					';
				}

				?>

				<h1 style="text-decoration: underline; padding-bottom: 20px;">Παρακαλώ εισάγετε τα στοιχεία σας</h1>
				<?php
						$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						if (strpos($fullUrl, "insured_not_found"))
						{
							echo '<h3 class="text-center" style="color: red; padding-bottom: 15px;" >Δεν βρέθηκε ασφαλισμένος με αυτό το Α.Φ.Μ.!</h3>';
						}
						elseif (strpos($fullUrl, "employer_not_found"))
						{
							echo '<h3 class="text-center" style="color: red; padding-bottom: 15px;" >Δεν βρέθηκε εργοδότης με αυτό το Α.Φ.Μ.!</h3>';
						}
				?>

				<form action="background/aitisi_e.php" method="post" id="form_val" role="form">
					<div class="form-group">
						<label for="last_name">Α.Φ.Μ. εργοδότη:</label>
						<input class="form-control" type="text" name="afm_e" id = "afm_e" style="width: 300px; margin: 0 auto;"/>
					</div>
					<div class="form-group">
				 <label for="email">Ηλεκτρονική Διεύθυνση (Email): </label>
				 <input style="width: 300px; margin: 0 auto;"class="form-control" type="text" name="email" id = "email"/>
						 </div>
					<div class="form-group">
						<label for="fathers_name">Όνομα Εργαζομένου:</label>
						<input  class="form-control" type="text" name="firstname" id = "firstname" style="width: 300px; margin: 0 auto;"/>
					</div>
					<div class="form-group">
						<label for="afm">Επίθετο εργαζομένου:</label>
						<input class="form-control"  type="text" name="lastname" id = "lastname" style="width: 300px; margin: 0 auto;"/>
					</div>
					<div class="form-group">
						<label for="amka">Α.Φ.Μ. εργαζομένου:</label>
						<input class="form-control"  type="text" name="afm" id = "afm" style="width: 300px; margin: 0 auto;"/>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="submit_aitisi" value="Καταχώρηση"></button>
					</div>
				</form>
			</div>
	</div>

</dir>

<?php
	include_once 'footer.php';
?>
