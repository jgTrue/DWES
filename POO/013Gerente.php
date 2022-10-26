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
include_once('013Trabajador.php');
class Gerente extends Trabajador{

    private float $salario;
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

    //*NUEVA FUNCIÓN
    public function calcularSueldo()
    {
        $sueldo = $this->salario + $this->salario * $this->edad / 100;
        $this->sueldo = $sueldo;

        return $this;
    }
    
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    // Getters
    public function getSalario()
    {
        return $this->salario;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

  
    public function debePagarImpuestos(): bool{
        return ($this->sueldo > parent::$sueldoTope && $this->edad > 21) ? true : false;
    }


    public static function toHtml(Persona $p): string{
        if($p instanceof Gerente){
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