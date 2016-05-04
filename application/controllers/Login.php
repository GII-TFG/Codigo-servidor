<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function check()
	{
	  $postdata = file_get_contents("php://input");
      $request = json_decode($postdata,TRUE);

      $email =$request['email'];
      $pass = $request['pass'];


		$this->load->model('login_model');
		$answ = $this->login_model->check_user($email, $pass);

		if($answ==null){
			echo json_encode(array("answer" => "failed"));
		}else{
			echo json_encode(array("answer" => $answ));
		}
	}


}
