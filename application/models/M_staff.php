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

    function insert_staff($data_insert){
        $this->db->insert('staff',$data_insert);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    function get_staff_byid($staffid){
        $query = $this->db->get_where('staff', ['staff_id' => $staffid]);
        return $query->row();
    }

    function update($staffid, $data_update){
        $this->db->where(['staff_id' => $staffid]);
        $this->db->update('staff', $data_update);
    }
}