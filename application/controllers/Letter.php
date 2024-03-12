<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Letter extends CI_Controller {
    public function index()
    {
        $this->load->model('Letters_model');
        $data['letters'] = $this->Letters_model->get_letters();
        $this->load->view('employee/header');
        $this->load->view('employee/letters', $data);
        $this->load->view('employee/footer');
    }

    public function download_letter($file_id) {
        // Load the model to access the database
        $this->load->model('Letters_model');
    
        // Fetch the file data from the database based on the file ID
        $file_data = $this->Letters_model->get_file_data_by_id($file_id);
    
        // Set headers for file download
        header('Content-type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_data['file_name'] . '"');
    
        // Output the file data
        echo $file_data['file_content']; // Assuming 'file_content' is the column in your database table that stores the file data
    }



    public function view_letter($employee_id) {
        
        // Load the model to access the database
        $this->load->model('Letters_model');
        
        // Fetch the letter for the specified employee ID from the database
        $data['letter'] = $this->Letters_model->get_letter_by_employee_id($employee_id);
        
        // Load the view to display the letter
        $this->load->view('view_letter', $data);
    }
    public function download_file($file_id) {
        // Load the model to access the database
        $this->load->model('Letters_model');
    
        // Fetch the file data from the database based on the file ID
        $file_data = $this->Letters_model->get_file_data_by_id($file_id);
    
        // Set headers for file download
        header('Content-type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_data['file_name'] . '"');
    
        // Output the file data
        echo $file_data['file_content']; // Assuming 'file_content' is the column in your database table that stores the file data
    }
    
    
}




    


