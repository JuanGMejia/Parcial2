<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   
*/
class Proyectos extends CI_Controller
{
    function registrar()
    {
        $data = array('title' => 'Registrar proyectos');
        $this->load->helper('url');
        $this->load->view('registrar_proyectos', $data);
    }
    
    function submit()
    {
        $this->load->library('form_validation');
        $validator = array(
                array(
                    'field' => 'inputNombre',
                    'label' => 'Nombre|max_length[100]',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'inputDescripcion',
                    'label' => 'Descripcion|max_length[100]',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'inputFechaInicio',
                    'label' => 'FechaInicio',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'inputFechaFin',
                    'label' => 'FechaFin'
                ),
                array(
                    'field' => 'inputNombreDirector',
                    'label' => 'NombreDirector|max_length[30]',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'inputNombreCliente',
                    'label' => 'NombreCliente|max_length[30]'
                )
            );
        $this->form_validation->set_rules($validator); 
        $data = array();
        if ($this->form_validation->run())
        {
            $this->load->model('Proyecto');
            $proyecto = array(
                    'nombre' => $this->input->post('inputNombre'),
                    'descripcion' => $this->input->post('inputDescripcion'),
                    'fecha_inicio' => $this->input->post('inputFechaInicio'),
                    'fecha_fin' => $this->input->post('inputFechaFin'),
                    'nombre_director' => $this->input->post('inputNombreDirector'),
                    'nombre_cliente' => $this->input->post('inputNombreCliente')
                );
            if ($this->Proyecto->validar($proyecto) == TRUE){
                $this->Proyecto->registrar($proyecto);
            }
            $data['success'] = True;
        }
        $data['title'] = 'Registrar proyectos';
        $this->load->helper('url');
        $this->load->view('registrar_proyectos',$data);
    }


    function listar()
    {
        $this->load->model('Proyecto');
        $proyectos = $this->Proyecto->get_all();
        $data = array();
        $data['title'] = 'Listar proyectos';
        $data['proyectos'] = $proyectos;
        $this->load->helper('url');
        $this->load->view('listar_proyectos', $data);
    }
    
}

?>