<?php


class form_process extends CI_Model{
	public function process_form($data){
		$this->db->set('date_added', 'NOW()', FALSE);
		$this->db->insert('course',$data);
	}

	public function display_form($id = false){

		if ($id){
			$this->db->where('id',$id);
			$result = $this->db->get('course');
			return $result->result();
		}
		$this->db->order_by('date_added','desc');
		$result = $this->db->get('course');

		return $result->result();
	}

	public function remove_form($id){
		$this->db->where('id',$id);
		$this->db->delete('course');
	}

	public function edit_form($data,$id){
		$this->db->where('id',$id);
		$this->db->update('course',$data);

	}


}
