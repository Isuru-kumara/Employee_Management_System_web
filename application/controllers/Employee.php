<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

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
        $this->load->view('admin/header');
        $this->load->view('admin/add-employee',$data);
        $this->load->view('admin/footer');
    }

    public function view()
    {
        $employee=$this->session->userdata('userid');
        $data['content']=$this->Employee_model->select_employee_byDept($employee);
        $this->load->view('employee/header');
        $this->load->view('employee/view-employee',$data);
        $this->load->view('employee/footer');
    }

    public function manage()
    {
        $data['content']=$this->Employee_model->select_employee();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-employee',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $this->form_validation->set_rules('txtname', 'Full Name', 'required');
        $this->form_validation->set_rules('slcgender', 'Gender', 'required');
        $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        $this->form_validation->set_rules('txtemail', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('txtmobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('txtdob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of Joining', 'required');
        $this->form_validation->set_rules('txtcity', 'City', 'required');
        $this->form_validation->set_rules('txtstate', 'State', 'required');
        $this->form_validation->set_rules('slccountry', 'Country', 'required');
        
        $name=$this->input->post('txtname');
        $gender=$this->input->post('slcgender');
        $department=$this->input->post('slcdepartment');
        $email=$this->input->post('txtemail');
        $mobile=$this->input->post('txtmobile');
        $dob=$this->input->post('txtdob');
        $doj=$this->input->post('txtdoj');
        $city=$this->input->post('txtcity');
        $state=$this->input->post('txtstate');
        $country=$this->input->post('slccountry');
        $address=$this->input->post('txtaddress');
        $added=$this->session->userdata('userid');

        if($this->form_validation->run() !== false)
        {
            $this->load->library('image_lib');
            $config['upload_path']= 'uploads/profile-pic/';
            $config['allowed_types'] ='gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('filephoto'))
            {
                $image='default-pic.jpg';
            }
            else
            {
                $image_data =   $this->upload->data();

                $configer =  array(
                  'image_library'   => 'gd2',
                  'source_image'    =>  $image_data['full_path'],
                  'maintain_ratio'  =>  TRUE,
                  'width'           =>  150,
                  'height'          =>  150,
                  'quality'         =>  50
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                
                $image=$image_data['file_name'];
            }
            $login=$this->Home_model->insert_login(array('username'=>$email,'password'=>$mobile,'usertype'=>2));
            if($login>0)
            {
                $data=$this->Employee_model->insert_employee(array('id'=>$login,'employee_name'=>$name,'gender'=>$gender,'email'=>$email,'mobile'=>$mobile,'dob'=>$dob,'doj'=>$doj,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'department_id'=>$department,'pic'=>$image,'added_by'=>$added));
            }
            
            if($data==true)
            {
                
                $this->session->set_flashdata('success', "New Employee Added Succesfully"); 
            }else{
                $this->session->set_flashdata('error', "Sorry, New Employee Adding Failed.");
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
        else{
            $this->index();
            return false;

        } 
    }

    public function update()
    {
        $this->load->helper('form');
        $this->form_validation->set_rules('txtname', 'Full Name', 'required');
        $this->form_validation->set_rules('slcgender', 'Gender', 'required');
        $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        $this->form_validation->set_rules('txtemail', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('txtmobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('txtdob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of Joining', 'required');
        $this->form_validation->set_rules('txtcity', 'City', 'required');
        $this->form_validation->set_rules('txtstate', 'State', 'required');
        $this->form_validation->set_rules('slccountry', 'Country', 'required');
        
        $id=$this->input->post('txtid');
        $name=$this->input->post('txtname');
        $gender=$this->input->post('slcgender');
        $department=$this->input->post('slcdepartment');
        $email=$this->input->post('txtemail');
        $mobile=$this->input->post('txtmobile');
        $dob=$this->input->post('txtdob');
        $doj=$this->input->post('txtdoj');
        $city=$this->input->post('txtcity');
        $state=$this->input->post('txtstate');
        $country=$this->input->post('slccountry');
        $address=$this->input->post('txtaddress');

        if($this->form_validation->run() !== false)
        {
            $this->load->library('image_lib');
            $config['upload_path']= 'uploads/profile-pic/';
            $config['allowed_types'] ='gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('filephoto'))
            {
                $data=$this->Employee_model->update_employee(array('employee_name'=>$name,'gender'=>$gender,'email'=>$email,'mobile'=>$mobile,'dob'=>$dob,'doj'=>$doj,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'department_id'=>$department),$id);
            }
            else
            {
                $image_data =   $this->upload->data();

                $configer =  array(
                  'image_library'   => 'gd2',
                  'source_image'    =>  $image_data['full_path'],
                  'maintain_ratio'  =>  TRUE,
                  'width'           =>  150,
                  'height'          =>  150,
                  'quality'         =>  50
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

                $data=$this->Employee_model->update_employee(array('employee_name'=>$name,'gender'=>$gender,'email'=>$email,'mobile'=>$mobile,'dob'=>$dob,'doj'=>$doj,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'department_id'=>$department,'pic'=>$image_data['file_name'],'added_by'=>$added),$id);
            }
            
            if($this->db->affected_rows() > 0)
            {
                $this->session->set_flashdata('success', "Employee Updated Succesfully"); 
            }else{
                $this->session->set_flashdata('error', "Sorry, Employee Updated Failed.");
            }
            redirect(base_url()."manage-employee");
        }
        else{
            $this->index();
            return false;

        } 
    }


    function edit($id)
    {
        $data['department']=$this->Department_model->select_departments();
        $data['country']=$this->Home_model->select_countries();
        $data['content']=$this->Employee_model->select_employee_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-employee',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $this->Home_model->delete_login_byID($id);
        $data=$this->Employee_model->delete_employee($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Employee Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Employee Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    



}
