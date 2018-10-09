<?php

class M_store extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    function list_store(){

        $this->db->select('sto.store_id,st.first_name,sto.address_id,add.address');
        $this->db->from('store sto');
        $this->db->join('staff st','st.staff_id = sto.manager_staff_id','left');
        $this->db->join('address add','add.address_id = sto.address_id','left');

        $query = $this->db->get();

        if($query->num_rows() > 0){
            //return $query->row();
            return $query->result();
        }

    }
}