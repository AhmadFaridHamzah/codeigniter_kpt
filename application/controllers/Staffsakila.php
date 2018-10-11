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
                $this->session->set_flashdata("msg", "success%Staff berjaya didaftar");
                // $this->session->set_flashdata("success", true);
            }else{
                $this->session->set_flashdata("msg", "error%Staff tidak berjaya didaftarkan");
            }
            redirect('staffsakila/index');
        }
 
    }

    public function update($staffid = 0){

        if($this->input->post()){
            // print_r($this->input->post());
            // die();
            $data_update = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
            ];

            $this->M_staff->update($this->input->post('staff_id'), $data_update);
            $this->session->set_flashdata("msg", "success%Staff berjaya dikemaskini");
            redirect('staffsakila/index');
        }
        $staffid = decyrptUrl($staffid);   
        $staff = $this->M_staff->get_staff_byid($staffid);
        // echo '<pre>';
        // print_r($staff);
        $data['staff'] = $staff;
        $this->load->view('staff_sakila/update', $data);
    }

    public function delete($staffid){
        $staffid = decryptUrl($staffid);
        $this->M_staff->delete_staff($staffid);
        $this->session->set_flashdata("msg", "success%Staff berjaya dipadam");
        redirect('staffsakila/index');
    }

    public function test(){
        // echo 'atas';
        // echo encryptUrl('1');
        $str = 'ayam';
        echo $str.'<br>';
        $ciphertext = encryptUrl($str);
        echo $ciphertext.'<br>';
        $decstr = decryptUrl($ciphertext);
        echo $decstr.'<br>';
    }

    public function demoquery(){

        $staffobject = $this->M_staff->demo_object();
        $staffarray = $this->M_staff->demo_array();
        $staffcond = $this->M_staff->democondition();
        echo '<pre>';
        echo 'object : ';
        print_r($staffobject[3]->first_name);
        echo '<br>';
        echo 'array : ';
        print_r($staffarray[3]['first_name']);
        echo '<br>';
        echo 'condition : ';
        print_r($staffcond);
    }


}