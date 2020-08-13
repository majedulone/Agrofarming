<?php
session_start();
$conn=mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db($conn,"registration");
$employee_ID=$_POST['employee_ID'];
$password=$_POST['password'];
$s = "select * from emp_info where employee_ID='$employee_ID' && password = '$password'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
  
  header('Location:../home.php');
}
else
{
  echo "Wrong Employee ID or password....";
  header('location:../Join.php');
}
?>
