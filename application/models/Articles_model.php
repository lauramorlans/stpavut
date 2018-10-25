<?php 

class Articles_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database(); 
	}

	public function touslesarticles() {
		$query=$this->db->get('articles');
		return $query->result();
	}
}

?>