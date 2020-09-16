

// constant for set if user has withdraw
const hvWithdraw="hvWithdraw";
let yesWithdraw=1;
//
const bankDetails7=document.getElementById("bankDetails");
const acntName7="acntName7";
const acntNo7="acntNo7";
const bank7="bank7";
let withdrawWarn=document.getElementById("withdrawWarn");
bankDetails7.addEventListener("click", sendMai);
withdrawWarn.style.color="red";
// function sendMail(){
//     localStorage.removeItem("refEarn");
// }
const proRef=localStorage.getItem("refEarn7");
let proRefvalue=Number(proRef);
const proClick=localStorage.getItem("clickEarnings7");
let proClickValue=Number(proClick);


function sendMai(){
    const desAccountName7=document.getElementById("desAccountName").value;
    const accountNumber7=document.getElementById("accountNumber").value;
    const desBank7=document.getElementById("desBank").value;
    const proofRef=document.getElementById("proofRef").value;
    const proofClick=document.getElementById("earningspay").value;
    if((proofRef==proRefvalue)&&(proofClick==proClickValue)){
    if(desAccountName7&&accountNumber7&&desBank7){
   
        //localStorage.removeItem("refEarn");
        localStorage.setItem(acntName7, desAccountName7);
        localStorage.setItem(acntNo7, accountNumber7);
        localStorage.setItem(bank7, desBank7);
        localStorage.setItem(hvWithdraw, yesWithdraw);
        window.location.href="detail1019.php";
    }
    else{
        event.preventDefault();
        withdrawWarn.textContent=`Please Fill All Fields`;

    }
}
else{
    event.preventDefault();
    withdrawWarn.textContent=`Your Referral Earnings Or Click Earnings Value Is Inaccurate`;
}
    }
    