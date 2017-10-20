<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function exemplo($data)
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

    public function delProjeto($id)
    {
        $this->db->query("DELETE FROM Projeto WHERE id = '$id';");



    }

}