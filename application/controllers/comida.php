

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
}

