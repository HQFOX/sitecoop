<?php
class Projectos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('NovosProjectos_model');
        $this->load->model('Contactos_model');
        $this->load->library('form_validation');
        $this->load->helper('url_helper');
        $this->load->helper('email');
    }

    public function index() //index é o metodo default
    {
        $data['titulo']  = "Projetos em Iniciação";
        $data['historico'] = 1;
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();
        $data['emails'] = $this->Contactos_model->get_emails();
        $data['ntelefones'] = $this->Contactos_model->get_ntelefones();
        $data['background'] = 4;

        $this->load->view('templates/header', $data);
        $this->load->view('news/novosProjetosMenu');
        $this->load->view('templates/footer');
    }

    public function historico() //index é o metodo default
    {
        $data['titulo']  = "Histórico de projetos";
        $data['historico'] = 0;
        $data['projetos']  = $this->NovosProjectos_model->getProjetos();
        $data['emails'] = $this->Contactos_model->get_emails();
        $data['ntelefones'] = $this->Contactos_model->get_ntelefones();
        $data['background'] = 4;

        $this->load->view('templates/header', $data);
        $this->load->view('news/novosProjetosMenu');
        $this->load->view('templates/footer');
    }

    public function getProjeto($id)
    {
        $data['projeto']  = $this->NovosProjectos_model->getProjeto($id);
        $data['background'] = 4;
        $data['emails'] = $this->Contactos_model->get_emails();
        $data['ntelefones'] = $this->Contactos_model->get_ntelefones();

        $data['projeccao'] = $this->NovosProjectos_model->getFotos($id,'projeccao');
        $data['planta'] = $this->NovosProjectos_model->getFotos($id,'planta');
        $data['construcao'] = $this->NovosProjectos_model->getFotos($id,'construcao');

        $this->load->view('templates/header', $data);
        $this->load->view('news/novosProjectos');
        $this->load->view('templates/footer');
    }
    public function email_exists($email,$id_projeto)
    {
        $this->load->model('PreInscricao_model');

        if( $this->PreInscricao_model->inscricao_email_exists($email, $id_projeto)==false)
            return true;
        else
            return false;
    }

    public function telefone_exists($ntelefone,$id_projeto)
    {
        $this->load->model('PreInscricao_model');

        if( $this->PreInscricao_model->inscricao_telefone_exists($ntelefone, $id_projeto)==false)
            return true;
        else
            return false;
    }



    public function preInscricao($id_projeto)
    {
        $data['projeto']  = $this->NovosProjectos_model->getProjeto($id_projeto);
        $data['emails'] = $this->Contactos_model->get_emails();
        $data['ntelefones'] = $this->Contactos_model->get_ntelefones();
        $data['background'] = 2;

        $this->load->view('templates/header', $data);
        $this->load->model('PreInscricao_model');

        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $ntelefone = $this->input->post("ntelefone");



        $this->form_validation->set_rules('nome', 'nome', 'required',
            array('required' => 'Campo de preenchimento obrigatório %s.')
        );
        //pode ter que se tirar o xss_clean
        $this->form_validation->set_rules('email', 'email','required|callback_email_exists['.$id_projeto.']|trim|max_length[30]|valid_email',
            array('required' => 'Campo de preenchimento obrigatório %s.', 'email_exists' => 'este email já esta inscrito para este projeto')
        );

        $this->form_validation->set_rules('ntelefone', 'telefone', 'required|numeric|callback_telefone_exists['.$id_projeto.']',
            array('required' => 'Campo de preenchimento obrigatório %s.','telefone_exists' => 'este nº telefone já está inscrito para este projeto')
        );


        if ($this->input->post('btn_login') == "Submeter")
        {

            if ($this->form_validation->run() == FALSE)
            {
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


                    $msg = "Nome do projeto :" . $data['projeto'][0]['nome'] . " Nome usuario :" . $nome . " Email :" . $email . " Telefone : " . $ntelefone;
                   // $this->mandaremail("henrique.raposo95@gmail.com",$msg);
                    //$this->mandaremail($email,$msg);
                    redirect('index.php/Projectos/sucesso/'.$id_projeto);
            }
        }



        $this->load->view('news/preInscricao', $id_projeto);
        $this->load->view('templates/footer');
    }

    public function sucesso($id_projeto){

        $data['projeto']  = $this->NovosProjectos_model->getProjeto($id_projeto);
        $data['emails'] = $this->Contactos_model->get_emails();
        $data['ntelefones'] = $this->Contactos_model->get_ntelefones();
        $data['background'] = 2;

        $this->load->view('templates/header', $data);
        $this->load->model('PreInscricao_model');

        $this->load->view('news/upload_success', $id_projeto);
        $this->load->view('templates/footer');
    }

    public function mandaremail($recipiente,$msg){


        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://cooperativahabitacao-giraldosempavor.pt',
            'smtp_port' => 465,
            'smtp_user' => '@cooperativahabitacao-giraldosempavor.pt',
            'smtp_pass' => '',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");


        $this->email->from('informacoes_automaticas@cooperativahabitacao-giraldosempavor.pt', 'Cooperativa Giraldo Sem Pavor ');
        $this->email->to($recipiente);

        $this->email->subject('Inscrição num projeto efetuada');
        $this->email->message($msg);

        if($this->email->send()){ echo "envio de inscrição bem sucedido";}
        else{ echo "erro a mandar informações";}
    }




}
