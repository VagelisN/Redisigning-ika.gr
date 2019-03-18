<?php
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>IKA</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flag-icon.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body style="background-color: #edf0f5;">
	<div class="container" style="width:1200px; background-color: white;">
    <div class = "row">
      <nav class="navbar navbar-default" style="background-color: darkgray; border:none;">
          <div class="col-md-2">
            <a href="index.php"> <img src="assets/img/logo.jpg" style="height:55px; width:80px; padding-top: 2px;"> </a>
          </div>
          <div class="col-md-6">
            <form class="navbar-form" role="search" style="padding-top: 4px;">
              <div class="input-group add-on">
                <input class="form-control" placeholder="Αναζήτηση" name="srch-term" id="srch-term" type="text" style="width: 300px;">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-1">
               <div class="dropdown" style="padding-top: 12px;">
                  <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown" style="color:black;"><span class="flag-icon flag-icon-gr" style="margin-right: 5px;"></span>Ελληνικά</a>
                  <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" style="text-align: left;">
                    <li><a href="#"><span class="flag-icon flag-icon-gr" style="margin-right: 4px;"></span>Ελληνικά <span class="glyphicon glyphicon-ok" style="padding-right: 5px;"></span></a></li>
                    <li><a href="#"><span class="flag-icon flag-icon-us" style="margin-right: 4px;"></span>English</a></li>
                  </ul>
               </div>
          </div>
          <div class="col-md-3 navigation" style="height:100%;">
            <ul class="list-inline" style="height:100%; list-style:none; padding-left: 20px;">
              <?php
    						if (isset($_SESSION['user_employee']))
    						{
									if ($_SESSION['user_employee'] == 0)
									{
										echo '<li style="margin-left: 30px; padding-top: 19px;"><a href="profile.php" ><span class="glyphicon glyphicon-user" style ="padding-right:5px;"></span>'. $_SESSION['u_username']. '</a></li>';
	    							echo '<li style="padding-left: 5px;"><form method="post" action = "background/logout.php"><button name ="logout" class = "btn btn-link"><span class="glyphicon glyphicon-log-out" style ="padding-right:5px;"></span>Αποσύνδεση</button></form></li>';
									}
    							else
									{
										echo '<li style="margin-left: 30px; padding-top: 19px;"><a href="erg_profile.php" ><span class="glyphicon glyphicon-user" style ="padding-right:5px;"></span>'. $_SESSION['u_username']. '</a></li>';
	    							echo '<li style="padding-left: 5px;"><form method="post" action = "background/logout.php"><button name ="logout" class = "btn btn-link"><span class="glyphicon glyphicon-log-out" style ="padding-right:5px;"></span>Αποσύνδεση</button></form></li>';
    							}
    						}
    						else
    						{
    							echo '<li style="margin-left: 30px;"><a href="login.php"><span class="glyphicon glyphicon-user" ></span> Σύνδεση</a></li>
    								<li style="height:100%; padding-left: 5px; padding-top: 19px;"><a href="bef_signup.php" style="padding-top: 25px;"><span class="glyphicon glyphicon-log-in"></span> Εγγραφή</a></li>';
    						}
    					?>
            </ul>
          </div>
      </nav>
    </div>
    <div class="row" style="height:35px; background-color: #FF7D11; padding: 0; margin-top: -20px;">
      <div class="col-md-3" align="center" style="height: 100%; border-right: 2px solid black;">
        <button class="btn btn-primary" href="#" style="width: 100%; height: 100%; background-color:  #FF7D11; text-decoration: none; color: black; font-size: 20px; border: none;">Ανακοινώσεις</a>
      </div>
      <div class="col-md-3" align="center" style="border-right: 2px solid black;">
        <div class="dropdown"">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#" style="width: 100%; height: 35px; background-color:  #FF7D11; border: none; color: black; font-size: 19px;">Ηλεκτρονικές Υπηρεσίες<span class="caret"></span>
            </a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="width: 100%; background-color: #ffe6cc;">
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Υπηρεσίες Ασφαλισμένων</a>
                <ul class="dropdown-menu" style="background-color: #fff2e6">
                  <li><a tabindex="-1" href="insurance.php">Ασφαλιστική Ικανότητα</a></li>
                  <li><a href="benefit_calc.php">Εργαλείο υπολογισμού σύνταξης</a></li>
                  <li><a href="child_insurance.php">Ασφάλιση τέκνου</a></li>
                  <li><a href="#">Έλεγχος Εισφορών</a></li>
                  <li><a href="#">Υπόλοιπες άδειες</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Υπηρεσίες Εργοδοτών</a>
                <ul class="dropdown-menu" style="background-color: #fff2e6">
                  <li><a tabindex="-1" href="asf_enhm.php">Βεβαίωση Ασφαλιστικής Ενημερότητας</a></li>
                  <li><a href="mon_calc.php">Υπολογισμός μισθού εργαζομένου</a></li>
                  <li><a href="aithsh_asfalisis_erg.php">Ασφάλιση εργαζομένου</a></li>
                  <li><a href="#">Οικονομική Καρτέλα Εργοδότη</a></li>
                  <li><a href="#">Εργαλείο υπολογισμού εισφορών</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Υπηρεσίες Συνταξιούχων</a></li>
              <li class="divider"></li>
              <li><a>Υπηρεσίες Αναπηρίας</a></li>
            </ul>
        </div>
      </div>
      <div class="col-md-3" align="center" style="height: 100%; border-right: 2px solid black;">
        <button class="btn btn-primary" href="#" style="width: 100%; height: 100%; background-color:  #FF7D11; text-decoration: none; color: black; font-size: 20px; border: none;">Επικοινωνία</a>
      </div>
      <div class="col-md-3" align="center" style="height: 100%;">
        <button class="btn btn-primary" href="#" style="width: 100%; height: 100%; background-color:  #FF7D11; text-decoration: none; color: black; font-size: 20px; border: none;">Άλλοι φορείς</a>
      </div>

    </div>
