//Variables for saving earnings
// const refEarn7="refEarn7";
// const addrefEarn7="addrefEarn7";
const clickEarnings7="clickEarnings7";
const totEarning7="totalEarning7";
const shwRef7=localStorage.getItem("refEarn7");

const referralEarnings7=document.getElementById("referralEarnings");
//
//




 //
 //Important Constants and variables for referral adding
 //

//  const addRef7=document.getElementById("addRef");
//  let refCount7=0;
//  addRef7.addEventListener("click", addReferral);
//  const referralEarnings7=document.getElementById("referralEarnings");




 //
//Html Ids For the page
//

const accountName7=document.getElementById("accountName");
const accountUsername7=document.getElementById("accountUsername");
//const accountBalance=document.getElementById("accountBalance");
//const amountWithdrawable=document.getElementById("amountWithdrawable");
const totalEarnings7=document.getElementById("totalEarnings");
const withdraw7=document.getElementById("withdraw");

//
//
//Constants and variables for the session page
const fullname7=localStorage.getItem("fullname7");
const username7=localStorage.getItem("username7");
// const shwRef7=localStorage.getItem("refEarn7");
let shwEarn7=localStorage.getItem("clickEarnings7");




console.log(username7);
console.log(fullname7);



//To Add Referrals
    //
    //localStorage.setItem(refEarn, refCount);

    
    
    // function addReferral() {
    //     let refCode=prompt("Please Enter the Referral Code");
    //    //1st referral 
    //     if(refCode==4689){
    //         console.log("You added A referral");
    //         refCount7=500;
    //         localStorage.setItem(refEarn7, refCount7);
    //         //referralEarnings.textContent=`${refCount}`;
           
            
            
    //         //return refCount;
            
    //     }
    //     else if(refCode==3544){
    //         console.log("You added the second referral");
    //         refCount7=1000;
    //         localStorage.setItem(refEarn7, refCount7);
            
    //     }
    //     else if(refCode==15388){
    //         console.log("You added the third referral");
    //         refCount7=1500;
    //         localStorage.setItem(refEarn7, refCount7);
            
    //     }
    //     else if(refCode==90675){
    //         console.log("You added the third referral");
    //         refCount7=2000;
    //         localStorage.setItem(refEarn7, refCount7);
            
    //     }
    //     else if(refCode==84675){
    //         console.log("You added the third referral");
    //         refCount7=2500;
    //         localStorage.setItem(refEarn7, refCount7);
            
    //     }
    //     else if(refCode==98675){
    //         console.log("You added the third referral");
    //         refCount7=3000;
    //         localStorage.setItem(refEarn7, refCount7);
            
    //     }
    //     //return refCount;
    //     window.location.replace("sessionpage.html")
    //     return refCount7;
    //     // window.location.reload();
    // }


//To collect reward
//
let earnings7=Number(shwEarn7);
const earn=document.getElementById("earn");
const clickEarns7=document.getElementById("clickEarns");
let earn2=document.getElementById("earn2");
let earn3=document.getElementById("earn3");
let earn4=document.getElementById("earn4");
let earn5=document.getElementById("earn5");
let earn6=document.getElementById("earn6");
let earn7=document.getElementById("earn7");

earn.addEventListener("click", addReward);
earn2.addEventListener("click", addReward2);
earn3.addEventListener("click", addReward3);
earn4.addEventListener("click", addReward4);
earn5.addEventListener("click", addReward5);
earn6.addEventListener("click", addReward6);
earn7.addEventListener("click", addReward7);





///

//


//Time Constraint
//
var d=new Date();
let time=d.getDay();
console.log(time);

const dayCount="dayCount";
let dayValue=localStorage.getItem("dayCount");
let dayValueNum=Number(dayValue);
let yesMonday;
const qClickMonday="qClickMonday";

let yesTuesday;
const qClickTuesday="qClickTuesday";



let yesWednesday;
const qClickWednesday="qClickWednesday";

let yesThursday;
const qClickThursday="qClickThursday";

let yesFriday;
const qClickFriday="qClickFriday";

let yesSaturday;
const qClickSaturday="qClickSaturday";

let yesSunday;
const qClickSunday="qClickSunday";


const checkMonday=localStorage.getItem("qClickMonday");
const checkTuesday=localStorage.getItem("qClickTuesday");
const checkWednesday=localStorage.getItem("qClickWednesday");
const checkThursday=localStorage.getItem("qClickThursday");
const checkFriday=localStorage.getItem("qClickFriday");
const checkSaturday=localStorage.getItem("qClickSaturday");
const checkSunday=localStorage.getItem("qClickSunday");

let checkMondayValue=Number(checkMonday);
let checkTuesdayValue=Number(checkTuesday);


if(checkMonday==true){
    earn.removeEventListener("click", addReward);
}
if(checkTuesday==true){
    earn2.removeEventListener("click", addReward2);
}
if(checkWednesday==true){
    earn3.removeEventListener("click", addReward3);
}
if(checkThursday==true){
    earn4.removeEventListener("click", addReward4);
}if(checkFriday==true){
    earn5.removeEventListener("click", addReward5);
}
if(checkSaturday==true){
    earn6.removeEventListener("click", addReward6);
}
if(checkSunday==true){
    earn7.removeEventListener("click", addReward7);
}



function addReward(){
    
    
    
    if(time==1){
        
        if(((checkTuesday||checkWednesday||checkThursday||checkFriday||checkSaturday||checkSunday)==true)&&dayValueNum>=0){
            localStorage.removeItem("dayCount");
            
            localStorage.removeItem("qClickTuesday");
            localStorage.removeItem("qClickWednesday");
            localStorage.removeItem("qClickThursday");
            localStorage.removeItem("qClickFriday");
            localStorage.removeItem("qClickSaturday");
            localStorage.removeItem("qClickSunday");
            
            window.location.reload();
        }
        else if(dayValueNum<45){
            dayValueNum+=1;
            earnings7+=5;
        localStorage.setItem(clickEarnings7, earnings7);
        localStorage.setItem(dayCount, dayValueNum);
    // window.location.reload();
    // window.location.href="howtoearn7earnings.html";
    monlink();
        }
        else if(dayValueNum==45){
        yesMonday=1;
        
        localStorage.setItem(qClickMonday, yesMonday);
        console.log("yaff clicked monday");
        earn.removeEventListener("click", addReward);
        }
      
    }
    
    else{
        console.log("fuck");
        alert("You have clicked on a wrong day");
        earn.removeEventListener("click", addReward);
    }

}




function addReward2(){
    
    if(time==2){
        
        //let checkMonday=localStorage.getItem("qClickMonday");
         if(((checkMonday||checkWednesday||checkThursday||checkFriday||checkSaturday||checkSunday)==true)&&dayValueNum>=0){
            localStorage.removeItem("dayCount");

            localStorage.removeItem("qClickMonday");
            localStorage.removeItem("qClickWednesday");
            localStorage.removeItem("qClickThursday");
            localStorage.removeItem("qClickFriday");
            localStorage.removeItem("qClickSaturday");
            localStorage.removeItem("qClickSunday");
            
           window.location.reload();
        }
        
        else if(dayValueNum<45){
            dayValueNum+=1;
            earnings7+=5;
        localStorage.setItem(clickEarnings7, earnings7);
        localStorage.setItem(dayCount, dayValueNum);
    // window.location.reload();
    tuelink();
        }
        else if(dayValueNum==45){
            yesTuesday=1;
            
            localStorage.setItem(qClickTuesday, yesTuesday);
            console.log("yaff clicked tuesday");
            earn2.removeEventListener("click", addReward2);
            }
       
            
            
    
   
    }
    else{
        console.log("fuck");
        alert("You have clicked on a wrong day");
        earn2.removeEventListener("click", addReward2);
    }
    


}


function addReward3(){
    
    if(time==3){
        
        //let checkMonday=localStorage.getItem("qClickMonday");
         if(((checkMonday||checkTuesday||checkThursday||checkFriday||checkSaturday||checkSunday)==true)&&(dayValueNum>=0)){
            localStorage.removeItem("dayCount");

            localStorage.removeItem("qClickMonday");
            localStorage.removeItem("qClickTuesday");
            
            localStorage.removeItem("qClickThursday");
            localStorage.removeItem("qClickFriday");
            localStorage.removeItem("qClickSaturday");
            localStorage.removeItem("qClickSunday");
            
           window.location.reload();
        }
        
        else if(dayValueNum<45){
            dayValueNum+=1;
            earnings7+=5;
        localStorage.setItem(clickEarnings7, earnings7);
        localStorage.setItem(dayCount, dayValueNum);
    // window.location.reload();
    wedlink();
        }
        else if(dayValueNum==45){
            yesWednesday=1;
            
            localStorage.setItem(qClickWednesday, yesWednesday);
            console.log("yaff clicked Wednesday");
            earn3.removeEventListener("click", addReward3);
            }
       
            
            
    
   
    }
    else{
        console.log("fuck");
        alert("You have clicked on a wrong day");
        earn3.removeEventListener("click", addReward3);
    }
    


}



function addReward4(){
    
    if(time==4){
        
        //let checkMonday=localStorage.getItem("qClickMonday");
         if(((checkMonday||checkTuesday||checkWednesday||checkFriday||checkSaturday||checkSunday)==true)&&dayValueNum>=0){
            localStorage.removeItem("dayCount");

            localStorage.removeItem("qClickMonday");
            localStorage.removeItem("qClickTuesday");
            
            localStorage.removeItem("qClickWednesday");
            localStorage.removeItem("qClickFriday");
            localStorage.removeItem("qClickSaturday");
            localStorage.removeItem("qClickSunday");
            
           window.location.reload();
        }
        
        else if(dayValueNum<45){
            dayValueNum+=1;
            earnings7+=5;
        localStorage.setItem(clickEarnings7, earnings7);
        localStorage.setItem(dayCount, dayValueNum);
    // window.location.reload();
    thurlink();
        }
        else if(dayValueNum==45){
            yesThursday=1;
            
            localStorage.setItem(qClickThursday, yesThursday);
            console.log("yaff clicked Thursday");
            earn4.removeEventListener("click", addReward4);
            }
       
            
            
    
   
    }
    else{
        console.log("fuck");
        alert("You have clicked on a wrong day");
        earn4.removeEventListener("click", addReward4);
    }
    


}

function addReward5(){
    
    if(time==5){
        
        //let checkMonday=localStorage.getItem("qClickMonday");
         if(((checkMonday||checkTuesday||checkWednesday||checkThursday||checkSaturday||checkSunday)==true)&&dayValueNum>=0){
            localStorage.removeItem("dayCount");

            localStorage.removeItem("qClickMonday");
            localStorage.removeItem("qClickTuesday");
            localStorage.removeItem("qClickWednesday");
            localStorage.removeItem("qClickThursday");
            
            localStorage.removeItem("qClickSaturday");
            localStorage.removeItem("qClickSunday");
            
           window.location.reload();
        }
        
        else if(dayValueNum<45){
            dayValueNum+=1;
            earnings7+=5;
        localStorage.setItem(clickEarnings7, earnings7);
        localStorage.setItem(dayCount, dayValueNum);
    // window.location.reload();
    frilink();
        }
        else if(dayValueNum==45){
            yesFriday=1;
            
            localStorage.setItem(qClickFriday, yesFriday);
            console.log("yaff clicked Friday");
            earn5.removeEventListener("click", addReward5);
            }
       
            
            
    
   
    }
    else{
        console.log("fuck");
        alert("You have clicked on a wrong day");
        earn5.removeEventListener("click", addReward5);
    }
    


}


function addReward6(){
    
    if(time==6){
        
        //let checkMonday=localStorage.getItem("qClickMonday");
         if(((checkMonday||checkTuesday||checkWednesday||checkThursday||checkFriday||checkSunday)==true)&&dayValueNum>=0){
            localStorage.removeItem("dayCount");
            localStorage.removeItem("qClickMonday");
            localStorage.removeItem("qClickTuesday");
            localStorage.removeItem("qClickWednesday");
            localStorage.removeItem("qClickThursday");
            localStorage.removeItem("qClickFriday");
            localStorage.removeItem("qClickSunday");
            
           window.location.reload();
        }
        
        else if(dayValueNum<45){
            dayValueNum+=1;
            earnings7+=5;
        localStorage.setItem(clickEarnings7, earnings7);
        localStorage.setItem(dayCount, dayValueNum);
    // window.location.reload();
    satlink();
        }
        else if(dayValueNum==45){
            yesSaturday=1;
            
            localStorage.setItem(qClickSaturday, yesSaturday);
            console.log("yaff clicked Saturday");
            earn6.removeEventListener("click", addReward6);
            }
       
            
            
    
   
    }
    else{
        console.log("fuck");
        alert("You have clicked on a wrong day");
        earn6.removeEventListener("click", addReward6);
    }
    


}


function addReward7(){
    
    if(time==0){
        
        //let checkMonday=localStorage.getItem("qClickMonday");
         if(((checkMonday||checkTuesday||checkWednesday||checkThursday||checkFriday||checkSaturday)==true)&&dayValueNum>=0){
            localStorage.removeItem("dayCount");
            localStorage.removeItem("qClickMonday");
            localStorage.removeItem("qClickTuesday");
            localStorage.removeItem("qClickWednesday");
            localStorage.removeItem("qClickThursday");
            localStorage.removeItem("qClickFriday");
            localStorage.removeItem("qClickSaturday");
            
           window.location.reload();
        }
        
        else if(dayValueNum<45){
            dayValueNum+=1;
            earnings7+=5;
        localStorage.setItem(clickEarnings7, earnings7);
        localStorage.setItem(dayCount, dayValueNum);
    // window.location.reload();
    sunlink();
        }
        else if(dayValueNum==45){
            yesSunday=1;
            
            localStorage.setItem(qClickSunday, yesSunday);
            console.log("yaff clicked Sunday");
            earn7.removeEventListener("click", addReward7);
            }
       
            
            
    
   
    }
    else{
        console.log("fuck");
        alert("You have clicked on a wrong day");
        earn7.removeEventListener("click", addReward7);
    }
    


}



//Control For Clicking
//
//

let reff7=Number(shwRef7);


// if(earnings7>=3000&&reff7<500){
//     earn.removeEventListener("click", addReward);
// earn2.removeEventListener("click", addReward2);
// earn3.removeEventListener("click", addReward3);
// earn4.removeEventListener("click", addReward4);
// earn5.removeEventListener("click", addReward5);
// }
// else if(earnings7>=5000&&reff7==500){
//     earn.removeEventListener("click", addReward);
//     earn2.removeEventListener("click", addReward2);
//     earn3.removeEventListener("click", addReward3);
//     earn4.removeEventListener("click", addReward4);
//     earn5.removeEventListener("click", addReward5);
// }
// else if(earnings7>=6000&&reff7>=1000){
//     earn.removeEventListener("click", addReward);
//     earn2.removeEventListener("click", addReward2);
//     earn3.removeEventListener("click", addReward3);
//     earn4.removeEventListener("click", addReward4);
//     earn5.removeEventListener("click", addReward5);
// }


//To withdraw


let hvCleareddd7=localStorage.getItem("hvCleared7");    
withdraw7.addEventListener("click", withdrawCash);
if(hvCleareddd7==true){
    withdraw7.removeEventListener("click", withdrawCash);
    withdraw7.addEventListener("click", withdrawCash1);
}   


function withdrawCash(){
    let ref7=localStorage.getItem("refEarn7");
    if(ref7>=500||shwEarn7>=3000){
    let withdrawWarning=confirm("Are You Sure You Want To Withdraw");
        if(withdrawWarning==true){
        
           
        window.location.href="withdraw.php";
        }
    
        else{
        window.location.reload();
        }
    }
    else{
        alert("You cannot withdraw due to insufficient earnings. To withdraw with little click earnings, refer atleast one user");
    }
}


function withdrawCash1(){
    let ref7=localStorage.getItem("refEarn7");
    if(ref7>=1000){
        let withdrawWarning=confirm("Are You Sure You Want To Withdraw");
            if(withdrawWarning==true){
            
               
            window.location.href="withdraw.php";
            }
        
            else{
            window.location.reload();
            }
        }
        else{
            alert("You cannot withdraw now. You need atleast 2referrals to withdraw");
        }
}


//
    //
    //Delete Your account
    //
    const delAcc=document.getElementById("delAcc");
    delAcc.addEventListener("click", deleteAccount);
    
    function deleteAccount(){
        let delwarn=confirm("You must watch the video to the end!");
        if(delwarn==true){
        // localStorage.removeItem("fullname7");
        // localStorage.removeItem("username7");
        // localStorage.removeItem("email7");
        // localStorage.removeItem("phone7");
        // localStorage.removeItem("password7");
        // localStorage.removeItem("refEarn7");
        
        // localStorage.removeItem("clickEarnings7");
        // window.location.replace("index.php");
        
        // 
        window.location.href="youtubeads.html"
        }
        else{
                window.location.reload();
            }


    }







//
//
    //For New Session
//

let yesThisHasWithdrawn=localStorage.getItem("hvWithdraw");
if(yesThisHasWithdrawn==true){
    earn.removeEventListener("click", addReward);
    earn2.removeEventListener("click", addReward2);
    earn3.removeEventListener("click", addReward3);
    earn4.removeEventListener("click", addReward4);
    earn5.removeEventListener("click", addReward5);
    earn6.removeEventListener("click", addReward6);
    earn7.removeEventListener("click", addReward7);
    withdraw7.removeEventListener("click", withdrawCash);
    withdraw7.removeEventListener("click", withdrawCash1);
    
}

const newSession=document.getElementById("newSession");
newSession.addEventListener("click", checkSession);
    function checkSession(){
        let clearr=confirm("Were you been paid after clicking withdrawal?");
        if(clearr==true){
            localStorage.removeItem("refEarn7");
            localStorage.removeItem("clickEarnings7");
            localStorage.removeItem("hvWithdraw");
            
           window.location.href="detail1019.php";
        }
        else{
            localStorage.removeItem("hvWithdraw");
            localStorage.removeItem("clickEarnings7");
            window.location.reload();
        }
    }

    //
    //
    //




//To activate your referrer/topline

let haveactive;
    let goactive=document.getElementById("goactive");
    goactive.addEventListener("click", activatetop);

    
    function activatetop(){
        haveactive=1;
        window.location.href="./referral/goactive.php";

    }





    // if(haveactive==true){
    //     goactive.removeEventListener("click", activatetop);
    // }









    //to write the detaikls in session page
//
// accountName7.textContent=`${fullname7}`;
// accountUsername.textContent=`${username7}`;
clickEarns7.textContent=`${shwEarn7}`;
 referralEarnings7.textContent=`${shwRef7}`;
totalEarnings7.textContent=`${shwRef7}+${shwEarn7}`;