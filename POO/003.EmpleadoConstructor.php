<!-- 003EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. 
Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan 
mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer 
parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo 
inicial. -->

<?php 
class Empleado{
    private array $telefonos = [];

    // Constructor {nombre, apellidos}
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