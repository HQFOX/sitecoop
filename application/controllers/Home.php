<?php
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('NovosProjectos_model');
        $this->load->model('Contactos_model');
        $this->load->model('Admin_model');
        $this->load->model('Post_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['projetos'] = $this->NovosProjectos_model->getProjetos();
        $data['ultimoProjeto'] = $this->NovosProjectos_model->getUltimoProjeto();
        $data['carrossel'] = $this->NovosProjectos_model->getCarrossel();
        $data['background'] = 2;

        //conta e guarda o nome das fotos dos post
        $filecount = 0;
        $nomeficheiros =array();

        if ($handle = opendir("./uploads/post")) {

            while (false !== ($entry = readdir($handle))) {

                if ($entry != "." && $entry != "..") {
                    $filecount++;
                    //echo "$entry\n";
                    array_push($nomeficheiros,$entry);
                }
            }

            closedir($handle);
        }
        //---------------------------------
        $data['filecountp'] = $filecount;
        $data['ficheirosp'] = $nomeficheiros;


        $data['descricoes'] = $this->Admin_model->getDescricoes();
        $data['sobre'] = $this->Admin_model->getSobre();
        $data['post'] = $this->Post_model->getPost();
        $data['emails'] = $this->Contactos_model->get_emails();
        $data['ntelefones'] = $this->Contactos_model->get_ntelefones();


        //print_r($data);
        $this->load->view('templates/header', $data);
        $this->load->view('news/home', $data);
        $this->load->view('templates/footer');
    }




}