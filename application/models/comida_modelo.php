<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comida_modelo extends CI_Model { 
    function __construct(){
		parent::__construct();
		$this->load->database(); 		
	 }

public function login($datos)
	{
		$consulta=$this->db->get_where('login',$datos);
		return $consulta;

}
public function registrar ($datos)
{
$consult=$this->db->insert('cliente',$datos);

	
}
}//final


