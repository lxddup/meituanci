<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
    public function detail()
    {
        $this->load->view('detail');
    }
    public function login_page()
    {
        $this -> load -> view('login');
    }
    public function resigin()
    {
        $username = $this -> input ->post("username");
        $password = $this-> input  ->post("password");

        $this ->load ->model("user_model");
        $row = $this -> user_model ->get_by_username_password($username,$password);
        if($row){
            echo "登录成功";
        }else{
            echo "登录失败";
        }
    }
}
