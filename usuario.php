<?php
    class Usuario{
        var $id;
        var $nombre;
        var $clave;
             

        //getters and setters
        function setId($id){
            $this->id = $id;
        }
        function setNombre($nombre){
            $this->nombre  = $nombre;
        }
        function setClave($clave){
            $this->clave = $clave;
        }


        function getId(){
            return $this->id;
        }
        function getNombre(){
            return $this->nombre;
        }
        function getClave(){
            return $this->clave;
        }
    }

?>