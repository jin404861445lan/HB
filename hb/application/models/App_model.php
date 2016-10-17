<?php

class App_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function activiate($code)
    {
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('code', $code);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function updataCode($code, $emei)
    {

        $this->db->query("UPDATE hb_user SET emei ='$emei'  WHERE code = '$code'; ");

    }

    public function addcode($code)
    {

        $this->db->query("INSERT INTO hb_user(code) VALUES ('$code'); ");

    }


}