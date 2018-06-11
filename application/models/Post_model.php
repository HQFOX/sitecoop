<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function getPost()
    {
        $query = $this->db->order_by('id',"desc")
                    ->get('post');

        return $query->result_array();
    }


}