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

        $this->db->select('ntelefones, id')->from('contactos');
        $query = $this->db->get();


            return $query->result_array();

    }

    function add_contactos($data)
    {
        $this->db->insert('contactos', $data);
    }


    function get_emails()
    {

        $this->db->select('emails, id')->from('contactos');
        $query = $this->db->get();


        return $query->result_array();

    }
    function del_ntelefone($id)
    {
        $sql = "UPDATE contactos SET ntelefones = null WHERE id = ?";
        $this->db->query($sql, array($id));


    }
    function del_email($id)
    {
        $sql = "UPDATE contactos SET emails = null WHERE id = ?";
        $this->db->query($sql, array($id));

    }
}