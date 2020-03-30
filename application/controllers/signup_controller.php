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
	public function form_validate(){
		if(isset($_POST['signup_submit'])){    //if submit button is clicked
			$psw=$_POST['psw'];
			$psw_repeat=$_POST['psw-repeat'];
			if($psw==$psw_repeat){					//matching two passwords.
				$this->load->model("signup_model");
				$send_data= array(
					'uname' => $this->input->post('uname'),
					'uemail' => $this->input->post('uemail'),
					'upassword' => $psw,
					 );
				$result=$this->signup_model->index($send_data);
				if($result){
					$_SESSION['username']=$this->input->post('uname');
					$_SESSION['useremail']=$this->input->post('uemail');
					redirect(base_url()."profile");
				}else{
					redirect(base_url()."Error");
				}
			}else{		//if passwords didn't matched
				redirect(base_url()."signup/password-not-matched");
			}
		}else{   //if anyone tries to run form_validate function directly.
			redirect(base_url()."signup");
		}
	}
	public function validate_login_details(){
		if(isset($_POST['login'])){		//if user clicks the login button
			$this->load->model("signup_model");
			$login_data= array(
				'uemail' =>$this->input->post('uemail') , 
				'upassword' =>$this->input->post('psw') , 
			);
			$this->signup_model->validate_user_login_details($login_data);
		}
	}
}
