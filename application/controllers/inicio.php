<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
        $datos['titulo'] = 'Curso Codeigniter';
        $this->load->view('headfoot/header', $datos); //Cargar vista con datos para todas las vistas
        $this->load->view('body/menu'); // Cargar vista
        $this->load->view('body/slider'); // Cargar vista
        $this->load->view('body/lorem1'); // Cargar vista
        $this->load->view('body/lorem2'); // Cargar vista
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
    public function datos()
    {
        $this->load->model("Datos_model"); // Carga el modelo

        $datos['titulo'] = 'Curso Codeigniter';
        $datos['usuarios'] = $this->Datos_model->obtenerTodos();
        $datos['usuarioPorId'] = $this->Datos_model->obtenerPorId(1);
        $datos['total'] = $this->Datos_model->totalRegistros();

        $this->load->view('headfoot/header', $datos);
            $this->load->view('body/menu');
            $this->load->view('body/datos');
        $this->load->view('headfoot/footer');
    }
}
