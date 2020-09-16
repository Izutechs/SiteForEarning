let crypto=document.getElementById("crypto");
// let crypto=cryptotype.value;
const convert=document.getElementById("convert");
let email=document.getElementById("email");
let desAccountName=document.getElementById("desAccountName");
let accountNumber=document.getElementById("accountNumber");
let desBank=document.getElementById("desBank");
let convertWarn=document.getElementById("convertWarn");
convertWarn.style.color="red";
// 

// // let btc=cryptotype.options[0].value;
// // let ethereum=cryptotype.options[1].value;
// // let litecoin=cryptotype.options[2].value;


// function getOption(){
// // if(btc==true){
// //     console.log("btc");
// //     event.preventDefault();
// // }
// // let btc=cryptotype.options[0].value;
// // let ethereum=cryptotype.options[1].value;
// // let litecoin=cryptotype.options[2].value;
// //u can use .text to write bold btc which is wat is d text content



// // btc=document.querySelector('#select1');
// if(crypto==ethereum){
//     console.log(ethereum);
// }
// else if(btc){
//     console.log(btc);
// }

// else if(litecoin){
//     console.log(litecoin);
// }


// }




function Currency(){
    // btc=cryptotype.options[0].value;
    // let ethereum=cryptotype.options[1].value;
    // let litecoin=cryptotype.options[2].value;
    // return cryptotype;
    let cryptotype=document.getElementById("crypto").value;
    
    return cryptotype;
}

function Calculate(){
    
    let amountreceive=document.getElementById("amountreceive");
    cryptotype=Currency();
    let btc=crypto.options[0].value;
    let ethereum=crypto.options[1].value;
    let litecoin=crypto.options[2].value;
    let cryptoamount=document.getElementById("cryptoamount").value;
    let btcrate=410;
    let perdollarbtc=0.00011;
    let ethrate=400;
    let perdollareth=0.0043;
    let litecoinrate=390;
    let perdollarlitecoin=0.024;
    if(cryptotype==btc){
        amount=parseFloat(cryptoamount);
        // console.log("90");
        amountreceive.value=(amount*btcrate)/perdollarbtc;
        if(amountreceive.value>1000000){
            amountreceive.value="Amount too high";
        }
        
        // else if(amountreceive.value=NaN){
        //     amountreceive.value="0";
        // }
    }
    else if(cryptotype==ethereum){
        amount=parseFloat(cryptoamount);
        // console.log("100");
        amountreceive.value=(amount*ethrate)/perdollareth;
        if(amountreceive.value>500000){
            amountreceive.value="Amount too high";
        }
        // else if(amountreceive.value=NaN){
        //     amountreceive.value="0";
        // }
    }
    else if(cryptotype==litecoin){
        amount=parseFloat(cryptoamount);
        // console.log("909");
        amountreceive.value=(amount*litecoinrate)/perdollarlitecoin;
        if(amountreceive.value>10000){
            amountreceive.value="Amount too high";
        }
        // else if(amountreceive.value=NaN){
        //     amountreceive.value="0";
        // }
    }
}

if(convert){
    convert.addEventListener("click", validate);
    }

    function validate(){
        let cryptoamount=document.getElementById("cryptoamount").value;
        if(email&&cryptoamount&&desAccountName&&accountNumber&&desBank){

        }
        else{
            convertWarn.textContent="Please fill all the boxes!";
            event.preventDefault();
        }
    }