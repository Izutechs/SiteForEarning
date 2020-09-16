//
//This handles the registration page processes
//

/*
//
//

let userFiles=[];
   

let register=document.getElementById("register");
register.addEventListener("click", createUser);
 function createUser(){

    let username=document.getElementById("username").value,
    dOB=document.getElementById("dateOfBirth").value,
    email=document.getElementById("email").value,
    phoneNumber=document.getElementById("phonenumber").value,
    password=document.getElementById("password").value;

     class User{
         constructor(username, dOB, email, phoneNumber, password){
          this.username=username;
          this.dOB=dOB;
          this.email=email;
          this.phoneNumber=phoneNumber;
          this.password=password;
         }
     }
     let user=new User(username, dOB, email, phoneNumber, password);
     userFiles.push(user);
     console.log(userFiles);
     console.log(user);
 }


 //
 //
 */
const register7=document.getElementById("register");

register7.addEventListener("click", registerUser);






 function registerUser(){
    
    const inpFullname7=document.getElementById("fullName");
    const inpUsername7=document.getElementById("username");
    const inpEmail7=document.getElementById("email");
    const inpPhoneNumber7=document.getElementById("phonenumber");
    const inpPassword7=document.getElementById("pswd");
   
    const warning7=document.getElementById("regWarnings");
    const warningReg7="There is a problem with your form! Make sure your username and email are in lower case letters and exactly the same";
    const warningRegg7="Please fill all required spaces";
    warning7.style.color="red";



    const fullname7="fullname7";
    const fullName7=inpFullname7.value;
    const user7="username7";
    const username7=inpUsername7.value;
    const mail7="email7";
    const email7=inpEmail7.value;
    const phone7="phone7";
    const phoneNumber7=inpPhoneNumber7.value;
    const pin7="password7";
    const password7=inpPassword7.value;
    // let ePin7=document.getElementById("ePin").value;
    //    if((ePin7==46886)||(ePin7==62588)||(ePin7==23564)||(ePin7==13270)||(ePin7==09607)){
        if(username7&&email7&&phoneNumber7&&password7&&fullName7){
            if(username7===email7){
            localStorage.setItem(fullname7, fullName7);
            localStorage.setItem(user7, username7);
            localStorage.setItem(mail7, email7);
            localStorage.setItem(phone7, phoneNumber7);
            localStorage.setItem(pin7, password7);
            //warning.textContent="Please Login By Clicking Home";
           //window.location.href="sessionpage.html";
            }
            else{
                event.preventDefault();
                warning7.textContent=`${warningReg7}`;
                
            }
        }
        
        else{
            event.preventDefault();
            warning7.textContent=`${warningRegg7}`;
            
        }
    }
