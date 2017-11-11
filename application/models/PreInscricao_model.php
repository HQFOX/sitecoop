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

}