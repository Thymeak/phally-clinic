<?php

class Login_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }


        public function get_userlogin($username,$password){

          $this->db->select('*');
          $this->db->from('employees');
          $this->db->where('username',$username);
          $this->db->where('password',MD5($password));
          $this->db->where('isActive','Y');
          $query = $this->db->get();


          if($query->num_rows() > 0){
                return $query->row();
          }else{
                  return false;
          }

        }





}


?>
