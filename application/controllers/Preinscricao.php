<?php
class Preinscricao extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('NovosProjectos_model');
        $this->load->helper('url_helper');

    }

    public function index()
    {
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();
        $this->load->helper('url_helper');

        $this->load->view('templates/header', $data);
        $this->load->view('news/preInscricao');
    }

    public function submit_preInscricao($attributes)
    {



        //$this->insert_model->form_insert($data);

    }

}
