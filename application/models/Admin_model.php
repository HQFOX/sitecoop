<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function insertProjeto($data)
    {


        $this->db->insert('Projeto', $data);
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')

    }

    public function getProjetos()

    {
        $query = $this->db->select('*')
            ->from('Projeto')
            ->get();

        return $query->result_array();
    }

    public function getUltimoProjetoId()
    {
        $query = $this->db->select_max('id')
            ->from('Projeto')
            ->get();
        return $query->result_array();
    }

    public function getProjeto($id)

    {
        $query = $this->db->select('*')
            ->from('Projeto')
            ->where('id',$id)
            ->get();

        return $query->result_array();
    }

    public function updateProjeto($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('Projeto', $data);

    }

    public function delProjeto($id)
    {
       // $this->db->query("DELETE FROM Projeto WHERE idI = '$id';");
        $this->db->where('id',$id);
        $this->db->delete('Projeto');


    }

    public function getInscritos()

    {
        $query = $this->db->query("SELECT * FROM Inscricoes");

        return $query->result_array();
    }

    public function delInscrito($value,$id,$idp)
    {
        if($value ==1) {
            $this->db->query("DELETE FROM Inscricoes WHERE id = '$id';");

            $this->db->where('id', $idp)
                ->set('ninscritos', 'ninscritos-1', FALSE)
                ->update('Projeto');
        }
        else{
            $this->db->query("DELETE FROM Inscricoes WHERE id = '$id';");

        }


    }
    public function getInscritosProjeto()
    {
        $query = $this->db->query("select nomeI,email,telefone  FROM Projeto INNER JOIN Inscricoes WHERE projetoId = id; ");


        return $query->result_array();
    }


    public function setInscrito($value,$id,$idp)
    {

        if($value ==1)
        {
            $this->db->where('id',$id)
                ->set('inscrito',0, FALSE)
                ->update('Inscricoes');

            $this->db->where('id',$idp)
                ->set('ninscritos','ninscritos-1',FALSE )
                ->update('Projeto');
        }
        elseif ($value ==0)
        {
            $this->db->where('id',$id)
                    ->set('inscrito',1,FALSE)
                    ->update('Inscricoes');

            $this->db->where('id',$idp)
                ->set('ninscritos','ninscritos+1',FALSE )
                ->update('Projeto');

        }
    }

    public function insertPost($data){
        $this->db->insert('post', $data);

    }

    public function deletePost($id){
        $this->db->where('id',$id);
        $this->db->delete('post');
    }

    public function getPost($id)

    {
        $query = $this->db->select('*')
            ->from('post')
            ->where('id',$id)
            ->get();

        return $query->result_array();
    }

    public function updatePost($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('post', $data);

    }


    public function getSobre(){

        $query = $this->db->select('*')
            ->from('sobre')
            ->order_by('id','desc')->limit(1)
            ->get();
        return $query->result_array();
    }
    public function insertSobre($data){
        $this->db->insert('sobre',$data);

    }

    public function insertDescricaoCarrossel($data){
        $this->db->insert('descricao_carrossel',$data);

    }

    public function updateDescricaoCarrossel($id,$data)
    {

        $this->db->where('id', $id);
        $this->db->update('descricao_carrossel', $data);

    }

    public function updateDescricaoCarrosselFoto($filename,$data)
    {

        $this->db->where('filename', $filename);
        $this->db->update('descricao_carrossel', $data);

    }


    public function deleteDescricaoCarrossel($filename)
    {

        $this->db->where('filename', $filename);
        $this->db->delete('descricao_carrossel');

    }


    public function getDescricao($id)

    {
        $query = $this->db->select('*')
            ->from('descricao_carrossel')
            ->where('id',$id)
            ->get();

        return $query->result_array();
    }
    public function getDescricoes()

    {
        $query = $this->db->select('*')
            ->from('descricao_carrossel')
            ->get();

        return $query->result_array();
    }

    public function insertFoto($tipo,$filename,$projetoId){

        $data = array ('tipo' => $tipo, 'filename' => $filename, 'idProjeto' => $projetoId  );

        $this->db->insert('fotos',$data);
    }

    public function deleteFoto($tipo,$filename,$projetoId){
        $this->db->where('tipo', $tipo);
        $this->db->where('filename', $filename);
        $this->db->where('idProjeto', $projetoId);
        $this->db->delete('fotos');
    }

    public function getFotos($tipo,$projetoId){
        $query = $this->db->select('*')
            ->from('fotos')
            ->where('tipo',$tipo)
            ->where('Idprojeto',$projetoId)
            ->get();

        return $query->result_array();
    }

    public function updateFotoPerfil($filename,$projetoId){
        $this->db->set('fotoperfil', $filename);
        $this->db->where('id', $projetoId);
        $this->db->update('Projeto');

    }
}