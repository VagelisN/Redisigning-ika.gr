<?php

if(isset( $_POST['submit_reg']))
{
  include_once 'connect.php';
  $afm = mysqli_real_escape_string($conn,$_POST['afm']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  $query = "SELECT * FROM employers WHERE afm = '$afm'";
  $res1 = mysqli_query($conn,$query);
  $num_of_rows1 = mysqli_num_rows($res1);

  if($num_of_rows1 < 1)
  {
    header("Location: ../erg_signup.php?signup=afm_doesnt_exists");
    exit();
  }

  else
  {
     $row = mysqli_fetch_assoc($res1);
     $firstname=$row['first'];
     $lastname = $row['last'];
  }

  $query = "SELECT * FROM users_insured WHERE user_username = '$username'";
  $res = mysqli_query($conn,$query);
  $num_of_rows = mysqli_num_rows($res);

  $query = "SELECT * FROM users_employers WHERE user_username = '$username'";
  $res = mysqli_query($conn,$query);
  $num_of_rows  = $num_of_rows + mysqli_num_rows($res);

  if($num_of_rows > 0)
  {
    header("Location: ../erg_signup.php?signup=erg_username_exists");
    exit();
  }

  else
  {
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users_employers (user_username,user_pass,user_first,user_last,user_email,user_afm)
              VALUES ('$username','$hashed_pass','$firstname','$lastname','$email','$afm');";
    $res = mysqli_query($conn,$query);
    header("Location: ../erg_signup.php?signup=success");
    exit();
  }
}

else
{
  header("Location: ../erg_signup.php");
  exit();
}

 ?>
