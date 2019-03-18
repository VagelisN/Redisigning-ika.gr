<?php

	if (isset($_POST['submit_aitisi']))
	{
		include_once 'connect.php';

		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$afm_e = mysqli_real_escape_string($conn,$_POST['afm_e']);
		$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
		$afm = mysqli_real_escape_string($conn,$_POST['afm']);

		$query = "SELECT * FROM employers WHERE afm = '$afm_e' ";
		$res1 = mysqli_query($conn, $query);
		$num_of_rows = mysqli_num_rows($res1);

		if ($num_of_rows < 1)
		{
			header("Location: ../aithsh_asfalisis_erg.php?employer_not_found");
			exit();
		}

		$query = "SELECT * FROM insured WHERE afm = '$afm' ";
		$res = mysqli_query($conn, $query);
		$num_of_rows = mysqli_num_rows($res);

		if ($num_of_rows < 1)
		{
			header("Location: ../aithsh_asfalisis_erg.php?insured_not_found");
			exit();
		}
		if($row1 = mysqli_fetch_assoc($res1))
		{
			$num_employees = intval($row1['num_employees']);
			$num_employees ++;
			$query = "UPDATE employers SET num_employees = '$num_employees' WHERE afm = '$afm_e'";
			$res = mysqli_query($conn,$query);
			$url ="aithsh_asfalisis_erg.php?email=".$email;
			header("Location: $url");
			exit();
		}
		else
		{
			header("Location: ../aithsh_asfalisis_erg.php?unknown_error");
			exit();
		}
	}
	else
	{
		header("Location: ../aithsh_asfalisis_erg.php");
		exit();
	}

?>
