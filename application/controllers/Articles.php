<?php 

class articles extends CI_Controller {

	public function index(){
		$this->load->model('Articles_model');
		$recup=$this->Articles_model->touslesarticles();
		$data['tous']=$recup;
		$this->load->view('Articles_view', $data);
	}

}

?>