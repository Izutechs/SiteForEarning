<?php
ob_start();
session_start();
require_once 'dbconnect.php'; 
// if session is set direct to index
if (isset($_SESSION['user'])) {
     header("Location: ./dashboard.php");
      exit;} 
      if (isset($_POST['btn-login'])) {
           $email = $_POST['email']; 
           $upass = $_POST['pass']; 
           $password = hash('sha256', $upass); 
           // password hashing using SHA256 
           $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email= ?"); 
           $stmt->bind_param("s", $email); 
           /* execute query */ 
           $stmt->execute(); 
           //get result 
           $res = $stmt->get_result(); 
           $stmt->close(); 
           $row = mysqli_fetch_array($res, MYSQLI_ASSOC); 
           $count = $res->num_rows; 
           if ($count == 1 && $row['password'] == $password) { 
               $_SESSION['user'] = $row['id']; 
               header("Location: ./dashboard.php"); 
               } 
               elseif ($count == 1) {
                    $errMSG = "Bad password"; 
                    } else $errMSG = "User not found";
                    }
                    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport"content="width=device-width,initial-scale=1">
 
 

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
 
</head>
<body>

 <div id="body">
  <nav class="navbar">
  
  <img src="./img/7earnings II.png"id="logo"><span class="log">7earnings</span>
  <!-- <a href="shop.html"><img src="./img/cart.png" id="cart"></a> -->
  <br>
  
  <br>
  <br>
  <a href="shop.html" > <span class="fa fa-cart-plus"></span></a>
  <a href="registration.html" > <span class="fa fa-user-plus"></span></a>
  
  <a href="index.php"> <span class="link1">  <i class="fa fa-home"></i> Home </span></a>
  <a href="dashboard.php" ><span class="link2">   <i class="fa fa-user"></i> Profile </span></a>
  <a href="hire us.html" > <span class="link3">  <i class="fa fa-comment-dollar"style="font-size:16px;"></i> Hire us </span></a>
  <a href="how to earn.html" > <span class="link4"><i class="fa fa-dollar-sign"></i> How to earn </span></a>
  
  </nav>

 <br class="br">
 <br class="br">
 <br class="br">
 <br>
 <br>
 <br>
 <span class="fa fa-bars"id="bars"></span>
 <br><br><br>
 <div class="slider">
 <figure>
 <img src="./img/ad1.jpg"class="img">
 <img src="./img/ad2.jpg"class="img">
 <img src="./img/ad3.jpg"class="img">
 <img src="./img/ad2.jpg"class="img"> 
 </figure>
 </div>
 
 <marquee>Welcome to the new look of 7earnings.Our store has been launched. Click the cart icon to open our store</marquee>
<div class="content">
 <h3 class="logo">7earnings </h3>
  <p class="p"> Source more income today !</p>
   <br class="br">
   <div class="float">
   <br><br><br><br>
   <h1 >Earn smart <br> With 7earnings</h1>
   <h1><a href="register.php"><button class="btn"> Join us today </button></a></h1>
   </div>
   
<div class="container">
 <br>
  <h3 class="logo"> 7earnings</h3>
  <br>
  <form method="post">
 <?php if (isset($errMSG)) {
                              ?> 
                              
                               
                              <span class="alert">
                              <?php echo $errMSG; ?> 
                              
                              <?php } 
                              ?> <br>
  <input type="text"class="input"name="email"placeholder="   Username"autocomplete=off>
  <br><br><br>
  <div class= "pswd"> <input type="password" class="input"id="pswd"name="pass"placeholder="Password"><span class="fa fa-eye-slash"id="eye-slash"onclick="showpassword()"></span> </div>
  <br>
   <br>
   <p > <a href="recovery.html" style="color:#FF006C; text-decoration: none; ">Forgot Password?</a></p>
   <button type="submit" id="login" name="btn-login" class="btn">Login to your profile</button>
   <br><br>
 </form>
   <hr class="hrr">
   <span id="or">OR</span>
   <hr class="hrl">
   <br><br>
   <a href="./register.php"class="createAccount" > CREATE AN ACCOUNT </a>
    <br><br>

</div>


  <h2 class="h2	"> Our mission </h2>
   <div class="des">
    <span class="logo"> 7earnings </span>is an online investment platform that gives it's users the opportunity to earn online by just clicking on ads and refferals. Our business structure is robust and is based on verifiable policies.Our payment structure is of world class standard, we are dedicated in offering
          you the best user and customer experience while you make money online. Join our large community
          and start earning.
   </div>

<h2 class="h2"> User reviews</h2>
<div class="userReview">
 <div class="userReviews">
  <br><br>
    <img src="./img/user.jpg"class="user"><br><br>
     <h3 class="username"> Asor Christopher </h3><br>
      <p class="userReview">
       I joined 7earnings few weeks back, initially i was doubting it's genuity because i've been scammed by various online sites but to my greatest surprise 7earnings is just different , I've been receiving my payments since then. 
      </p>
   </div>
   <div class="userReviews">
     <br><br>
      <img src="./img/user1.jpg"class="user"><br><br>
       <h3 class="username"> Emmanuel Albert </h3><br>
        <p class="userReview">
         7earnings has brought a lot of good into my life. Just joined the platform few weeks ago and it has already changed my life. I can currently boast of financial freedom.
     </p> 
      <br><br>
  </div>
  </div>
 </div>
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
 <p class="follow_us"> Follow us on  </p>
<span class="f"><img src="./img/fb.jpg"class="fb-logo"></i></span>
  <span class="f"><img src="./img/whatsapp.jpg"class="WhatsApp-logo"></i></span>
  <span class="f"><img src="./img/insta.jpg"class="IG-logo"></i></span>
  <span class="f"><img src="./img/twitter.jpg"class="twitter-logo"></i></span>
</div>
 <br><br class="br">
 <div class="footer" style="text-align: center">
<a href="about us.html" >  <span class="footer-content">  About us  </span></a>
<a href="terms.html" ><span class="footer-content"> Terms of service </span></a>
  <!-- <span class=" footer-content">Privacy policy •</span> -->
  <a href="how to earn.html" ><span class="footer-content"> How To Earn </span></a>
  <a href="advertise.html" > <span class="footer-content"> Advertise with us </span></a>
  <a href="FAQ.html" ><span class ="footer-content">FAQs </span></a>
  <a href="shop.html" ><span class="footer-content"> Our Online Store </h4></span></a>
  <a href="crypto.html" ><span class="footer-content"> Cyptocurrency Converter </h4></span></a>
  <a href="pageantry.html" ><span class="footer-content"> Miss Flawless 2020 </h4></span></a>
  <p class="copyright">Copyright &copy; 2020 7earnings.com.ng <br>All rights reserved  </p>
 
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
    <a href="crypto.html" ><div class="sideContent8"><i class="fa fa-dollar-sign"></i> CryptoCurrency Converter</div></a><br>
    
    
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