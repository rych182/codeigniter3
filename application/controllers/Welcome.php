<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$datos['titulo'] = 'Curso Codeigniter';
    	$this->load->view('headfoot/header', $datos); //Cargar vista con datos
    	$this->load->view('body/menu'); // Cargar vista
		$this->load->view('body/slider');
		$this->load->view('body/lorem1');
		$this->load->view('body/lorem2');
		$this->load->view('headfoot/footer');
	}
	public function nosotros()
	{
		$datos['titulo'] = 'Curso Codeigniter';
        $this->load->view('headfoot/header', $datos);
        $this->load->view('body/menu');
        $this->load->view('body/nosotros');
        $this->load->view('headfoot/footer');
	}
	public function contacto()
	{
		$datos['titulo'] = 'Curso Codeigniter';
        $this->load->view('headfoot/header', $datos);
        $this->load->view('body/menu');
        $this->load->view('body/contacto');
        $this->load->view('headfoot/footer');
	}
}
