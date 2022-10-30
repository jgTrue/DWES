<!-- Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa.-->

<?php 
    include_once('014Empleado.php');
    include_once('014Gerente.php');
    
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