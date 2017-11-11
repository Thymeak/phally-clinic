<?php

class Test_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }


        public function insert_data($data){
            $this->db->insert('tbl_contact', $data);
        }

        public function listall_user(){
                $this->db->select('*');
                $this->db->from('tbl_contact');
                $this->db->where('isActive','Y');
                $query = $this->db->get();
                return $query->result();
        }
        public function getcustomer_id($id){
            $this->db->select('*');
            $this->db->from('tbl_contact');
            $this->db->where('id', $id);
            $this->db->where('isActive', 'Y');
            $query = $this->db->get();
            return $query->result();
        }
    public function test_update($data,$id) {
        $this->db->where('id',$id);
        $this->db->update('tbl_contact', $data);


    }
    public function test_delete($id){
        $this->db->where('id', $id);
        $this->db->set('isActive', 'N');
        $this->db->update('tbl_contact');

    }




}



?>
