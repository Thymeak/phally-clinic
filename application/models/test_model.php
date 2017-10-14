<?php

class Test_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }


        public function insert_data($data){
            $this->db->insert('tbl_test', $data);
        }



}


?>
