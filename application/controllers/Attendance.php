<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
    }

    public function index()
    {
        $data['department']=$this->Department_model->select_departments();
        $data['country']=$this->Home_model->select_countries();
        $this->load->view('employee/header');
        $this->load->view('employee/attendance',$data);
        $this->load->view('employee/footer');
    }

    public function page()
    {
        $this->load->view('employee/header');
        $this->load->view('employee/attendance_page');
        $this->load->view('employee/footer');
    }

    public function view()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/manage-attendance');
        $this->load->view('admin/footer');
    }


    public function add()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add-attendance');
        $this->load->view('admin/footer');

    }

    public function edit()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/edit-attendance');
        $this->load->view('admin/footer');

    }

    public function delete()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/delete-attendance');
        $this->load->view('admin/footer');

    }

    



}
