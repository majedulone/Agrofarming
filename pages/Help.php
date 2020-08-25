  <!DOCTYPE html>
  <html lang="">
  <head>
  <title>Agrofarming || Help Page</title>
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
  <div class="bgded overlay" style="background-image:url('../images/form_backround3.jpg'); height: 250px">
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
    <h2 style=" text-align: center; padding:25px;">Help Form</h2>
    <!-- ################################################################################################ -->
  </div>
  <!-- End Top Background Image Wrapper -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3" style="background-color: #04070d;">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <form style="margin-top: -150px;" action="includes/Help_data.php" method="post">
        <table style="padding:20px; table-layout: center;">
          <tr>
            <td>
              <label for="name">নাম : </label>
              </td>
              <td>
              <input type="text" class="form-control" size="35" name="name" required>
            </td>
            <br>
            </tr>
            <tr>
            <td>
          <label for="f_name">পিতার নাম :</label>
          </td>
          <br>
          <td>
          <input type="text" class="form-control" size="35"  name="f_name" required>
          </td>
          </tr>
          <br>
            <tr>
            <td>
          <label for="address">ঠিকানা :</label>
          </td>
          <br>
          <td>
          <input type="text" class="form-control" size="35"  name="address" required>
          </td>
          </tr>
          <br>
          <tr>
          <td>
          <label for="mobile">মোবাইল নং :</label>
          </td>
          <td>
          <input style type="text" class="form-control" size="35" name="mobile" required>
          </td>
          </tr>
          <br>
          <tr>
          <td>
          <label for="nid">জাতীয় পরিচয়পত্র নং :</label>
          </td>
          <td>
          <input style type="text" class="form-control" size="35" name="nid" required>
          </td>
          </tr>
          <br>
          <tr>
          <td>
          <label for="email">ই-মেইল :</label>
          </td>
          <td>
          <input style type="email" class="form-control" size="35" name="email" required>
          </td>
          </tr>
          <br>
          <tr>
          <td>
          <label for="gender">লিঙ্গ :</label>
          </td>
          <td>
            <div class="form-group">
              <select class="form-control" name="gender" required>
                <option>বাছাই করুন</option>
                <option>পুরুষ</option>
                <option>মহিলা</option>
                <option>অন্যান্য</option>
              </select>
          </div>
          </td>
          </tr>
          <tr>
          <td>
          <label for="d_name">ইউনিয়ান :</label>
          </td>
          <td>
          <input type="text" class="form-control" size="35" name="district"required>
    </td>
    </tr>
    <br>
    <tr>
      <td>
      <label for="problem">আপনার সমস্যা : </label>
      </td>
      <td>
      <textarea type="text" placeholder="আপনার সমস্যাগুলো সম্পর্কে লিখুন" rows="6" cols="40" name="problem" required></textarea>
    </td>
    </tr>
    <br>
    </table>
    <br>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Remember me
      </label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" style="border-radius: 15px;">Submit</button>
  </form>
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
