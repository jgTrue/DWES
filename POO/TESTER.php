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

//*TEST 012Empleado.php
/* 
include_once ('012Empleado.php');
$persona = new Empleado("Ricky", "Pepe Marcos", 28);
$persona -> anyadirTelefono(689515981);
$persona -> anyadirTelefono(689513356);
$persona -> setHorasTrabajadas(160);
$persona -> setPrecioPorHora(25);
$persona -> calcularSueldo();

echo $persona ->__toString(); */

//*TEST 012Gerente.php
/*
include_once ('012Gerente.php');
$persona = new Gerente("Aemon", "García Marín", 28);
$persona -> anyadirTelefono(689515981);
$persona -> anyadirTelefono(689513356);
$persona -> setSalario(5000);
$persona -> calcularSueldo();

echo $persona ->__toString(); */ 

//*TEST 013Empresa.php

/*include_once ('013Empresa.php');

$emp = new Empresa("Reparaciones SL", "Sevilla");

$persona = new Gerente("Aemon", "García Marín", 28, 6000);
$persona -> anyadirTelefono(689515981);

$persona1 = new Gerente("Jose", "Reyes Marín", 21);
$persona1 -> anyadirTelefono(689515888);

$persona2 = new Empleado("David", "García Lucas", 50,3500);
$persona2 -> anyadirTelefono(689515111);

$emp ->anyadirTrabajador($persona);
$emp ->anyadirTrabajador($persona1);
$emp ->anyadirTrabajador($persona2);
echo $emp -> listarTrabajadoresHtml();
echo "Coste de las nóminas: ".$emp -> getCosteNominas();
*/


?>