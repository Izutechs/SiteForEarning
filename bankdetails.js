    let act=localStorage.getItem("email7");
    let act1=localStorage.getItem("acntName7");
    let act2=localStorage.getItem("acntNo7");
    let act3=localStorage.getItem("bank7");
    let act4=localStorage.getItem("refEarn7");
    let act5=localStorage.getItem("clickEarnings7")
    let finish=document.getElementById("clrRef");
    //let money=localStorage.getItem("acntNam");
    
    
    let acccnt=document.getElementById("acccnt");
    let acccnt1=document.getElementById("acccnt1");
    let acccnt2=document.getElementById("acccnt2");
    let acccnt3=document.getElementById("acccnt3");
    let acccnt4=document.getElementById("acccnt4");
    
    // acccnt.textContent=`USERNAME: ${act}`;
    acccnt1.textContent=`BANK ACCOUNT: ${act1}`;
    acccnt2.textContent=`ACCOUNT NUMBER: ${act2}`;
    acccnt3.textContent=`BANK: ${act3}`;
    acccnt4.textContent=`WITHDRAWABLE(Naira): ${act4} + ${act5}`;
    //
    //
    //To clear the session and start another
    //
    const hvCleared7="hvCleared7";
    let yesCleared7=1;
    finish.addEventListener("click", clearEarnin);
    function clearEarnin(){
        let clr=confirm("Are you sure you have received payment?");
        if(clr==true){
        localStorage.setItem(hvCleared7, yesCleared7)
        localStorage.removeItem("refEarn7");
        localStorage.removeItem("clickEarnings7");
        window.location.href="dashboard.php";
        }
        else{
            window.location.reload();
        }
    }

    
