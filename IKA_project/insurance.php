
<?php
	include_once 'header.php';
?>

<div class="container-fluid text-center">
	<div class="row" style="height: 35px; width: 40%; padding:0;">
			<ul class="breadcrumb" style="background-color: white;">
				<li><a href="index.php">Αρχική</a></li>
				<li><a href="services.php">Υπηρεσίες ασφαλισμένου</a></li>
				<li class="active">Ασφαλιστική ικανότητα</li>
			</ul>
		</div>
	<div class="row" style="height: 700px;">
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

		<div class="col-md-9 text-center" style="height: 100%; background-color: white;">



			<?php
				if (isset($_GET['u_afm']))
				{
					echo
					'
					<div id="home" class="tab-pane fade in active" style="text-align: center;">
				    	<h1 style="text-decoration: underline; color: black;">Ασφαλιστική Ικανότητα</h1>
				        <h3 style="color: black;">Για ιατροφαρμακευτική και νοσοκομειακή περίθαλψη</h3>
				        <div class="container" style="width: 50%; height: 300px;; float: left;">
							<ul class="list-group" style="float:right;">
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ημ. λήξης:  </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ημ. έναρξης: </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Α.Φ.Μ.: </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Α.Μ.Κ.Α.: </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ονοματεπώνυμο: </li>
							</ul>
					    </div>

						<div class="container" style="width: 50%; height: 300px;; float: right;">
							<ul class="list-group" style="float:left;">
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['u_expire_date'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['u_start_date'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['u_afm'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['u_amka'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['u_first'].' '.$_GET['u_last'].'</li>
							</ul>
						</div>
					    <ul class="list-inline" style="list-style: none;">
					      	<li><button class="btn btn-primary"><span class="glyphicon glyphicon-print" style="margin-right: 5px;"></span>Εκτύπωση</button></li>
					      	<li style="margin-left: 20px;"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt" style="margin-right: 5px;"></span>Λήψη</button></li>
					    </ul>
				    </div>
					';
				}
				else
				{
					echo
					'
					<h1 style="padding-bottom: 20px; color: black;">Παρακαλώ εισάγετε τα στοιχεία σας:</h1>';

							$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							if (strpos($fullUrl, "user_not_found"))
							{
								echo '<h3 class="text-center" style="color: red; padding-bottom: 15px;" >Δεν υπάρχει ασφαλισμένος με αυτό το Α.Φ.Μ.!</h3>';
							}
							elseif (strpos($fullUrl, "unknown_error"))
							{
								echo '<h3 class="text-center" style="color: red; padding-top: 15px;" >Παρουσιάστηκε άγνωστο σφάλμα!</h3>';
							}

					echo'<form action="background/insurance_background.php" method="post" id="form_val" role="form">
						<div class="form-group">
							<label for="afm">Α.Φ.Μ.:</label>
							<input class="form-control"  type="text" name="afm" id = "afm" style="width: 300px; margin: 0 auto;"/>

						</div>
						<div class="form-group">
							<label for="amka">Α.Μ.Κ.Α.:</label>
							<input class="form-control"  type="text" name="amka" id = "amka" style="width: 300px; margin: 0 auto;"/>
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="submit_insurance" value="Καταχώρηση"></button>
						</div>
					</form>
					';
				}

			 ?>
		</div>
	</div>
</div>
<?php
	include_once 'footer.php';
 ?>
