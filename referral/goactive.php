<?php
    ob_start();
    session_start();
    require_once '../dbconnect.php'; 
        if (!isset($_SESSION['user'])) { 
                header("Location: ../index.php"); 
            exit;}
    // select logged in users detail
    $res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC); 
?>


<?php
include_once '../dbconnect.php'; 
if (isset($_POST['sign'])) { 
        $email = trim($_POST['email']); 
        // get posted data and remove whitespace 
        
        $useractivatingreferrer = trim($_POST['useractivatingreferrer']); 
       
        $ip = $_SERVER['REMOTE_ADDR']; 
        $fecha = date("Y-m-d;h:i:s");
        
        
        
        
        $stmt = $conn->prepare("SELECT email FROM users WHERE email=?");
        
        $stmt->bind_param("s", $email); 
        /* execute query */ 
        $stmt->execute(); 
        //get result 
        $res = $stmt->get_result(); 
        $stmt->close(); 
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC); 
        $count = $res->num_rows; 
        if ($count == 1){



//write to html
$f = fopen($useractivatingreferrer.'.html', 'a');
fwrite ($f,
// 'Username: [<b><font color="#660000">'.$useractivatingreferrer.'</font></b>]

// REFERRAL: [<b><font color="#0E773B">'.$email.'</font></b>]

// IP: [<b><font color="#996600">'.$ip.'</font></b>]
// Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> '


// page

'<!DOCTYPE html>
<html>
<head>
<meta name="viewport"content="width=device-width,initial-scale=0.9">
 
 

 <meta charset="utf-8">
        
        <link rel="apple-touch-icon" sizes="180x180" href="./img/7earnings II.png">
        <link rel="icon" type="image/png" sizes="32x32" href=".././img/7earnings II.png">
        <link rel="icon" type="image/png" sizes="16x16" href=".././img/7earnings II.png">
        <link rel="image_src" href=".././img/7earnings II.png">
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
 <link rel="stylesheet"href="../fontawesome-free-5.13.0-web/css/all.min.css">
 <script src="../jquery.js"></script>
 <link rel="stylesheet"href="../7earnings.css">
 


<body>
 <div id="body">
  <nav class="navbar">
 
  <img src=".././img/7earnings II.png"id="logo"><span class="log">7earnings</span><br>
  <br>
  <a href="../index.php"> <span class="link1">  <i class="fa fa-home"></i> Home </span></a>
 <a href="../dashboard.php" > <span class="link2">   <i class="fa fa-user"></i> Profile </span></a>
  <a href="../hire us.html" > <span class="link3">  <i class="fa fa-comment-dollar"style="font-size:16px;"></i> Hire us </span></a>

  
  </nav>
    <br class="br">
    <br class="br">
    <br class="br">
    
    <br><br>
    <br>
    <br>
    <span class="fa fa-bars"id="bars"></span>
    <br><br>
    <marquee>Note that if you save more than once, your account will be blocked!</marquee>
    
    
<br>
<h2 class="h2">Save Referral</h2>
<div class="container">
 <br><br>
  <h3 class="logo">Fill in your username and the details of your referral to add your referral earning</h3>
  <br>
  <form method="post" action="saveref.php" data-sigil="m-settings-form">
  <input type="email" class="input"id="eemail"name="eemail"placeholder="  Your Username">
  <br><br>
  <input type="text"class="input" id="referra" name="addedreferral"placeholder="Referral Username('.$useractivatingreferrer.')"autocomplete=off>
  <br><br>
  
  
   
   
   
   <br>
   <button class="register" id="activate"> Submit </button>
   <br ><br><br>
   </div>
   
   
   <p class="p"> 
   <b> Email : </b> support@7earnings.com.ng</p>
   
   
  
   

   




<script type="text/javascript">


    const refEarn7="refEarn7";
    const addrefEarn7="addrefEarn7";
    let phpuser="'.$useractivatingreferrer.'";
    
    
    
    let activate=document.getElementById("activate");
    let refEarrnn7=localStorage.getItem("refEarn7");
        let currentRefEarning=Number(refEarrnn7);
        let refCount7=500;
        let checkref=localStorage.getItem("refDraftVal");
    activate.addEventListener("click", addRefReward);


    
    function addRefReward(){
        
        
        let referralname="referralname";
        let referralnumb=Math.floor(Math.random()*10000);
        let newReferral=document.getElementById("referra").value;
        function userInput(val, index, array){
            return newReferral;
        }
        const saveReflaslas="saveReflaslas";
        let local=localStorage;
                let arrayLocal=[];
                
        if(newReferral==phpuser){
        function reflaslas(){
            const refDraftVal="refDraftVal";
            let referralnumber=Number(referralnumb);
            let refDraft=referralname+referralnumber;
    
    
                
       Object.values(local).forEach((value)=>{
            
           arrayLocal.push(value);
        });
            console.log(arrayLocal);
        
        arrayLocal.find(userInput);
        let isUser=arrayLocal.find(userInput);
        
        console.log(isUser);
        if(isUser==phpuser){
            
            console.log("nawa u have added dz guy na");
            alert("You have added this referral");
            event.preventDefault();
        }
        else{
            
            
            console.log(refDraft);
                let refNew=refDraft;
                localStorage.setItem(saveReflaslas, refNew);
                console.log(refNew);
                let reflas=localStorage.getItem("saveReflaslas");
        console.log(reflas);
        valreflaslas=reflas;
        const referral=`${valreflaslas}`;
        
        currentRefEarning+=refCount7;
        localStorage.setItem(refEarn7, currentRefEarning);
        localStorage.setItem(referral, newReferral);
        
            
                // window.location.replace("saveref.php");
       
            }
    
    
                
            //}
            
        }
        
    reflaslas();
    

    
    
        }
        else{
            alert("Please input the right referral");
            event.preventDefault();
        }
        
    }
    
    
    </script>'





);
 
fclose($f);
$fgg = fopen("createdlink.html", "a");
fwrite ($fgg,
'Username: [<b><font color="#660000">'.$useractivatingreferrer.'</font></b>]
TRIED TO ACTIVATE: [<b><font color="#9900FF">'.$email.'</font></b>]

IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');
 
fclose($fgg);

header("Location:  ../dashboard.php");

        }
        else $errMSG = "Referrer User not found";
        
                    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport"content="width=device-width,initial-scale=0.9">
 
 

 <meta charset="utf-8">
        
        <link rel="apple-touch-icon" sizes="180x180" href=".././img/7earnings II.png">
        <link rel="icon" type="image/png" sizes="32x32" href=".././img/7earnings II.png">
        <link rel="icon" type="image/png" sizes="16x16" href=".././img/7earnings II.png">
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
 <link rel="stylesheet"href="../fontawesome-free-5.13.0-web/css/all.min.css">
 <script src="../jquery.js"></script>
 <link rel="stylesheet"href="../7earnings.css">
 
</head>
<body>
 <div id="body">
  <nav class="navbar">
  <span class="fa fa-bars"id="bars"></span>
  <img src=".././img/7earnings II.png"id="logo"><span class="log">7earnings</span><br>
  <br>
  <a href="../index.php"> <span class="link1">  <i class="fa fa-home"></i> Home </span></a>
 <a href="../dashboard.php" > <span class="link2">   <i class="fa fa-user"></i> Profile </span></a>
  <a href="../hire us.html" > <span class="link3">  <i class="fa fa-comment-dollar"style="font-size:16px;"></i> Hire us </span></a>

  
  </nav>
    <br class="br">
    <br class="br">
    <br class="br">
    <br><br>
    <br>
    <br>
    <span class="fa fa-bars"id="bars"></span>
 <br><br><br>
 <div class="slider">
 <figure>
 <img src=".././img/ad1.jpg"class="img">
 <img src=".././img/ad2.jpg"class="img">
 <img src=".././img/ad3.jpg"class="img">
 <img src=".././img/ad2.jpg"class="img"> 
 </figure>
 </div>
    <marquee>Do not fill the form twice! After filling the form, your referral should go to 7earnings.com.ng/referral/your_username.html to collect the referral reward</marquee>
    
    
<br>
<h2 class="h2">Fill in your username and the details of your referrer to activate the N500 for your referrer</h2>
<div class="container">
 <br><br>
  <h3 class="logo">Activate Referrer</h3>
  <form method="post">
  <?php if (isset($errMSG)) {
                              ?> 
                              
                               
                              <span class="alert">
                              <?php echo $errMSG; ?> 
                              
                              <?php } 
                              ?>
  <input type="email" class="input"name="useractivatingreferrer"placeholder="  Your Username">
  <br><br>
  <input type="email"class="input" name="email"placeholder="Referrer Username"autocomplete=off>
  <br><br>
  
  
   
   
   <p id="withdrawWarn"></p>
   <br>
   <button class="register" id="acctreef" name="sign"> Submit </button>
   <br ><br><br>
   </div>
   <p>After filling your referrer(topline) should go to 7earnings.com.ng/referral/your_username.html and collect their reward</p>
   
   <p class="p"> 
   <b> Email : </b> support@7earnings.com.ng</p>
   
   
  
   
   <div class="follow">
   <p class="follow_us"> Follow us on  </p>
   
   <span class="f"><img src=".././img/fb.jpg"class="fb-logo"></i></span>
  <span class="f"><img src=".././img/whatsapp.jpg"class="WhatsApp-logo"></i></span>
  <span class="f"><img src=".././img/insta.jpg"class="IG-logo"></i></span>
  <span class="f"><img src=".././img/twitter.jpg"class="twitter-logo"></i></span>
   
   </div>
   <br><br class="br">
   <div class="footer">
   <a href="about us.html" >  <span class="footer-content">  About us  </span></a>
   <a href="terms.html" ><span class="footer-content"> Terms of service </span></a>
   <!-- <span class=" footer-content">Privacy policy •</span> -->
   <a href="how to earn.html" ><span class="footer-content"> How To Earn </span></a>
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
   
   
<script type="text/javascript" src="goactive.js">

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