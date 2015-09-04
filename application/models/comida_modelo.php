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
public function registrar ($datos,$datos2)
{
// Primero insertamos el usuario 
$consult=$this->db->insert('cliente',$datos);
// Localizo el ID del ultimo cliente que ingreso y lo extraigo
$nombre=$datos['Nombre'];
$apellido=$datos['Apellido'];
$buscar=$this->db->query("select * FROM Cliente WHERE Nombre ='$nombre' and Apellido= '$apellido'");
// Extraigo el ID 
$IdCliente=$buscar->row()->idCliente ;
// Agrego el ID al vector Datos2
$datos2['IdCliente']=$IdCliente;
// Inserto el login	
$consult=$this->db->insert('login',$datos2);
}
public function Traer_Productos()
{
	$consulta=$this->db->query("select * FROM producto");
	return $consulta;
	
}
 public function insert_compra ($datos)
 {
 	$consult=$this->db->insert('pedido',$datos);
 }
 public function traer_precio ($id)
 
 {
 	$consulta=$this->db->query("Select * From producto where idProducto='$id'");
	return $consulta;
 }
}//final


