<?php
  include_once 'header.php';
?>

<div class="container-fluid">
  <div class="row" style="height: 35px; width: 40%; padding:0;">
      <ul class="breadcrumb" style="background-color: white;">
        <li><a href="index.php">Αρχική</a></li>
        <li class="active">Υπηρεσίες Εργοδότη</li>
      </ul>
  </div>
	<div class="row text-center" style="margin-top:35px; height: 400px;"><br>
        <div class="col-lg-2 col-lg-offset-1">
              <button  onclick="location.href = 'asf_enhm.php';" class="btn btn-lg" style="background-color:#fcb928; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Ασφαλιστική Ενημερότητα</h3></button>
            <p>Έλεγχος ασφαλιστικής ενημερότητας των εργαζομένων που αντιστοιχούν σε σας και δυνατότα εκτύπωσης βεβαίωσης</p>
        </div>
        <div class="col-lg-2">
          <button onclick="location.href = 'mon_calc.php';" class="btn btn-lg" style="background-color:#f18126; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Υπολογισμός Μισθού</h3></button>
            <p>Υπολογίζει τον μισθό που πρέπει να δοθεί σε εναν εργαζόμενο ανάλογα με τα χρόνια υπηρεσίας και την εκπαίδευσή του</p>

        </div>

        <div class="col-lg-2">
          <button onclick="location.href = 'aithsh_asfalisis_erg.php';" class="btn btn-lg" style="background-color:#f95f2b; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Ασφάλιση Εργαζομένου</h3></button>
            <p>Αίτηση προς την υπηρεσία του ΙΚΑ για δήλωση ασφάλισης νέου εργαζομένου </p>
        </div>
        <div class="col-lg-2">

          <button class="btn btn-lg" style="background-color:#f34330; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Οικονομική Καρτέλα</h3></button>
            <p>lorem ipsum Far far away, behind the word mountains, far from the countries Vokalia and Consonantia  </p>
        </div>
        <div class="col-lg-2">

          <button class="btn btn-lg" style="background-color:#ea2c2c; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Yπολογισμός εισφορών</h3></button>
            <p>lorem ipsum Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
	</div>
</div>

<?php
  include_once 'footer.php';
?>