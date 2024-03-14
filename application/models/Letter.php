<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Letter extends CI_Model {

    public function get_letter_by_employee_id($employee_id) {
        // Fetch the letter from the database based on the employee ID
        $query = $this->db->get_where('reqletter_table', array('emp_name' => $employee_id));
        
        // Check if the query returned a result
        if ($query->num_rows() > 0) {
            // Return the letter data
            return $query->row();
        } else {
            // No letter found for the given employee ID
            return null;
        }
    }

}
