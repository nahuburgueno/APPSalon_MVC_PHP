<?php
namespace Model;

class CitaServicios extends ActiveRecord {
    protected static $tabla = 'citasservicios';
    protected static $columnasdb = ['id', 'citaId', 'servicioId'];

    public $id;
    public $citaId;
    public $servicioId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->citaId = $args['citaId'] ?? '';
        $this->servicioId = $args['servicioId'] ?? '';
        

    }
}