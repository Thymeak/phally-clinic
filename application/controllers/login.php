<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code

        $this->load->model('login_model');

        if (isset($_SESSION['sess_userlogin'])) {
            redirect('admin');
        }
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    //public function index()
    //{
    //$this->load->view('login');
    //}

    public function index() {

        $this->form_validation->set_rules('txtusername', 'Username', 'required');
        $this->form_validation->set_rules('txtpassword', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            // $data = array(
            // 	'username' => $this->input->post('txtusername'),
            // 	'password' => $this->input->post('txtpassword')
            // 	);

            $username = $this->input->post('txtusername');
            $password = $this->input->post('txtpassword');

            $result = $this->login_model->get_userlogin($username, $password);

            if ($result) {
                $this->session->set_userdata('sess_userlogin', $result);
                redirect('admin');
            } else {
                $this->session->set_flashdata('loginfail', '<div class="error">Incorrect Username & Password !</div>');
                $this->load->view('login');
            }
        }
    }

}
