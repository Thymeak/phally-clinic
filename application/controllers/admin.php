<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->model('employee_model');
        $this->load->model('customer_model');
        $this->load->model('letterin_model');
        $this->load->model('letterout_model');
        $this->load->model('medical_model');
        $this->load->model('test_model');
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
        $this->form_validation->set_rules('txtcreatedate', 'Register Date', 'required');

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
                'nationality' => $this->input->post('txtnationality'),
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
                'createDate' => $this->input->post('txtcreatedate'),
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

    public function editCustomer($custID) {
        $result = $this->customer_model->get_customer_by_custID($custID);
        $data = array();
        foreach ($result as $value) {
            $data['value'] = $value;
        }

        $data['content'] = '/customer/edit_customer';
        $data['current_page'] = '<a href="' . base_url() . 'admin/viewCustomer">Customer</a> / Edit Customer';
        $this->load->view('admin', $data);
    }

    public function submitEditCustomer() {

        $this->form_validation->set_rules('txtfname', 'First Name', 'required');
        $this->form_validation->set_rules('txtlname', 'Last Name', 'required');
        $this->form_validation->set_rules('txtgender', 'Gender', 'required');
        $this->form_validation->set_rules('txtage', 'Age', 'required');
        $this->form_validation->set_rules('txtdepartment', 'Department', 'required');
        $this->form_validation->set_rules('txtcreatedate', 'Register Date', 'required');

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
                'nationality' => $this->input->post('txtnationality'),
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
                'createDate' => $this->input->post('txtcreatedate'),
                'isActive' => 'Y'
            );
            $custID = $this->input->post('txtcustID');
            $this->customer_model->update_data($data, $custID);

            $message = '<div class = "alert alert-success" role = "alert">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                    . '<span aria-hidden="true">&times;</span>'
                    . '</button>'
                    . '<strong>Well Done!</strong> You successfully Update Customer "' . $data['fullname'] . '"'
                    . '</div>';
            $this->session->set_flashdata('message', $message);
            redirect('admin/viewCustomer');
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
    //
    //
    //
    //start controller Maternity Letter In

    public function viewLetterIn() {
        $data = array();
        $data['content'] = '/maternity/viewcustomer';
        $data['current_page'] = 'ផ្នែកសម្ភព⁣ និងរោគស្ត្រី / លិខិតចូលពេទ្យ';
        $data['page_title'] = 'លិខិតចូលពេទ្យ';
        $data['create_action'] = 'admin/createLetterIn/';
        $data['listCustomer'] = $this->customer_model->get_all_customers();
        $this->load->view('admin', $data);
    }

    public function createLetterIn($custID) {
        $result = $this->customer_model->get_customer_by_custID($custID);

        $data = array();
        foreach ($result as $value) {
            $data['value'] = $value;

            if ($value->fullname == '') {
                $data['custName'] = $value->khmername;
            } else {
                $data['custName'] = $value->fullname;
            }
        }
        $data['custID'] = $custID;
        $data['content'] = '/maternity/letterin/add_letterin';
        $data['current_page'] = '<a href="' . base_url() . 'admin/viewLetterIn">ផ្នែកសម្ភព⁣ និងរោគស្ត្រី</a> / បង្កើត លិខិតចូលពេទ្យ';
        $this->load->view('admin', $data);
    }

    public function submitLetterIn() {

        $this->form_validation->set_rules('txtdoctor', 'Doctor Name', 'required');
        $this->form_validation->set_rules('txtcustFather', 'Father Name', 'required');
        $this->form_validation->set_rules('txtcustMother', 'Mother Name', 'required');
//        $this->form_validation->set_rules('txtunit', 'Unit', 'required');
        $this->form_validation->set_rules('txtcustCondition', 'Customer Condition', 'required');
        $this->form_validation->set_rules('txtdatein', 'Date In', 'required');
        $this->form_validation->set_rules('txtcustPhone', 'Phone Number', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->createLetterIn($this->input->post('txtcustID'));
        } else {
            $data = array(
                'doctor' => $this->input->post('txtdoctor'),
                'custID' => $this->input->post('txtcustID'),
                'custName' => $this->input->post('txtcustName'),
                'custGender' => $this->input->post('txtgender'),
                'custNationality' => $this->input->post('txtcustNationality'),
                'custFather' => $this->input->post('txtcustFather'),
                'custMother' => $this->input->post('txtcustMother'),
                'custProvince' => $this->input->post('txtprovince'),
                'custDistinct' => $this->input->post('txtdistinct'),
                'custCommune' => $this->input->post('txtcommune'),
                'custVillage' => $this->input->post('txtvillage'),
                'custOccupation' => $this->input->post('txtoccupation'),
                'custUnit' => $this->input->post('txtunit'),
                'custCondition' => $this->input->post('txtcustCondition'),
                'department' => $this->input->post('txtdepartment'),
                'date_in' => $this->input->post('txtdatein'),
                'custPhone' => $this->input->post('txtcustPhone'),
                'create_by' => $this->session->userdata('sess_userlogin')->empID,
                'create_date' => date('Y-m-d'),
                'tran_type' => 'LetterIn',
                'isActive' => 'Y'
            );
            $this->letterin_model->insert_data($data);



            redirect('admin/viewLetterIn');
        }
    }

    //end controller Maternity Letter In
    //
    //
    //
    //start controller Maternity Letter Out

    public function viewMaternityLetterOut() {
        $data = array();
        $data['content'] = '/maternity/viewcustomer';
        $data['current_page'] = 'ផ្នែកសម្ភព⁣ និងរោគស្ត្រី / លិខិតចេញពីពេទ្យ';
        $data['page_title'] = 'លិខិតចេញពីពេទ្យ';
        $data['create_action'] = 'admin/create_maternity_letter_out/';
        $data['listCustomer'] = $this->customer_model->get_all_customers();
        $this->load->view('admin', $data);
    }

    public function create_maternity_letter_out($custID){
      $result = $this->customer_model->get_customer_by_custID($custID);

      $data = array();
      foreach ($result as $value) {
          $data['value'] = $value;

          if ($value->fullname == '') {
              $data['custName'] = $value->khmername;
          } else {
              $data['custName'] = $value->fullname;
          }
      }
      $data['custID'] = $custID;
      $data['content'] = '/maternity/letterout/add_letterout';
      $data['current_page'] = '<a href="' . base_url() . 'admin/viewMaternityLetterOut">ផ្នែកសម្ភព⁣ និងរោគស្ត្រី</a> / បង្កើត លិខិតចេញពីពេទ្យ';
      $this->load->view('admin', $data);
    }

    public function submit_maternity_letter_out(){

      $this->form_validation->set_rules('txtcustName', 'Customer Name', 'required');
      $this->form_validation->set_rules('txtcustHusband', 'Husband Name', 'required');
      $this->form_validation->set_rules('txthusNationality', 'Nationality', 'required');
      $this->form_validation->set_rules('txthusOccupation', 'Occupation', 'required');

      $this->form_validation->set_rules('txtdayIn', 'Day In', 'required');
      $this->form_validation->set_rules('txtmonthIn', 'Month In', 'required');
      $this->form_validation->set_rules('txtyearIn', 'Year In', 'required');

      $this->form_validation->set_rules('txtdayOut', 'Day Out', 'required');
      $this->form_validation->set_rules('txtmonthOut', 'Month Out', 'required');
      $this->form_validation->set_rules('txtyearOut', 'Year Out', 'required');

      $this->form_validation->set_rules('txtcondition_in', 'Condition In', 'required');
      $this->form_validation->set_rules('txtcondition_out', 'Condition Out', 'required');

      $this->form_validation->set_rules('txtdayout_1', 'Day Out', 'required');
      $this->form_validation->set_rules('txtmonthout_1', 'Month Out', 'required');
      $this->form_validation->set_rules('txtyearout_1', 'Year Out', 'required');

      $this->form_validation->set_rules('txttimeout_1', 'Time Out', 'required');
      $this->form_validation->set_rules('txtcondition_1', 'Condition', 'required');
      $this->form_validation->set_rules('txtcust_condition_out', 'Customer Condition', 'required');

      $this->form_validation->set_rules('txttype_1', '', 'required');
      $this->form_validation->set_rules('txttype_2', '', 'required');
      $this->form_validation->set_rules('txttype_3', '', 'required');

      if ($this->form_validation->run() == FALSE) {
          $this->viewTest();
      } else {

        $data = array(
          'custID' => $this->input->post('txtcustID'),
          'custName' => $this->input->post('txtcustName'),
          'custAge' => $this->input->post('txtcustAge'),
          'custNationality' => $this->input->post('txtcustNationality'),
          'custOccupation' => $this->input->post('txtcustOccupation'),
          'custUnit' => $this->input->post('txtcustUnit'),
          'custHusband' => $this->input->post('txtcustHusband'),
          'husAge' => $this->input->post('txthusAge'),
          'husNationality' => $this->input->post('txthusNationality'),
          'husOccupation' => $this->input->post('txthusOccupation'),
          'husUnit' => $this->input->post('txthusUnit'),
          'villageNo' => $this->input->post('txtvillageNo'),
          'communeNo' => $this->input->post('txtcommuneNo'),
          'distinctNo' => $this->input->post('txtdistinctNo'),
          'provinceNo' => $this->input->post('txtprovinceNo'),
          'phoneNo' => $this->input->post('txtphoneNo'),
          'dayIn' => $this->input->post('txtdayIn'),
          'monthIn' => $this->input->post('txtmonthIn'),
          'yearIn' => $this->input->post('txtyearIn'),
          'dayOut' => $this->input->post('txtdayOut'),
          'monthOut' => $this->input->post('txtmonthOut'),
          'yearOut' => $this->input->post('txtyearOut'),
          'condition_in' => $this->input->post('txtcondition_in'),
          'condition_out' => $this->input->post('txtcondition_out'),
          'dayout_1' => $this->input->post('txtdayout_1'),
          'monthout_1' => $this->input->post('txtmonthout_1'),
          'yearout_1' => $this->input->post('txtyearout_1'),
          'timeout_1' => $this->input->post('txttimeout_1'),
          'condition_1' => $this->input->post('txtcondition_1'),
          'isSugery' => $this->input->post('txtisSugery'),
          'cust_condition_out' => $this->input->post('txtcust_condition_out'),
          'type_1' => $this->input->post('txttype_1'),
          'type_1_1' => $this->input->post('txttype_1_1'),
          'type_2' => $this->input->post('txttype_2'),
          'type_2_2' => $this->input->post('txttype_2_2'),
          'type_3' => $this->input->post('txttype_3'),
          'type_3_3' => $this->input->post('txttype_3_3'),
          'create_date' => date('Y-m-d'),
          'create_by' => $this->session->userdata('sess_userlogin')->empID,
          'isActive' => 'Y'
        );

        $this->letterout_model->insert_data($data);
        redirect('admin/viewMaternityLetterOut');

      }



    }

    //end controller Maternity letter Out
    //
    //
    //
    //start controller Medicial Letter In

    public function viewMedical_LetterIn(){

      $data = array();
      $data['content'] = '/medical/viewcustomer';
      $data['current_page'] = 'ផ្នែកសល្យសាស្រ្ត / លិខិតចូលពេទ្យ';
      $data['page_title'] = 'លិខិតចូលពេទ្យ';
      $data['create_action'] = 'admin/create_medical_letter_in/';
      $data['listCustomer'] = $this->customer_model->get_all_customers();
      $this->load->view('admin', $data);

    }

    public function create_medical_letter_in($custID){

      $result = $this->customer_model->get_customer_by_custID($custID);

      $data = array();
      foreach ($result as $value) {
          $data['value'] = $value;

          if ($value->fullname == '') {
              $data['custName'] = $value->khmername;
          } else {
              $data['custName'] = $value->fullname;
          }
      }
      $data['custID'] = $custID;
      $data['content'] = '/medical/letterin/add_letterin';
      $data['current_page'] = '<a href="' . base_url() . 'admin/viewMedical_LetterIn">ផ្នែកសល្យសាស្រ្ត</a> / បង្កើត លិខិតចូលពេទ្យ';
      $this->load->view('admin', $data);

    }

    public function submit_medical_letter_in(){

      $this->form_validation->set_rules('txtdoctor', 'Doctor Name', 'required');
      $this->form_validation->set_rules('txtcustFather', 'Father Name', 'required');
      $this->form_validation->set_rules('txtcustMother', 'Mother Name', 'required');
//        $this->form_validation->set_rules('txtunit', 'Unit', 'required');
      $this->form_validation->set_rules('txtcustCondition', 'Customer Condition', 'required');
      $this->form_validation->set_rules('txtdatein', 'Date In', 'required');
      $this->form_validation->set_rules('txtcustPhone', 'Phone Number', 'required');
      if ($this->form_validation->run() == FALSE) {
          $this->create_medical_letter_in($this->input->post('txtcustID'));
      } else {
          $data = array(
              'doctor_name' => $this->input->post('txtdoctor'),
              'custID' => $this->input->post('txtcustID'),
              'custName' => $this->input->post('txtcustName'),
              'custGender' => $this->input->post('txtgender'),
              'custNationality' => $this->input->post('txtcustNationality'),
              'fatherName' => $this->input->post('txtcustFather'),
              'motherName' => $this->input->post('txtcustMother'),
              'villageNo' => $this->input->post('txtvillage'),
              'communeNo' => $this->input->post('txtcommune'),
              'distinctNo' => $this->input->post('txtdistinct'),
              'provinceNo' => $this->input->post('txtprovince'),
              'occupation' => $this->input->post('txtoccupation'),
              'unit' => $this->input->post('txtunit'),
              'condition_in' => $this->input->post('txtcustCondition'),
              'department' => $this->input->post('txtdepartment'),
              'time_in' => $this->input->post('txtdatein'),
              'phone_number' => $this->input->post('txtcustPhone'),
              'create_by' => $this->session->userdata('sess_userlogin')->empID,
              'create_date' => date('Y-m-d'),
              'isActive' => 'Y'
          );
          $this->medical_model->insert_letter_in_data($data);



          redirect('admin/viewMedical_LetterIn');
      }

    }

    public function viewMedical_LetterOut(){
      $data = array();
      $data['content'] = '/medical/viewcustomer';
      $data['current_page'] = 'ផ្នែកសល្យសាស្រ្ត / លិខិតចេញពីពេទ្យ';
      $data['page_title'] = 'លិខិតចេញពីពេទ្យ';
      $data['create_action'] = 'admin/create_medical_letter_out/';
      $data['listCustomer'] = $this->customer_model->get_all_customers();
      $this->load->view('admin', $data);
    }

    public function create_medical_letter_out($custID){

      $result = $this->customer_model->get_customer_by_custID($custID);

      $data = array();
      foreach ($result as $value) {
          $data['value'] = $value;

          if ($value->fullname == '') {
              $data['custName'] = $value->khmername;
          } else {
              $data['custName'] = $value->fullname;
          }
      }
      $data['custID'] = $custID;
      $data['content'] = '/medical/letterout/add_letterout';
      $data['current_page'] = '<a href="' . base_url() . 'admin/viewMedical_LetterOut">ផ្នែកសល្យសាស្រ្ត</a> / បង្កើត លិខិតចេញពីពេទ្យ';
      $this->load->view('admin', $data);

    }

    public function sumbit_medical_letter_out(){

      $this->form_validation->set_rules('txtcustName', 'Customer Name', 'required');
      $this->form_validation->set_rules('txtgender', 'Gender', 'required');
      $this->form_validation->set_rules('txtcustAge', 'Age', 'required');
      $this->form_validation->set_rules('txtcustNationality', 'Nationality', 'required');
      $this->form_validation->set_rules('txtcustOccupation', 'Occupation', 'required');
      $this->form_validation->set_rules('txtvillage', 'Village', 'required');
      $this->form_validation->set_rules('txtcommune', 'Commune', 'required');
      $this->form_validation->set_rules('txtdistinct', 'Distinct', 'required');
      $this->form_validation->set_rules('txtprovince', 'Province', 'required');
      $this->form_validation->set_rules('txtdate_in', 'Date In', 'required');
      $this->form_validation->set_rules('txtdepartment', 'Department', 'required');
      $this->form_validation->set_rules('txtdate_out', 'Date Out', 'required');
      $this->form_validation->set_rules('txttotal_day_in', 'Total Day', 'required');
      $this->form_validation->set_rules('txtcondition', 'Condition', 'required');
      $this->form_validation->set_rules('txtdoctor_consultant', 'Consultant', 'required');

      if ($this->form_validation->run() == FALSE) {
          $this->create_medical_letter_out($this->input->post('txtcustID'));
      } else {
        $data = array(
          'custID' => $this->input->post('txtcustID'),
          'custName' => $this->input->post('txtcustName'),
          'custGender' => $this->input->post('txtgender'),
          'custAge' => $this->input->post('txtcustAge'),
          'custNationality' => $this->input->post('txtcustNationality'),
          'custOccupation' => $this->input->post('txtcustOccupation'),
          'villageNo' => $this->input->post('txtvillage'),
          'communeNo' => $this->input->post('txtcommune'),
          'distinctNo' => $this->input->post('txtdistinct'),
          'provinceNo' => $this->input->post('txtprovince'),
          'date_in' => $this->input->post('txtdate_in'),
          'department' => $this->input->post('txtdepartment'),
          'date_out' => $this->input->post('txtdate_out'),
          'total_day_in' => $this->input->post('txttotal_day_in'),
          'condition' => $this->input->post('txtcondition'),
          'doctor_consultant' => $this->input->post('txtdoctor_consultant'),
          'create_by' => $this->session->userdata('sess_userlogin')->empID,
          'create_date' => date('Y-m-d'),
          'isActive' => 'Y'
        );

        $this->medical_model->insert_letter_out_data($data);

        redirect('admin/viewMedical_LetterOut');

      }

    }
    //end controller Medicail Letter In
    //
    //
    //
    //start controller Medical Letter Accpet

    public function viewMedical_LetterAccept(){
      $data = array();
      $data['content'] = '/medical/viewcustomer';
      $data['current_page'] = 'ផ្នែកសល្យសាស្រ្ត / លិខិតយល់ព្រម';
      $data['page_title'] = 'លិខិតយល់ព្រម';
      $data['create_action'] = 'admin/create_medical_letter_accept/';
      $data['listCustomer'] = $this->customer_model->get_all_customers();
      $this->load->view('admin', $data);
    }

    public function create_medical_letter_accept($custID){

      $result = $this->customer_model->get_customer_by_custID($custID);

      $data = array();
      foreach ($result as $value) {
          $data['value'] = $value;

          if ($value->fullname == '') {
              $data['custName'] = $value->khmername;
          } else {
              $data['custName'] = $value->fullname;
          }
      }
      $data['custID'] = $custID;
      $data['content'] = '/medical/letteraccept/add_letteraccept';
      $data['current_page'] = '<a href="' . base_url() . 'admin/viewMedical_LetterAccept">ផ្នែកសល្យសាស្រ្ត</a> / បង្កើត លិខិតយល់ព្រម';
      $this->load->view('admin', $data);

    }

    public function submit_medical_letter_accept(){

      $this->form_validation->set_rules('txtguardian_name', 'Guardian Name', 'required');
      $this->form_validation->set_rules('txtguardian_nationality', 'Guardian Nationality', 'required');
      $this->form_validation->set_rules('txtguardian_gender', 'Gender', 'required');
      $this->form_validation->set_rules('txtguardian_age', 'Age', 'required');
      $this->form_validation->set_rules('txtvillageNo', 'Village', 'required');
      $this->form_validation->set_rules('txtcommuneNo', 'Commune', 'required');
      $this->form_validation->set_rules('txtdistinctNo', 'Distinct', 'required');
      $this->form_validation->set_rules('txtprovinceNo', 'Province', 'required');
      $this->form_validation->set_rules('txtguardian_type', 'Guardian Type', 'required');
      $this->form_validation->set_rules('txtcustName', 'Customer Name', 'required');
      $this->form_validation->set_rules('txtcustGender', 'Gender', 'required');
      $this->form_validation->set_rules('txtcustAge', 'Age', 'required');
      $this->form_validation->set_rules('txtaccept_reason', 'Accept', 'required');

      if ($this->form_validation->run() == FALSE) {
          $this->create_medical_letter_accept($this->input->post('txtcustID'));
      } else {

        $data = array(
          'guardian_name' => $this->input->post('txtguardian_name'),
          'guardian_nationality' => $this->input->post('txtguardian_nationality'),
          'guardian_gender' => $this->input->post('txtguardian_gender'),
          'guardian_age' => $this->input->post('txtguardian_age'),
          'villageNo' => $this->input->post('txtvillageNo'),
          'communeNo' => $this->input->post('txtcommuneNo'),
          'distinctNo' => $this->input->post('txtdistinctNo'),
          'provinceNo' => $this->input->post('txtprovinceNo'),
          'guardian_type' => $this->input->post('txtguardian_type'),
          'custID' => $this->input->post('txtcustID'),
          'custName' => $this->input->post('txtcustName'),
          'custGender' => $this->input->post('txtcustGender'),
          'custAge' => $this->input->post('txtcustAge'),
          'accept_reason' => $this->input->post('txtaccept_reason'),
          'create_by' => $this->session->userdata('sess_userlogin')->empID,
          'create_date' => date('Y-m-d'),
          'isActive' => 'Y'
        );

        $this->medical_model->insert_letter_accept_data($data);

        redirect('admin/viewMedical_LetterAccept');

      }

    }

    //end controller Medical Letter Accept
    //
    //
    //
    //start controller test

    public function viewTest(){
      $data = array();
      $data['content'] = 'test';
      $data['current_page'] = "TEST";
      $this->load->view('admin',$data);
    }

    public function addTest(){

      $this->form_validation->set_rules('txtfirstname', 'First Name', 'required');
      $this->form_validation->set_rules('txtlastname', 'Last Name', 'required');

      if ($this->form_validation->run() == FALSE) {
          $this->viewTest();
      } else {
        $data = array(
          'firstname' => $this->input->post('txtfirstname'),
          'lastname' => $this->input->post('txtlastname'),
          'fullname' => $this->input->post('txtfirstname') . ' ' . $this->input->post('txtlastname')
        );

        $this->test_model->insert_data($data);
        redirect('admin/viewTest');

      }

    }

    //end control test



    public function logout() {
        session_destroy();
        redirect('login');
    }

}
