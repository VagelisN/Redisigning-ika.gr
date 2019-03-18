<?php

	if (isset($_POST['submit_asf_enhm']))
	{
		include_once 'connect.php';
		$afm = mysqli_real_escape_string($conn,$_POST['afm']);

		$query = "SELECT * FROM employers WHERE afm = '$afm'";
		$res = mysqli_query($conn, $query);
		$num_of_rows = mysqli_num_rows($res);

		if ($num_of_rows < 1)
		{
			header("Location: ../asf_enhm.php?user_not_found");
			exit();
		}
		else
		{
			if($row = mysqli_fetch_assoc($res))
			{
				$url ="../asf_enhm.php?afm=".$row['afm']. "&expire_date=".$row['expire_date']. "&start_date=".$row['start_date'] ."&first=" .$row['first']."&last=".$row['last'];
				header("Location: $url");
				exit();
			}
			else
			{
				header("Location: ../asf_enhm.php?unknown_error");
				exit();
			}
		}
	}
	else
	{
		header("Location: ../asf_enhm.php");
		exit();
	}

?>
