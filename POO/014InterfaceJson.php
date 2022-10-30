<!-- Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa. -->

<?php 

interface JSerializable{
    public function toJSON() : string;

    public function toSerialize() : string;
}

?>