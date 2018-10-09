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

    public function create(){
        //echo "ini form create staff";

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('email','E-mail','required|valid_email');

        $this->form_validation->set_message('required', 'Ruangan %s ini wajib di isi');

        if($this->form_validation->run() == FALSE){
            $this->load->view('staff_sakila/create_form');
        }else{

            // print_r($this->input->post());

            // die();

            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');

            $data_insert = [
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'email'=>$email,
                'active' => '1',
            ];

            $insert = $this->M_staff->insert_staff($data_insert);

            if(!empty($insert)){
                redirect('staffsakila/index');
            }


        }

        
    }



}