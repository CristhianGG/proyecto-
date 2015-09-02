

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comida extends CI_Controller {

	 
	public function index()
	{
		$this->load->view('inicio');
	}
	public function Novedades()
	{
		$this->load->view('Novedades');
	}

public function Menu()
	{
		$this->load->view('Menu');
	}
		
public function Delivery()
	{
		$this->load->view('Delivery');
	}

public function Ubicacion()
	{
		$this->load->view('Ubicacion');
	}
public function login ()
   {
	//pregunto o verifico si viene mensaje en post 
	      if ($_POST )
	         {
			 // si entro aqui es por que se envia datos hay que capturarlos 
			 $datos= array (
			 'usuario'=>$this->input->post('usuario'),
			 'clave'=>$this->input->post('clave'),
			 				);
					// pregunto si existe el usuario 
					$resultado=$this->comida_modelo->login($datos);
			// si encontro usuario informo 
			if ($resultado->result())
						{
						//Como el usuario existe creamros una sesion para mantener los datos de la persona en memoria 
						// extraigo su ID 
						$idcliente=$resultado->row()->IdCliente;
						// guardo la sesion 
						$this->session->set_userdata('IdCliente',$idcliente);
						$this->load->view('Si');
						
						}
							else{
								$this->load->view('No');
							     }
		     }
	
	}
	
	

public function registro ()
   {
	//pregunto o verifico si viene mensaje en post 
	      if ($_POST )
	         {
			 // si entro aqui es por que se envia datos hay que capturarlos 
			 $datos= array (
			 'Nombre'=>$this->input->post('Nombre'),
			 'Apellido'=>$this->input->post('Apellido'),
			 'Direccion'=>$this->input->post('Direccion'),
			 'Telefono'=>$this->input->post('Telefono'),
			 'Facebook'=>$this->input->post('Facebook'),
			 
			 				);
					// registro al usuario
					
					$this->comida_modelo->registrar($datos);
					
						$this->load->view('informes');
						
						
		     }
	
	}

}


