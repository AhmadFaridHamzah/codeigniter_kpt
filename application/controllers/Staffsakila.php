<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffsakila extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->model('M_staff');
    }

    public function index(){
        $data['staff'] = $this->M_staff->list_all_staff();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die();

        $this->load->view('staff_sakila/index',$data);
    }



}