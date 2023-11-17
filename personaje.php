public function guardar(){
    $conexion = new Conexion();
    if($this->id) /**Modificar*/{
        $consulta = $ conexion->prepare('UPDATE ' .self::TABLA . ' SET nombre = :nombre, apellido = :apellido, WHERE id = :id')
        $consulta->bindParam(':nombre',$this->nombre);
        $consulta->bindParam(':apellido',$this->apellido);
        $consulta->bindParam(':id',$this->id)
        $consulta->execute();
    }else /**Insertar */{
        $consulta = $conexion->prepare( 'INSERT INTO' .self::TABLA . ' (nombre, apellido) VALUES (:nombre, :apellido)');
        $consulta = $conexion->bindParam(':nombre',$this->nombre);
        $consulta = $conexion->bindParam(':apellido',$this->apellido);
        $consulta = $conexion->bindParam(':id',$this->id);
        $consulta->execute();
        $this->id = $conexion->lastInsertId();
        }    
        $conexion->null();

    }
