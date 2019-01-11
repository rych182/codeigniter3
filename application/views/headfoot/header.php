<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

	<head>
        <title><? echo $titulo?></title>
        <meta charset="utf-8">
		<meta name="description" content="Curso de Codeigniter">
		<meta name="keywords" content="Descripción de sitio">
		<meta name="author" content="Hugui Dugui">

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.bxslider.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" >

		<!-- <?php //echo base_url();?> es igual a poner http://localhost/codeigniter/ -->
		<!-- 
			 La configuración de  base_url es importante, ya que solo cambias la url 
			 para cuando mueves tu proyecto a un servidor y todas las url funcionarán 
		-->
		<!-- Así se llamará a cualquier recurso de assets sin necesidad de poner rutas completas -->

		<!-- De este modo ya tenemos cargados todos los archivos necesarios para el sitio web -->
	</head>

	<body>