<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary_model extends CI_Model {


    function insert_salary($data)
    {
        $this->db->insert("salary_tbl",$data);
        $this->db->affected_rows();
    }

    function select_salary()
    {
        $this->db->order_by('employee_tbl.id','DESC');
        $this->db->select("salary_tbl.*,employee_tbl.employee_name,employee_tbl.pic,department_tbl.department_name");
        $this->db->from("salary_tbl");
        $this->db->join("employee_tbl",'employee_tbl.id=salary_tbl.employee_id');
        $this->db->join("department_tbl",'department_tbl.id=employee_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_salary_byID($id)
    {
        $this->db->where('salary_tbl.id',$id);
        $this->db->select("salary_tbl.*,employee_tbl.employee_name,employee_tbl.city,employee_tbl.state,employee_tbl.country,employee_tbl.mobile,employee_tbl.email,department_tbl.department_name");
        $this->db->from("salary_tbl");
        $this->db->join("employee_tbl",'employee_tbl.id=salary_tbl.employee_id');
        $this->db->join("department_tbl",'department_tbl.id=employee_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_salary_byEmployeeID($employeeid)
    {
        $this->db->where('salary_tbl.employee_id',$employeeid);
        $this->db->select("salary_tbl.*,employee_tbl.employee_name,employee_tbl.city,employee_tbl.state,employee_tbl.country,employee_tbl.mobile,employee_tbl.email,department_tbl.department_name");
        $this->db->from("salary_tbl");
        $this->db->join("employee_tbl",'employee_tbl.id=salary_tbl.employee_id');
        $this->db->join("department_tbl",'department_tbl.id=employee_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    

    function select_employee_byEmail($email)
    {

        $this->db->where('email',$email);
        $qry=$this->db->get('employee_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function sum_salary()
    {
        $this->db->select_sum('total');
        $qry = $this->db->get('salary_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_salary($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("salary_tbl");
        $this->db->affected_rows();
    }

    
    function update_employee($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('employee_tbl',$data);
        $this->db->affected_rows();
    }

    

    
    




}
