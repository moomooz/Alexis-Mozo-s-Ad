<!DOCTYPE HTML>
<?php 
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<html>

<head>
<title>Alexis Mozo Ad</title>
<link rel="stylesheet" type="text/css" href="Ad.css">
</head>

<body>
<center>
<div class="mbody"><!--Mobile-Body Div-->
<h2 class="mixP">Valid through <FONT COLOR="#990000"><b>Jan 2013</b></FONT>...</h2>
<img src="hero.png" class="headpic"/>
<h1>Congratulations <?php echo $_SESSION['email'];?> on your coupon!!</h1>


<div style="height:100px;"></div>
<a href="https://maps.google.com">  <img src="ico_map.png" class="mapP"/>  </a>
<a href="https://facebook.com">  <img src="ico_fb.png" class="mapP"/>  </a>

<p class="participation">Copyright @2012-2013 Ethereal Day Spa and Salon, LLC.
<br><a href="PrivacyPolicy.html" ">Privacy Policy</a></p>
</center>
</body>
</html>