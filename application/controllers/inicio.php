<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index()
    {
       $datos['titulo'] = 'Curso Codeigniter';
       $this->load->view('headfoot/header', $datos); //Cargar vista con datos
            $this->load->view('body/menu');
            $this->load->view('body/slider');
            $this->load->view('body/lorem1'); 
            $this->load->view('body/lorem2');
       $this->load->view('headfoot/footer'); // Cargar vista
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