<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('NovosProjectos_model');

 /*       //verificar se o login foi feito
        if(isset($_SESSION['login']) == TRUE)
        {
            $this->load->view('news/adminDashboard');
        }
        else{
            redirect('index.php/login');
        }*/

    }

    public function index()
    {

        //verificar se o login foi feito
        if(isset($_SESSION['login']) == TRUE)
        {
            $data['projetos'] = $this->NovosProjectos_model->getProjetos();

            $this->load->view('templates/header', $data);
            $this->load->view('news/adminDashboard');
            $this->load->view('templates/footer');

            $nome_projeto = $this->input->post("nome_projeto");
            $localizacao = $this->input->post("localizacao");

            //verificacao do input
                if ($this->input->post('btn_login') == "Login")
                {


                }
        }
        else{
            redirect('index.php/login');
        }



    }

}


