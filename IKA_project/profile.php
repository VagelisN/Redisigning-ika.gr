<?php
	include_once 'header.php';
?>
<div class="row" style="height: 35px; width: 40%; padding:0;">
	<ul class="breadcrumb" style="background-color: white;">
		<li><a href="index.php">Αρχική</a></li>
		<li class="active">Προφίλ ασφαλισμένου</li>
	</ul>
</div>

<?php
	if (isset($_SESSION['user_employee']))
	{
		echo
		'
		<!--Left section with personal details  -->
		<div class="row">
			<div class="col-md-3" style=" height: 800px; float: left; background-color: white; border: 1px solid black; border-bottom: none;">
				<div class = "row" style="height: 400px;">
					<div class="row">
						<h3 style="text-align:center; color:black;">Προσωπικά Στοιχεία</h3>
						<div class="col-md-5" style="margin-top: 5px;">
							<ul class="list-group">
								<li class="list-group-item" style="color:black; background-color: white; border: 1px solid white;">Επώνυμο:</li>
								<li class="list-group-item" style="color:black; background-color: white; border: 1px solid white;">Όνομα:</li>
								<li class="list-group-item" style="color:black; background-color: white; border: 1px solid white;">Πατρώνυμο:</li>
								<li class="list-group-item" style="color:black; background-color: white; border: 1px solid white;">Α.Φ.Μ.:</li>
								<li class="list-group-item" style="color:black; background-color: white; border: 1px solid white;">Α.Μ.Κ.Α.:</li>
								<li class="list-group-item" style="color:black; background-color: white; border: 1px solid white;">Aσφαλισμένα τέκνα: </li>
							</ul>
						</div>
						<div class="col-md-7" style="margin-top: 5px;">
							<ul class="list-group">
							  <li class="list-group-item" style="background-color: white; border: 1px solid white;">'.$_SESSION['u_last'].'</li>
								<li class="list-group-item" style="background-color: white; border: 1px solid white;">'.$_SESSION['u_first'].'</li>
								<li class="list-group-item" style="background-color: white; border: 1px solid white;">'.$_SESSION['u_father'].'</li>
								<li class="list-group-item" style="background-color: white; border: 1px solid white;">'.$_SESSION['u_afm'].'</li>
								<li class="list-group-item" style="background-color: white; border: 1px solid white;">'.$_SESSION['u_amka'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_SESSION['u_tekn'].'</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<h3 style="text-align:center; color:black;">Στοιχεία Επικοινωνίας</h3>
						<div class="col-md-5" style="margin-top: 5px;">
							<ul class="list-group">
								<li class="list-group-item" style="color:black; background-color: white; border: 1px solid white;">Email:</li>
								<li class="list-group-item" style="color:black; background-color: white; border: 1px solid white;">Όνομα χρήστη:</li>
							</ul>
						</div>
						<div class="col-md-7" style="margin-top: 5px;">
							<ul class="list-group">
								<li class="list-group-item" style="background-color: white; border: 1px solid white;">'.$_SESSION['u_email'].'</li>
								<li class="list-group-item" style="background-color: white; border: 1px solid white;">'.$_SESSION['u_username'].'</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="text-align: center; margin-top: 10px;">
						 	<button class="btn btn-primary" onclick="location.href = \'manage_profile.php\';">Επεξεργασία Προφίλ</button>
						</div>
					</div>
				</div>
			</div>


			<!-- Right section whick contains all the other information -->
			<div class="col-md-9" style=" height: 800px; background-color: white;">
				<div class="row">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="pill" href="#home" style="color: darkblue;">Ασφαλιστική Ικανότητα</a></li>
						<li><a data-toggle="pill" href="#menu4" style="color: darkblue;">Ασφάλιση Τέκνου</a></li>
						<li><a data-toggle="pill" href="#menu1" style="color: darkblue;">Έλεγχος Εισφορών</a></li>
						<li><a data-toggle="pill" href="#menu2" style="color: darkblue;">Έλεγχος Ενσήμων</a></li>
						<li><a data-toggle="pill" href="#menu3" style="color: darkblue;">Έλεγχος Αδειών</a></li>
					</ul>
				</div>
				<div class="tab-content bg-black">
				    <div id="home" class="tab-pane fade in active" style="text-align: center;">
				    	<h1 style="text-decoration: underline; color: black;">Ασφαλιστική Ικανότητα</h1>
				        <h3 style="color: black;">Για ιατροφαρμακευτική και νοσοκομειακή περίθαλψη</h3>
				        <div class="container" style="width: 50%; height: 250px;; float: left;">
							<ul class="list-group" style="float:right;">
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ημ. λήξης:  </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ημ. έναρξης: </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Α.Φ.Μ.: </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Α.Μ.Κ.Α.: </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ονοματεπώνυμο: </li>

							</ul>
					    </div>

						<div class="container" style="width: 50%; height: 250px;; float: right;">
							<ul class="list-group" style="float:left;">
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_SESSION['u_expire_date'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_SESSION['u_start_date'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_SESSION['u_afm'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_SESSION['u_amka'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_SESSION['u_first'].' '.$_SESSION['u_last'].'</li>

							</ul>
						</div>
					    <ul class="list-inline" style="list-style: none;">
					      	<li><button class="btn btn-primary"><span class="glyphicon glyphicon-print" style="margin-right: 5px;"></span>Εκτύπωση</button></li>
					      	<li style="margin-left: 20px;"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt" style="margin-right: 5px;"></span>Λήψη</button></li>
					    </ul>
				    </div>
				    <div id="menu1" class="tab-pane fade" style="text-align: center;">
				      <h3>Έλεγχος Εισφορών</h3>
				      <p style="padding-top: 20px;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				    </div>
				    <div id="menu2" class="tab-pane fade" style="text-align: center;">
				      <h3>Έλεγχος Ενσήμων</h3>
				      <p style="padding-top: 20px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				    </div>
				    <div id="menu3" class="tab-pane fade" style="text-align: center;">
				      <h3>Έλεγχος Αδειών</h3>
				      <p style="padding-top: 20px;">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
						<div id="menu4" class="tab-pane fade" style="text-align: center;">
				      <h1 style="color: black; text-decoration:underline;">Αίτηση Ασφάλισης Τέκνου</h1>
							<form action="background/child_insurance_background.php" method="post" id="form_val" role="form">
							<div class="form-group">
								<label>Α.Φ.Μ.:</label>
								<input class="form-control" type="text" name="afm" style="width: 50%; margin-left:25%;" value="'.$_SESSION['u_afm'].'"></input>
							</div>
								<div class="form-group">
						 			<label>Email:</label>
						 			<input id="foc" class="form-control" type="text" name="email" style="width: 50%; margin-left:25%;" value="'.$_SESSION['u_email'].'"></input>
						 		</div>
						 		<div class="form-group">
						 			<label>Όνομα Τέκνου:</label>
						 			<input class="form-control" type="password" name="child_firstname" style="width: 50%; margin-left:25%;"></input>
						 		</div>
						 		<div class="form-group">
						 			<label>Επίθετο Τέκνου:</label>
						 			<input class="form-control" type="password" name="child_lastname" style="width: 50%; margin-left:25%;"></input>
						 		</div>
						 		<div class="form-group">
					                <input class="btn btn-primary" type="submit" name="submit_reg" value="Καταχώρηση στοιχείων">
					            </div>
						 	</form>
				    </div>
				  </div>
				</div>
		</div>
		';
	}
	else
	{
		header("Location: index.php");
		exit();
	}

?>
<?php
	include_once 'footer.php';
?>
