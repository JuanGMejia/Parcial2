<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Proyecto extends CI_Model {

    private $nombre;
    private $descripcion;
    private $fecha_inicio;
    private $fecha_fin;
    private $nombre_director;
    private $nombre_cliente;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validar($proyecto) {
        $errores = [];

        if ($proyecto['nombre'] == null) {
            $errores[] = 'El nombre no puede ser vacío';
        }

        if ($proyecto['descripcion'] == null) {
            $errores[] = 'La descripcion no puede ser vacía';
        }

        if ($proyecto['fecha_inicio'] == null) {
            $errores[] = 'La fecha de inicio no puede ser vacía';
        } 

        if ($proyecto['nombre_director'] == null) {
            $errores[] = 'El nombre del director no puede ser vacío';
        } 

        return empty($errores) ? TRUE : $errores;
    }

    public function registrar($proyecto) {
        $date = $proyecto['fecha_inicio'];
        $my_date_inicio = date('m/d/y', strtotime($date));
        $date = $proyecto['fecha_fin'];
        $my_date_fin = date('m/d/y', strtotime($date));
        $data = [
        	'nombre' => $proyecto['nombre'],
            'descripcion' => $proyecto['descripcion'],
            'fechaInicio' => $my_date_inicio,
            'fechaFin' => $my_date_fin,
            'nombreDirector' => $proyecto['nombre_director'],
            'nombreCliente' => $proyecto['nombre_cliente']
        ];

        if ($this->db->insert('proyecto', $data) !== FALSE) {
            $this->id = $this->db->insert_id();
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
