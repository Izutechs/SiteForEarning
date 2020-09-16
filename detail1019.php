<?php
    ob_start();
    session_start();
    require_once 'dbconnect.php'; 
        if (!isset($_SESSION['user'])) { 
                header("Location: ./index.php"); 
            exit;}
    // select logged in users detail
    $res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC); 
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport"content="width=device-width,initial-scale=0.9">
 
 

 <meta charset="utf-8">
        
        <link rel="apple-touch-icon" sizes="180x180" href="./img/7earnings II.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/7earnings II.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/7earnings II.png">
        <link rel="image_src" href="./img/7earnings II.png">
        <!-- <link rel="manifest" href="./frontend/dist/img/fav/site.webmanifest"> -->
        
 <meta property="og:title" content="7earnings">
        <meta property="og:site_name" content="7earnings">
        <meta property="og:url" content="https://7earnings.com.ng/">
        <meta property="og:description" content="7earnings official website">
        <meta property="og:image" content="https://unitedglobalfinance.com/img/7earnings II.png">
        <meta property="twitter:title" content="7earnings">
        <meta property="twitter:description" content="7earnings official website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image:src" content="https://7earnings.com.ng/img/7earnings II.png">
                    <title>7earnings</title>
 <link rel="stylesheet"href="fontawesome-free-5.13.0-web/css/all.min.css">
 <script src="jquery.js"></script>
 <link rel="stylesheet"href="7earnings.css">
 <link rel="stylesheet"href="./style/detail1019.css">

</head>
<body>
 <div id="body">
  <nav class="navbar">
  
  <img src="./img/7earnings II.png"id="logo"><span class="log">7earnings</span><br>
  <br>
  <a href="registration.html" > <span class="fa fa-cart-plus"></span></a>
  <a href="registration.html" > <span class="fa fa-user-plus"></span></a> 
  <a href="index.php"> <span class="link1">  <i class="fa fa-home"></i> Home </span></a>
  <a href="dashboard.php" ><span class="link2">   <i class="fa fa-user"></i> Profile </span></a>
  <a href="hire us.html" > <span class="link3">  <i class="fa fa-comment-dollar"style="font-size:16px;"></i> Hire us </span></a>
  <a href="how to earn.html" > <span class="link4"><i class="fa fa-dollar-sign"></i> How to earn </span></a>
  
  </nav>
    <br class="br">
    <br class="br">
    <br class="br">
    <br class="br">
    <br>
    <br><br><br>
    <span class="fa fa-bars"id="bars"></span>
    <br><br>
<div class="slider">
 <figure>
  <img src="./img/ad1.jpg"class="img">
  <img src="./img/ad2.jpg"class="img">
  <img src="./img/ad3.jpg"class="img">
  <img src="./img/ad2.jpg"class="img"> 
 
 </figure>
 </div>

 <marquee>If you did not place withdrawal and landed here after clicking start new session click finish</marquee>
<div class="detailpage">
<h2 class="h2"> Withdrawal Details</h2>
<fieldset>
<p id="acccnt">USERNAME:<?php echo $userRow['username']; ?></p>
    <p id="acccnt1"></p>
    <p id="acccnt2"></p>
    <p id="acccnt3"></p>
    <p id="acccnt4"></p> 
    <input type="button" class="e-pin" id="clrRef" value="Finish"/>
    <p>Your Withdrawal Request Has Been Submitted And Will Be Processed</p>
    <p>If you didn't place withdrawal and landed here after clicking new session kindly press finish</p>
    <p>Press Finish Only After You Have Received Payment!</p>
        </fieldset>
</div>

<div class="slider">
 <figure>
  <img src="./img/ad1.jpg"class="img">
  <img src="./img/ad2.jpg"class="img">
  <img src="./img/ad3.jpg"class="img">
  <img src="./img/ad2.jpg"class="img"> 
 
 </figure>
 </div>
  
<div class="follow">
 <h3 class="follow_us"> Follow us on </h3>
  

 <span class="f"><img src="./img/fb.jpg"class="fb-logo"></i></span>
 <span class="f"><img src="./img/whatsapp.jpg"class="WhatsApp-logo"></i></span>
 <span class="f"><img src="./img/insta.jpg"class="IG-logo"></i></span>
 <span class="f"><img src="./img/twitter.jpg"class="twitter-logo"></i></span>

  </div>
 <br><br class="br">
 <div class="footer" style="text-align: center">
<a href="about us.html" >  <span class="footer-content">  About us  </span></a>
<a href="terms.html" ><span class="footer-content"> Terms of service </span></a>
  <!-- <span class=" footer-content">Privacy policy </span> -->
 <a href="advertise.php" > <span class="footer-content"> Advertise with us </span></a>
<a href="FAQ.html" >  <span class ="footer-content">FAQs </span></a>
  <p class="copyright">Copyright &copy; 2020 7earnings.com.ng All rights reserved  </p>
 </div>
 </div>
 
 <div id="sidebar">
 <b class="closeSidebar"id="closeSidebar"> × </b>
 <br>
 <h3 class ="sideContent"> 7earnings </h3>
 <br>
 <a href="how to earn.html" > <div class="sideContent1"><i class="fa fa-dollar-sign"></i> How to earn</div></a><br>
 <a href="advertise.html" > <div class="sideContent2"><i class="fa fa-ad"></i> Advertise your products</div></a><br>
 <a href="hire us.html" > <div class="sideContent4"><i class="fa fa-comment-dollar"></i> Hire us</div></a><br>
 <a href="FAQ.html" ><div class="sideContent7"><i class="fa fa-question-circle"></i> FAQs</div></a><br>
 <a href="sign out.html" ><div class="sideContent8"><i class="fa fa-cart-plus"></i> Sign out</div></a><br>
 
 
 </div>
 
<script type="text/javascript">

//Declare variables 
   var pswd = document.getElementById('pswd');
   var eye_slash = document.getElementById('eye-slash');
   
   //function to show password when the checkbox is clicked 
   function showpassword(){
   if(pswd.type=="password"){
   pswd.type ='text';
   eye_slash.className='fa fa-eye';
   }
   else {
   pswd.type="password";
   eye_slash.className='fa fa-eye-slash';
   }
   }

 //variable declarations
var sidebar = document.getElementById('sidebar');
var closeSidebar = document.getElementById('closeSidebar');
var bars = document.getElementById('bars');
var pswd = document.getElementById('pswd');
var div = document.getElementsByClassName('pswd');
// show sidebar
bars.addEventListener('click', function (){
sidebar.style.left = '0%';
sidebar.style.height = '100%';
});
closeSidebar.addEventListener('click', function (){
sidebar.style.left = '-80%';
sidebar.style.height= '0%'; the

});

// jQuery 
   // function to close sidebar when it looses focus
   $(document).ready(function() {
   var sidebar = ('#sidebar');
   var closeSidebar = ('#closeSidebar');
   var bars = ('#bars');
   $('#sidebar').mouseleave(function(){
   $('#sidebar').css('left','-100%');
   });
   $('#closeSidebar').click(function (){
   $('#sidebar').css({'left':'-80%','height':'0%'});
   });
   $('#body').mouseover(function (){
   $('#sidebar').css({'left':'-80%','height':'0%'});
   });
   $('#pswd').mouseover(function(){
   $('.pswd').css({'border':'1px solid #1EB4FF'})
   });
   $('#pswd').mouseleave(function (){
   $('.pswd').css({'border':'1px solid gray'})
   });
   
   $('.input').focus(function (){
   $('#navbar').css('paddingBottom','15%');
   
   
   });
   });
  
</script>

<script type="text/javascript" src="bankdetails.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5ed7d25d4a7c62581799d9f5/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
</body>
</html>