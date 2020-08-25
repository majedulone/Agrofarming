<?php
require("pages/logout.php");
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
setInterval(function(){
  check_user();
},2000);
function check_user(){
  jQuery.ajax({
    url:'pages/logout.php',
    type:'post',
    data:'type=ajax',
    success:function(result){
      if(result=='logout'){
        window.location.href='pages/Join.php';
      }
    }
  });
}
</script>


<!DOCTYPE html>
<html lang="">
<head>
  <title>AgtoFarming  || Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body id="top" style="padding:25px">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->
  <div class="bgded overlay" style="background-image:url('images/Background.jpg');">
    <!-- ################################################################################################ -->


    <div class="wrapper row1">
      <header id="header" class="hoc clear">

        <div>
          <div>
            <div>
              <ul><a class="faicon-linkedin" href="#"><i class="fa fa-location"></i></a>Kaunia, Rangpur
                <ul style="float: right"><a href="index.php">Logout</a></ul>
              </ul>
            </div>
            <div class="social-links">
              <div id="google_translate_element"></div>
            </div>
          </div>
        </div>


        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
          <a href="index.html"><img src="images/logo.png" alt="Logo" style=" width:60px; height:50px;"></a>
          <p>Agrofarming<p>
          </div>
          <nav id="mainav" class="fl_right">
            <div class="navigation">
              <ul class="clear">
                <li><a href="home.php">Home</a></li>
                <li><a class="drop" href="#">Gallery</a>
                  <ul>
                    <li><a href="pages/Photogallery1.php">Photo Gallery</a></li>
                    <li><a href="#">Video Gallery</a></li>
                    </ul
                  </li>
                  <li><a class="drop" href="#">Services</a>
                    <ul>
                      <li><a class="drop" href="#">Request Form</a>
                        <ul>
                          <li><a href="pages/show_data/S_allotment_data.php">Allotment</a></li>
                          <li><a href="pages/show_data/S_exhibition_data.php">Exhibitiob</a></li>
                          <li><a href="pages/show_data/S_help_data.php">Help</a></li>
                          <li><a href="#">Training</a></li>
                          <li><a href="pages/show_data/S_machinarice_data.php">Buy Machineries</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a class="drop" href="#">Office Stuff</a>
                    <ul>
                      <li><a href="#">Officer</a></li>
                      <li><a href="#">Aditional Officer</a></li>
                      <li><a href="#">Assitant Officer</a></li>
                      <li><a href="#">Plant Protection Officer</a></li>
                      <li><a href="#">Office Assitant</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Activity</a></li>

                </ul>
              </div>
            </nav>
            <!-- ################################################################################################ -->
          </header>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <section id="pageintro" class="hoc clear">
          <div>
            <!-- ################################################################################################ -->

            <h2 class="heading">Department of Agricultural Extension</h2>
            <h4>Agriculture is the largest employment sector in Bangladesh. A plurality of Bangladeshis earn their living from agriculture.</h4>

            <!-- ################################################################################################ -->
          </div>
        </section>
        <!-- ################################################################################################ -->
      </div><br><br>
      <!-- End Top Background Image Wrapper -->
      <div style="padding-left:100px">
        <a href="https://www.youtube.com/watch?v=bxWRglJFQNc">
          <img src="images/1.png" width="1084 px" height="616 px">
        </a>

      </div>
      <br>
      <!-- ################################################################################################ -->
      <div class="wrapper row3" style="background:"#c5e6ce";">
        <h2><marquee direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
          করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন <a href="https://bit.ly/coronatracerbd" target="_blank" style="color: blue;" title="https://bit.ly/coronatracerbd">https://bit.ly/coronatracerbd</a>। নিজে সুরক্ষিত থাকুন অন্যকেও নিরাপদ রাখুন। দেশের প্রথম ক্রাউডফান্ডিং প্ল্যাটফর্ম 'একদেশ'- এর মাধ্যমে আর্থিক অনুদান পৌঁছে দিন নির্বাচিত সরকারি-বেসরকারি প্রতিষ্ঠানসমূহে। ভিজিট করুন <a href="//ekdesh.ekpay.gov.bd" target="_blank" style="color: blue;" title="ekdesh.ekpay.gov.bd">ekdesh.ekpay.gov.bd</a> অথবা <a href="//play.google.com/store/apps/details?id=com.synesis.donationapp" target="_blank" style="color: blue;" title="“Ek Desh”">“Ek Desh”</a> অ্যাপ ডাউনলোড করুন। করোনার লক্ষণ দেখা দিলে গোপন না করে ডাক্তারের পরামর্শের জন্য ফ্রি কল করুন ৩৩৩ ও ১৬২৬৩ নম্বরে। করোনাভাইরাস প্রতিরোধে নিয়ম মেনে মাস্ক ব্যবহার করুন। আতঙ্কিত না হয়ে বরং সচেতন থাকুন। ভিজিট করুন <a href="//corona.gov.bd" target="_blank" style="color: blue;" title="corona.gov.bd">corona.gov.bd</a>
        </marquee></h2>

      </div><br>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="row" id="notice-board" style="padding-left: 100px; background:#292111" >
        <div class="notice-board-bg">
          <h2 style="color: white; padding-top: 10px">Notice Board</h2>
          <div id="notice-board-ticker" style="padding-bottom:10px">
            <ul>
              <li>
                <a href="#" title="করোনা ভাইরাসঃ ভয় নয়, করুন প্রতিরোধ ">করোনা ভাইরাসঃ ভয় নয়, করুন প্রতিরোধ </a>
              </li>
              <li>
                <a href="#" title="কৃষি সম্প্রসারণ অধিদপ্তর কর্তৃক নিবন্ধনকৃত জৈব বালাইনাশক এর তালিকা ">কৃষি সম্প্রসারণ অধিদপ্তর কর্তৃক নিবন্ধনকৃত জৈব বালাইনাশক এর তালিকা </a>
              </li>
              <li>
                <a href="#" title="মাঘ মাসে কৃষক ভাইদের করনীয় ">মাঘ মাসে কৃষক ভাইদের করনীয় </a>
              </li>
              <li>
                <a href="#" title="পৌষ মাসের করণীয় ">পৌষ মাসের করণীয় </a>
              </li>
              <li>
                <a href="#" title="কৃষি প্রণোদনা বাস্তবায়নের রোডম্যাপ">কৃষি প্রণোদনা বাস্তবায়নের রোডম্যাপ</a>
              </li>
            </ul>
            <button type="submit" class="btn btn-primary" style="border-radius: 15px;">All Notice</button>
          </div>
        </div>
      </div>
      <style>#notice-board-ticker ul li{
        list-style:none;
        }</style>
        <br>
        <br>


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
              <article><a href="#"><img class="btmspace-15" src="images/জাতীয় মনোগ্রাম.PNG" style="height:200px; weight:200px;padding:15px;" alt=""></a>

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
        <script src="layout/scripts/jquery.min.js"></script>
        <script src="layout/scripts/jquery.backtotop.js"></script>
        <script src="layout/scripts/jquery.mobilemenu.js"></script>
      </body>
      </html>
