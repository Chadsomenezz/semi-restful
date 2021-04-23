<?php

class Api extends CI_Controller{

	public function product($id = 'all'){

		//For single Result
		if ($id !== 'all'){
			$data['course_data'] = $this->form_process->display_form($id);
			$this->load->view('api/product',$data);
		}

		//For all result
		if($id === 'all'){
			$this->load->helper('url');
			$data['course_data'] = $this->form_process->display_form();
			$this->load->view('api/product',$data);
		}

	}
}
