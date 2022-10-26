<?php 


//*TEST 002EmpleadoTelefonos.php
/*
include_once ('002EmpleadoTelefonos.php');

$persona = new Empleado;

$persona -> anyadirTelefono(68951598156);
$persona -> anyadirTelefono(68951312316);
$persona -> vaciarTelefonos();
$persona -> anyadirTelefono(68951598156);
$persona -> anyadirTelefono(68951312316);

echo $persona -> listarTelefonos(); 
*/


//*TEST 003EmpleadoConstructor.php
/*
include_once ('003EmpleadoConstructor.php');

$persona = new Empleado("Jon", "Jones", 3000);
$persona_2 = new Empleado("Maria", "Grace");

echo $persona -> getNombreCompleto()."<br>";
echo $persona -> getSueldo()."<br>";
echo $persona_2 -> getNombreCompleto()."<br>";
echo $persona_2 -> getSueldo();
*/


//*TEST 004EmpleadoConstante.php
/*
include_once ('004EmpleadoConstante.php');

$persona = new Empleado("Jon", "Jones", 6000);
var_dump($persona -> debePagarImpuestos()); */

/*TEST 005.EmpleadoSueldo.php

include_once ('005.EmpleadoSueldo.php');

$persona = new Empleado("Jon", "Jones", 6000);
var_dump($persona -> debePagarImpuestos()); 

echo "<br>Sueldo tope será cambiado...<br>";
$persona -> setSueldoTope(7000);
var_dump($persona -> debePagarImpuestos());
echo "<br>Sueldo tope actual: ".$persona -> getSueldoTope();*/

//*TEST 006EmpleadoStatic.php
/*
include_once('006EmpleadoStatic.php');

$persona = new Empleado("Jon", "Jones Evans", 6000);
$persona -> anyadirTelefono(689515981);
$persona -> anyadirTelefono(689513356);
$persona -> anyadirTelefono(681312317);
$persona -> anyadirTelefono(651412361);
echo $persona -> toHtml($persona);*/


//*TEST 307Empleado.php
/*
include ('307Empleado.php');

$persona = new Empleado("Juan", "Pepe Marín", 5000);
$persona -> anyadirTelefono(689515981);
$persona -> anyadirTelefono(689513356);
$persona -> anyadirTelefono(681312317);
$persona -> anyadirTelefono(651412361);
echo $persona -> toHtml($persona);*/

//*TEST 309EmpleadoE.php
/*
include_once ('309EmpleadoE.php');

$persona = new Empleado("Juan", "Pepe Marín", 28, 3500);
$persona -> anyadirTelefono(689515981);
$persona -> anyadirTelefono(689513356);
$persona -> anyadirTelefono(681312317);
$persona -> anyadirTelefono(651412361);
echo $persona -> toHtml($persona);*/

//*TEST 310EmpleadoS.php

/* 
include_once ('310EmpleadoS.php');

$persona = new Empleado("Juan", "Pepe Marín", 28, 3500);
$persona -> anyadirTelefono(689515981);
$persona -> anyadirTelefono(689513356);
$persona -> anyadirTelefono(681312317);
$persona -> anyadirTelefono(651412361);
//echo $persona -> toHtml($persona);
echo $persona ->__toString();*/

//*TEST 311EmpleadoA.php
/* 
include_once ('311EmpleadoA.php');
$persona = new Empleado("Juan", "Pepe Marín", 28, 3500);
$persona -> anyadirTelefono(689515981);
$persona -> anyadirTelefono(689513356);
$persona -> anyadirTelefono(681312317);
$persona -> anyadirTelefono(651412361);
//echo $persona -> toHtml($persona);
echo $persona ->__toString();*/



?>