
<?php
	include_once 'header.php';
?>

<div class="container-fluid">
	<div class="row" style="height: 35px; width: 40%; padding:0;">
      <ul class="breadcrumb" style="background-color: white;">
        <li><a href="index.php">Αρχική</a></li>
        <li><a href="erg_service.php">Υπηρεσίες εργοδότη</a></li>
        <li class="active">Ασφαλιστική ενημερότητα</li>
      </ul>
    </div>
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
		<div class="col-md-9 text-center" style="height: 100%; background-color: white;">
			<?php
				if (isset($_GET['afm']))
				{
					echo
					'
					<div id="home" class="tab-pane fade in active" style="text-align: center;">
				    	<h1 style="text-decoration: underline; color: black;">Βεβαίωση Ασφαλιστικής Ενημερότητας</h1>
				        <h3 style="color: black;">Βεβαιώνεται οτι ο παρακάτω εργοδότης έχει καλύψει τις ασφαλιστικές υποχρεώσεις του για την παρακάτω περίοδο:</h3>
				        <div class="container" style="width: 50%; height: 250px;; float: left;">
							<ul class="list-group" style="float:right;">
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ημ. λήξης:  </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ημ. έναρξης: </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Α.Φ.Μ.: </li>
								<li class="list-group-item" style="color:black; font-weight:bold; background-color: white; border:none;">Ονομα: </li>
							</ul>
					    </div>

						<div class="container" style="width: 50%; height: 250px;; float: right;">
							<ul class="list-group" style="float:left;">
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['expire_date'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['start_date'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['afm'].'</li>
								<li class="list-group-item" style="color: black; background-color: white; border:none;">'.$_GET['first'].' '.$_GET['last'].'</li>
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
					<h1 style="text-decoration: underline; padding-bottom: 20px;">Παρακαλώ εισάγετε τα στοιχεία σας</h1>';
							$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							if (strpos($fullUrl, "user_not_found"))
							{
								echo '<h3 class="text-center" style="color: red; padding-bottom: 15px;" >Δεν βρέθηκε εργοδότης με αυτό το Α.Φ.Μ.!</h3>';
							}
					echo '
					<form action="background/asf_enhm_background.php" method="post" id="form_val" role="form">
						<div class="form-group">
							<label for="first_name">Όνομα:</label>
							<input class="form-control" type="text" name="firstname" id = "firstname" style="width: 300px; margin: 0 auto;"/>
						</div>

						<div class="form-group">
							<label for="first_name">Επίθετο:</label>
							<input class="form-control" type="text" name="lastname" id = "lastname" style="width: 300px; margin: 0 auto;"/>
						</div>

						<div class="form-group">
							<label for="afm">Α.Φ.Μ.:</label>
							<input class="form-control"  type="text" name="afm" id = "afm" style="width: 300px; margin: 0 auto;"/>
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="submit_asf_enhm" value="Καταχώρηση"></button>
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
