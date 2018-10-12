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

    function delete_staff($staffid){
        $this->db->where(['staff_id' => $staffid]);
        $this->db->delete('staff');
    }

    function get_staff_store(){
        $query = $this->db->get('staff');
        return $query->result_array();
    }

    function demo_array(){
        $query = $this->db->get('staff');
        echo '<br>array:'.$this->db->last_query();
        return $query->result_array();
    }

    function demo_object(){
        $query = $this->db->get('staff');
        echo '<br>object:'.$this->db->last_query();
        return $query->result();
    }

    function democondition(){
        $staff_id = 7;
        // $this->db->where('staff_id = 1');
        $this->db->where(['staff_id' => $staff_id
        // , 'column2' => 'condition2'
        ]);
        $query = $this->db->get('staff');
        echo '<br>object:'.$this->db->last_query();
        
        return $query->row();
        // return $query->result();
    }

    function demodirectquery(){
        $query = $this->db->query("
        select * from staff
        ");
        echo '<br>direct:'.$this->db->last_query();
        return $query->result();
    }

    function demojoin(){
        $this->db->join('store', 'store.store_id = staff.store_id');
        $query = $this->db->get('staff');
        echo '<br>join:'.$this->db->last_query();
        return $query->result();
    }
}