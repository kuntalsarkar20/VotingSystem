<?php

class signup_model extends CI_Model{
	function index($got_data){
		$query=$this->db->query('insert into users(uname,uemail,upassword) values("'.$got_data['uname'].'","'.$got_data['uemail'].'","'.$got_data['upassword'].'")');
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function validate_user_login_details($login_details){
		$got_result=$this->db->query('select uid from users where uemail="'.$login_details['uemail'].'" and upassword="'.$login_details['upassword'].'"');
		foreach ($got_result -> result() as $row) {
			echo $row->uid;
		}
	}
}



?>