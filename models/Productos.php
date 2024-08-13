<?php

namespace Model;

class Productos extends ActiveRecord{
    protected static $tabla = 'productos';
    //aca va el nombre del id de la tabla
    protected static $idTabla = 'pro_id';
    //aca van los nombres de los campos
    protected static $columnasDB = ['pro_nombre', 'pro_precio'];

    public $pro_id;
    public $pro_nombre;
    public $pro_precio;



    public function __construct($args = [])
    {
        $this->pro_id = $args['id'] ?? null;
        $this->pro_nombre = $args['nombre'] ?? '';
        $this->pro_precio = $args['precio'] ?? 0;
    }
}