<?php
session_start();

$mensaje="";

if(isset($_POST['btncarrito'])){

switch($_POST['btncarrito']){

case 'agregar':
    if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
        $ID=openssl_decrypt($_POST['id'],COD,KEY);
        $mensaje= "ID CORRECTO".$ID;
    }else{
        $mensaje= "ID INCORRECTO".$ID;
    }
    if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
        $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
        $mensaje= "NOMBRE CORRECTO".$NOMBRE;
    }else{
        $mensaje= "NOMBRE INCORRECTO".$NOMBRE;
    }
    if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
        $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
        $mensaje= "PRECIO CORRECTO".$PRECIO;
    }else{
        $mensaje= "PRECIO INCORRECTO".$PRECIO;
    }
    if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
        $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
        $mensaje= "CANTIDAD CORRECTO".$CANTIDAD;
    }else{
        $mensaje= "CANTIDAD INCORRECTO".$CANTIDAD;
    }

    if(!isset($_SESSION['carrito'])){
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO
        );
        $_SESSION['carrito'][0]=$producto;
    }else{
        $NumeroProductos=count($_SESSION['carrito']);
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO
        );
        $_SESSION['carrito'][$NumeroProductos]=$producto;
    }


    break;




}

}


?>