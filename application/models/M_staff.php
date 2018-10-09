<?php

class M_staff extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    function list_all_staff(){
        $this->db->select('staff_id,first_name,last_name,email');
        $this->db->from('staff');
        $this->db->where('active','1');

        $query = $this->db->get();

        if($query->num_rows() > 0){
            return $query->result();
        }
    }
}