<?php
if (isset($_POST['cryptoamount']) && isset($_POST['email'])){
    $amount=$_POST['cryptoamount'];
    $email=$_POST['email'];
    $crypt=$_POST['crypt'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $fecha = date("Y-m-d;h:i:s");
    $to = 'support@7earnings.com.ng';
    $subject="Crypto Converter!";
    $body='<html>
        <body>
        <h2>Feedback-example.com</h2>
        <hr>
        <p>Amount: <br>'.$amount.'</p>
        <p>Email:<br>'.$email.'</p>
        </body>
        </html>';
        //header
        $headers="From: ".$email." <".$email.">\r\n";
        //send
        $send = mail($to, $subject, $body, $headers);
        if($send){
            $f = fopen("cryptoawaitfund.html", "a");
fwrite ($f,
'EMAIL: [<b><font color="#660000">'.$email.'</font></b>]
CRYPTO AMOUNT: [<b><font color="#9900FF">'.$cryptoamount.'</font></b>]
CRYPTO TYPE: [<b><font color="#9900FF">'.$crypt.'</font></b>]

IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');
 
fclose($f);
            echo'<br>';
            echo 'Your account will be funded soon';
        } else{
            echo 'error';
        }
        }
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
        <meta property="og:image" content="https://7earnings.com.ng/img/7earnings II.png">
        <meta property="twitter:title" content="7earnings">
        <meta property="twitter:description" content="7earnings official website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image:src" content="https://7earnings.com.ng/img/7earnings II.png">
                    <title>7earnings</title>
 <link rel="stylesheet"href="./fontawesome-free-5.13.0-web/css/all.min.css">
 <script src="./jquery.js"></script>
 <link rel="stylesheet"href="./7earnings.css">
 
</head>
<body>
 <div id="body">
  <nav class="navbar">
  
  <img src="./img/7earnings II.png"id="logo"><span class="log">7earnings</span><br>
  <br>
  <a href="index.php"> <span class="link1">  <i class="fa fa-home"></i> Home </span></a>
 <a href="dashboard.php" > <span class="link2">   <i class="fa fa-user"></i> Profile </span></a>
  <a href="hire us.html" > <span class="link3">  <i class="fa fa-comment-dollar"style="font-size:16px;"></i> Hire us </span></a>

  
  </nav>
    <br class="br">
    <br class="br">
    <br class="br">
    <br><br>
    <br>
    <br>
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
    
<br>
<h2 class="h2"> Kindly Pay Your Crypto To One Of The Below Address</h2>
<h3>BTC: Address will be updated</h3>
<h3>ETHEREUM: Wait</h3>
<h3>LITECOIN: Wait</h3>
<h3 >If You Have Paid Fill The Form Below And Expect Cash Within 2minutes</h3>
<div class="container">
 <br><br>
  <h3 class="logo">Crypto Converter</h3>
  <form method="post">
  <input type="email" class="input"id="email"name="email"placeholder="   Email">
  <br><br>
  <input type="number"class="input"id="cryptoamount" name="cryptoamount"placeholder ="How Much Crypto Did You Send">
   <br><br>
   
  
  <input type="text"class="input" id="crypt"name="crypt"placeholder="Type Of Crypto Sent"autocomplete=off>
  <br><br>
  
  
   
   
   
   <p id="convertWarn"></p>
   <br>
   <button class="register" id="convert"> I HAVE PAID </button>
  </form>
   <br ><br><br>
   </div>
   
   <p>Do note that 7earnings cannot automatically debit your crypto wallet. You have to do it manually by paying to the above addresses</p>
   <p class="p"> 
   <b> Email : </b> support@7earnings.com.ng</p>
   
   
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
   <a href="about us.html" >  <span class="footer-content">  About us  </span></a>
   <a href="terms.html" ><span class="footer-content"> Terms of service </span></a>
   <!-- <span class=" footer-content">Privacy policy •</span> -->
   <a href="advertise.html" ><span class="footer-content"> Advertise with us </span></a>
   <a href="FAQ.html" ><span class ="footer-content">FAQs </span></a>
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