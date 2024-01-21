<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {


    function insert_employee($data)
    {
        $this->db->insert("employee_tbl",$data);
        return $this->db->insert_id();
    }

    function select_employee()
    {
        $this->db->order_by('employee_tbl.id','DESC');
        $this->db->select("employee_tbl.*,department_tbl.department_name");
        $this->db->from("employee_tbl");
        $this->db->join("department_tbl",'department_tbl.id=employee_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_employee_byID($id)
    {
        $this->db->where('employee_tbl.id',$id);
        $this->db->select("employee_tbl.*,department_tbl.department_name");
        $this->db->from("employee_tbl");
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

    function select_employee_byDept($dpt)
    {
        $this->db->where('employee_tbl.department_id',$dpt);
        $this->db->select("employee_tbl.*,department_tbl.department_name");
        $this->db->from("employee_tbl");
        $this->db->join("department_tbl",'department_tbl.id=employee_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }


    function delete_employee($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("employee_tbl");
        $this->db->affected_rows();
    }

    
    function update_employee($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('employee_tbl',$data);
        $this->db->affected_rows();
    }

    

    
    




}
