<?php

	if (isset($_POST['submit_insurance']))
	{
		include_once 'connect.php';

		$afm = mysqli_real_escape_string($conn,$_POST['afm']);
		$amka = mysqli_real_escape_string($conn,$_POST['amka']);

		$query = "SELECT * FROM users_insured WHERE user_afm = '$afm' AND user_amka = '$amka' ";
		$res = mysqli_query($conn, $query);
		$num_of_rows = mysqli_num_rows($res);

		if ($num_of_rows < 1)
		{
			header("Location: ../insurance.php?user_not_found");
			exit();
		}
		elseif ($num_of_rows > 1)
		{
			header("Location: ../insurance.php?more_than_one_users");
			exit();
		}
		else
		{
			if($row = mysqli_fetch_assoc($res))
			{
				$query = "SELECT * FROM insured WHERE afm = '$afm' AND amka = '$amka' ";
				$res = mysqli_query($conn, $query);
				$num_of_rows = mysqli_num_rows($res);
				$row1 = mysqli_fetch_assoc($res);
				$url ="../insurance.php?u_userame=".$row['user_username']."&u_afm=" .$row['user_afm']. "&u_expire_date=".$row1['expire_date']. "&u_start_date=".$row1['start_date'] . "&u_amka=" .$row['user_amka'] . "&u_first=" .$row1['first']. "&u_last=" .$row1['last'];
				header("Location: $url");
				exit();
			}
			else
			{
				header("Location: ../insurance.php?unknown_error");
				exit();
			}
		}
	}
	else
	{
		header("Location: ../insurance.php");
		exit();
	}

?>
