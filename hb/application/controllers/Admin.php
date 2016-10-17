<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');

    }


    public function index()
    {

        $this->load->view('login');
    }

    public function dologin()
    {
        $name = $this->input->post('name');
        $pwd = $this->input->post('pwd');
        if($this->admin_model->login($name,$pwd)){
            header('location:/index.php/main');
        }else{
            $this->index();
        }
    }

}