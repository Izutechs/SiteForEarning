
//
//
//
//This handles all login processes
//
//
//

//
/*
let userFiles=[];
let userLog;
let login=document.getElementById("login");
//Get User details for login
login.addEventListener("click", getUserDetails);
function getUserDetails(){
    //user details required
    let username=document.getElementById("username").value;
    let password=document.getElementById("password").value;
    
    //create instance for each user
    class User{
        constructor(username, password){
            this.username=username;
            this.password=password;
        }
    }
   let me=new User(username, password);
   userFiles.push(me);
   console.log(userFiles);
   console.log(me);
   
   

   window.location.href="sessionpage.html";
 
}
*/



//

//New Login Process
const username7=localStorage.getItem("username7");
const password7=localStorage.getItem("password7");

let loginWarnings=document.getElementById("loginWarnings");
loginWarnings.style.color="red";
const login=document.getElementById("login");

login.addEventListener("click", logUser);
function logUser(){
    const userId=document.getElementById("userId").value;
    const passId=document.getElementById("passId").value;
    if((userId===username7) && (passId===password7)){
         //Login d person
        //window.location.href="sessionpage.html";

    }
    else{
        event.preventDefault();
        loginWarnings.textContent="Invalid Username And Password";
        
    }
}

console.log(username7);
console.log(userId);
console.log(password7);
console.log(passId);


//
//transfer Details for session page


//

