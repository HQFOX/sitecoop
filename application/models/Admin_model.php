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

    public function delInscrito($id)
    {
        $this->db->query("DELETE FROM Inscricoes WHERE id = '$id';");



    }
    public function getInscritosProjeto()
    {
        $query = $this->db->query("select nomeI,email,telefone  FROM Projeto INNER JOIN Inscricoes WHERE projetoId = id; ");


        return $query->result_array();
    }


    public function setInscrito($value,$id)
    {
        if($value ==1)
        {
            $this->db->update('Inscricoes')
                ->set('inscrito',0)
                ->where('id',$id);
        }
        elseif ($value ==0)
        {
            $this->db->where('id',$id)
                    ->set('inscrito',1)
                    ->update('Inscricoes');

        }
    }

    public function insertPost($data){
        $this->db->insert('post', $data);
        echo "cona";
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
}