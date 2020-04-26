<?php


class Login
{
	private $db;
	function __construct()
	{
		$this->db = new Database;
	}

	public function login($data) 
	{
		$email = $data['email'];
		$pass = $data['pass'];
		if(empty($email)) {
			echo "Email Field Is Required";
		} else if(empty($pass)) {
			echo "Password Field Is Required";
		} else if(!filter_var($email.FILTER_VALIDATE_EMAIL)) {
			echo "Email Is Not Valid";
		} else {
			$login_data = $this->db->select("user", "email='$email' AND password='$pass'");
			if($this->db->db->affected_rows>0) {
				$fetch=$login_data->fetch_assoc();
				Session::set("login",true);
				Session::set("email",$fetch['email']);
				Session::set("user_id",$fetch['id']);
				Session::set("store",$fetch['store']);
				header('Location:../Admin_panel/index.php');
			} else {
				echo "Email Or Password Was Wrong";
			}
		}
	}
}