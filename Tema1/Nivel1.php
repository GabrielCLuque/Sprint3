<?php
require('clases/Tigger.php');
require('clases/Pertenencias.php');
$tigre = Tigger::getInstance();

$tigre->roar();
$tigre->roar();
$tigre->roar();
$tigre->roar();
$tigre->roar();
$tigre->getCounter();

$pertenencias= Pertenencias::getInstance();
$pertenencias->versipuedosalir();
?>
