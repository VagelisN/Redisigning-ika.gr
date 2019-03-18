<?php
	include_once 'header.php';
?>

<div class="row" style="height: 600px; ">
	<div class="row" style="height: 35px; width: 60%; padding:0;">
			<ul class="breadcrumb" style="background-color: white;">
				<li><a href="index.php">Αρχική</a></li>
				<li><a href="erg_services.php">Υπηρεσίες εργοδοτών</a></li>
				<li class="active">Εργαλείο υπολογισμού μισθού εργαζομένου</li>
			</ul>
		</div>
	<div class="col-md-3 sidenav text-center" style=" background-color: white ;">
          <h2 style="font-size: 19px; padding-top: 10px; padding-bottom: 25px; color: black;">Υπηρεσίες για Εργοδότες</h2>
          <ul class="nav nav-sidebar services">

            <li style="font-size: 20px; height: 70px;  border: 1px solid black;"><a href="asf_enhm.php">Βεβαίωση Ασφαλιστικής Ενημερότητας</a></li>
            <li style="font-size: 20px; height: 70px;  border: 1px solid black; border-top:none;"><a href="mon_calc.php">Εργαλείο υπολογισμού μισθού</a></li>
            <li style="font-size: 20px; height: 70px; padding-top: 12px; border: 1px solid black; border-top:none;"><a href="aithsh_asfalisis_erg.php">Ασφάλιση Εργαζομένου</a></li>
			<li style="font-size: 20px; height: 70px; border: 1px solid black; border-top:none;"><a href="#">Οικονομική καρτέλα εργοδότη</a></li>
			<li style="font-size: 20px; height: 70px; padding-top: 10px; border: 1px solid black; border-top:none;"><a href="#">Υπολογισμός Εισφορών</a></li>
          </ul>
		</div>


	<div class="col-md-9 text-center" style="margin-top: 0px;">
		<h2 style="text-align: center; text-decoration: underline; color: black;">Εργαλείο Υπολογισμού Μισθού Εργαζομένου</h2>
		<?php
			if (isset($_GET['salary']))
			{
				$sal = $_GET['salary'];
				$year = 12 * $sal;
				echo
				'
					<div class="row" style="margin-top: 30px;">
						<div class="col-md-12" style="font-size: 20px;">
							Το ποσό που δικαιούται ο εργαζόμενος με βάση τα στοιχεία που δώσατε είναι: '.$sal.' ευρώ. Αυτό το ποσό αντιστοιχεί σε ετήσιο εισόδημα : '.$year.' ευρώ.
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
		            	<ul class="list-inline">
		            		<li><label for="years_of_work">Συνολικά Χρόνια Υπηρεσίας: </label></li>
		            		<li><input class="form-control" type="text" name="years_of_work" id = "years_of_work" style="width: 400px;" /></li>
		            	</ul>
		            </div>
		            <div class="form-group">
			            Βαθμίδα Εκπαίδευσης Εργαζομένου:
			            <div class="radio-inline">
							<label><input type="radio" name="vathmida" value="first_degree">Πρωτοβάθμια</label>
						</div>
						<div class="radio-inline">
							<label><input type="radio" checked="checked" name="vathmida" value="second_degree">Δευτεροβάθμια</label>
						</div>
						<div class="radio-inline">
							<label><input type="radio" name="vathmida" value="third_degree">Πανεπιστημιακή</label>
						</div>
					</div>
					<div class="form-group" style="margin-top: 30px;">
			            <input class="btn btn-primary" type="submit" name="submit_mon_calc" value="Υπολογισμός">
			        </div>
				</form>
				';
			}

		?>



	</div>
</div>

<?php
	include_once 'footer.php';
?>
