<?php

class signup_model extends CI_Model{
	function index($got_data){
		$query=$this->db->query('insert into users(uname,uemail,upassword) values("'.$got_data['uname'].'","'.$got_data['uemail'].'","'.$got_data['upassword'].'")');
		if($query){
			echo "success";
		}else{
			echo "failed";
		}
	}
}



?>