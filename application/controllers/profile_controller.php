<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class profile_controller extends CI_Controller {

	public function index()
	{
		if($this->check_session()){
			$data['title']='OpPoll | Profile';
			$data['stylesheet']='profile_style.css';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar');
			$this->load->view('profile_views/sidenav');
			$this->load->view('profile_views/mydetails');
			$this->load->view('templates/footer');
		}else{
			redirect(base_url()."login");
		}
	}
	public function create_new_poll()
	{
		if($this->check_session()){
			$data['title']='OpPoll | Create Poll';
			$data['stylesheet']='profile_style.css';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar');
			$this->load->view('profile_views/sidenav');
			$this->load->view('profile_views/create_new_poll');
			$this->load->view('templates/footer');
		}else{
			redirect(base_url()."login");
		}
	}
	public function logout(){
		session_destroy();
		redirect(base_url()."login");
	}
	public function check_session(){
		if(!isset($_SESSION['username']) && !isset($_SESSION['useremail'])){
			return false;
		}else{
			return true;
		}
	}
}
