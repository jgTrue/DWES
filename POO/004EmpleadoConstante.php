<!-- 004EmpleadoConstante.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una constante SUELDO_TOPE con el valor del sueldo que debe pagar impuestos, y 
modifica el código para utilizar la constante. -->

<?php

class Empleado{
    private array $telefonos = [];
    const SUELDO_TOPE = 3333;

    // Constructor {nombre, apellidos, sueldo}
    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000)
        {}
    
    // Setters
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

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

    public function getSueldo()
    {
        return $this->sueldo;
    }


    public function getNombreCompleto(): string{
        return $this->nombre." ".$this->apellidos;
    }
 
    public function debePagarImpuestos(): bool{
        return ($this->sueldo > Empleado::SUELDO_TOPE) ? true : false;
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
}



?>