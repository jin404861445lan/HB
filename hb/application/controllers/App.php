<?php

class App extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('app_model');
    }

    public function addcode()
    {
        $code = $this->input->post('code');
        if ($code != '') {
            $this->app_model->addcode($code);
        }
        $this->load->view('addcode');
    }

    public function tg()
    {
        $this->load->view('tg');

    }


    public function activiate()
    {
        $data = array();
        $code = $this->input->get('code');
        $emei = $this->input->get('emei');
        $row = $this->app_model->activiate($code);
        if (count($row) > 0) {
            if ($row[0]['emei'] == '') {
                $this->app_model->updataCode($code, $emei);
            }
            if ($row[0]['emei'] == '' || $row[0]['emei'] == $emei) {
                $data['status'] = 1;
                $data['msg'] = '成功激活';
            } else {
                $data['status'] = 0;
                $data['msg'] = '激活码只能用于一台设备';
            }
        } else {
            $data['status'] = 0;
            $data['msg'] = '激活码错误，激活码为微信支付时间的：月日时';
        }
        echo json_encode($data);
    }
}