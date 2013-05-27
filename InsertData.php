<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

//Start user session
session_start();

//Connect to database
$con=mysqli_connect("localhost","root","root","AppAd"); 

//Check if connection was succesful
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

/* ======================================================================================= */
// Get the OS of Desktop
$ua = $_SERVER["HTTP_USER_AGENT"];

// Linux
$linux = strpos($ua, 'Linux') ? true : false;

// Macintosh
$mac = strpos($ua, 'Macintosh') ? true : false;

// Windows
$win = strpos($ua, 'Windows') ? true : false;

/* ============================ */

if ($linux) { // Linux Desktop
$desktop="Linux";
}

if ($mac) { // mac Desktop
$desktop="Macintosh";
}

if ($win) { // win Desktop
$desktop="Windows";
}

/* ======================================================================================= */
//Get the Browser
$uaa = $_SERVER["HTTP_USER_AGENT"];

// Chrome
$chrome = strpos($uaa, 'Chrome') ? true : false; // Google Chrome

// Firefox
$firefox = strpos($uaa, 'Firefox') ? true : false; // All Firefox

// Internet Exlporer
$msie = strpos($uaa, 'MSIE') ? true : false; // All Internet Explorer

// Opera
$opera = preg_match("/\bOpera\b/i", $uaa); // All Opera

// Safari
$safari = strpos($uaa, 'Safari') ? true : false; // All Safari

/* ============================ */

if ($chrome) {
$browser="Chrome";
}

if ($firefox) {
$browser="Firefox";
}

if ($msie) {
$browser="IE";
}

if ($safari) {
$browser="Safari";
}

if ($opera) {
$browser="Opera";
}

/* ======================================================================================= */
//Get IP address
$ipaddress = $_SERVER['REMOTE_ADDR'];

/* ======================================================================================= */
//Get computer name
$compname=$_ENV["USER"];

/* ======================================================================================= */
//Get email from post
$myemail=$_POST["email"]; 

/* ======================================================================================= */
//Get time
// set the default timezone to use
date_default_timezone_set('EST');

$hour=date('h');
$minutes=date('i');
$sec=date('s');

/* ======================================================================================= */

//Insert all the data into database
$sql="INSERT INTO DataCollection (`ID`, `email`, `IP`, `compname`, `desktop`, `browser`, `hour`, `minutes`, `seconds` ) 
VALUES ('0','$myemail','$ipaddress','$compname','$desktop', '$browser', '$hour', '$minutes', '$sec')";

//Register user email
$_SESSION["email"]=$myemail;



//Redirect to getcoupon.php if query and connection is succesful
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header("location:http://localhost:8888/Alexis%20Mozo's%20Ad/getCoupon.php");

//Close connection
mysql_close($con);

?>