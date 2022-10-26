<!-- 010PersonaS.php: Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las 
clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que 
sean estáticos, de manera que obtenga los datos mediante $this.
function public __toString(): string -->

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

    public function __toString(): string{
        return "<p>Nombre: ".$this -> getNombre()."<br>Apellidos: ".$this -> getApellidos()."<br>Edad: ".$this -> getEdad()."</p>";
    }
 
}


?>