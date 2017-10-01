<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code     
        $this->load->model('employee_model');
        $this->load->model('customer_model');
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
    public function index() {
        if (!isset($_SESSION['sess_userlogin'])) {
            redirect('login');
        }
        $this->dashboard();
    }

    //start controller dashboard
    public function dashboard() {
        $data = array();
        $data['content'] = 'dashboard';
        $this->load->view('admin', $data);
    }

    //end controller dashboard
    //      
    //      
    //start controller employee
    public function employee() {
        $data = array();
        $data['content'] = '/employee/employee';
        $data['current_page'] = 'Employee';
        $data['listEmployee'] = $this->employee_model->get_all_employees();
        $this->load->view('admin', $data);
    }

    public function addEmployee() {
        $data = array();
        $data['content'] = '/employee/add_employee';
        $data['current_page'] = '<a href="' . base_url() . 'admin/employee">Employee</a> / Add Employee';
        $this->load->view('admin', $data);
    }

    public function submitEmployee() {

        $this->form_validation->set_rules('txtfname', 'First Name', 'required');
        $this->form_validation->set_rules('txtlname', 'Last Name', 'required');
        $this->form_validation->set_rules('txtgender', 'Gender', 'required');
        $this->form_validation->set_rules('txtdepartment', 'Department', 'required');
        $this->form_validation->set_rules('txtusername', 'Username', 'required');
        $this->form_validation->set_rules('txtpassword', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->addEmployee();
        } else {
            $data = array(
                'firstname' => $this->input->post('txtfname'),
                'lastname' => $this->input->post('txtlname'),
                'gender' => $this->input->post('txtgender'),
                'department' => $this->input->post('txtdepartment'),
                'username' => $this->input->post('txtusername'),
                'password' => MD5($this->input->post('txtpassword')),
                'phone' => $this->input->post('txtphone'),
                'isActive' => 'Y'
            );
            $this->employee_model->insert_data($data);

            $message = '<div class = "alert alert-success" role = "alert">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                    . '<span aria-hidden="true">&times;</span>'
                    . '</button>'
                    . '<strong>Well Done!</strong> You successfully create new employee.'
                    . '</div>';
            $this->session->set_flashdata('insert', $message);
            redirect('admin/addEmployee');
        }
    }

    public function deletEmployee() {
        $empID = $this->input->post('deleteEmpId');
        $this->employee_model->delete_data($empID);
        $message = '<div class = "alert alert-success" role = "alert">' .
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' .
                '<span aria-hidden="true">&times;</span>' .
                '</button>' .
                '<strong>Well Done!</strong> You Successful Delete Employee.' .
                '</div>';
        $this->session->set_flashdata('message', $message);
        $this->employee();
    }

    //end controller employee
    //
    //
    //
    //start controller customer

    public function viewCustomer() {
        $data = array();
        $data['content'] = '/customer/customer';
        $data['current_page'] = 'Customer';
        $data['listCustomer'] = $this->customer_model->get_all_customers();
        $this->load->view('admin', $data);
    }

    public function addCustomer() {
        $data = array();
        $data['content'] = '/customer/add_customer';
        $data['current_page'] = '<a href="' . base_url() . 'admin/viewCustomer">Customer</a> / Add Customer';
        $this->load->view('admin', $data);
    }

    public function submitCustomer() {

        $this->form_validation->set_rules('txtfname', 'First Name', 'required');
        $this->form_validation->set_rules('txtlname', 'Last Name', 'required');
        $this->form_validation->set_rules('txtgender', 'Gender', 'required');
        $this->form_validation->set_rules('txtage', 'Age', 'required');
        $this->form_validation->set_rules('txtdepartment', 'Department', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->addCustomer();
        } else {
            $data = array(
                'firstname' => $this->input->post('txtfname'),
                'lastname' => $this->input->post('txtlname'),
                'fullname' => $this->input->post('txtfname') . ' ' . $this->input->post('txtlname'),
                'khmername' => $this->input->post('txtkhmername'),
                'husbandName' => $this->input->post('txthusbandName'),
                'husbandAge' => $this->input->post('txthusbandAge'),
                'department' => $this->input->post('txtdepartment'),
                'gender' => $this->input->post('txtgender'),
                'age' => $this->input->post('txtage'),
                'ageType' => $this->input->post('txtageType'),
                'occupation' => $this->input->post('txtoccupation'),
                'phone' => $this->input->post('txtphone'),
                'homePhone' => $this->input->post('txthomephone'),
                'homeNo' => $this->input->post('txthomeNo'),
                'streetNo' => $this->input->post('txtstreetNo'),
                'groupNo' => $this->input->post('txtgroupNo'),
                'provinceNo' => $this->input->post('txtprovinceNo'),
                'distinctNo' => $this->input->post('txtdistinctNo'),
                'communNo' => $this->input->post('txtcommuneNo'),
                'villageNo' => $this->input->post('txtvillageNo'),
                'createDate' => date(),
                'isActive' => 'Y'
            );
            $this->customer_model->insert_data($data);

            $message = '<div class = "alert alert-success" role = "alert">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                    . '<span aria-hidden="true">&times;</span>'
                    . '</button>'
                    . '<strong>Well Done!</strong> You successfully create new Customer.'
                    . '</div>';
            $this->session->set_flashdata('insert', $message);
            redirect('admin/addCustomer');
        }
    }

    public function deleteCustomer() {
        $custID = $this->input->post('deletecustID');
        $this->customer_model->delete_data($custID);
        $message = '<div class = "alert alert-success" role = "alert">' .
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' .
                '<span aria-hidden="true">&times;</span>' .
                '</button>' .
                '<strong>Well Done!</strong> You Successful Delete Customer.' .
                '</div>';
        $this->session->set_flashdata('message', $message);
        $this->viewCustomer();
    }

    //end controller customer


    public function logout() {
        session_destroy();
        redirect('login');
    }

}
