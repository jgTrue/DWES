<!-- 013Empresa.php: Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una 
propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade getters/setters para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona 
$p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al 
método calcularSueldo(). -->

<?php
include_once('013Persona.php');
abstract class Trabajador extends Persona{
    private array $telefonos = [];
    protected static $sueldoTope = 3333; 

    // Constructor {contructorPadre(nombre, apellidos, edad)}
    public function __construct(
        string $nombre, 
        string $apellidos,
        int $edad)
        {
            parent::__construct(
                $nombre,
                $apellidos,
                $edad);
        }
    
    //Setters

    public function setSueldoTope($sueldoTope)
    {
        self::$sueldoTope = $sueldoTope;

        return self::$sueldoTope;
    }

    // Getters
    
    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    abstract public function calcularSueldo();
    abstract public function debePagarImpuestos(): bool;

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

}


?>