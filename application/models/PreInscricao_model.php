<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class preinscricao_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function add_inscricao($data)
    {
        $this->db->insert('Inscricoes', $data);
    }

    function inscricao_email_exists($email,$id_projeto)
    {
        $array = array('email' => $email, 'projetoId' => $id_projeto);
        $this->db->where($array);
        $this->db->select('*');
        $this->db->from('Inscricoes');
        $query = $this->db->get();
        if ($query->num_rows()>0)
        {
            return true;
        }
        else{
            return false;
        }

    }

    function inscricao_telefone_exists($ntelefone,$id_projeto)
    {
        $this->db->where('telefone',$ntelefone);
        $this->db->where('projetoId',$id_projeto);
        $this->db->select('*');
        $this->db->from('Inscricoes');
        $query = $this->db->get();
        if ($query->num_rows()>0)
        {
            return true;
        }
        else{
            return false;
        }

    }

}