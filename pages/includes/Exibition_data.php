<?php
$conn = mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db($conn,"form") or die (mysql_error());

  $name=$_POST['name'];
  $f_name=$_POST['f_name'];
  $address=$_POST['address'];
  $mobile_no=$_POST['mobile'];
  $nid=$_POST['nid'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $district=$_POST['district'];
  $c_amount=$_POST['c_amount'];
  $c_name=$_POST['c_name'];

  $query = "INSERT INTO exibition (name,fname,address,mobile_no,nid,email,gender,district,camount,cname)
  VALUES ('$name','$f_name','$address','$mobile_no','$nid','$email','$gender','$district','$c_amount','$c_name')";

  mysqli_query($conn,$query);

  echo "<h3>Data Successfully Submitted.....</h3>";
?>
