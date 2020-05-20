<?php

	class Attrition_model extends CI_Model {

		public function get_comp(){
			return $comp_name = $this->db->get("master_companies_info")->result_array();
		}

		public function getcomp_id($comp)
		{
			// $query=$this->db->query("select * from master_companies_info where mc_name='' ");
    			// return $query->result_array();
  			$this->db->where($comp);
  			$query = $this->db->get("master_companies_info");
  			return $query->result_array();
	 
		}

		public function getemp_data($compid)
		{
			// $query=$this->db->query("select * from master_companies_info where mc_name='' ");
    			// return $query->result_array();
  			//$this->db->where($compid);
  			//$query = $this->db->get("emp_resign_info");

  			$query = $this->db->query("select resignDate from emp_resign_info where companyName='$compid[companyName]' and '$compid[resignDate]'=year(resignDate)");
  			return $query->result_array();
	
		}

		public function getjoinemp_data($compid)
		{
			$query = $this->db->query("select joining_date,department from emp_personal_info where companyName='$compid[companyName]' and '$compid[joining_date]'=year(joining_date)");
  			return $query->result_array();
		}

		public function getcompdep($compdep)
		{
			$query = $this->db->query("select * from master_departments_info where compname='$compdep[companyName]'");
			return $query->result_array();
		}

	}
?>