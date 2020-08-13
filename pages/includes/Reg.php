<?php
session_start();
header('location:../Join.php');
$conn=mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db($conn,"registration");
$name=$_POST['name'];
$employee_ID=$_POST['employee_ID'];
$email=$_POST['email'];
$password=$_POST['password'];
$s = "select * from emp_info where email='$email'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
  echo"Email Already taken";
}
else
{
  $reg = "insert into emp_info(name,employee_ID,email,password) values ('$name','$employee_ID','$email','$password')";
  mysqli_query($conn,$reg);
  echo "Registration Successful";
}
?>
