<?php
class Conexion extends PDO{
    private $tipo_de_base='mysql';
    private $host= 'localhost';
    private $nombre_de_base= 'personaje';
    private $usuario= 'root';
    private $contraseña= '';
    public function_contruct(){
        try{
            parent::_contruct("{$this->tipo_de_datos}:db_name={$this->nombre_de_base};
            host={$this->host};charset=utf8",    
            $this->$usuario, $this->$contraseña);
        }catch(PDOException $e){
            echo $e->'Ha sugerido un error y no se puede conectar a la base de datos. Detalle: '
             .$e->getMessage();
                exit;

    }

    
