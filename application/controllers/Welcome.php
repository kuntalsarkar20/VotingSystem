<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['stylesheet']='homepagestyle.css';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('HomePage');
		$this->load->view('templates/footer');
	}
}
