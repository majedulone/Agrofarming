<?php
$con = mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db($con,"form") or die (mysql_error());
if(isset($_POST['submit']))
{
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
  $query = "insert into allotment (name,father's_name,address,mobile_no,nid,email,gender,district,camount,cname,need) values ('$name','$f_name','$address','$mobile_no','$nid','$email','$gender','$district','$c_amount','$c_name','$need')";
  if(mysqli_query($con,$query))
  {
    echo "<h3>data Successfully submitted.....</h3>";
  }
  else {
    echo "Failed to data submission.....";
  }
}
?>
