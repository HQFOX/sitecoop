<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('Admin_model');
        $this->load->model('NovosProjectos_model');
        $this->load->model('Contactos_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('form');
        $this->load->library('javascript');


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
            $data['fotos'] = $this->NovosProjectos_model->getFotosPerfil();
            $data['background'] = 2;

            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            /*$this->load->view('news/adminProjetos', $data);*/

            print_r($data);
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
            $localizacao = $this->input->post("localizacao");
            $areahabitacional = $this->input->post("areahabitacional");
            $areaquintal = $this->input->post("areaquintal");
            $tipologia = $this->input->post("tipologia");
            $valor = $this->input->post("valor");
            $ninscritos = $this->input->post("ninscritos");
            $limiteinscritos = $this->input->post("limiteinscritos");
            $oculto = $this->input->post("oculto");
            $historico = $this->input->post("historico");
            $descricao = $this->input->post("descricao");

            $config['file_name'] = "fotoperfil";
            $config['upload_path'] = "./uploads/$create_id";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 100000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            //echo gettype($oculto);
            //FALTA AS REGRAS
            $this->form_validation->set_rules('nome_projeto', 'nome', 'required',
                array('required' => 'é obrigatório fornecer o nome do projeto %s.')
            );
            $this->form_validation->set_rules('localizacao', 'localizacao', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('areahabitacional', 'areahabitacional', 'required',
                array('required' => 'é obrigatório fornecer o areahabitacional %s.')
            );
            $this->form_validation->set_rules('areaquintal', 'areaquintal', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('tipologia', 'tipologia', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('valor', 'valor', 'required',
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
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    } else {
                        echo('uploadfile true');

                        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                        $file_name = $upload_data['file_name'];

                        $this->Admin_model->insertFoto('menu',$file_name,$create_id);
                        $input = array(
                            'nome' => $nome_projeto,
                            'localizacao' => $localizacao,
                            'areahabitacional' => $areahabitacional,
                            'areaquintal' => $areaquintal,
                            'tipologia' => $tipologia,
                            'valor' => $valor,
                            'ninscritos' => $ninscritos,
                            'limiteinscritos' => $limiteinscritos,
                            'descricao' => $descricao,
                            'oculto' => intval($oculto),
                            'historico' => intval($historico),
                            'fotoperfil' => $file_name

                        );

                        if (!file_exists("./uploads/$create_id/projeccao")) {
                            mkdir("./uploads/$create_id/projeccao", 0777, true);
                        }
                        if (!file_exists("./uploads/$create_id/planta")) {
                            mkdir("./uploads/$create_id/planta", 0777, true);
                        }
                        $this->Admin_model->insertProjeto($input);
                        //echo json_encode($input);
                        redirect('index.php/admin/administrarprojetos');
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
            $data['background'] = 3;
            $data['projeto'] = $this->Admin_model->getProjeto($id);

            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);


            $nome_projeto = $this->input->post("nome_projeto");
            $localizacao = $this->input->post("localizacao");
            $areahabitacional = $this->input->post("areahabitacional");
            $areaquintal = $this->input->post("areaquintal");
            $tipologia = $this->input->post("tipologia");
            $valor = $this->input->post("valor");
            $ninscritos = $this->input->post("ninscritos");
            $limiteinscritos = $this->input->post("limiteinscritos");
            $descricao = $this->input->post("descricao");
            $oculto = $this->input->post("oculto");
            $historico = $this->input->post("historico");

            //FALTA AS REGRAS
            $this->form_validation->set_rules('nome_projeto', 'nome', 'required',
                array('required' => 'é obrigatório fornecer o nome do projeto %s.')
            );
            $this->form_validation->set_rules('localizacao', 'localizacao', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('areahabitacional', 'areahabitacional', 'required',
                array('required' => 'é obrigatório fornecer o areahabitacional %s.')
            );
            $this->form_validation->set_rules('areaquintal', 'areaquintal', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('tipologia', 'tipologia', 'required',
                array('required' => 'é obrigatório fornecer a %s.')
            );
            $this->form_validation->set_rules('valor', 'valor', 'required',
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
                        'localizacao' => $localizacao,
                        'areahabitacional' => $areahabitacional,
                        'areaquintal' => $areaquintal,
                        'tipologia' => $tipologia,
                        'valor' => intval($valor),
                        'descricao' => $descricao,

                        'ninscritos' => $ninscritos,
                        'limiteinscritos' => $limiteinscritos,
                        'oculto' => intval($oculto),
                        'historico' => intval($historico)

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

    public function deleteInscrito($value,$id,$idp)
    {

        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $this->Admin_model->delInscrito($value,$id,$idp);
            redirect('index.php/admin/administrarinscricoes');
        }
    }

    public function setInscrito($value,$idp, $id)
    {
        if (isset($_SESSION['login']) == TRUE) {
            $this->Admin_model->setInscrito($value,$id, $idp);
            redirect('index.php/admin/administrarinscricoes');
        }
    }


    public function administrarInscricoes()
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $data['projetos'] = $this->Admin_model->getProjetos();
            $data['inscritos'] = $this->Admin_model->getInscritos();
            $data['background'] = 2;


            /* $data['inscritosprojeto'] = $this->Admin_model->getInscritosProjeto();*/
            //print_r (($data['projetos'][1]['nome']));

            /*          for($i=0;$i<count($data['projetos']);$i++)
                      {
                          $data['projetosinscritos']=$this->Admin_model->getInscritosProjeto($data['projetos'][$i]['id']);
                      }*/


            $this->load->model('Admin_model');
            $this->load->view('templates/header', $data);
            $this->load->view('news/adminInscricoes');

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
            $data['subtitulo'] = 'Projecção';
            $data['id'] = $id;
            $data['tipo'] = 'projeccao';

            //conta o numero de fotos de projeccao
            $data['fotos'] = $this->Admin_model->getFotos('projeccao',$id);


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
            $data['subtitulo'] = 'Planta';
            $data['id'] = $id;
            $data['tipo'] = 'planta';

            $data['fotos'] = $this->Admin_model->getFotos('planta',$id);



            $this->load->view('templates/header', $data);

            if ($this->input->post('btn_login') == "Submeter") {

                $this->alterarfoto($id,'planta');
            }

            $this->load->view('news/adminFotos');

    } else {
            redirect('index.php/login');
        }

    }

    public function construcao($id)
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {


            $data['background'] = 1;
            $data['titulo'] = 'FOTOS';
            $data['subtitulo'] = 'Construção';
            $data['id'] = $id;
            $data['tipo'] = 'construcao';

            $data['fotos'] = $this->Admin_model->getFotos('construcao',$id);



            $this->load->view('templates/header', $data);

            if ($this->input->post('btn_login') == "Submeter") {

                $this->alterarfoto($id,'construcao');
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

            $data['background'] = 1;
            $data['titulo'] = 'FOTO';
            $data['subtitulo'] = 'Menu';
            $data['id'] = $id;
            $data['tipo'] = 'menu';

            $data['fotos'] = $this->Admin_model->getFotos('menu',$id);


            $this->load->view('templates/header', $data);

            if ($this->input->post('btn_login') == "Submeter") {

                $this->alterarfotom($id,$data['fotos'][0]['filename']);
            }

            $this->load->view('news/adminFotos');


        } else {
            redirect('index.php/login');
        }

    }

    public function alterarfoto($id, $tipo)     //funcao para adicionar fotos
    {
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

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
                    echo "ERRO A FAZER UPLOAD DE IMAGEM";
                }
                else {

                    //para guardar o filename mais o tipo de ficheiro na BD
                    $filecount = 0;
                    $filename = "erro";
                    if ($handle = opendir("./uploads/$id/$tipo")) {

                        while (false !== ($entry = readdir($handle))) {

                            if ($entry != "." && $entry != "..") {
                                $filecount++;
                                if(strpos($entry,$config['file_name'])!==false)
                                {
                                    $filename = $entry;
                                }
                            }
                        }

                        closedir($handle);
                    }


                    $this->Admin_model->insertFoto($tipo,$filename,$id);
                    redirect("index.php/admin/$tipo/$id", 'refresh');
                }

    } else {
        redirect('index.php/login');
    }

    }
    public function alterarfotom($id,$filename){
        if (isset($_SESSION['login']) == TRUE) {

            $config['file_name'] = "fotoperfil";
            $config['upload_path'] = "./uploads/$id";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            //insere imagem
            if (!$this->upload->do_upload('userfile')) {
                echo "ERRO";
            }
            else {
                $this->delfoto($id,'menu',$filename);
                $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                $file_name = $upload_data['file_name'];

                $this->Admin_model->insertFoto('menu',$file_name,$id);
                $this->Admin_model->updateFotoPerfil($file_name,$id);
                redirect("index.php/admin/menu/$id" ,'refresh');
            }

        } else {
            redirect('index.php/login');

        }

}

    public function delfoto($id,$tipo,$filename){
        if (isset($_SESSION['login']) == TRUE) {
            if($tipo=='menu'){
                $this->Admin_model->deleteFoto($tipo, $filename, $id);
                //chmod("uploads/carrossel/$filename",0777);
                unlink("uploads/$id/$filename");
                //redirect("index.php/admin/$tipo/$id", 'refresh');
            }else {
                $this->Admin_model->deleteFoto($tipo, $filename, $id);
                //chmod("uploads/carrossel/$filename",0777);
                unlink("uploads/$id/$tipo/$filename");
                redirect("index.php/admin/$tipo/$id", 'refresh');
            }
        } else {
            redirect('index.php/login');

        }
    }
    //**********************************^^projetos^^*********************************

    public function home(){
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

            $this->load->model('Admin_model');

            $data['sobre'] = $this->Admin_model->getSobre();
            $data['descricao'] = $this->Admin_model->getDescricoes();


            $data['background'] = 1;



            $this->load->view('templates/header',$data);
            $this->load->view('news/adminHome');

        } else {
            redirect('index.php/login');
        }

    }
    public function noticias(){
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

            $this->load->model('Admin_model');
            $this->load->model('Post_model');

            $data['post'] = $this->Post_model->getPost();
            $data['background'] = 1;

            $this->load->view('templates/header',$data);
            $this->load->view('news/adminPost');

        } else {
            redirect('index.php/login');
        }

    }


    public function novo_post(){
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {

            $this->load->model('Admin_model');


            $data['background'] = 1;


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
            $data['filecount'] = $filecount;
            $data['ficheiros'] = $nomeficheiros;



            $titulo = $this->input->post("titulo");
            $texto = $this->input->post("texto");
            $video = $this->input->post("video");

            $config['file_name'] = "post$filecount";
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

            $this->form_validation->set_rules('video', 'video', '',
                array('required' => 'You must provide a %s.')
            );

            if ($this->input->post('btn_login') == "Submeter") {

                if ($this->form_validation->run() == FALSE) {
                    //validation fails
                    //echo('FALSO');

                } else {
                    echo('validation true');
                    if (!file_exists("./uploads/post")) {
                        mkdir("./uploads/post", 0777, true);

                        //echo('createfile true');
                    }
                    //insere imagem

                    if (!$this->upload->do_upload('userfile')) {
                        $file_name = "noimage";
                    }
                    else{
                        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                        $file_name = $upload_data['file_name'];
                    }

                    if($video!='') {

                        $video = $this->convertYoutube($video);
                    }

                    $input = array(
                        'titulo' => $titulo,
                        'texto' => $texto,
                        'video' => $video,
                        'imagem' => $file_name,


                    );

                    $this->Admin_model->insertPost($input);
                    redirect('index.php/admin/noticias' ,'refresh');


                }
            }



        } else {
            redirect('index.php/login');
        }
    }

    function convertYoutube($string) {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "https://www.youtube.com/embed/$2",
            $string
        );
    }

    public function deletePost($id){
        if (isset($_SESSION['login']) == TRUE) {

            $this->load->model('Admin_model');

            $this->Admin_model->deletePost($id);

            redirect('index.php/admin/noticias');
        } else {
            redirect('index.php/login');
        }
    }


    public function editarNoticia($id)
    {

        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {
            $data['background'] = 3;
            $data['post'] = $this->Admin_model->getPost($id);

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
            $data['filecount'] = $filecount;
            $data['ficheiros'] = $nomeficheiros;



            $titulo = $this->input->post("titulo");
            $texto = $this->input->post("texto");
            $video = $this->input->post("video");

            $config['file_name'] = "post$filecount";
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

            $this->form_validation->set_rules('video', 'video', '',
                array('required' => 'You must provide a %s.')
            );

            if ($this->input->post('btn_login') == "Submeter") {

                if ($this->form_validation->run() == FALSE) {
                    //validation fails
                    //echo('FALSO');

                } else {
                    echo('validation true');
                    if (!file_exists("./uploads/post")) {
                        mkdir("./uploads/post", 0777, true);

                        //echo('createfile true');
                    }
                    //insere imagem

                    if (!$this->upload->do_upload('userfile')) {
                        $file_name = "noimage";
                    }
                    else{
                        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                        $file_name = $upload_data['file_name'];
                    }

                    if($video!='') {

                        $video = $this->convertYoutube($video);
                    }

                    $input = array(
                        'titulo' => $titulo,
                        'texto' => $texto,
                        'video' => $video,
                        'imagem' => $file_name,


                    );



                    $this->Admin_model->updatePost($data['post'][0]['id'], $input);
                    echo json_encode($input);
                    redirect('index.php/admin/noticias');

                }
            }

            $this->load->view('templates/header',$data);
            $this->load->view('news/editarPost');
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




            if ($this->input->post('btn_login') == "Submeter") {


                    $input = array(
                        'sobre' => $sobre


                    );

                    $this->Admin_model->insertSobre($input);
                    echo json_encode($sobre);
                    redirect('index.php/admin/home');
            }



        } else {
            redirect('index.php/login');
        }
    }

    public function delcarrossel($filename){
        if (isset($_SESSION['login']) == TRUE) {

            //chmod("uploads/carrossel/$filename",0777);
            unlink ( "uploads/carrossel/$filename");


            $this->load->model('Admin_model');
            //$this->Admin_model->deleteDescricaoCarrossel($filename);
            //redirect('index.php/admin/home');
        }


    }

    public function addcarrossel(){
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {


            if (!file_exists("./uploads/carrossel")) {
                mkdir("./uploads/carrossel", 0777, true);

                echo('createfile true');
            }
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

            $config['file_name'] = "carrossel$filecount";
            $config['upload_path'] = "./uploads/carrossel";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if ($this->input->post('btn_login') == "Submeter") {


                    //insere imagem
                    if (!$this->upload->do_upload('userfile')) {
                        echo "no image file";
                    }

                    //conta e guarda o nome das fotos do carrossel
                    $filecount = 0;
                    $filename = "erro";
                    if ($handle = opendir("./uploads/carrossel")) {

                        while (false !== ($entry = readdir($handle))) {

                            if ($entry != "." && $entry != "..") {
                                $filecount++;
                                echo "$entry\n";
                                if(strpos($entry,$config['file_name'])!==false)
                                {
                                    $filename = $entry;
                                    echo $filename;
                                }
                            }
                        }

                        closedir($handle);
                    }
                    $input = array(
                        'filename' => $filename,
                        'descricao' => " "


                    );


                $this->Admin_model->insertDescricaoCarrossel($input);
                redirect('index.php/admin/home');


                }




        } else {
            redirect('index.php/login');
        }
    }

    public function alterarcarrossel($filename){
        //verificar se o login foi feito
        if (isset($_SESSION['login']) == TRUE) {


            if (!file_exists("./uploads/carrossel")) {
                mkdir("./uploads/carrossel", 0777, true);

                echo('createfile true');
            }
            $random = (string) random_int(1,50);

            $config['file_name'] = "carrossel$random";
            $config['upload_path'] = "./uploads/carrossel";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if ($this->input->post('btn_login') == "Submeter") {


                if (!$this->upload->do_upload('userfile')) {
                    echo "no image file";
                }
                else
                {
                    $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                    $file_name = $upload_data['file_name'];

                    $input = array('filename' => $file_name );

                    $this->Admin_model->updateDescricaoCarrosselFoto($filename, $input);
                    $this->delcarrossel($filename);

                    redirect('index.php/admin/home' ,'refresh');
                }




            }




        } else {
            redirect('index.php/login');
        }
    }


    public function descricaocarrossel($id)
    {
        if (isset($_SESSION['login']) == TRUE) {

            $data['background'] = 3;

            $this->load->model('Admin_model');
            $data['descricao'] = $this->Admin_model->getDescricao($id);
            $this->load->view('templates/header', $data);

            $descricaocarrossel = $this->input->post("descricao");


            if ($this->input->post('btn_login') == "Submeter") {


                $input = array(

                    'descricao' => $descricaocarrossel,

                );

                $this->Admin_model->updateDescricaoCarrossel($id,$input);
                redirect('index.php/admin/home', 'refresh');
            }


            $this->load->view('news/adminCarrosselDescricao', $data);
        } else {
            redirect('index.php/login');
        }
    }

    public function mandaremail($recipiente,$msg){


        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://cooperativahabitacao-giraldosempavor.pt',
            'smtp_port' => 465,
            'smtp_user' => 'informacoes_automaticas@cooperativahabitacao-giraldosempavor.pt',
            'smtp_pass' => ')oARL?e5,pTR',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");


        $this->email->from('informacoes_automaticas@cooperativahabitacao-giraldosempavor.pt', 'Cooperativa Giraldo Sem Pavor ');
        $this->email->to('henrique.raposo95@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        if($this->email->send()){ echo "fixe";}
        else{ echo "mau";}
    }


}


