<?php 


//*TEST 002.EmpleadoTelefonos.php
/*
include_once ('002.EmpleadoTelefonos.php');

$persona = new Empleado;

$persona -> anyadirTelefono(68951598156);
$persona -> anyadirTelefono(68951312316);
$persona -> vaciarTelefonos();
$persona -> anyadirTelefono(68951598156);
$persona -> anyadirTelefono(68951312316);

echo $persona -> listarTelefonos(); 
*/


//*TEST 003.EmpleadoConstructor.php
/*
include_once ('003.EmpleadoConstructor.php');

$persona = new Empleado("Jon", "Jones", 3000);
$persona_2 = new Empleado("Maria", "Grace");

echo $persona -> getNombreCompleto()."<br>";
echo $persona -> getSueldo()."<br>";
echo $persona_2 -> getNombreCompleto()."<br>";
echo $persona_2 -> getSueldo();
*/


//*TEST 004.EmpleadoConstante.php
/*
include_once ('004.EmpleadoConstante.php');

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

//*TEST 005.EmpleadoStatic.php
/*
include_once('006.EmpleadoStatic.php');

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
?>