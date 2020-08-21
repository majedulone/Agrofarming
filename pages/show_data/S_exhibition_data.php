<!DOCTYPE html>
<html lang="">
<head>
<title>Agrofarming || Allotment Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body id="top" >
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../../images/PBackground.jpg');">
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <a href="index.html"><img src="../../images/logo.png" alt="Logo" style=" width:60px; height:50px;"></a>
        <p>Agrofarming<p>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../../home.php">Home</a></li>
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
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<h2 style=" text-align: center; padding:25px;">Exhibition request</h2>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class=""style="padding: 25px;">
<table border="1" style="color: black;">
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Need</th>
  </tr>
  <tr>
    <?php
    $conn=mysqli_connect("localhost","root","") or die (mysql_error());
    mysqli_select_db($conn,"form");
    $s = "select name,address, mobile_no, email, cname from exibition";
    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);
    if ($num >0) {
       while ($row = mysqli_fetch_assoc($result) ) {
         echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["mobile_no"]."</td><td>".$row["email"]."</td><td>".$row["cname"]."</td></tr>";
       }
    }

  ?>
</table>
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
      <article><a href="#"><img class="btmspace-15" src="F:\Web\Template\Agriculture\basend\images\জাতীয় মনোগ্রাম.PNG" style="height:200px; weight:200px;padding:15px;" alt=""></a>

      </article>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div><!-- ################################################################################################ -->
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
