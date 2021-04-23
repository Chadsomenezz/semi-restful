<?php


class Main extends CI_Controller{

	public function index(){

		$data['course_data'] = $this->form_process->display_form();
		$data['add_course_form'] = 'main/add_course_form';
		$this->load->view("main/main",$data);
	}

	public function process_form(){
		$this->load->helper('url');
		if(!$this->input->post('name')){
			redirect(base_url());
			die();
		}

		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price'=> $this->input->post('price')
		);

		$this->form_process->process_form($data);
		redirect(base_url());
	}

	public function remove_course($id=false){
		$this->load->helper("url");
		if($id === false){
			redirect('main');
			die();
		}
		$this->form_process->remove_form($id);
		redirect(base_url());
	}


	public function edit($id=false){
		$this->load->helper("url");
		if(!$id){
			redirect(base_url());
		}
		else {

			$data['result'] = $this->form_process->display_form($id);
			$this->load->view("main/edit",$data);

		}
	}

	public function edit_process($id=false){
		$this->load->helper("url");
		if(!$id){
			redirect(base_url());
		}
		else {

			$data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'price'=> $this->input->post('price')
			);

			$this->form_process->edit_form($data, $this->input->post('id'));
			redirect(base_url());

		}
	}


}
