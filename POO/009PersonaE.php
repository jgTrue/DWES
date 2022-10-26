<!-- 009PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario. -->

<?php

class Persona{

    // Constructor {nombre, apellidos}
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

    public static function toHTML(Persona $p) : string{ 
       
        $estructuraHTML = "<p>Nombre y Apellidos: ".$p -> getNombreCompleto()."<br>Edad: ".$p -> getEdad()."</p>";
        
    return $estructuraHTML;
    }
 
}


?>