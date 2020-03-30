<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_controller extends CI_Controller {

	public function index()
	{
		$data['stylesheet']='signup_login_style.css';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('signup_login/signup');
		$this->load->view('templates/footer');
	}
}
