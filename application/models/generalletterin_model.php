<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/1/2017
 * Time: 2:08 PM
 */

class generalletterin_model extends CI_Model{
    public function __construct() {
        parent::__construct();
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
        $this->db->insert('general_letterin', $data);
    }
}
{

}