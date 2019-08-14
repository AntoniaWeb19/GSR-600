<?php
class Alumno{
    #Atributos
    private $Id;
    private $Nombre;
    private $Apellido;
    private $Sexo;
    private $FechaNacimiento;
    #Metodos


        public function __GET($atributo){
            return $this->$atributo;
        }

        public function __SET($atributo, $contenido){
            $this->$atributo = $contenido;
        }
}
?>
