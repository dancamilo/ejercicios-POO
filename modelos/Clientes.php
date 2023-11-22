<?php

require_once("Conexion.php");

class Categoria{

    private $ID;
    private $Nombre;
    private $Descripcion;

    const TABLA = 'categorias';

    public function __construct($id = null, $nombre = null, $descripcion = null){

        $this->ID = $id;
        $this->Nombre = $nombre;
        $this->Descripcion = $descripcion;

    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getDescripcion(){
        return $this->Descripcion;
    }

    public function setNombre($nombre){
        $this->Nombre = $nombre;
    }

    public function setDescripcion($descripcion){
        $this->Descripcion = $descripcion;
    }

    public function guardar(){
            
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO ' .self::TABLA .' (nombre, descripcion)VALUES (:nombre, :descripcion)');
            $consulta -> bindParam(':nombre', $this->nombre);
            $consulta -> bindParam(':descripcion', $this->descripcion);
            $consulta -> execute();
            $this->id = $conexion->lastInsertid();
        }
        $conexion = null;
    }

    public static function mostrar(){
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY nombre');
            $consulta -> execute();
            $registros = $consulta->fetchAll();
            return $registros;

    }

    
}

