<?php
$conn = mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db($conn,"form") or die (mysql_error());

  $name=$_POST['name'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $mobile_no=$_POST['mobile'];
  $nid=$_POST['nid'];
  $suggestions=$_POST['suggestion'];

  $query = "INSERT INTO complain (name,address,email,mobile_no,nid,suggestions)
  VALUES ('$name','$address','$email','$mobile_no','$nid','$suggestions')";

  mysqli_query($conn,$query);

  echo "<h3>Data Successfully Submitted.....</h3>";
?>
