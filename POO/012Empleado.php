<!-- 012Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100 -->

<?php
include_once('012Trabajador.php');
class Empleado extends Trabajador{

    private float $horasTrabajadas;
    private float $precioPorHora;

    // Constructor {sueldo, contructorPadre(nombre, apellidos, edad)}
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

    public function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;

        return $this;
    }

    public function setPrecioPorHora($precioPorHora)
    {
        $this->precioPorHora = $precioPorHora;

        return $this;
    }

    //*NUEVA FUNCIÓN
    public function calcularSueldo()
    {
        $sueldo = $this->horasTrabajadas * $this->precioPorHora;
        $this->sueldo = $sueldo;

        return $this;
    }

    // Getters
    public function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }
    
    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

  
    public function debePagarImpuestos(): bool{
        return ($this->sueldo > parent::$sueldoTope && $this->edad > 21) ? true : false;
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