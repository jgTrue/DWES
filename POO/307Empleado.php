<!-- 007Persona.php: Copia la clase del ejercicio anterior en 307Empleado.php y 
modifícala.Crea una clase Persona que sea padre de Empleado, de manera que 
Persona contenga el nombre y los apellidos, y en Empleado quede el salario y los 
teléfonos. -->

<?php
include_once('007.Persona.php');
class Empleado extends Persona{
    private array $telefonos = [];
    private static $sueldoTope = 3333;

    // Constructor {sueldo, contructorPadre(nombre, apellidos)}
    public function __construct(
        string $nombre, 
        string $apellidos,
        private float $sueldo = 1000)
        {
            parent::__construct(
                $nombre,
                $apellidos);
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
        return ($this->sueldo > self::$sueldoTope) ? true : false;
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

    //!Se encuentra comentado porque genera conflicto con el siguiente ejercicio.
    /*
    public static function toHtml(Empleado $emp): string{
        //Datos generales en un String.
        $datosHTML = "<p>Nombre y Apellidos: ".$emp -> getNombreCompleto()."<br>
                         Sueldo: ".$emp -> getSueldo()."<br>
                         Impuestos: ".(($emp -> debePagarImpuestos()) ? "Sí<br>" : "No<br>").
                        "Teléfonos:<br>";
        //Datos de teléfonos.
        $telefonosHTML = "<ol>".$emp -> getTelefonos()."</ol></p>";
        //Concatenación de ambas cadenas para conseguir toHTML completo.
        $estructuraHTML = $datosHTML.$telefonosHTML;
        
        return $estructuraHTML;
        
    }*/
}


?>