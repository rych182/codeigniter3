<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><span>Lorem</span></a>
		</div>
		<div class="navbar-collapse collapse">							
			<div class="menu">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation"  class="active"><a href="index.html">Home</a></li>
					<li role="presentation">
						<!--
							URL = http://localhost/codeigniter/
							nombreContralador = inicio
							nombreMetodo = nosotros

							URL + nombreContralador + nombreMetodo

							http://localhost/codeigniter/inicio/nosotros
						-->
						<a href="<?php echo base_url();?>inicio/nosotros">Nosotros</a>
					</li>
					<li role="presentation">
						<!--
							URL = http://localhost/codeigniter/
							nombreContralador = inicio
							nombreMetodo = contacto

							URL + nombreContralador + nombreMetodo

							http://localhost/codeigniter/inicio/contacto
						-->
						<a href="<?php echo base_url();?>inicio/contacto">Contacto</a>
					</li>
					<!-- AQUÍ CREAMOS UN ITEM EN EL MENÚ -->
	               <li role="presentation">
	                  <a href="<?php echo base_url();?>inicio/datos">Datos BD</a>
	               </li>						
				</ul>
			</div>
		</div>			
	</div>
</nav>