<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hola extends CI_Controller {


	public function index(){
		$this->load->view('hola');
	}

	//paso de valores por el metodo a la vista 
	public function saludo(){
		$datos["titulo"]="titulo desde el controlador";
		$this->load->view('saludo', $datos);
	}


	//otra forma de pasar valores desde un metodo a la vista 
	public function otro(){
		$titulo="titulo para vista otro";
		$post="texto post";
		$array=array("uno", "dos", "tres");
		$this->load->view('otro', compact('titulo','post', 'array'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */