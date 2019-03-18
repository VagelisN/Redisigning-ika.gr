<?php

	session_start();
	if( isset($_POST['login_submit']))
	{
		include 'connect.php';

		$uid = mysqli_real_escape_string($conn ,$_POST['username']);
		$pwd = mysqli_real_escape_string($conn ,$_POST['password']);

		$sql = "SELECT * FROM users_insured WHERE user_username = '$uid'";
		$result = mysqli_query($conn, $sql);
		$result_check = mysqli_num_rows($result);


		if ( $result_check < 1)
		{
			$sql = "SELECT * FROM users_employers WHERE user_username = '$uid'";
			$result = mysqli_query($conn, $sql);
			$result_check = mysqli_num_rows($result);
			if ( $result_check < 1)
			{
					header("Location: ../login.php?login=no_user_found");
					exit();
			}
			else
			{
				$_SESSION['user_employee']=1;
				if ( $row = mysqli_fetch_assoc($result))
				{
					$hashed_check = password_verify($pwd, $row['user_pass']);
					if ($hashed_check == false)
					{
						header("Location: ../login.php?login=wrong_password");
						exit();
					}
					elseif ($hashed_check == true)
					{
						$afm = $row['user_afm'];

						$sql = "SELECT * FROM employers WHERE afm = '$afm'";
						$result = mysqli_query($conn, $sql);
						$result_check = mysqli_num_rows($result);
						$row1 = mysqli_fetch_assoc($result);

						// pragmatopoihse to login
						$_SESSION['u_username'] = $row['user_username'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_afm'] = $row['user_afm'];
						$_SESSION['u_expire_date'] = $row1['expire_date'];
						$_SESSION['u_start_date'] = $row1['start_date'];
						$_SESSION['u_erg'] = $row1['num_employees'];
						header("Location: ../erg_profile.php?login=success");
						exit();
					}
				}
			}
		}
		else
		{
			$_SESSION['user_employee']=0;
			if ( $row = mysqli_fetch_assoc($result))
			{
				$hashed_check = password_verify($pwd, $row['user_pass']);
				if ($hashed_check == false)
				{
					header("Location: ../login.php?login=wrong_password");
					exit();
				}
				elseif ($hashed_check == true)
				{

					$afm = $row['user_afm'];

					$sql = "SELECT * FROM insured WHERE afm = '$afm'";
					$result = mysqli_query($conn, $sql);
					$row1 = mysqli_fetch_assoc($result);
					// pragmatopoihse to login
					$_SESSION['u_username'] = $row['user_username'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_father'] = $row['user_father'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_afm'] = $row['user_afm'];
					$_SESSION['u_amka'] = $row['user_amka'];
					$_SESSION['u_expire_date'] = $row1['expire_date'];
					$_SESSION['u_start_date'] = $row1['start_date'];
					$_SESSION['u_tekn'] = $row1['ins_children'];
					header("Location: ../profile.php?login=success");
					exit();
				}
			}
		}
	}

?>
