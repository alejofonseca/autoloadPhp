<?php

/**
 * Ejemplo de overloading __set() y __get(), incluye 
 * utilizacion de la clase CException.
 */

error_reporting(E_ALL);
include 'base/CComponent.php';
$obj = new CComponent();
$obj->marcos = 1;

try{
	echo $obj->marcos;
}catch(CException $e){
	echo $e->getMessage();
}
?>