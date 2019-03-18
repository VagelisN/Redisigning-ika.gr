<?php 
	include_once 'header.php';
?>

<div class="container-fluid" style="height: 500px;">
	<div class="row">
		<div class="row" style="height: 35px; width: 40%; padding:0;">
			<ul class="breadcrumb" style="background-color: white;">
				<li><a href="index.php">Αρχική</a></li>
				<li class="active">Εγγραφή ως</li>
			</ul>
		</div>
		<div class="col-sm-6 text-center " style="height: 500px; border-right: 1px solid black;">
			<div class="cliente">
				<h2 style="color: black;">Λογαριασμός Ασφαλισμένου</h2>
				<button type="button" class="btn btn-primary btn-lg" style="margin-top: 40px;" onclick="location.href = 'signup.php';">Εγγραφή Ασφαλισμένου</button>
				<li style="margin-top: 20px; list-style: none;"><a href="login.php">Έχετε ήδη λογαριασμό;</a></li>
				<div class="cliente ">
					<text><h3>Γιατί να δημιουργήσω λογαριασμό?</h3></text>
					<p class="text-center" style="margin-top: 15px; padding: 0 10px;">Παραθέτω τους αντίστοιχους λόγους.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at felis tempor, rutrum quam ac, ultricies odio. Vivamus ut est metus. Maecenas lacinia convallis faucibus. Quisque commodo risus in justo ultricies, ac tincidunt lacus dignissim. Nam laoreet, elit eget pharetra congue, odio libero dapibus dui, a vehicula ex ligula at risus. Quisque at massa id quam rutrum auctor vitae sit amet risus.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 text-center">
			<div class="cliente">
				<h2 style="color: black;">Λογαριασμός Εργοδότη</h2>
				<button type="button" class="btn btn-primary btn-lg" style="margin-top: 40px;" onclick="location.href = 'erg_signup.php';">Εγγραφή Εργοδότη</button>
				<li style="margin-top: 20px; list-style: none;"><a href="login.php">Έχετε ήδη λογαριασμό;</a></li>
				<div class="cliente ">
					<text><h3>Γιατί να δημιουργήσω λογαριασμό?</h3></text>
					<p class="text-center" style="margin-top: 15px; padding: 0 10px;">Παραθέτω τους αντίστοιχους λόγους.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at felis tempor, rutrum quam ac, ultricies odio. Vivamus ut est metus. Maecenas lacinia convallis faucibus. Quisque commodo risus in justo ultricies, ac tincidunt lacus dignissim. Nam laoreet, elit eget pharetra congue, odio libero dapibus dui, a vehicula ex ligula at risus. Quisque at massa id quam rutrum auctor vitae sit amet risus.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 

	include_once 'footer.php';

?>