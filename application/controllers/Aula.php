<?php

class Aula extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function index() {
        $this->load->model('Aula_model');
        $crud = new grocery_CRUD();
        $crud->set_model('Aula_model');
        $crud->set_table('aula');
        $crud->set_relation('Edificio_id', 'edificio', 'nombre');
        $crud->required_fields('nombre', 'capacidad', 'Edificio_id');
        $output = $crud->render();
        $this->load->view('vacia.php', $output);
    }
}