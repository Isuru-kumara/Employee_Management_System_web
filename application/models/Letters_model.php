<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Letters_model extends CI_Model {
    
    public function get_letters() {
        // Fetch titles and descriptions from the database
        $this->db->select('file_name, emp_name');
        // Fetch all letters from the database
        return $this->db->get('reqletter_tbl')->result_array();
    }
    
   
    public function get_letter_by_employee_id($employee_id) {
        // Fetch the letter from the database based on the employee ID
        $query = $this->db->get_where('reqletter_tbl', array('emp_name' => $employee_id));
        
        // Check if the query returned a result
        if ($query->num_rows() > 0) {
            // Return the letter data
            return $query->row();
        } else {
            // No letter found for the given employee ID
            return null;
        }
    }
    public function get_file_data_by_id($file_id) {
        // Fetch the file data from the database based on the file ID
        $query = $this->db->get_where('reqletter_tbl', array('id' => $file_id));
    
        // Check if the query returned a result
        if ($query->num_rows() > 0) {
            // Return the file data
            return $query->row_array();
        } else {
            // No file found for the given ID
            return null;
        }
    }
    

}

