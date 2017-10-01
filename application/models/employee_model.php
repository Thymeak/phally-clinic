<?php

class Employee_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

    public function get_all_employees() {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->where('isActive', 'Y');
        $query = $this->db->get();
        return $query->result();
//        if ($query->num_rows() > 0) {
//            return $query->result();
//        } else {
//            return null;
//        }
    }

    public function insert_data($data) {
        $this->db->insert('employees', $data);
    }

    public function delete_data($empID) {
        $this->db->where('empID', $empID);
        $this->db->set('isActive', 'N');
        $this->db->update('employees');
    }

}

?>