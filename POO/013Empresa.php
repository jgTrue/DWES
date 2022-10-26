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
    include_once('013Empleado.php');
    include_once('013Gerente.php');
    
    class Empresa{

        public function __construct(
            public string $nombre,
             public string $direccion)
        {}
        
        private array $trabajadores = [];

        //Setters

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;

                return $this;
        }

        //Getters
        public function getDireccion()
        {
                return $this->direccion;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function anyadirTrabajador(Trabajador $t) : void{
            array_push($this->trabajadores, $t);
        }

        public function listarTrabajadoresHtml() : string{
            $listado = "<ul>";
            
            //!Desde Trabajador::toHtml no funcionaría ya que el método fue eliminado y pertenece a Gerente y a Empleado

            foreach($this->trabajadores as $t){
                if($t instanceof Gerente){ 
                    $listado .= "<li>".Gerente::toHtml($t)."</li>";
                }else{
                    $listado .= "<li>".Empleado::toHtml($t)."</li>";
                }
            }
            return $listado."</ul>";
        }

        public function getCosteNominas(): float{
            // Utilizo getSueldo porque calcularSueldo() es el setter de sueldo.
            $coste = 0;
            foreach($this->trabajadores as $t){
               $coste += $t -> getSueldo();
            }
            return $coste;
        }
    }

?>