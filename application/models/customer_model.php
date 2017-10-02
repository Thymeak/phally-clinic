<?php

class Customer_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

    public function get_all_customers() {

        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('isActive', 'Y');
        $query = $this->db->get();
        return $query->result();

//        if ($query->num_rows() > 0) {
//            return $query->result();
//        } else {
//            return null;
//        }
    }

    public function get_customer_by_custID($custID) {
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('custID', $custID);
        $this->db->where('isActive', 'Y');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_data($data) {
        $this->db->insert('customers', $data);
    }

    public function update_data($data,$custID) {
        $this->db->where('custID',$custID);
        $this->db->update('customers', $data);
    }

    public function delete_data($custID) {
        $this->db->where('custID', $custID);
        $this->db->set('isActive', 'N');
        $this->db->update('customers');
    }

}

?>