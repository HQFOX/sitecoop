<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contactos_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_ntelefones()
    {

        $this->db->select('numero')->from('numeros_telefone');
        $query = $this->db->get();


            return $query->result_array();

    }

    function get_emails()
    {

        $this->db->select('email')->from('emails');
        $query = $this->db->get();


        return $query->result_array();

    }
}