<!DOCTYPE HTML>
<html>

<head>
<title>Free Coupon!</title>
<link rel="stylesheet" type="text/css" href="Ad.css">
</head>

<body>
<center>
<div class="mbody"><!--Mobile-Body Div-->

<h2 class="mixP">Valid through <FONT COLOR="#990000"><b>Jan 2013</b></FONT>...</h2>

<img src="hero.png" class="headpic"/>

<p class="serviceP"> <FONT COLOR="#990000"><i>*30% off</i></FONT> services right now!
<br>Enter your email address 
<br>to get your <FONT COLOR="#990000">30% Coupon</FONT>.</p>

<form name="myForm" action="InsertData.php" method="post" >
<p class="emailP" align="left">Email
	  <input name="email" class="email" type="text" name="myemail" placeholder="email@example.com" id="email">
	  <input name="submit" class="submit" type="image" src="submit.png" id="submit"><br></p>
</form>

<p class="participation">PARTICIPATION REQUIRED Byy clicking Submit. I certify that I 
<br>am a US Resident over the age of 18, and I agree to the
<br> Privacy Policcy and Program Rules.
</p>

<a href="https://maps.google.com">  <img src="ico_map.png" class="mapP"/>  </a>
<a href="https://facebook.com">  <img src="ico_fb.png" class="mapP"/>  </a>

<p class="participation">Copyright @2012-2013 Ethereal Day Spa and Salon, LLC.
<br><a href="PrivacyPolicy.html" ">Privacy Policy</a></p>

<!--End mbody div-->
</div>
</center>
</body>

<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="Adscript.js"></script>
<script>$(document).ready(function() { 

    $('.submit').click(function() {  
 
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var emailaddressVal = $(".email").val();
        
        if(emailaddressVal == '') {
             alert("Not a valid e-mail address");
            hasError = true;
        }
 
        else if(!emailReg.test(emailaddressVal)) {
             alert("Not a valid e-mail address");
            hasError = true;
        }
        if(hasError == true) { return false; }
 
    });
});
</script>
</html>
