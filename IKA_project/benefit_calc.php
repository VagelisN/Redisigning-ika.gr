<?php
	include_once 'header.php';
?>
<div class="container-fluid">
	<div class="row" style="height: 35px; width: 60%; padding:0;">
		<ul class="breadcrumb" style="background-color: white;">
			<li><a href="index.php">Αρχική</a></li>
			<li><a href="erg_services.php">Υπηρεσίες ασφαλισμένου</a></li>
			<li class="active">Εργαλείο υπολογισμού σύνταξης</li>
		</ul>
	</div>
	<div class="row text-center" style="height: 500px; margin-top: 0px;">
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


		<div class="col-md-9" style="margin-top: 0px;">
			<h2 style="text-align: center; text-decoration: underline; color: black; padding-bottom: 15px;">Εργαλείο Υπολογισμού Ποσού Σύνταξης</h2>
			<?php
				if (isset($_GET['pension']))
				{
					$month = $_GET['pension'];
					$year = 12 * $month;
					echo
					'
						<div class="row" style="margin-top: 30px;">
							<div class="col-md-12" style="font-size: 20px;">
								Η μηνιαία σύνταξη που αντιστοιχεί στα στοιχεία που μας δώσατε είναι: '.$month.' ευρώ. Αυτό το ποσό αντιστοιχεί σε ετήσιο εισόδημα : '.$year.' ευρώ.
							</div>
						</div>
					';
				}
				else
				{
					echo
					'
					<form action="background/calculator.php" method="post" id="form_val">
						<div class="form-group">
			            	<ul class="list-inline" >
			            		<li><label for="total_earnings">Συνολικά έσοδα καριέρας: </label></li>
			            		<li><input class="form-control" type="text" name="total_earnings" id = "total_earnings" style="width: 400px;" /></li>
			            	</ul>
			            </div>
				        <div class="form-group">
			            	<ul class="list-inline">
			            		<li><label for="years_of_work">Συνολικά χρόνια εργασίας:</label></li>
			            		<li><input class="form-control" type="text" name="years_of_work" id = "years_of_work" style="width: 400px;" /></li>
			            	</ul>
			            </div>
			            <div class="form-group">
				            Ασφαλιστικός φορέας:
				            <div class="radio-inline">
								<label><input type="radio" name="foreas" value="ika" checked="checked">ΙΚΑ</label>
							</div>
							<div class="radio-inline">
								<label><input type="radio" name="foreas" value="etam">ΕΤΑΜ</label>
							</div>
						</div>
						<div class="form-group">
				            Τύπος σύνταξης:
				            <select name="type_pension">
				            	<option value="regular">Γήρατος</option>
				            	<option value="amea">Αναπηρίας</option>
				            	<option value="death_young">Θανάτου Ασφαλισμένου</option>
				            	<option value="death_old">Θανάτου Συνταξιούχου</option>
							</select>
						</div>
						<div class="form-group" style="margin-top: 30px;">
				            <input class="btn btn-primary" type="submit" name="submit_calc" value="Υπολογισμός">
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
