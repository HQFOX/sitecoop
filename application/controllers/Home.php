<?php
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('NovosProjectos_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['projetos'] = $this->NovosProjectos_model->getProjetos();
        $data['ultimoProjeto'] = $this->NovosProjectos_model->getUltimoProjeto();

        $this->load->view('templates/header', $data);
        $this->load->view('news/home', $data);
        $this->load->view('templates/footer');
    }




}