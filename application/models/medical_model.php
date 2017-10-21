<?php

class Medical_model extends CI_Model {

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

    public function insert_letter_in_data($data) {
        $this->db->insert('medical_letterin', $data);
    }

    public function insert_letter_out_data($data){
      $this->db->insert('medical_letterout', $data);
    }

}

?>
