<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('Admin_model');
        $this->load->model('Contactos_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('form');


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
        if (isset($_SESSION['login']) == TRUE) {
            $data['projetos'] = $this->Admin_model->getProjetos();
            $data['inscritos'] = $this->Admin_model->getInscritos();
            $data['background'] = 1;

            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            $this->load->view('news/adminDashboard', $data);
        } else {
            redirect('index.php/login');
        }


    }

    public function administrarProjetos()
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $data['projetos'] = $this->Admin_model->getProjetos();
            $data['background'] = 1;

            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            /*$this->load->view('news/adminProjetos', $data);*/


            $this->load->view('news/adminProjetos', $data);
        } else {
            redirect('index.php/login');
        }


    }

    public function adicionarProjetos()
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $data['background'] = 1;

            $this->load->model('Admin_model');

            $last_id_r = $this->Admin_model->getUltimoProjetoId();
            $this->load->view('templates/header', $data);
            $create_id = $last_id_r[0]['id'] + 1;

            /*$this->load->view('news/adminProjetos', $data);*/


            $nome_projeto = $this->input->post("nome_projeto");
            $localidade = $this->input->post("localidade");
            $bairro = $this->input->post("bairro");
            $rua = $this->input->post("rua");
            $tipologia = $this->input->post("tipologia");
            $valor = $this->input->post("valor");
            $nquartos = $this->input->post("nquartos");
            $ninscritos = $this->input->post("ninscritos");
            $limiteinscritos = $this->input->post("limiteinscritos");

            $config['file_name'] = "fotoperfil";
            $config['upload_path'] = "./uploads/$create_id";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            //FALTA AS REGRAS
            $this->form_validation->set_rules('nome_projeto', 'nome', 'required',
                array('required' => 'é obrigatório fornecer o nome do projeto %s.')
            );
            $this->form_validation->set_rules('localidade', 'localidade', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('bairro', 'bairro', 'required',
                array('required' => 'é obrigatório fornecer o bairro %s.')
            );
            $this->form_validation->set_rules('rua', 'rua', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('tipologia', 'tipologia', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('valor', 'valor', 'required|numeric',
                array('required' => 'é obrigatório fornecer o %s.')
            );
            $this->form_validation->set_rules('nquartos', 'Numero de quartos', 'required|numeric',
                array('required' => 'é obrigatório fornecer o %s.')
            );
            $this->form_validation->set_rules('ninscritos', 'Numero de Inscritos', 'required|numeric',
                array('required' => 'é obrigatório fornecer o %s.')
            );
            $this->form_validation->set_rules('limiteinscritos', 'Limite Inscritos', 'required|numeric',
                array('required' => 'é obrigatório fornecer o %s.')
            );
            //verificacao do input


            if ($this->input->post('btn_login') == "Submeter") {

                if ($this->form_validation->run() == FALSE) {
                    //validation fails
                    echo('FALSO');

                } else {
                    echo('validation true');
                    if (!file_exists("./uploads/$create_id")) {
                        mkdir("./uploads/$create_id", 0777, true);

                        echo('createfile true');
                    }
                    //insere imagem
                    if (!$this->upload->do_upload('userfile')) {
                        echo "ERRO";
                    } else {
                        echo('uploadfile true');
                        $input = array(
                            'nome' => $nome_projeto,
                            'localidade' => $localidade,
                            'bairro' => $bairro,
                            'rua' => $rua,
                            'tipologia' => $tipologia,
                            'valor' => intval($valor),
                            'nquartos' => $nquartos,

                            'ninscritos' => $ninscritos,
                            'limiteinscritos' => $limiteinscritos

                        );

                        $this->Admin_model->insertProjeto($input);
                        echo json_encode($input);
                        redirect('index.php/admin/adicionarprojetos');
                    }

                }
            }


            $this->load->view('news/adminAdicionarProjetos', $data);
        } else {
            redirect('index.php/login');
        }


    }

    public function teste()
    {
        if (isset($_SESSION['login']) == TRUE) {

            $this->load->helper('form');
            $data = array();
            $data['title'] = 'Multiple file upload';

            if ($this->input->post()) {
                echo '<pre>';
                print_r($_FILES);
                echo '</pre>';
            }
            $this->load->view('news/adminImagensProjetos', $data);
        }
    }

    public function do_upload()
    {
        if (isset($_SESSION['login']) == TRUE) {

        }
    }

    private function set_upload_options()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['overwrite'] = FALSE;

        return $config;
    }

    public function deleteProjeto($id)
    {

        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $this->Admin_model->delProjeto($id);
            redirect('index.php/admin/administrarprojetos');
        }
    }

    public function editarProjeto($id)
    {

        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $data['background'] = 1;
            $data['projeto'] = $this->Admin_model->getProjeto($id);

            print_r($data['projeto'][0]['id']);
            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);


            $nome_projeto = $this->input->post("nome_projeto");
            $localidade = $this->input->post("localidade");
            $bairro = $this->input->post("bairro");
            $rua = $this->input->post("rua");
            $tipologia = $this->input->post("tipologia");
            $valor = $this->input->post("valor");
            $nquartos = $this->input->post("nquartos");
            $ninscritos = $this->input->post("ninscritos");
            $limiteinscritos = $this->input->post("limiteinscritos");

            //FALTA AS REGRAS
            $this->form_validation->set_rules('nome_projeto', 'nome', 'required',
                array('required' => 'é obrigatório fornecer o nome do projeto %s.')
            );
            $this->form_validation->set_rules('localidade', 'localidade', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('bairro', 'bairro', 'required',
                array('required' => 'é obrigatório fornecer o bairro %s.')
            );
            $this->form_validation->set_rules('rua', 'rua', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('tipologia', 'tipologia', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('valor', 'valor', 'required|numeric',
                array('required' => 'é obrigatório fornecer o %s.')
            );
            $this->form_validation->set_rules('nquartos', 'Numero de quartos', 'required|numeric',
                array('required' => 'é obrigatório fornecer o %s.')
            );
            $this->form_validation->set_rules('ninscritos', 'Numero de Inscritos', 'required|numeric',
                array('required' => 'é obrigatório fornecer o %s.')
            );
            $this->form_validation->set_rules('limiteinscritos', 'Limite Inscritos', 'required|numeric',
                array('required' => 'é obrigatório fornecer o %s.')
            );
            //verificacao do input


            if ($this->input->post('btn_login') == "Submeter") {

                if ($this->form_validation->run() == FALSE) {
                    //validation fails
                    echo('FALSO');

                } else {

                    $input = array(
                        'nome' => $nome_projeto,
                        'localidade' => $localidade,
                        'bairro' => $bairro,
                        'rua' => $rua,
                        'tipologia' => $tipologia,
                        'valor' => intval($valor),
                        'nquartos' => $nquartos,

                        'ninscritos' => $ninscritos,
                        'limiteinscritos' => $limiteinscritos

                    );

                    $this->Admin_model->updateProjeto($data['projeto'][0]['id'], $input);
                    echo json_encode($input);
                    redirect('index.php/admin/administrarprojetos');

                }
            }


            $this->load->view('news/editarProjeto', $data);
        } else {
            redirect('index.php/login');
        }


    }

    public function deleteInscrito($id)
    {

        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $this->Admin_model->delInscrito($id);
            redirect('index.php/admin/administrarinscricoes');
        }
    }

    public function setInscrito($id, $value)
    {
        if (isset($_SESSION['login']) == TRUE) {
            $this->Admin_model->setInscrito($value, $id);
            redirect('index.php/admin/administrarinscricoes');
        }
    }


    public function administrarInscricoes()
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $data['projetos'] = $this->Admin_model->getProjetos();
            $data['inscritos'] = $this->Admin_model->getInscritos();
            $data['background'] = 1;

            /* $data['inscritosprojeto'] = $this->Admin_model->getInscritosProjeto();*/
            //print_r (($data['projetos'][1]['nome']));

            /*          for($i=0;$i<count($data['projetos']);$i++)
                      {
                          $data['projetosinscritos']=$this->Admin_model->getInscritosProjeto($data['projetos'][$i]['id']);
                      }*/


            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            $this->load->view('news/adminInscricoes', $data);

        } else {
            redirect('index.php/login');
        }

    }

    public function editarInscricao()
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $data['projetos'] = $this->Admin_model->getProjetos();
            $data['inscrito'] = $this->Admin_model->getInscritos();
            $data['background'] = 1;

            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            $this->load->view('news/editarInscricao', $data);

        } else {
            redirect('index.php/login');
        }
    }

    //**********************************contactos*********************************

    public function administrarContactos()
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $data['background'] = 1;

            $data['ntelefones'] = $this->Contactos_model->get_ntelefones();
            $data['emails'] = $this->Contactos_model->get_emails();
            $this->load->model('Contactos_model');
            $this->load->view('templates/header', $data);

            $ntelefone = $this->input->post("ntelefone");
            $email = $this->input->post("email");


            //FALTA AS REGRAS
            $this->form_validation->set_rules('email', 'email', 'trim|max_length[30]|valid_email'
            );

            $this->form_validation->set_rules('ntelefone', 'telefone', 'numeric|max_length[30]'
            );

            if ($this->input->post('btn_login') == "Submeter") {

                if ($this->form_validation->run() == FALSE) {
                    //validation fails
                    echo('FALSO');

                } else {


                    $input = array(
                        'ntelefones' => $ntelefone,
                        'emails' => $email

                    );

                    print_r("cona");
                    print_r($input);
                    $this->load->model('Contactos_model');
                    $this->Contactos_model->add_contactos($input);
                    redirect('index.php/admin/administrarcontactos');

                }


            }
            $this->load->view('news/admincontactos', $data);
        } else {
            redirect('index.php/login');

        }

    }

    public function delemail($email)
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $this->load->model('Contactos_model');
            $this->Contactos_model->del_email($email);

            redirect('index.php/admin/administrarcontactos');

        } else {
            redirect('index.php/login');
        }
    }



    public function delnumero($numero)
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $this->load->model('Contactos_model');
            $this->Contactos_model->del_ntelefone($numero);

            redirect('index.php/admin/administrarcontactos');
        } else {
            redirect('index.php/login');
        }
    }

    //**********************************^^contactos^^*********************************

    //**********************************projetos*********************************

    public function projeccao($id)
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

            $data['background'] = 1;
            $data['titulo'] = 'FOTOS';
            $data['subtitulo'] = 'PROJECÇÃO';
            $data['id'] = $id;
            $data['tipo'] = 'projeccao';

            //conta o numero de fotos de projeccao
            $filecount = 0;
            $nomeficheiros =array();

            if (!file_exists("./uploads/$id/projeccao")) {
                mkdir("./uploads/$id/projeccao", 0777, true);
            }
            if ($handle = opendir("./uploads/$id/projeccao")) {

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
            $data['filecount'] = $filecount;
            $data['ficheiros'] = $nomeficheiros;




            $this->load->view('templates/header', $data);

            if ($this->input->post('btn_login') == "Submeter") {

                $this->alterarfoto($id,'projeccao');
            }

            $this->load->view('news/adminFotos');
        } else {
            redirect('index.php/login');
        }

    }
    public function planta($id)
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {


            $data['background'] = 1;
            $data['titulo'] = 'FOTOS';
            $data['subtitulo'] = 'PLANTA';
            $data['id'] = $id;
            $data['tipo'] = 'planta';

            //conta o numero de fotos de projeccao
            $filecount = 0;
            $nomeficheiros =array();
            if (!file_exists("./uploads/$id/planta")) {
                mkdir("./uploads/$id/planta", 0777, true);
            }
            if ($handle = opendir("./uploads/$id/planta")) {

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
            $data['filecount'] = $filecount;
            $data['ficheiros'] = $nomeficheiros;




            $this->load->view('templates/header', $data);

            if ($this->input->post('btn_login') == "Submeter") {

                $this->alterarfoto($id,'planta');
            }

            $this->load->view('news/adminFotos');

    } else {
            redirect('index.php/login');
        }

    }
    public function menu($id)
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {


        } else {
            redirect('index.php/login');
        }

    }

    public function alterarfoto($id, $tipo)
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

            $data['background'] = 1;
            $data['titulo'] = 'FOTOS';
            $data['subtitulo'] = 'PROJECÇÃO';
            $data['id'] = $id;

            //conta o numero de fotos de projeccao
            $filecount = 0;
            $nomeficheiros =array();
            if ($handle = opendir("./uploads/$id/$tipo")) {

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
            $data['filecount'] = $filecount;
            $data['ficheiros'] = $nomeficheiros;


            $config['file_name'] = "$tipo$filecount";
            $config['upload_path'] = "./uploads/$id/$tipo";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!file_exists("./uploads/$id/$tipo")) {
                mkdir("./uploads/$id/$tipo", 0777, true);
            }

            //insere imagem
            if (!$this->upload->do_upload('userfile')) {
                echo "ERRO";
            }


    } else {
        redirect('index.php/login');
    }

    }

    public function delfoto($filename,$tipo){
        if (isset($_SESSION['login']) == TRUE) {


            //chmod("uploads/carrossel/$filename",0777);
            unlink ( "uploads/$tipo/$filename");
            //redirect('index.php/admin/home');
        }


    }
    //**********************************^^projetos^^*********************************

    public function home(){
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

            $this->load->model('Admin_model');

            $data['sobre'] = $this->Admin_model->getSobre();


            $data['background'] = 1;


            //conta e guarda o nome das fotos do carrossel
            $filecount = 0;
            $nomeficheiros =array();
            if ($handle = opendir("./uploads/carrossel")) {

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
            $data['filecount'] = $filecount;
            $data['ficheiros'] = $nomeficheiros;



            $this->load->view('templates/header',$data);
            $this->load->view('news/adminHome');

        } else {
            redirect('index.php/login');
        }

    }

    public function novo_post(){
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

            $this->load->model('Admin_model');


            $data['background'] = 1;


            //conta e guarda o nome das fotos do carrossel
            $filecount = 0;
            $nomeficheiros =array();
            if ($handle = opendir("./uploads/carrossel")) {

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
            $data['filecount'] = $filecount;
            $data['ficheiros'] = $nomeficheiros;



            $titulo = $this->input->post("titulo");
            $texto = $this->input->post("texto");
            $video = $this->input->post("video");

            $config['file_name'] = "cona";
            $config['upload_path'] = "./uploads/post";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            //FALTA AS REGRAS
            $this->form_validation->set_rules('titulo', 'titulo', 'required',
                array('required' => 'You must provide a %s.')
            );
            $this->form_validation->set_rules('texto', 'texto', 'required',
                array('required' => 'You must provide a %s.')
            );

            $this->form_validation->set_rules('video', 'video', 'required',
                array('required' => 'You must provide a %s.')
            );

            if ($this->input->post('btn_login') == "SubmeterPost") {

                if ($this->form_validation->run() == FALSE) {
                    //validation fails
                    echo('FALSO');

                } else {
                    echo('validation true');
                    if (!file_exists("./uploads/post")) {
                        mkdir("./uploads/post", 0777, true);

                        echo('createfile true');
                    }
                    //insere imagem
                    if (!$this->upload->do_upload('userfile')) {
                        echo "no image file";
                    }


                    $input = array(
                        'titulo' => $titulo,
                        'texto' => $texto,
                        'video' => $video,
                        'imagem' => $config['file_name'],


                    );

                    $this->Admin_model->insertPost($input);
                    echo json_encode($input);
                    redirect('index.php/admin/home');


                }
            }

            redirect('index.php/admin/home');


        } else {
            redirect('index.php/login');
        }
    }
    public function sobre(){
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

            $this->load->model('Admin_model');


            $data['background'] = 1;






            $sobre = $this->input->post("sobre");


            //FALTA AS REGRAS
            $this->form_validation->set_rules('sobre', 'sobre', 'required',
                array('required' => 'You must provide a %s.')
            );

            if ($this->input->post('btn_login') == "SubmeterSobre") {

                if ($this->form_validation->run() == FALSE) {
                    //validation fails
                    echo('FALSO');

                } else {

                    $input = array(
                        'sobre' => $sobre


                    );

                    $this->Admin_model->insertSobre($input);
                    echo json_encode($sobre);
                    redirect('index.php/admin/home');



                }
            }



        } else {
            redirect('index.php/login');
        }
    }

    public function delcarrossel($filename){
        if (isset($_SESSION['login']) == TRUE) {


            //chmod("uploads/carrossel/$filename",0777);
            unlink ( "uploads/carrossel/$filename");
            //redirect('index.php/admin/home');
        }


    }
}


