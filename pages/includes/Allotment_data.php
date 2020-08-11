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
  $need=$_POST['need'];

  $query = "INSERT INTO allotment (name,fname,address,mobile_no,nid,email,gender,district,camount,cname,need)
  VALUES ('$name','$f_name','$address','$mobile_no','$nid','$email','$gender','$district','$c_amount','$c_name','$need')";

  mysqli_query($conn,$query);

  echo "<h3>Data Successfully Submitted.....</h3>";
?>
