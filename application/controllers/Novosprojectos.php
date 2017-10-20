<?php
class Novosprojectos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('NovosProjectos_model');
        $this->load->model('Contactos_model');
        $this->load->helper('url_helper');
    }

    public function index() //index é o metodo default
    {
       /* $data['nome']  = $this->NovosProjectos_model->getProjeto($nome);*/
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();

        $this->load->view('templates/header', $data);
        $this->load->view('news/novosProjectos', $data);
        $this->load->view('templates/footer');
    }

    public function getProjeto($id)
    {
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();
        $data['projeto']  = $this->NovosProjectos_model->getProjeto($id);

        $this->load->view('templates/header', $data);
        $this->load->view('news/novosProjectos');
        $this->load->view('templates/footer');
    }

    public function contatos()
    {
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();


        $this->load->view('templates/header', $data);
        $this->load->view('contatos');
        $this->load->view('templates/footer');

    }
}