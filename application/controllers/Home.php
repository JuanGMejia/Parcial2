<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   
*/
class Home extends CI_Controller
{
    
    function index()
    {
        $data = array('title' => 'Proyectos', );
        $this->load->helper('url');
        $this->load->view('home', $data);
    }
}

?>