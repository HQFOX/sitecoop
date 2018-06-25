<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_user($usr,$pw)
    {
        $this->db->select('id,
                           user_name,
                           user_email,
                           user_password')
                            ->from('user_login')
                            ->where('user_name', $usr)
                            ->where('user_password',$pw);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }
}