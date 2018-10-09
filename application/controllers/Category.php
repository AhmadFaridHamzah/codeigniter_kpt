<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{

    public function __construct(){
        parent::__construct();

        //$this->load->model(['M_category','M_store']);
        $this->load->model('M_category');
        $this->load->model('M_store');
    }

    public function index(){
        $data = $this->M_category->get_all_category();

        $data2 = $this->M_category->get_category_action();

        $data3 = $this->M_category->get_category_v2();

        $data4 = $this->M_category->get_category_v3();

        $data5 = $this->M_store->list_store();

        echo "<pre>";
        print_r($data5);
        echo "</pre>";

        die();
    }

}