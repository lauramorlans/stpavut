<?php

class Salles extends CI_Controller {

	public function index()
	{
		$this->load->view('Header_view');
		$this->load->model('Salles_model');
		$recup=$this->Salles_model->touteslessalles();
		$data['tous']=$recup;
		$this->load->view('Salles_view',$data);
		$this->load->view('Footer_view');
	}
}
