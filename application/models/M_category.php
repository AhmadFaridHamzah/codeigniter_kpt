<?php

class M_category extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    function get_all_category(){
        $this->db->select('name,category_id');
        $this->db->from('category');

        $query = $this->db->get();

        if($query->num_rows() > 0){
            //return $query->row();
            return $query->result();
        }
    }

    function get_category_action(){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id','1');

        $query = $this->db->get();

        if($query->num_rows() > 0){
            return $query->row();
        }
    }

    function get_category_v2(){
        $sql = "select * from category";

        $query = $this->db->query($sql);

        return $query->row();
    }

    function get_category_v3(){
        $this->db->select('*');
        $this->db->from('category');

        $where = "category_id = '1' OR category_id = '2'";
        $this->db->where($where);

        $query = $this->db->get();

        if($query->num_rows() > 0){
            return $query->result();
        }
    }
}