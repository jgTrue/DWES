<!-- 013Empresa.php: Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una 
propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade getters/setters para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona 
$p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al 
método calcularSueldo(). -->

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