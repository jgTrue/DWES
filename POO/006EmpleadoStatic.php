<!-- 006EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. Completa el 
siguiente método con una cadena HTML que muestre los datos de un empleado 
dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, 
deberás crear un getter para los teléfonos):
public static function toHtml(Empleado $emp): string -->

<?php

class Empleado{
    private array $telefonos = [];
    private static $sueldoTope = 3333;

    // Constructor {nombre, apellidos, sueldo}
    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000)
        {}
    
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
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }


    public function getNombreCompleto(): string{
        return $this->nombre." ".$this->apellidos;
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
    }
}


?>