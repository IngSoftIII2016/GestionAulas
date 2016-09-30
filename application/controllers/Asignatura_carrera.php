<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Asignatura_carrera extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function index() {
        $this->load->model('AsignaturaCarrera_Model');
        $crud = new grocery_CRUD();
        $crud->set_model('AsignaturaCarrera_Model');
        $crud->set_table('asignatura_carrera');
        $crud->set_relation('Asignatura_id', 'asignatura', 'nombre');
        $crud->set_relation('Carrera_id', 'carrera', 'nombre');
        $crud->required_fields('Asignatura_id', 'Carrera_id', 'regimen', 'anio');
        $output = $crud->render();
        $this->load->view('vacia.php', $output);
    }
}