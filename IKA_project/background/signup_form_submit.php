<?php

if(isset( $_POST['submit_reg']))
{
  include_once 'connect.php';
  $afm = mysqli_real_escape_string($conn,$_POST['afm']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  $query = "SELECT * FROM insured WHERE afm = '$afm'";
  $res = mysqli_query($conn,$query);
  $num_of_rows = mysqli_num_rows($res);

  if($num_of_rows < 1)
  {
    header("Location: ../signup.php?signup=afm_doesnt_exists");
    exit();
  }
  else
  {
     $row = mysqli_fetch_assoc($res);
     $firstname=$row['first'];
     $lastname = $row['last'];
     $father = $row['father'];
     $amka =$row['amka'];
  }


  $query = "SELECT * FROM users_insured WHERE user_username = '$username'";
  $res = mysqli_query($conn,$query);
  $num_of_rows = mysqli_num_rows($res);

  $query = "SELECT * FROM users_employers WHERE user_username = '$username'";
  $res = mysqli_query($conn,$query);
  $num_of_rows  = $num_of_rows + mysqli_num_rows($res);

  if($num_of_rows > 0)
  {
    header("Location: ../signup.php?signup=username_exists");
    exit();
  }

  else
  {
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users_insured (user_username,user_pass,user_first,user_last,user_father,user_email,user_afm,user_amka)
              VALUES ('$username','$hashed_pass','$firstname','$lastname','$father','$email','$afm','$amka');";
    $res = mysqli_query($conn,$query);
    header("Location: ../signup.php?signup=success");
    exit();
  }
}

else
{
  header("Location: ../signup.php");
  exit();
}

 ?>
