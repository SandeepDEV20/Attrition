<?php 
	
	require APPPATH.'libraries/REST_Controller.php';

	class AttritionApi extends REST_Controller {

		public function __construct() {
			parent ::__construct();

			$this->load->model(array('Attrition_model'));
		}

		public function index_get() {
			$info = $this->Attrition_model->get_comp(); 

			if(count($info) > 0) {
				$this->response ($info, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "No user found!!!",
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}

		public function compinfo_post() {
			$comp = array();
			 $comp['mc_name'] = $this->post('mc_name');
              // $comp='Vision Robotic India Pvt. Ltd.';
			$getdata=$this->Attrition_model->getcomp_id($comp);

			if($getdata>0) {
				$this->response ($getdata, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "No user found!!!",
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}

		public function compidinfo_post() {
			$compid = array();
			 $compid['companyName'] = $this->post('companyName');
			 //$compyear = array();
			 $compid['resignDate'] = $this->post('Date');
              // $comp='Vision Robotic India Pvt. Ltd.';
			$getdata=$this->Attrition_model->getemp_data($compid);

			if($getdata>0) {
				$this->response ($getdata, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "No user found!!!",
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}
		public function compjidinfo_post() {
			$compid = array();
			 $compid['companyName'] = $this->post('companyName');
			 //$compyear = array();
			 $compid['joining_date'] = $this->post('Date');
              // $comp='Vision Robotic India Pvt. Ltd.';
			$getdata=$this->Attrition_model->getjoinemp_data($compid);

			if($getdata>0) {
				$this->response ($getdata, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "No user found!!!",
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}

		public function compdep_post() {
			$compdep = array();
			$compdep['companyName'] = $this->post('companyName');

			$getdata = $this->Attrition_model->getcompdep($compdep);

			if($getdata>0) {
				$this->response ($getdata, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "No user found!!!",
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}



	}

?>