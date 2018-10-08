<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller{

    public function index(){
        $this->load->view('info_staff');
    }

    public function list_staff(){
        // echo "ini function list_staff";

        $data['staff']= [
            [
                'name'=> 'Farid',
                'pekerjaan' => 'Programmer',
            ],
            [
                'name'=>'Tuan Fakhruz',
                'pekerjaan' => 'Programmer',
            ],
        ];

        $data['title'] = "Senarai Staff";

        // $str_staff = "Ahmad Farid Bin Hamzah";
        // $str_pekerjaan = "Programmer";

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        //var_dump($data);
        // die();

        $this->load->view('staff/list_index_staff',$data);
    }

    public function view_staff(){
        redirect('staff/index');
    }
}