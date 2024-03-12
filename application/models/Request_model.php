<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_model extends CI_Model {


    function insert_request($data)
    {
        $this->db->insert("request_tbl",$data);
        return $this->db->insert_id();
    }
    
function select_request()
{
    // Modify this query based on your database structure
    $this->db->select("*");
    $this->db->from("request_tbl");
    $query = $this->db->get();
    return $query->result_array();
}

// Select request records for approval
function select_request_forApprove()
{
    // Modify this query based on your database structure
    $this->db->where('status', 0); // Assuming 'status' field indicates whether the request needs approval
    $this->db->select("*");
    $this->db->from("request_tbl");
    $query = $this->db->get();
    return $query->result_array();
}

    function select_department_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('department_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
    function select_request_byEmployeeID($employeeid)
    {
        $this->db->order_by('request_tbl.EmployeeID','DESC');
        $this->db->where('request_tbl.EmployeeID',$employeeid);
        $this->db->select("request_tbl.*,employee_tbl.employee_name,employee_tbl.city,employee_tbl.state,employee_tbl.country,employee_tbl.mobile,employee_tbl.email,department_tbl.department_name");
        $this->db->from("request_tbl");
        $this->db->join("employee_tbl",'employee_tbl.id=request_tbl.EmployeeID');
        $this->db->join("department_tbl",'department_tbl.id=employee_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
        
    function delete_request($id)
    {
        $this->db->where('EmployeeID', $id);
        $this->db->delete("request_tbl");
        $this->db->affected_rows();
    }

    function update_request($data,$id)
    {
        $this->db->where('EmployeeID', $id);
        $this->db->update('request_tbl',$data);
        $this->db->affected_rows();
    }

    

   
}
