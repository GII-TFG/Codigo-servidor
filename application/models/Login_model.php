<?php  

  class Login_model extends CI_Model{

  	public function check_user($email, $pass){
		$query = $this->db->get_where('usuario', array('nick' => $email,'pass' => $pass));
					
		if($query->num_rows() == 1){
			
			return $query->row()->nombre;
		}else{
  			return null;
  		} 
  	}
  	
  }
