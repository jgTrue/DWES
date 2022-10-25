<!-- 008PersonaH.php: Copia las clases del ejercicio anterior y modifícalas. Crea en Persona 
el método estático toHtml(Persona $p), y modifica en Empleado el mismo método 
toHtml(Persona $p), pero cambia la firma para que reciba una Persona como 
parámetro. Para acceder a las propiedades del empleado con la persona que recibimos 
como parámetro, comprobaremos su tipo: -->

<?php

class Persona{

    // Constructor {nombre, apellidos}
    public function __construct(
        protected string $nombre,
        protected string $apellidos,)
        {}
    
    // Getters
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getNombreCompleto(): string{
        return $this->nombre." ".$this->apellidos;
    }

    public static function toHTML(Persona $p) : string{ //? PREGUNTAR, NO SÉ SI ES NECESARIO RELLENARLO O DEJARLO VACIO.
       
        $estructuraHTML = "<p>Nombre y Apellidos: ".$p -> getNombreCompleto()."</p>";
        
    return $estructuraHTML;
    }
 
}


?>