<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {

	function __construct() {

		parent::__construct();
	}

	
	public function index()
	{  
	  $postdata = file_get_contents("php://input");
      $request = json_decode($postdata,TRUE);

      $name = $request['name'];
      $email =$request['email'];
      $pass = $request['pass'];

      $this->load->model('register_model');
   
      $answ = $this->register_model-> insert_usuario($name, $email, $pass);

      echo json_encode(array("answer" => $answ));	     
	
	}

}
