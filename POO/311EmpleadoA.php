<!-- 011PersonaA.php: Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona 
$p) tenga que ser redefinido en todos sus hijos. -->

<?php
include_once('011PersonaA.php');
class Empleado extends Persona{
    private array $telefonos = [];
    private static $sueldoTope = 3333; 

    // Constructor {sueldo, contructorPadre(nombre, apellidos)}
    public function __construct(
        string $nombre, 
        string $apellidos,
        int $edad,
        private float $sueldo = 1000)
        {
            parent::__construct(
                $nombre,
                $apellidos,
                $edad);
        }
    
    //Setters
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function setSueldoTope($sueldoTope)
    {
        self::$sueldoTope = $sueldoTope;

        return self::$sueldoTope;
    }

    // Getters
    
    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }

 
    public function debePagarImpuestos(): bool{
        return ($this->sueldo > self::$sueldoTope && $this->edad > 21) ? true : false;
    }

    // Añade un teléfono al array
    public function anyadirTelefono(int $telefono) : void{
        array_push($this->telefonos, $telefono);
    }

    // Muestra los teléfonos separados por comas
    public function listarTelefonos() : string{
        $listado = "";
        foreach($this->telefonos as $pos => $tel){
            ($pos == 0) ? $listado .= $tel.", " : $listado .= $tel.".";
        }
        return $listado;
    }

    // Elimina todos los teléfonos
    public function vaciarTelefonos(): void{
        $this->telefonos = array_diff($this->telefonos,$this->telefonos);    
    }

    public function getTelefonos() : string{ //*Función get telefono para toHML
        $listado = "";
        foreach($this->telefonos as $tel){
            $listado .= "<li>".$tel."</li>";
        }
        return $listado;
    }

    public static function toHtml(Persona $p): string{
        if($p instanceof Empleado){
            //Datos generales en un String.
            $datosHTML = "<p>Nombre y Apellidos: ".$p -> getNombreCompleto()."<br>
                            Edad: ".$p -> getEdad()."<br>
                            Sueldo: ".$p -> getSueldo()."<br>
                            Impuestos: ".(($p -> debePagarImpuestos()) ? "Sí<br>" : "No<br>").
                            "Teléfonos:<br>";
            //Datos de teléfonos.
            $telefonosHTML = "<ol>".$p -> getTelefonos()."</ol></p>";
            //Concatenación de ambas cadenas para conseguir toHTML completo.
            $estructuraHTML = $datosHTML.$telefonosHTML;
            
        }else{ //Si la persona no es un empleado se mostrará solo su nombre y apellidos.
            $estructuraHTML = "<p>Nombre y Apellidos: ".$p -> getNombreCompleto()."<br>Edad: ".$p -> getEdad()."</p>";
            
        }
        return $estructuraHTML;
    }

    public function __toString(): string{
        $datosToString = "<p>Nombre y Apellidos: ".$this -> getNombreCompleto()."<br>
                            Edad: ".$this -> getEdad()."<br>
                            Sueldo: ".$this -> getSueldo()."<br>
                            Impuestos: ".(($this -> debePagarImpuestos()) ? "Sí<br>" : "No<br>").
                            "Teléfonos:<br>";
            //Datos de teléfonos.
            $telefonosToString = "<ol>".$this -> getTelefonos()."</ol></p>";
            //Concatenación de ambas cadenas para conseguir toHTML completo.
            $estructuraToString = $datosToString.$telefonosToString;

        return $estructuraToString;
    }
}


?>