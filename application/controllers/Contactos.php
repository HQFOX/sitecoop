<?php

class Contactos extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('NovosProjectos_model');
        $this->load->model('Contactos_model');
        $this->load->helper('url_helper');
    }

    public function index() //index é o metodo default
    {
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();
        $contactos['numeros'] = $this->Contactos_model->get_ntelefones();
        $contactos['emails'] = $this->Contactos_model->get_emails();
        $data['background'] = 3;

        $this->load->view('templates/header', $data);
        $this->load->view('news/contactos', $contactos);
        $this->load->view('templates/footer');
    }
}