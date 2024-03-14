<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
        $this->load->model('Request_model');
        
    }
    

    public function index()
    {
        $this->load->view('employee/header');
        $this->load->view('employee/request');
        $this->load->view('employee/footer');
        
    }
    public function approve()
    {
        $data['content']=$this->Request_model->select_request_forApprove();
        $this->load->view('admin/header');
        $this->load->view('admin/request',$data);
        $this->load->view('admin/footer');
    }

    public function manage()
    {
        $data['content']=$this->Request_model->select_request();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-leave',$data);
        $this->load->view('admin/footer');
    }

    public function view()
    {
        $employee=$this->session->userdata('userid');
        $data['content']=$this->Request_model->select_request_byEmployeeID($employee);
        $this->load->view('employee/header');
        $this->load->view('employee/view-request',$data);
        $this->load->view('employee/footer');
    }
  
    public function insert()
    {
        
        //setting rules
        $this->form_validation->set_rules('txtname', 'Full name', 'required');
        $this->form_validation->set_rules('txtempid', 'Employee ID', 'required');
        $this->form_validation->set_rules('txtemail', 'Email', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of Joined', 'required');
        $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        $this->form_validation->set_rules('txtaddress', 'Address', 'required');

        $fullname=$this->input->post('txtname');
        //$fullname=$this->session->userdata('userid');
        $empid=$this->input->post('txtempid');
        $email=$this->input->post('txtemail');
        $doj=$this->input->post('txtdoj');
        $department=$this->input->post('slcdepartment');
        $address=$this->input->post('txtaddress');

        $this->load->model('Request_model');
        $data=$this->Request_model->insert_request(array('FullName'=>$fullname,'EmployeeID'=>$empid,'DateJoining'=>$doj,'Email'=>$email,'Department'=>$department,'Address'=>$address));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Request Applied Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Request Apply Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id)
    {
        $data=$this->Request_model->delete_request($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Request Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Request Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function upload_pdf() {
        $this->load->library('upload');
        $config['upload_path'] = './uploads/req-letters/';
        $config['allowed_types'] = 'pdf';
        config['allowed_types'] = 'png';
        $config['max_size'] = 10240; // 10MB
        $this->upload->initialize($config);
    
        if ($this->upload->do_upload('pdf_file')) {
            // File uploaded successfully
            $data = $this->upload->data();
            $pdf_path = $data['file_name']; // Get the file name
    
            // Get employee ID
            $employee_id = $this->input->post('employee_id');
    
            // Insert data into the database
            $pdf_data = array(
                'emp_name' => $employee_id, // Modify this to your employee name if needed
                'file_name' => $pdf_path,
                'upload_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert('reqletter_tbl', $pdf_data);
    
            $this->session->set_flashdata('success', 'PDF file uploaded successfully.');
        } else {
            // File upload failed
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
        }
       redirect('request'); // Redirect back to the page with the upload form
    }
    
    



}
