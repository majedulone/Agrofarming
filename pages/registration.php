<?php
$nameErr= $msg = $passwordErr = $employeeidErr = "";
$name = $employee_ID = $password= "";

if (isset($_POST["submit"])) {
  $is_valid = 1;
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only alphabates and white space allowed";
      $is_valid = 0;
    }

  }
  if(!empty($_POST["password"])) {
    $password = test_input($_POST["password"]);
    if(!preg_match("#[0-9]+#",$password)) {
      $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
      $passwordErr = "Your Password Must Contain At Least 1 alphabate!";
      $is_valid = 0;
    }

  }

  if (empty($_POST["employee_ID"])) {
    $employeeidErr = "Employee ID is required";
  } else {
    $employee_ID = test_input($_POST["employee_ID"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^([0-9]+)$/",$employee_ID)) {
      $employeeidErr = "Only number are allowed";
      $is_valid = 0;

    }
  }

  if ($is_valid==1) {
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
      $msg="Email Already taken";
    }
    else
    {
      $reg = "insert into emp_info(name,employee_ID,email,password) values ('$name','$employee_ID','$email','$password')";
      mysqli_query($conn,$reg);
      header('location:Join.php');
    }
  }


}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<!DOCTYPE html>
<html lang="">
<head>
  <title>Agrofarming || Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body id="top" >
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->
  <div class="bgded overlay" style="background-image:url('../images/form_backround.jpg'); height: 250px">
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
      <header id="header" class="hoc clear">
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
          <a href="index.html"><img src="../images/logo.png" alt="Logo" style=" width:60px; height:50px;"></a>
          <p>Agrofarming<p>
          </div>
          <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li><a href="../index.php">Home</a></li>
              <li><a class="drop" href="#">Services</a>
                <ul>
                  <li><a class="drop" href="#">Form</a>
                    <ul>
                      <li><a href="../pages/Allotment.php">For Allotment</a></li>
                      <li><a href="../pages/Exibition.php">For Exhibitiob</a></li>
                      <li><a href="../pages/Help.php">Help</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Training</a></li>
                  <li><a href="#">About District</a></li>
                </ul>
              </li>
              <li><a href="#">Agricultural weather</a>
                <ul>
                  <li><a href="#">National Bulletin</a></li>
                  <li><a href="#">District Bulletin</a></li>
                </ul>
              </li>

              <li><a href="../pages/Complain.php">Complaints/suggestions</a></li>
            </ul>
          </nav>
          <!-- ################################################################################################ -->
        </header>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <h2 style=" text-align: center; padding:25px;">Registration Page</h2>
      <!-- ################################################################################################ -->
    </div>
    <!-- End Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div  style="background:#04070d;">
      <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <form action="" method="post">
          <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter your name" name="name"required>
            <div class="error">
              <?php echo $nameErr;?>
            </div>
            <label for="employee_ID"><b>Employee ID</b></label>
            <input type="text" placeholder="Enter Employee ID" name="employee_ID"required>
            <div class="error">
              <?php echo $employeeidErr;?>
            </div>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>
            <div class="error">
              <?php echo $msg;?>
            </div>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <div class="error">
              <?php echo $passwordErr;?>
            </div>
            <hr>
            <button type="submit" name="submit" class="btn btn-primary" style="border-radius: 15px;">Sign Up</button>
          </div>
          <p class="a">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <div class="container signin">
            <p class="a">Already have an account? <a href="Join.php">Sign in</a>.</p>
          </div>
        </form>
        <p class="a">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
      </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row4 bgded overlay" style="background: #12081c">
      <footer id="footer" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="one_third first">
          <h6 class="heading">AGROFARMING</h6>
          <p>A plurality of Bangladeshis earn their living from agriculture. Although rice and jute are the primary crops, wheat is assuming greater importance. Tea is grown in the northeast. Because of Bangladesh's fertile soil and normally ample water supply, rice can be grown and harvested three times a year in many areas.</p>
          <p class="btmspace-50">Due to a number of factors, Bangladesh's labour-intensive agriculture has achieved steady increases in food grain production despite the often unfavourable weather conditions.</p>

        </div>
        <div class="one_third">
          <h6 class="heading">Contacts</h6>
          <ul class="nospace btmspace-30 linklist contact">
            <li><i class="fa fa-map-marker"></i>
              <address>
                Bus Stand &amp; Kaunia, Rangpur, Postcode/Zip: 5440
              </address>
            </li>
            <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
            <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
            <li><i class="fa fa-envelope-o"></i> uaokaunia@yahoo.com</li>
          </ul>
          <ul class="faico clear">
            <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
          </ul>
        </div>
        <div class="one_third">
          <h6 class="heading">Government of the People's Republic of Bangladesh</h6>
          <article><a href="#"><img class="btmspace-15" src="../images/জাতীয় মনোগ্রাম.PNG" style="height:200px; weight:200px;padding:15px;" alt=""></a>

          </article>
        </div>
        <!-- ################################################################################################ -->
      </footer>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
