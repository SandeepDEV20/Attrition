<?php

	class Attritioncontrol extends CI_Controller {

		// for displaying attrition record

		public function display() {

			$data_user = callAPI('GET',base_url('AttritionApi/index'),0);
          	$result['data']=json_decode($data_user); 

			$this->load->view('record', $result); 
		}

		public function compyearsubmit(){
			if($this->input->post('submit-data')) {	
					$compname = $this->input->post('compname');
					$year = $this->input->post('year');                	     

					$userdata = [
						'mc_name' => $compname, 
						'year' => $year
				];
				  	$this->session->set_userdata($userdata);

				//print_r($post_array); die;
				//$this->load->view('test', $post_array);

				$compinfo = callAPI('POST',base_url('AttritionApi/compinfo'),$userdata);
          		$result=json_decode($compinfo);
          		// print_r($result);

          		foreach($result as $rows) {
          			$id = [
                       'companyName' => $rows->mc_id,
                       'Date' => $year
          			];
          		}
          			$compdep = callAPI('POST',base_url('AttritionApi/compdep'),$id);
           			$resempid = callAPI('POST',base_url('AttritionApi/compidinfo'),$id);
           			$joinempid = callAPI('POST',base_url('AttritionApi/compjidinfo'),$id);
           			$result['resemp'] = json_decode($resempid);
           			$result['data2'] = json_decode($compdep);
           			$result['joinemp'] = json_decode($joinempid);
           			
           			print_r($resempid);
           			print_r($result);

           			
           			//$this->load->view('attrition_record', $result);

          	
			}
		}

	}

?>