<?php
defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class signup_controller extends CI_Controller {

	public function index()
	{
		if($this->check_session()){
			redirect(base_url()."profile");
		}else{
			$data['title']='OpPoll | SignUp';
			$data['stylesheet']='signup_login_style.css';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar');
			$this->load->view('signup_login/signup');
			$this->load->view('templates/footer');
		}
	}
	public function login()
	{
		if($this->check_session()){
			redirect(base_url()."profile");
		}else{
			$data['title']='OpPoll | Login';
			$data['stylesheet']='signup_login_style.css';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar');
			$this->load->view('signup_login/login');
			$this->load->view('templates/footer');
		}
	}
	public function check_session(){
		if(!isset($_SESSION['username']) && !isset($_SESSION['useremail'])){
			return false;
		}else{
			return true;
		}
	}
}
