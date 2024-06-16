<?php
require('clases/Tigger.php');
require('clases/Salir.php');
$tigre = Tigger::getInstance();

$tigre->roar();
$tigre->roar();
$tigre->roar();
$tigre->roar();
$tigre->roar();
$tigre->getCounter();

$mispertenencias= new Pertenencias;

$salir= new Salir($mispertenencias);
$salir->verSiPuedoSalir();

$mispertenencias->setLlavesCasa(false);
$salir->verSiPuedoSalir();

?>
