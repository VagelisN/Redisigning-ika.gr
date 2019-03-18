<?php
  include_once 'header.php';
?>

<div class="container-fluid">
  <div class="row" style="height: 35px; width: 40%; padding:0;">
      <ul class="breadcrumb" style="background-color: white;">
        <li><a href="index.php">Αρχική</a></li>
        <li class="active">Υπηρεσίες ασφαλισμένου</li>
      </ul>
  </div>
	<div class="row text-center" style="margin-top:35px; height: 400px;"><br>
        <div class="col-lg-2 col-lg-offset-1">
              <button  onclick="location.href = 'insurance.php';" class="btn btn-lg" style="background-color:#fcb928; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Ασφαλιστική Ικανότητα</h3></button>
            <p>Παρουσίαση του ασφαλιστικού δικαιώματος ασφαλισμένου και δυνατότητα εκτύπωσης βεβαίωσης </p>
        </div>
        <div class="col-lg-2">
          <button onclick="location.href = 'benefit_calc.php';" class="btn btn-lg" style="background-color:#f18126; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Υπολογισμός Σύνταξης</h3></button>
            <p>Υπολογίζει τη σύνταξη την οποία θα λάβετε ανάλογα με τα χρόνια υπηρεσίας και το συνολικό σας εισόδημα</p>

        </div>

        <div class="col-lg-2">
          <button onclick="location.href = 'child_insurance.php';" class="btn btn-lg" style="background-color:#f95f2b; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Ασφάλιση Τέκνου</h3></button>
            <p>Αίτηση προς την υπηρεσία του ΙΚΑ για ασφάλιση τέκνου. </p>
        </div>
        <div class="col-lg-2">

          <button class="btn btn-lg" style="background-color:#f34330; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Έλεγχος εισφορών</h3></button>
            <p>lorem ipsum Far far away, behind the word mountains, far from the countries Vokalia and Consonantia  </p>
        </div>
        <div class="col-lg-2">

          <button class="btn btn-lg" style="background-color:#ea2c2c; color:white; white-space: normal; border-radius:15px; margin-bottom:8px;"><h3>Υπόλοιπες άδειες</h3></button>
            <p>lorem ipsum Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
	</div>
</div>

<?php
  include_once 'footer.php';
?>