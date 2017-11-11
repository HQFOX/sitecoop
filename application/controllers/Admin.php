<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('Admin_model');
        $this->load->library('form_validation');


 /*       //verificar se o login foi feito
        if(isset($_SESSION['login']) == TRUE)
        {
            $this->load->view('news/adminProjetos');
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
            $data['projetos']  = $this->Admin_model->getProjetos();
            $data['inscritos'] = $this->Admin_model->getInscritos();


            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            $this->load->view('news/adminDashboard', $data);
        }
        else{
            redirect('index.php/login');
        }



    }

    public function administrarProjetos()
    {
        //verificar se o login foi feito
        if(isset($_SESSION['login']) == TRUE)
        {
            $data['projetos']  = $this->Admin_model->getProjetos();


            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            /*$this->load->view('news/adminProjetos', $data);*/


            $nome_projeto = $this->input->post("nome_projeto");
            $localizacao = $this->input->post("localizacao");
            $tipologia = $this->input->post("tipologia");
            $valor = $this->input->post("valor");
            $nquartos = $this->input->post("nquartos");
            $ninscritos = $this->input->post("ninscritos");
            $limiteinscritos = $this->input->post("limiteinscritos");



            //FALTA AS REGRAS
            $this->form_validation->set_rules('nome_projeto', 'nome', 'required',
                array('required' => 'You must provide a %s.')
            );
            $this->form_validation->set_rules('localizacao', 'localizacão', 'required',
                array('required' => 'You must provide a %s.')
            );
            $this->form_validation->set_rules('tipologia', 'tipologia', 'required',
                array('required' => 'You must provide a %s.')
            );
            $this->form_validation->set_rules('valor', 'valor', 'required|numeric',
                array('required' => 'You must provide a %s.')
            );
            $this->form_validation->set_rules('nquartos', 'Numero de quartos', 'required|numeric',
                array('required' => 'You must provide a %s.')
            );
            $this->form_validation->set_rules('ninscritos', 'Numero de Inscritos', 'required|numeric',
                array('required' => 'You must provide a %s.')
            );
            $this->form_validation->set_rules('limiteinscritos', 'Limite Inscritos', 'required|numeric',
                array('required' => 'You must provide a %s.')
            );
            //verificacao do input


            if ($this->input->post('btn_login') == "Submeter")
            {

                if ($this->form_validation->run() == FALSE)
                {
                    //validation fails
                    echo ('FALSO');

                }
                else {

                    $input = array(
                        'nome' => $nome_projeto,
                        'localizacao' => $localizacao,
                        'tipologia' => $tipologia,
                        'valor' => intval($valor),
                        'nquartos' => $nquartos,

                        'ninscritos' => $ninscritos,
                        'limiteinscritos' => $limiteinscritos

                    );

                    $this->Admin_model->exemplo($input);
                    echo json_encode($input);
                    redirect('index.php/admin/administrarprojetos');

                }
            }






            $this->load->view('news/adminProjetos', $data);
        }
        else{
            redirect('index.php/login');
        }



    }
    public function deleteProjeto($id){

        //verificar se o login foi feito
        if(isset($_SESSION['login']) == TRUE)
        {
            $this->Admin_model->delProjeto($id);
            redirect('index.php/admin/administrarprojetos');
        }
    }
    public function deleteInscrito($id){

        //verificar se o login foi feito
        if(isset($_SESSION['login']) == TRUE)
        {
            $this->Admin_model->delInscrito($id);
            redirect('index.php/admin/administrarinscricoes');
        }
    }
    public function setInscrito($id,$value){
        if(isset($_SESSION['login']) == TRUE)
        {
            $this->Admin_model->setInscrito($value,$id);
            redirect('index.php/admin/administrarinscricoes');
        }
    }


    public function administrarInscricoes(){
        //verificar se o login foi feito
        if(isset($_SESSION['login']) == TRUE)
        {
            $data['projetos']  = $this->Admin_model->getProjetos();
            $data['inscritos'] = $this->Admin_model->getInscritos();

            /* $data['inscritosprojeto'] = $this->Admin_model->getInscritosProjeto();*/
           //print_r (($data['projetos'][1]['nome']));

 /*          for($i=0;$i<count($data['projetos']);$i++)
           {
               $data['projetosinscritos']=$this->Admin_model->getInscritosProjeto($data['projetos'][$i]['id']);
           }*/


            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            $this->load->view('news/adminInscricoes', $data);

        }
        else{
            redirect('index.php/login');
        }

    }


}


?>