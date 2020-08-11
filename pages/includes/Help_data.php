	<?php
	$conn=mysqli_connect("localhost","root","") or die (mysql_error());
	mysqli_select_db($conn,"form");

	$name=$_POST['name'];
	$f_name=$_POST['f_name'];
	$address=$_POST['address'];
	$mobile_no=$_POST['mobile'];
	$nid=$_POST['nid'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$district=$_POST['district'];
	$problem=$_POST['problem'];


	  $reg = "INSERT INTO help (name,fname,address,mobile_no,nid,email,gender,district,problem)
	VALUES ('$name','$f_name','$address','$mobile_no','$nid','$email','$gender','$district','$problem')";
	  mysqli_query($conn,$reg);
	  echo "<h3>Data Successfully Submitted.....</h3>";

	?>
