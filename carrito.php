<?php
$mensaje="";

if(isset($_POST['carrito'])){

switch($_POST['carrito']){

case 'agregar':
    if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
        $ID=openssl_decrypt($_POST['id'],COD,KEY);
        $mensaje= "ID CORRECTO".$ID;
    }else{
        $mensaje= "ID INCORRECTO".$ID;
    }
    break;

}

}


?>