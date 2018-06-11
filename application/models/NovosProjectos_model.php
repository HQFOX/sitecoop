<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NovosProjectos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getProjetos()

    {
        $query = $this->db->select('*')
            ->from('Projeto')
            ->get();

        return $query->result_array();
    }

    public function getProjeto($id)

    {
        $query = $this->db->query("SELECT * FROM Projeto WHERE id = '$id';");


        return $query->result_array();

    }

    public function getUltimoProjeto()
    {
        $query = $this->db->query("SELECT * FROM Projeto ORDER BY id DESC LIMIT 1");

        return $query->result_array();
    }

    public function getCarrossel()
    {
        $query = $this->db->query("SELECT * FROM descricao_carrossel ORDER BY id ASC");

        return $query->result_array();

    }

    public function getFotos($id,$tipo){

        $query = $this->db->select('*')
                            ->from('fotos')
                            ->where('idProjeto',$id)
                            ->where('tipo',$tipo)
                            ->get();

        return $query->result_array();

    }

    public function getFotosPerfil(){
        $query = $this->db->select('*')
            ->from('fotos')
            ->where('tipo','menu')
            ->order_by('idProjeto',"desc")
            ->get();

        return $query->result_array();


    }
}