<!-- 009PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario. -->

<?php
include_once('009PersonaE.php');
class Empleado extends Persona{
    private array $telefonos = [];
    public static $sueldoTope = 3333; //? PREGUNTAR SI PúBLICO O PRIVATE

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
}


?>