<?php

require_once("Conexion.php");

class Clientes{

    private $ID;
    private $Nombre;
    private $Direccion;
    private $Telefono;

    const TABLA = 'clientes';

    public function __construct($id = null, $nombre= null, $direccion= null, $telefono= null){

        $this->ID = $id;
        $this->Nombre = $nombre;
        $this->Direccion = $direccion;
        $this->Telefono = $telefono;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getDireccion(){
        return $this->Direccion;
    }

    public function getTelefono(){
        return $this->Telefono;
    }

    public function setNombre($nombre){
        $this->Nombre = $nombre;
    }

    public function setDireccion($direccion){
        $this->Direccion = $direccion;
    }

    public function setTelefono($telefono){
        $this->Telefono = $telefono;
    }

    public function guardar(){
            
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO ' .self::TABLA .' (nombre, direccion, telefono ) VALUES (:nombre, :direccion, :telefono)');
            $consulta -> bindParam(':nombre', $this->nombre);
            $consulta -> bindParam(':direccion', $this->direccion);
            $consulta -> bindParam(':telefono', $this->telefono);
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

