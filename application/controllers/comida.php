

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
		
public function Contacto()
	{
		$this->load->view('Contacto');
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
				$datos2= array (
			 'Usuario'=>$this->input->post('Usuario'),
			 'Clave'=>$this->input->post('Clave'),
			
			 
			 				);
					// registro al usuario
					
					$this->comida_modelo->registrar($datos,$datos2);
					
						$this->load->view('informes');
			 
			 
			 				
						
		     }
	
	}
 public function orden_online ()
 {
 	// Recibo pedidos 
	if ($_POST)
	{
	 	// MEDIANTE EL ID DÈL PRODUCTO TRAIGO SU PRECIO 
		
		$resultado=$this->comida_modelo->traer_precio($this->input->post('Producto'));
		$precio=$resultado->row ()->Precio;
		$datos= array (
			 'Producto'=>$this->input->post('Producto'),
			 'Cantidad'=>1,
			 'Idcliente'=>$this->session->userdata['IdCliente'],
			 // Queda hacer calculo del  precio 
			  'Precio'=>$precio,
			 
			 				);
				$this->comida_modelo->insert_compra($datos);
				redirect("index.php/Comida/orden_online");
	}
	
	
	 
	
	else 
	{
		
	
	   // Verifico si el usuario esta logeado 
	   			if ($this->session->userdata['IdCliente'])
	  		    {
					// Todo venta
				 $datos= array (
			 'Productos'=>$this->comida_modelo->Traer_Productos(),
			
			 
			 				);
				 $this->load->view('Orden_Compra',$datos);
			 
			
			
				
	   		    }
	  			 else
				{
								
						
							$this->load->view('Aviso Login');
							
				}
	}  
 }
}//fin clase 


