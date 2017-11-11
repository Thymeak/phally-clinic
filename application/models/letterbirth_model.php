<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/19/2017
 * Time: 3:39 PM
 */

class Letterbirth_model extends CI_Model{
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
        $this->db->insert('maternity_letter_birth', $data);
    }

}
