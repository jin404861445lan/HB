<?php

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function  login($name, $pwd)
    {


        $query = $this->db->get_where('admin', array('name' => $name, 'pwd' => $pwd));

        if (count($query) > 0) {
            return true;
        } else {
            return false;
        }
    }
}