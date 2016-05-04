<?php  

  class Register_model extends CI_Model{

  	public function insert_usuario($name, $email, $pass){

  		$query = $this->db->get_where('usuario', array('nick' => $email));
  		if($query->num_rows() > 0){
			
			return "failed";
		}else{
		    $data = array(
    			'nick' => $email,
    			'nombre' => $name,
    			'pass' => $pass
    		);

 		    $this->db->set($data);			
			$this->db->insert('usuario', $data); 
  			return "sucess";
  		} 
  		
	
  	}
  	
  }


