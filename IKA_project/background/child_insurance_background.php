<?php

if(isset( $_POST['submit_reg']))
{
  include_once 'connect.php';
  $afm = mysqli_real_escape_string($conn,$_POST['afm']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $child_firstname = mysqli_real_escape_string($conn,$_POST['child_firstname']);
  $child_lastname = mysqli_real_escape_string($conn,$_POST['child_lastname']);


  $query = "SELECT * FROM insured WHERE afm = '$afm'";
  $res = mysqli_query($conn,$query);
  $num_of_rows = mysqli_num_rows($res);

  if($num_of_rows < 1)
  {
    header("Location: ../child_insurance.php?insured_not_found");
    exit();
  }

  else
  {
    $row = mysqli_fetch_assoc($res);
    $ins_children = intval($row['ins_children']);
    $ins_children ++;
    $query = "UPDATE insured SET ins_children = '$ins_children' WHERE afm = '$afm'";
    $res = mysqli_query($conn,$query);
    $url ="../child_insurance.php?tek_first=".$child_firstname. "&tek_last=".$child_lastname. "&email=".$email;
    header("Location: $url");
    exit();
  }
}
else
{
  header("Location: ../child_insurance.php?child_insurance_submit_error");
  exit();
}
 ?>
