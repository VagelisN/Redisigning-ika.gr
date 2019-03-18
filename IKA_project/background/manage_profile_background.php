<?php

	if(isset( $_POST['submit_new_prof']))
	{
	  session_start();
	  include_once 'connect.php';
	  $email = mysqli_real_escape_string($conn,$_POST['email']);
	  $username = mysqli_real_escape_string($conn,$_POST['username']);
	  $password = mysqli_real_escape_string($conn,$_POST['pwd']);
	  $id = $_SESSION['u_username'];
	  if (empty($id) == true)
	  {
	  	header("Location: ../manage_profile.php?error=");
	  	exit();
	  }
	  if (empty($password))
	  {
	  	$query = "UPDATE users_insured SET user_email='$email' , user_username='$username'  WHERE user_username='$id' ";
	  }
	  else
	  {
	  	$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
	  	$query = "UPDATE users_insured SET user_email='$email' , user_username='$username', user_pass='$hashed_pass'  WHERE user_username='$id' ";
	  }
	  $res = mysqli_query($conn, $query);
	  if ( $res == FALSE)
	  {
	  	header("Location: ../manage_profile.php?failed_to_update");
	  	exit();
	  }
	  else //if the update was succesfull
	  {
	  	$_SESSION['u_username'] = $username;
	  	$_SESSION['u_email'] = $email;
	  	header("Location: ../manage_profile.php?update_succesfull");
	  	exit();
	  }

	}
	else
	{
	  header("Location: ../manage_profile.php");
	  exit();
	}

 ?>
