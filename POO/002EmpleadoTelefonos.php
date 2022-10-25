<!-- 002EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una propiedad privada que almacene un array de números de teléfonos. Añade los 
siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos -->


<?php 
class Empleado{
    private string $nombre;
    private string $apellidos;
    private float $sueldo; 

    private array $telefonos = [];
    
    // Setters
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        
        return $this;
    }
    
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        
        return $this;
    }
    
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
        return ($this->sueldo > 3333) ? true : false;
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