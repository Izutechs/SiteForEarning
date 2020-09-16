const productName="productName";
// let item=document.getElementById("first").textContent;
let errShp=document.getElementById("errShp");

errShp.style.color="red";

let checkout=document.getElementById("chckoutbtn");
checkout.addEventListener("click", goWithItem);
function goWithItem(){
    
    let emailShop=document.getElementById("emailShop").value;
    let phoneShop=document.getElementById("phoneShop").value;
    let product=document.getElementById("itemShop").value;
    let qtyShop=document.getElementById("qtyShop").value;

    //localStorage.setItem(product, item);


    if(emailShop&&phoneShop&&product&&qtyShop){

    localStorage.setItem(productName, product);
    window.location.href=`https://wa.me/+2348138005497?text=My%20email%20is${emailShop},%20and%20phonumber%20is%20${phoneShop}.%20I%20want%20to%20buy%20${qtyShop}%20pieces%20of%20${product}`;

    }
    else if(!emailShop){
        errShp.textContent=`Please insert your email!`;
     }
    else if(!phoneShop){
       errShp.textContent=`Please Insert Your Phone Number!`;
    }
    else if(!product){
        errShp.textContent=`Please Insert The Nme Of Your Desired Product!`;
     }
     else if(!qtyShop){
        errShp.textContent=`Please Insert The Quantity Required`;
     }
}

