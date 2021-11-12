

<!-- Código PHP para realizar el envío de un mensaje a través del formulario de contacto. -->

<?php

	$errores='';
	$resultado=false;

    if (isset($_POST['enviar'])){

        $receptor = "contacto@carmencarretero.com";

        $asunto = "Contacto desde la Web CV";

        $contenido = filter_var($_POST['mensaje'],FILTER_SANITIZE_STRING);

		$nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
        
		$correo=filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);

        $cabeceras = "MIME-Version: 1.0" . "\r\n";

        $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $cabeceras .= "From: ".$nombre." <".$correo.">" . "\r\n";

        $terminos=isset($_POST['terminos']) ? $_POST['terminos'] : '';

		if (!empty($terminos)) {
            if (empty($nombre)) {
                $errores.='<li>Debes rellenar el campo nombre</li>';                
            }

            if (empty($correo)) {
                $errores.='<li>Debes rellenar el campo correo</li>';                
            }else{
                if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                    $errores.='<li>El formato del correo no es correcto</li>'; 
                }
            }

            if (empty($contenido)) {
                $errores.='<li>Debes rellenar el campo mensaje</li>';
            }

            if (empty($errores)) {
				mail($receptor, $asunto, $contenido, $cabeceras);

                $resultado=true;
            }  		
		
		}
    } 

?>

<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="author" content="Carmen Carretero">

	<meta name="copyright" content="">

	<meta name="contact" content="carmacb@alumnos.cei.es">

	<meta name="description" content="Currículum y portfolio de Carmen María Carretero Báez">

	<meta name="keywords" content="Frontend,Backend,Fullstack,Diseño y desarrollo Web,Network">

	<meta name="robots" content="NoIndex, NoFollow">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">



	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">



	<link rel="icon" type="icon/png" href="favicon.png">



	<title>CV | Carmen María Carretero Báez</title>

</head>

<body>



	<header id="cabecera" class="container-fluid">		
		<nav class="container-fluid d-flex align-items-center">
			<div class="container d-flex justify-content-between">
				<div class="logo col-8 col-sm-6">
					<img src="rsc/img/logoBlanco.png" alt="logo Carmen Carretero">
				</div>
				<div id="hamburguesa" class="position-fixed d-flex justify-content-center align-items-center">
					<i class="fas fa-bars text-light"></i>
				</div>
				<div id="items-menu" class="position-fixed">
					<div id="item-perfil" class="d-flex justify-content-center align-items-center"><a href="#perfil"><i class="fas fa-address-card text-light"></i></a></div>
					<div id="item-experiencia" class="d-flex justify-content-center align-items-center"><a href="#experiencia"><i class="fas fa-briefcase text-light"></i></a></div>
					<div id="item-formacion" class="d-flex justify-content-center align-items-center"><a href="#formacion"><i class="fas fa-book text-light"></i></a></div>
					<div id="item-portfolio" class="d-flex justify-content-center align-items-center"><a href="#portfolio"><i class="fas fa-folder-open text-light"></i></a></div>
					<div id="item-contacto" class="d-flex justify-content-center align-items-center"><a href="#contacto"><i class="fas fa-envelope text-light"></i></a></div>
				</div>
				<div id="overlay" class="position-fixed"></div>
			</div>					
		</nav>
		<div class="container d-flex justify-content-center  justify-content-lg-between flex-wrap">
			<div>
				<img id="imgCabecera" src="rsc/img/imgCabecera.png" alt="Imagen de cabecera">
			</div>			
			<div class="d-flex justify-content-center text-center pt-5">
				<h1><span >Mi nombre es</span><br><span class="naranja"> Carmen Carretero</span><br><span> y Acabas de <br> aterrizar en mi</span><br><span class="naranja"> CV Web</span></h1>
			</div>
			</div>
		</div>
		
	</header>

	<!-- Sección con mis datos y una presentación -->

	<section id="perfil" class="container-fluid px-0 d-flex flex-column justify-content-center align-items-center">

		<div class="margen container">

			<div class="row justify-content-center">

				<div class="titulo-seccion titulo-seccion-responsive px-5 p-sm-5 col col-sm-10 d-flex justify-content-center align-items-center">

					<h2 class="text-center">COMENZARÉ PRESENTÁNDOME COMO ES DEBIDO</h2>

				</div>

			</div>

		</div>

		<div class="container">

			<div class="row">

				<div class="col-lg-5 px-5 px-md-3 d-flex flex-column align-items-center d-lg-block d-md-flex flex-md-row">			

						<div class="mi-foto">

						    <img class="img-fluid radio mb-5 " src="rsc/img/MiFoto.jpg" alt="Carmen María Carretero Báez">

						</div>					

						<div class="ms-md-4 mb-3 mb-md-0">

							<p><strong>Nombre: </strong>Carmen María</p>

							<p><strong>Apellidos: </strong>Carretero Báez</p>

							<p><strong>Email: </strong><a href="mailto:contacto@carmencarretero.com">contacto@carmencarretero.com</a></p>

							<p><strong>Tlf: </strong>652 423 419</p>

							<p><strong>Lugar de residencia: </strong>Huelva</p>

							<p><strong>CV en PDF</strong><a href="rsc/files/CV carmencarretero.pdf" download="CV-CarmenMaríaCarreteroBáez" target="blank"><i id="descarga" class="naranja fas fa-download ms-4"></i></a></p>

						</div>						

				</div>

				<div class="col-lg-7 px-4">

					

						<p>Soy <strong>Ingeniera Técnica en Informática de Sistemas</strong> y durante 9 años he estado trabajando en la industria de las energías renovables por varios países (EEUU, Brasil, México, Pánama...), sobre todo termosolar y fotovoltaica. Mi área de especialización eran los sistemas de control y monitorización, lo que implica en términos generales gestionar redes de comunicaciones, desarrollar software de monitorización, programar automatizaciones (Ej: la regulación automática de un nivel de agua de un tanque) e incluso instalar y configurar estaciones meteorológicas.</p>



						<p>Siempre tuve claro que quería entrar en el mundo del diseño y desarrollo web, que es lo que me interesa y me motiva. Es por esto que en Octubre del 2020 empezé a estudiar un máster en diseño y conceptualización web, ya que lo que había aprendido hace 10 años había quedado obsoleto y necesitaba actualizar mis conocimientos.</p>



						<p>A día de hoy he terminado el máster y ya he empezado a hacer algún trabajo por cuenta propia para seguir aprendiendo y ganar experiencia como <strong> Fullstack</strong>. Ya cuento con una web donde ofrezco mis servicios: <a href="https://carmencarretero.com/" target="blank">www.carmencarretero.com</a></p>



						<p>Mi objetivo de aquí en adelante es seguir mejorando en los lenguajes y frameworks que he aprendido en el máster (HTML, CSS, Bootstrap, JavaScript, PHP y SQL) y aprender algunos nuevos (Tailwind CSS, Laravel, etc) <i class="fas fa-smile-beam naranja"></i>.</p>



						<p>Aunque por ahora trabajo como freelance, estoy abierta a nuevas oportunidades para seguir mejorando en compañía de desarrolladores con más experiencia.</p>



						<p>A partir de aquí os dejo con mi CV y espero que no os resulte muy aburrido.</p>

			

				</div>

			</div>			

		</div>

	</section>

	<!-- Sección con mis habilidades relevantes. A efectos de navegación, esta sección forma parte de mi sección de perfil. -->

	<section id="habilidades" class="container-fluid degradado">

		

		<h2 class="naranja text-center mx-2">ESTAS SON ALGUNAS DE MIS HABILIDADES</h2>

			<div class="container">

			<div class="row">

				<div class="col-lg-6">

					<h3 class="azul-primario text-center">WEB</h3>

					<!--La clase WOW (pertenece a la librería wow.js) que aparece en todas las barras de progreso es lo que hace que la animación se ejecute al hacer scroll-->

					<div class="d-flex justify-content-center justify-content-lg-start mt-5">

						<img class="img-fluid" src="rsc/img/logo-html.png" alt="logo html">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-html"></div>

						</div>

					</div>

					<div class="d-flex justify-content-center justify-content-lg-start mt-4">

						<img class="img-fluid" src="rsc/img/logo-css.png" alt="logo css">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-css"></div>

						</div>

					</div>

					<div class="d-flex justify-content-center justify-content-lg-start mt-4">

						<img class="img-fluid" src="rsc/img/logo-bootstrap.png" alt="logo Bootstrap">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-bs"></div>

						</div>

					</div>

					<div class="d-flex justify-content-center justify-content-lg-start mt-4">

						<img class="img-fluid" src="rsc/img/logo-js.png" alt="logo JavaScript">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-js"></div>

						</div>

					</div>

					<div class="d-flex justify-content-center justify-content-lg-start mt-4">

						<img class="img-fluid" src="rsc/img/logo-php.png" alt="logo PHP">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-php"></div>

						</div>

					</div>

					<div class="d-flex justify-content-center justify-content-lg-start mt-4">

						<img class="img-fluid" src="rsc/img/logo-mysql.png" alt="logo PHP">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-mysql"></div>

						</div>

					</div>

					<div class="d-flex justify-content-center justify-content-lg-start mt-4">

						<img class="img-fluid" src="rsc/img/logo-wordpress.png" alt="logo Wordpress">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-wp"></div>

						</div>

					</div>

					<div class="d-flex justify-content-center justify-content-lg-start mt-4">

						<img class="img-fluid" src="rsc/img/logo-figma.png" alt="logo Figma">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-fig"></div>

						</div>

					</div>

				</div>

				<div class="col-lg-6 mt-5 mt-lg-0">

					<h3 class="azul-primario text-center">REDES E INDUSTRIA</h3>

					<div class="row mx-3 mx-sm-5 mx-lg-0 mt-5">

						<div class="col-3 d-flex justify-content-center align-items-center">

							<img class="img-fluid" src="rsc/img/icono-firewall.png" alt="icono firewall">

						</div>

						<div class="col-9">

							<p class="mt-3">Configuración de Firewalls</p>

						</div>

					</div>

					<div class="row mx-3 mx-sm-5 mx-lg-0">

						<div class="col-3 d-flex justify-content-center align-items-center">

							<img class="img-fluid" src="rsc/img/icono-switch.png" alt="icono switch">

						</div>

						<div class="col-9">

							<p class="mt-3">Configuración de Switches</p>

						</div>

					</div>

					<div class="row mx-3 mx-sm-5 mx-lg-0">

						<div class="col-3 d-flex justify-content-center align-items-center">

							<img class="img-fluid" src="rsc/img/icono-gateway.png" alt="icono gateway">

						</div>

						<div class="col-9">

							<p class="mt-3">Configuración de Concentradores de <br>Datos /Gateways</p>

						</div>

					</div>

					<div class="row mx-3 mx-sm-5 mx-lg-0">

						<div class="col-3 d-flex justify-content-center align-items-center">

							<img class="img-fluid" src="rsc/img/icono-meteo.png" alt="icono meteorológica">

						</div>

						<div class="col-9">

							<p class="mt-3">Instalación y configuración de Estaciones Meteorológicas</p>

						</div>

					</div>

					<div class="row mx-3 mx-sm-5 mx-lg-0">

						<div class="col-3 d-flex justify-content-center align-items-center">

							<img class="img-fluid logo-valmet" src="rsc/img/logo-valmet.png" alt="logo Valmet ">

						</div>

						<div class="col-9">

							<p class="mt-3">Mantenimiento y programación de DCS Valmet (Sistema de Control Distribuido)</p>

						</div>

					</div>

					<div class="row mx-3 mx-sm-5 mx-lg-0">

						<div class="col-3 d-flex justify-content-center align-items-center">

							<img class="img-fluid logo-ignition" src="rsc/img/logo-ignition.png" alt="logo Ignition">

						</div>

						<div class="col-9">

							<p class="mt-3">Creación de software SCADA con Ignition  para el control y monitorización de plantas fotovoltaicas</p>

						</div>

					</div>

					<div class="row mx-3 mx-sm-5 mx-lg-0">

						<div class="col-3 d-flex justify-content-center align-items-center">

							<img class="img-fluid icono-protocolos" src="rsc/img/icono-protocolos.png" alt="icono protocolos">

						</div>

						<div class="col-9">

							<p class="mt-3">Integración de dispositivos con protocolos de comunicación Modbus TCP, Modbus RTU y OPC UA.</p>

						</div>

					</div>
					<!-- <h3 class="azul-primario text-center mt-4">PROTOTIPADO</h3>
					<div class="d-flex justify-content-center justify-content-lg-start mt-4">

						<img class="img-fluid" src="rsc/img/logo-figma.png" alt="logo Figma">

						<div class="progress mt-3 ms-3">

	  						<div class="wow progress-value-fig"></div>

						</div> -->

					</div>
				</div>				

			</div>

			<div class="row mt-5">

				<div class="col">

					<h3 class="azul-primario text-center">OTRAS COMPETENCIAS</h3>

				</div>				

			</div>

			<div class="row mx-3 mx-lg-0 mt-5">

				<div class="col-lg-4 d-flex align-items-center">

					<img class="img-fluid iconos-competencias" src="rsc/img/metodologias.png" alt="icono metodologías">

					<p class="mt-3 ms-3">Metodologías ágiles: Design Thinking, Design Sprint y Kanban.</p>				

				</div>

				<div class="col-lg-4 d-flex align-items-center">

					<img class="img-fluid iconos-competencias" src="rsc/img/proyectos.png" alt="icono proyectos">

					<p class="mt-3 ms-3">Gestión de Proyectos.</p>				

				</div>

				<div class="col-lg-4 d-flex align-items-center">

					<img class="img-fluid iconos-competencias" src="rsc/img/equipo.png" alt="icono competencias">

					<p class="mt-3 ms-3">Trabajo en equipo.</p>				

				</div>				

			</div>			

		</div>



	</section>



	<!-- Sección para mostrar mi experiencia laboral -->

	<section id="experiencia" class="container-fluid px-0 d-flex flex-column justify-content-center align-items-center">

		<div class="margen container">

			<div class="row justify-content-center">

				<div class="titulo-seccion p-5 col col-sm-10 d-flex justify-content-center align-items-center">

					<h2 class="text-center">SEGUIMOS CON MI EXPERIENCIA</h2>

				</div>

			</div>

		</div>		

		<div class="container px-4">

			<!-- Carmen Carretero -->

			<div class="row d-flex justify-content-center">

				<div class="order-2 order-md-1 col-md-7">

					<h3>Desarrolladora Web Freelance</h3>

					<h4>Carmen Carretero</h4>

					<p class="parrafo-grande mb-1">Desde Enero - 2021 </p>

					<p class="parrafo-grande mt-1">Huelva</p>

					<p>Diseño y desarrollo de páginas webs para emprendedores y pequeñas empresas haciendo uso del CMS Wordpress y con tecnologías como HTML, CSS, Bootstrap,Javascript, PHP y MySQL.</p>

					<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

					<div class="d-flex flex-wrap">

						<div class="skill bg-verde parrafo-grande">

						Gestión de Proyectos

						</div>

						<div class="skill bg-naranja parrafo-grande">

						Wordpress

						</div>

						<div class="skill bg-naranja parrafo-grande">

						Figma

						</div>

						<div class="skill bg-naranja parrafo-grande">

						HTML

						</div>

						<div class="skill bg-naranja parrafo-grande">

						CSS

						</div>

						<div class="skill bg-naranja parrafo-grande">

						Booststrap

						</div>

						<div class="skill bg-naranja parrafo-grande">

						JavaScript

						</div>

						<div class="skill bg-naranja parrafo-grande">

						PHP

						</div>
						<div class="skill bg-naranja parrafo-grande">

						MySQL

						</div>

					</div>

				</div>

				<div class="logo-carmen order-1 order-md-2 mb-5 mb-md-0 col-md-5 d-flex justify-content-center align-items-center">

					<div>

						<img class="img-fluid" src="rsc/img/Carmen Carretero Logo.png" alt="logo Carmen Carretero">

					</div>			

				</div>							

			</div>

			<hr class="my-5">

			<!-- Soltel -->

			<div class="row d-flex justify-content-center">

				<div class="logo-soltel mb-5 mb-md-0 col-md-5 d-flex justify-content-center align-items-center">

					<div>

						<img class="img-fluid" src="rsc/img/soltel.png" alt="logo Soltel">

					</div>

				</div>				

				<div class="col-md-7">

					<h3>Consultor de proyectos de DCS (Distributed Control System)</h3>

					<h4>Soltel IT Solutions</h4>

					<p class="parrafo-grande mb-1">Octubre - 2018 a Diciembre - 2020</p>

					<p class="parrafo-grande mt-1">Sevilla</p>

					<p>Gestión, coordinación y supervisión de mejoras y optimización, a nivel de hardware y software, de los Sistemas de Control y Monitorización de los activos del cliente (Atlantica Yield); entre ellos plantas de energía Termosolar, Eólicas, Fotovoltaicas, Cogeneración, Líneas de Transmisión, Desaladoras, etc.</p>

					<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

					<div class="d-flex flex-wrap">

						<div class="skill bg-verde parrafo-grande">

						Gestión de Proyectos

						</div>

						<div class="skill bg-verde parrafo-grande">

						Consultoría

						</div>

						<div class="skill bg-naranja parrafo-grande">

						SCADA

						</div>

						<div class="skill bg-naranja parrafo-grande">

						DCS

						</div>				

					</div>	

				</div>

				<hr class="my-5">		

			</div>



			<!-- PVH -->

			<div class="row justify-content-center">

				<div class="order-2 order-md-1 col-md-7">

					<div class="row">

						<div class="col">

							<h3>Jefe de proyectos SCADA</h3>

							<h4>PVH - PV Hardware Solutions</h4>

							<p class="parrafo-grande mb-1">Noviembre - 2017 a Octubre - 2018</p>

							<p class="parrafo-grande mt-1">Alcobendas (Madrid)</p>

							<p>Coordinación y diseño de proyectos para plantas fotovoltaicas desde la fase inicial: diseño de arquitectura de red, gestión de materiales (BOM, Invoice, Packing list, etc), trato con el cliente para la obtención de requisitos, desarrollo de documentación técnica del proyecto y puesta en marcha de hardware y software.</p>

							<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

							<div class="d-flex flex-wrap">

								<div class="skill bg-verde parrafo-grande">

								Gestión de Proyectos

								</div>

								<div class="skill bg-verde parrafo-grande">

								Generación de Documentación

								</div>

								<div class="skill bg-naranja parrafo-grande">

								SCADA

								</div>

								<div class="skill bg-naranja parrafo-grande">

								Redes

								</div>	

								<div class="skill bg-naranja parrafo-grande">

								Estaciones Meteorológicas

								</div>			

						</div>						

					</div>

					<div class="row mt-5">

						<div class="col">

							<h3>Ingeniero de proyectos SCADA</h3>

							<h4>PVH - PV Hardware Solutions</h4>

							<p class="parrafo-grande mb-1">Enero - 2016 a Noviembre - 2017</p>

							<p class="parrafo-grande mt-1">Alcobendas (Madrid)</p>

							<p>Desarrollo de software, soporte técnico y mantenimiento de SCADAS (Ignition), configuración de firewalls (Fortinet y Hirschmann), switches(Advantech y Hirschmann), conversores de medio (Moxa), concentradores de datos (SEL), gateways (Netbiter), etc. Mantenimiento preventivo y puesta en marcha de los sistemas in situ y en remoto. Montaje, conexionado y configuración de estaciones meteorológicas. Estos trabajos se realizaron en diferentes países: USA, México, Sudáfrica, Brasil y Panamá.</p>

							<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

							<div class="d-flex flex-wrap">

								<div class="skill bg-naranja parrafo-grande">

								SCADA

								</div>

								<div class="skill bg-naranja parrafo-grande">

								Redes

								</div>	

								<div class="skill bg-naranja parrafo-grande">

								Estaciones Meteorológicas

								</div>

								<div class="skill bg-naranja parrafo-grande">

								Concentradores de Datos

								</div>

								<div class="skill bg-naranja parrafo-grande">

								Soporte Técnico

								</div>			

							</div>

						</div>						

					</div>			

						

				</div>

					

				</div>

				<div class="logo-pvh order- order-md-2 mb-5 mb-md-0 col-md-5 d-flex justify-content-center align-items-center">

					<div>

						<img class="img-fluid" src="rsc/img/pvh.png" alt="logo PVH">

					</div>	

				</div>

					

			</div>

			<hr class="my-5">

			<!-- Abengoa -->

			<div class="row justify-content-center">

				<div class="logo-abengoa mb-5 mb-md-0 col-md-5 d-flex justify-content-center align-items-center">

					<div>

						<img class="img-fluid" src="rsc/img/Abengoa.png" alt="logo Abengoa">

					</div>

				</div>

				<div class="col-md-7">

					<div class="row">

						<div class="col">

							<h3>Ingeniero de Control y Comunicaciones</h3>

							<h4>Abengoa</h4>

							<p class="parrafo-grande mb-1">Diciembre - 2014 a Diciembre - 2015</p>

							<p class="parrafo-grande mt-1">Gila Bend, Arizona (Estados Unidos)</p>

							<p>Revisión, implementación e implantación de lógica de control tanto para sistemas ya instalados como para modificaciones de diseño, elaboración de procedimientos y descripciones funcionales del sistema, administración de la aplicación PI de Osisoft (Dar de alta usuarios, crear puntos, ecuaciones, diseño de pantallas con ProcessBook, etc), gestión de repuestos, mantenimiento y resolución de incidencias en la red de comunicaciones del sistema, colaboración con el personal de control e instrumentación para detectar y resolver problemas relacionados con instrumentos instalados en campo, participación en las mejoras de planta, revisión del cableado de la red de comunicaciones y revisión de listados de instrumentos y sus conexiones.</p>

							<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

							<div class="d-flex flex-wrap">

								<div class="skill bg-verde parrafo-grande">

								Gestión de Mantenimiento

								</div>

								<div class="skill bg-naranja parrafo-grande">

								DCS

								</div>

								<div class="skill bg-naranja parrafo-grande">

								PI Osisoft

								</div>

								<div class="skill bg-naranja parrafo-grande">

								Redes

								</div>	

								<div class="skill bg-naranja parrafo-grande">

								Automatización y Control

								</div>		

						</div>					

					</div>

					<div class="row mt-5">

						<div class="col">

							<h3>Operador de sala de control</h3>

							<h4>Abengoa</h4>

							<p class="parrafo-grande mb-1">Enero - 2014 a Noviembre - 2014</p>

							<p class="parrafo-grande mt-1">Logrosán (Cáceres)</p>

							<p>Arranque y parada de planta, supervisión de las condiciones de operación actuando ante los posibles problemas,análisis de las incidencias, etc.</p>

							<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

							<div class="d-flex flex-wrap">

								<div class="skill bg-naranja parrafo-grande">

								Operación de Planta

								</div>					

							</div>

						</div>						

					</div>

					<div class="row mt-5">

						<div class="col">

							<h3>Técnico de Control y Comunicaciones</h3>

							<h4>Abengoa</h4>

							<p class="parrafo-grande mb-1">Marzo - 2012 a Enero - 2014</p>

							<p class="parrafo-grande mt-1">Logrosán (Cáceres)</p>

							<p>Revisión, modificación, corrección y nueva implementación de la lógica de control automático de la planta, análisis de incidencias y propuesta de soluciones para resolverlas. Soporte técnico en todo lo referente a las comunicaciones ( red industrial) y al software que controla la planta, colaboración con el departamento de control e instrumentación para detectar y resolver problemas relacionados con instrumentos instalados en campo. Descarga de datos para informes de producción. Administración de la aplicación PI de Osisoft (Dar de alta usuarios, crear puntos, ecuaciones, diseño de pantallas con ProcessBook, etc). Revisión del cableado de la red de comunicaciones y revisión de listados de instrumentos y sus conexiones.</p>

							<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

							<div class="d-flex flex-wrap">		

								<div class="skill bg-naranja parrafo-grande">

								DCS

								</div>

								<div class="skill bg-naranja parrafo-grande">

								PI Osisoft

								</div>

								<div class="skill bg-naranja parrafo-grande">

								Automatización y Control

								</div>

								<div class="skill bg-naranja parrafo-grande">

								Redes

								</div>

							</div>						

						</div>

					</div>					

				</div>

			</div>

				<hr class="my-5">				

			</div>

			<!-- Nonotel -->

			<div class="row d-flex justify-content-center">

				<div class="order-2 order-md-1 col-md-7">

					<h3>Programador de aplicaciones informáticas</h3>

					<h4>Nonotel - Proveedor voz IP</h4>

					<p class="parrafo-grande mb-1">Diciembre - 2011 a Febrero - 2012 </p>

					<p class="parrafo-grande mt-1">Huelva</p>

					<p>Desarrollo de paginas web basadas en los lenguajes: mysql, php, html, css y jquery; y usando el CMS Wordpress.</p>

					<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

					<div class="d-flex flex-wrap">

						<div class="skill bg-naranja parrafo-grande">

						Desarrollo Web

						</div>

						<div class="skill bg-naranja parrafo-grande">

						HTML

						</div>

						<div class="skill bg-naranja parrafo-grande">

						CSS

						</div>

						<div class="skill bg-naranja parrafo-grande">

						BBDD

						</div>

						<div class="skill bg-naranja parrafo-grande">

						PHP

						</div>

						<div class="skill bg-naranja parrafo-grande">

						Wordpress

						</div>					

					</div>

				</div>

				<div class="logo-nonotel mb-5 mb-md-0 col-md-5 order-1 order-md-2 d-flex justify-content-center align-items-center">

					<div>

						<img class="img-fluid" src="rsc/img/nonotel.png" alt="logo Nonotel">

					</div>		

				</div>

						

			</div>

			<hr class="my-5">	

			<!-- Huelva Información -->

			<div class="row d-flex justify-content-center">

				<div class="logo-huelva mb-5 mb-md-0 col-md-5 d-flex justify-content-center align-items-center">

					<div>

						<img class="img-fluid" src="rsc/img/huelva información.png" alt="logo Huelva Información">

					</div>		 	

				</div>				

				<div class="col-md-7">

					<h3>Administrador de Sistemas Distribuidos</h3>

					<h4>Huelva Información</h4>

					<p class="parrafo-grande mb-1">Julio - 2011 a Septiembre - 2011</p>

					<p class="parrafo-grande mt-1">Huelva</p>

					<p>Actualización de páginas web creadas con Dreamweaver, comprobar que los servidores y los servicios que corren en él funcionen correctamente y solucionar problemas en caso de fallos en el sistema, comprobar que las copias de seguridad se realizan correctamente, solucionar problemas informáticos al resto de empleados, mantenimiento y reparación de equipos, etc.</p>

					<p class="parrafo-grande">Habilidades aplicadas al puesto:</p>

					<div class="d-flex flex-wrap">					<div class="skill bg-naranja parrafo-grande">

						Dreamweaver

						</div>

						<div class="skill bg-naranja parrafo-grande">

						Soporte Informático

						</div>				

					</div>	

				</div>					

			</div>		

		</div>	



	</section>



	<!-- Sección para indicar mi formación -->

	<section id="formacion" class="container-fluid px-0 d-flex flex-column justify-content-center align-items-center">

		<div class="margen container">

			<div class="row justify-content-center">

				<div class="titulo-seccion p-5 col col-sm-10 d-flex justify-content-center align-items-center">

					<h2 class="text-center">MI FORMACIÓN</h2>

				</div>

			</div>

		</div>

		<div class="container-fluid degradado">

			<div class="container">

				<div class="row">

					<!-- Formación Reglada -->

					<div class="col-lg-6">

						<div class="d-flex ms-3 align-items-center justify-content-center justify-content-lg-start">

							<img src="rsc/img/formacion-reglada.png" alt="Formación Reglada">

							<h3 class="azul-primario ms-3">FORMACIÓN REGLADA</h3>

						</div>

						<div class="row mt-5">

							<div class="col-3 d-flex justify-content-center align-items-center">

								<img src="rsc/img/udima.png" alt="logo Udima">

							</div>

							<div class="col-9">

								<h4>Máster en Diseño Web</h4>

								<p class="mb-1 parrafo-grande">Universidad a Distancia de Madrid</p>

								<p class="parrafo-grande">Cursando actualmente</p>

							</div>

						</div>	

						<div class="row mt-3">

							<div class="col-3 d-flex justify-content-center align-items-center">

								<img src="rsc/img/uhu.png" alt="logo UHU">

							</div>

							<div class="col-9">

								<h4>Ingeniería Técnica en Informática de Sistemas</h4>

								<p class="mb-1 parrafo-grande">Escuela Superior de Ingeniería (Huelva)</p>

								<p class="parrafo-grande">2011</p>

							</div>

						</div>				

						

					</div>

					<!-- Másters -->

					<div class="col-lg-6 mt-5 mt-lg-0">

						<div class="d-flex ms-3 align-items-center justify-content-center justify-content-lg-start">

							<img src="rsc/img/masters.png" alt="Másters">

							<h3 class="azul-primario ms-3">MÁSTERS</h3>

						</div>

						<div class="row mt-5">

							<div class="col-3 d-flex justify-content-center align-items-center">

								<img src="rsc/img/cei.png" alt="logo CEI">

							</div>

							<div class="col-9">

								<h4>Desarrollo y Conceptualización Web</h4>

								<p class="mb-1 parrafo-grande">Escuela de Diseño y Marketing</p>

								<p class="parrafo-grande">Cursando actualmente</p>

							</div>

						</div>	

						<div class="row mt-3">

							<div class="col-3 d-flex justify-content-center align-items-center">

								<img src="rsc/img/junta de andalucía.png" alt="logo Junta de Andalucía">

							</div>

							<div class="col-9">

								<h4>Programación de Aplicaciones con C++, PHP, HTML, CSS y MySQL</h4>

								<p class="mb-1 parrafo-grande">Junta de Andalucía</p>

								<p class="parrafo-grande">2011</p>

							</div>

						</div>

					</div>				

				</div>

				<div class="row mt-4">

					<div class="col-lg-6 mt-3 mt-lg-0">

						<div class="row">

							<!-- Certificaciones -->

							<div class="col">

								<div class="d-flex ms-3 align-items-center justify-content-center justify-content-lg-start">

									<img src="rsc/img/certificaciones.png" alt="Certificaciones">

									<h3 class="azul-primario ms-3">CERTIFICACIONES</h3>

								</div>

								<div class="row mt-5">

									<div class="col-3 d-flex justify-content-center align-items-center">

										<img src="rsc/img/trinity.png" alt="logo Trinity College London">

									</div>

									<div class="col-9">

										<h4>Trinity ISE II (B2) de Inglés</h4>

										<p class="mb-1 parrafo-grande">Trinity College London</p>

										<p class="parrafo-grande">2020</p>

									</div>

								</div>	

								<div class="row mt-3">

									<div class="col-3 d-flex justify-content-center align-items-center">

										<img src="rsc/img/cisco.png" alt="logo Cisco">

									</div>

									<div class="col-9">

										<h4>CCNA 1</h4>

										<p class="mb-1 parrafo-grande">Cisco</p>

										<p class="parrafo-grande">2010</p>

									</div>

								</div>

							</div>

						</div>

						<div class="row mt-4">

							<!-- Idiomas -->

							<div class="col">

								<div class="d-flex ms-3 align-items-center justify-content-center justify-content-lg-start">

									<img src="rsc/img/idiomas.png" alt="Idiomas">

									<h3 class="azul-primario ms-3">IDIOMAS</h3>

								</div>

								<div class="row mt-5">

									<div class="col-3 d-flex justify-content-center align-items-center">

										<img src="rsc/img/multidiomas.png" alt="logo Multidiomas">

									</div>

									<div class="col-9">

										<h4>Certificado de nivel C1 de Inglés</h4>

										<p class="mb-1 parrafo-grande">Multidiomas language school</p>

										<p class="parrafo-grande">2021</p>

									</div>

								</div>

							</div>

						</div>						

					</div>

					<!-- Cursos -->

					<div class="col-lg-6 mt-5 mt-lg-0">

						<div class="d-flex ms-3 align-items-center justify-content-center justify-content-lg-start">

							<img src="rsc/img/cursos.png" alt="Cursos">

							<h3 class="azul-primario ms-3">CURSOS</h3>

						</div>

						<div class="row mt-5">

							<div class="col-3 d-flex justify-content-center align-items-center">

								<img src="rsc/img/inkor.png" alt="logo Inkor">

							</div>

							<div class="col-9">

								<h4>Business Intelligence</h4>

								<p class="mb-1 parrafo-grande">Inkor</p>

								<p class="parrafo-grande">2020</p>

							</div>

						</div>	

						<div class="row mt-3">

							<div class="col-3 d-flex justify-content-center align-items-center">

								<img src="rsc/img/valmet.png" alt="logo Valmet">

							</div>

							<div class="col-9">

								<h4>Mantenimiento DCS Valmet DNA</h4>

								<p class="mb-1 parrafo-grande">Telvent</p>

								<p class="parrafo-grande">2013</p>

							</div>

						</div>

						<div class="row mt-3">

							<div class="col-3 d-flex justify-content-center align-items-center">

								<img src="rsc/img/tiempoReal.png" alt="logo Tiempo Real SA">

							</div>

							<div class="col-9">

								<h4>Instrumentación y Control de Procesos</h4>

								<p class="mb-1 parrafo-grande">TiempoReal S.A</p>

								<p class="parrafo-grande">2013</p>

							</div>

						</div>					

						<div class="row mt-3">

							<div class="col-3 d-flex justify-content-center align-items-center">

								<img src="rsc/img/PI.png" alt="logo Osisoft">

							</div>

							<div class="col-9">

								<h4>Administración PI de Osisoft</h4>

								<p class="mb-1 parrafo-grande">Telvent</p>

								<p class="parrafo-grande">2013</p>

							</div>

						</div>

					</div>					

				</div>

			</div>

		</div>

	</section>



	<!-- Sección en la que se muestra mi portfolio en un carousel -->

	<section id="portfolio" class="container-fluid px-0 d-flex flex-column justify-content-center align-items-center">

		<div class="margen container">

			<div class="row justify-content-center">

				<div class="titulo-seccion titulo-seccion-responsive px-5 p-sm-5 col col-sm-10 d-flex justify-content-center align-items-center">

					<h2 class="text-center">ESTOS SON ALGUNOS DE MIS TRABAJOS</h2>

				</div>

			</div>

		</div>

		<div class="container-fluid bg-portfolio">

		<div class="container">

			<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">

				<div class="carousel-indicators">

					 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

					 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>				

				</div>

				 <div class="carousel-inner">

					 <div class="carousel-item active">

					   	<div class="container">

						    <div class="row margen-portfolio">

						    	<div class="col-lg-5 pb-2 pb-md-0 ps-md-5 d-flex flex-column justify-content-center">

						    		<h3 class="azul-primario">Servicios de Diseño Web e Imagen de Marca</h3>

						    		<p class="azul-primario parrafo-grande">Wordpress</p>

						    		<a class="azul-primario pb-4 pb-md-0" href="https://carmencarretero.com" target="blank">www.carmencarretero.com</a>

						    	</div>

						    	<div class="col-lg-7 d-flex justify-content-center">

						    		<img src="rsc/img/portfolioWebCarmenTrans.png" class="img-fluid foto-portfolio" alt="Portfolio Carmencarretero.com">

						    	</div>

						    </div>

					     </div>

					  </div>					  

					    <div class="carousel-item">

					   		<div class="container">

						    	<div class="row margen-portfolio">

						    		<div class="col-lg-5 ps-md-5 d-flex flex-column justify-content-center">

						    			<h3 class="azul-primario">Currículum y Portfolio Web</h3>

						    			<p class="azul-primario parrafo-grande">Bootstrap, HTML, CSS y JavaScript</p>

						    		    <a class="azul-primario" href="https://cv.carmencarretero.com" target="blank">www.CV.carmencarretero.com</a>

						    	    	<a class="azul-primario" href="https://github.com/CEIWeb/Proyectos-Personales/tree/main/proyectoFinal" target="blank">Ver código</a>

						    		</div>

						    		<div class="col-lg-7 d-flex justify-content-center">

						    			<img src="rsc/img/portfolioCVCarmenTrans.png" class="img-fluid foto-portfolio" alt="Portfolio CV Carmen Carretero">

						    		</div>

						    	</div>

					     	</div>

					  </div>

					 </div>

					 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">

					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

					    <span class="visually-hidden">Previous</span>

					 </button>

					 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">

					    <span class="carousel-control-next-icon" aria-hidden="true"></span>

					    <span class="visually-hidden">Next</span>

					 </button>

			</div>

		</div>

		</div>

	</section>



	<!-- Sección para contactar conmigo -->

	<section id="contacto" class="container-fluid px-0 d-flex flex-column justify-content-center align-items-center">

		<div class="margen container">

			<div class="row justify-content-center">

				<div class="titulo-seccion titulo-seccion-responsive px-5 p-sm-5 col col-sm-10 d-flex justify-content-center align-items-center">

					<h2 class="text-center">CONTACTA CONMIGO</h2>

				</div>

			</div>

			<div class="row mt-5 justify-content-center">

				<div class="col-10 col-sm-8 col-lg-6">

					<p class="text-center">Para terminar dejo aquí un formulario de contacto por si necesitas solicitar más información o hablar conmigo.  También puedes hacerlo enviándome un correo a esta dirección: <a href="mailto:contacto@carmencarretero.com">contacto@carmencarretero.com</a></p> 

				</div>

			</div>

			<div class="row mt-5 justify-content-center">

				<div class="col col-sm-11 col-md-10 col-lg-8 d-flex flex-column">

					<form id="form-contacto" class="d-flex flex-column p-4 p-sm-5" name="formulario" action="" method="POST">

						<input class="mb-4 ps-2" type="text" name="nombre" value="" placeholder="Nombre" required maxlength="140" minlength="2">

						<input class="mb-4 ps-2" type="email" name="correo" value="" placeholder="correoElectronico@ejemplo.com" required>

						<textarea class="mb-4 ps-2" name="mensaje" placeholder="Cuéntame" cols="100" rows="10" required=""></textarea>
						<?php if(!empty($errores)): ?>

						<div><ul><?php echo $errores?></ul></div>

						<?php endif ?> 

						<?php if ($resultado):?>
						<div><p>El formulario se envió correctamente</p></div>

						<?php endif ?> 
						<div class="mb-4 d-flex">

							<input type="checkbox" name="confirmar" id="terminos" value="si"  required><label class="ms-3" for="terminos">He leido y acepto la <a href="https://carmencarretero.com/textos-legales" target="blank">Política de Privacidad</a>.</label>

						</div>

						<input id="btn-enviar" class="align-self-center mb-4" type="submit" name="enviar" value="Enviar">	

						<div id="desplegable" class="d-flex align-items-center" onclick="desplegar()">

							<i id="icono-desplegable" class="fas fa-caret-right"></i>

							<p class="ms-2 mb-0">Información básica sobre <strong>Protección de Datos</strong></p>

						</div>

						<div id="contenido-desplegable" class="ms-3 mt-3">

						</div>	

					</form>						  

				</div>

			</div>

		</div>

	</section>



	<footer class="container-fluid">

		<div class="container">

			<div class="row">

				<div class="col-md-11 py-3 d-flex align-items-center justify-content-center justify-content-md-center flex-wrap">

					<p class="my-0 me-2">Copyright &copy 2021 Carmen Carretero</p>

					<a class="me-2" href="https://carmencarretero.com/politica-de-cookies-ue" target="blank">Política de Cookies |</a>

					<a href="https://carmencarretero.com/textos-legales" target="blank">Política de Privacidad</a>

				</div>

				<div class="col-md-1 d-flex align-items-center justify-content-center justify-content-md-end">			

						<a href="https://linkedin.com/in/carmen-maría-carretero-báez-15217448" target="blank"><i class="fab fa-linkedin"></i></a>

				</div>

			</div>

		</div>			

	</footer>



	<!-- Botón flotante para poder volver al inicio sin hacer scroll -->

	<a href="#cabecera"><div id="arriba" class="position-fixed bottom-0 end-0 translate-middle d-flex align-items-center justify-content-center"><i class="fas fa-chevron-up"></i></div></a>



	<!-- Librería JS de Bootstrap -->

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>



	<!-- Librería para que las animaciones de CSS se ejecuten al hacer Scroll -->

	<script src="js/wow.min.js"></script>

    <script>

         new WOW().init();

    </script>



	<script type="text/javascript" src="js/script.js"></script>



</body>

</html>