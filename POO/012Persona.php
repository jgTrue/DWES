<!-- 012Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100 -->

<?php

abstract class Persona{

    // Constructor {nombre, apellidos, edad}
    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad)
        {}
    // Setters
    public function setEdad(int $edad)
    {
        $this->edad = $edad;

        return $this;
    }
    
    // Getters
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getNombreCompleto(): string{
        return $this->nombre." ".$this->apellidos;
    }

    abstract static function toHTML(Persona $p) : string;

    public function __toString(): string{
        return "<p>Nombre: ".$this -> getNombre()."<br>Apellidos: ".$this -> getApellidos()."<br>Edad: ".$this -> getEdad()."</p>";
    }
 
}


?>