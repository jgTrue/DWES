<!-- 001Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. 
Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando 
el sueldo es superior a 3333€) → debePagarImpuestos(): bool -->

<?php 
class Empleado{
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    
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
}

?>