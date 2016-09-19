<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->

<meta charset="utf-8">
<title>juvenile pacers BD</title>
<meta name="description" content="Place to put your description text">
<meta name="author" content="">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Mobile Specific Metas ================================================== 
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================
================================================== -->

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons ==================================================
================================================== -->

<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- Google Fonts ==================================================
================================================== -->

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Home - Content Part ==================================================
================================================== -->
<div id="header">
  <?php include 'header.php'; ?>
</div>
<!-- Contact Content Part - GoogleMap ==================================================
================================================== -->
<section class="map"> 
  <!-- google map -->
  <div class="map-holder">
    <div class="map-container">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29185.235022891244!2d90.38312758369732!3d23.884143840606505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41145cefdb1%3A0xf2849eabb10c1767!2s11+Rd+No+20%2C+Dhaka+1230!5e0!3m2!1sen!2sbd!4v1474184481330" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <!-- end google map --> 
    </div>
    <!--map-container ends here--> 
  </div>
  <!--map-holder ends here--> 
</section>

<!-- Contact Content Part - Contact Form ==================================================
================================================== -->
<div class="container">
  <div class="blankSeparator"></div>
  <!-- Contact Sidebar ==================================================
================================================== -->
  <div class="one_third contactsidebar">
    <section class="first">
      <h3>Contact Information</h3>
      <div class="boxtwosep"></div>
      <ul class="contactsidebarList">
        <li>Telephone: +88 02 55085902, 55085902</li>
        <li>Phone:  +88 01852948929, <br></li>
        <li><br>Website: <a href="#" title="">www.juvenilepacersbd.com</a></li>
        <li>Email: <a href="#" title="">info@juvenilepacersbd.com</a></li>
        <li><br /><p align="justify"><br>Address:4th floor,House-68,Sector-11,Road-20,Uttara,Dhaka <br>
</li>
		</ul>
    </section>
  </div>
  <!-- one_third ends here -->
  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h2>Leave a comment</h2>
      <div class="sepContainer"></div>
      <form action="process.php" method="post" id="contact_form">
        <div class="name">
          <label for="name">Your Name:</label>
          <p> Please enter your full name</p>
          <input id=name name=email type=text placeholder="e.g. Mr. John Smith" required />
        </div>
        <div class="email">
          <label for="email">Your Email:</label>
          <p> Please enter your email address</p>
          <input id=email name=email type=email placeholder="example@domain.com" required />
        </div>
        <div class="message">
          <label for="message">Your Message:</label>
          <p> Please enter your question</p>
          <textarea id=message name=message rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
          <input type="submit" value="Submit" />
        </div>
      </form>
    </div>
    <!-- end contactForm --> 
  </div>
</div>
<div class="blankSeparator2"></div>
<!--Footer ==================================================
================================================== -->
<div id="footer">
  <?php include 'footer.php'; ?>
  <!-- container ends here --> 
</div>
<!-- footer ends here --> 
<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
  <?php include 'copyright.php'; ?>
  <!-- container ends here --> 
</div>
<!-- copyright ends here --> 
<!-- End Document
================================================== --> 
<!-- Scripts ==================================================
================================================== --> 
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tooltip --> 
<script src="js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Tweets --> 
<script src="js/jquery.tweetable.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="js/superfish.js" type="text/javascript"></script> 
<script src="js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
</body>
</html>