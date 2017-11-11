<?php
class Novosprojectos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('NovosProjectos_model');
        $this->load->model('Contactos_model');
        $this->load->library('form_validation');
        $this->load->helper('url_helper');
    }

    public function index() //index é o metodo default
    {
       /* $data['nome']  = $this->NovosProjectos_model->getProjeto($nome);*/
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();
        $contactos['numeros'] = $this->Contactos_model->get_ntelefones();
        $contactos['emails'] = $this->Contactos_model->get_emails();

        $this->load->view('templates/header', $data);
        $this->load->view('news/novosProjectos', $data);
        $this->load->view('templates/footer' ,$contactos);

    }

    public function getProjeto($id)
    {
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();
        $data['projeto']  = $this->NovosProjectos_model->getProjeto($id);
        $contactos['numeros'] = $this->Contactos_model->get_ntelefones();
        $contactos['emails'] = $this->Contactos_model->get_emails();

        $this->load->view('templates/header', $data);
        $this->load->view('news/novosProjectos');
        $this->load->view('templates/footer',$contactos);
    }

    public function preInscricao($id_projeto)
    {
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();
        $data['projeto']  = $this->NovosProjectos_model->getProjeto($id_projeto);
        $contactos['numeros'] = $this->Contactos_model->get_ntelefones();
        $contactos['emails'] = $this->Contactos_model->get_emails();

        $this->load->view('templates/header', $data);
        $this->load->model('PreInscricao_model');

        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $ntelefone = $this->input->post("ntelefone");

        $this->form_validation->set_rules('nome', 'nome', 'required',
            array('required' => 'You must provide a %s.')
        );

        $this->form_validation->set_rules('email', 'email', 'trim|required',
            array('required' => 'You must provide a %s.')
        );

        $this->form_validation->set_rules('ntelefone', 'telefone', 'required|numeric',
            array('required' => 'You must provide a %s.')
        );


        if ($this->input->post('btn_login') == "Submeter")
        {

            if ($this->form_validation->run() == FALSE)
            {
                //validation fails
                echo ('FALSO');

            }
            else {

                $input = array(
                    'nomeI' => $nome,
                    'email' => $email,
                    'telefone' => $ntelefone,
                    'projetoId' => $id_projeto,
                    'inscrito' => 0

                );

                $this->PreInscricao_model->add_inscricao($input);
                echo json_encode($input);
                redirect('');

            }
        }



        $this->load->view('news/preInscricao', $id_projeto);
        $this->load->view('templates/footer',$contactos);
    }



}