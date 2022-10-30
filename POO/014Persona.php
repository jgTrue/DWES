<!-- Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa. -->

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