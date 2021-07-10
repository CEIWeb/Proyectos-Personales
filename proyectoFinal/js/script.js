	

	// Variables para el menú circular
	var menu = document.querySelector(".menu-centro");
	var iconoCerrar = '<i class="fas fa-times" style="{font-size:30px; color:#E89210;} :hover{font-size:40px}"></i>';
	var iconoAbrir = '<p class="my-0 naranja">MENÚ</p>';

	// Variables para el desplegable

	var contDesplegable = document.querySelector("#contenido-desplegable");
	var desplegable = document.querySelector('#desplegable');
	var iconoDesplegar = document.getElementById('icono-desplegable');
	var iconoContraer = '<i class="fas fa-sort-down"></i>';
	const proteccion = ['<strong>Responsable:</strong> Carmen María Carretero Báez.','<strong>Finalidad:</strong> gestionar la solicitud que realizas a través de este formulario de contacto.','<strong>Legitimación:</strong> tu consentimiento.','<strong>Destinatario:</strong> Los datos que me vas a facilitar a través de este formulario de contacto, van a ser almacenados en los servidores de One.com, mi proveedor de email y hosting, que también cumple con la ley RGPD. Ver política de privacidad de One.com:<a href="https://www.one.com/es/info/politica-de-privacidad" target="blank"> www.one.com/es/info/politica-de-privacidad<a>','<strong>Derechos:</strong> Podrás acceder, rectificar, limitar y suprimir tus datos personales escribiéndome a <a href="mailto:contacto@carmencarreterocei.es" target="blank">contacto@carmencarreterocei.es<a>.'];

	//Funciones para el menú circular

	function abrirMenu(){
		
		menu.innerHTML = iconoCerrar;
		document.querySelector(".menu-perfil").style.cssText = "top: -100px; left: 0px; transform: translate(0%, 0%);";
		document.querySelector(".menu-experiencia").style.cssText = "top: 0px; left: 100px; transform: translate(0%, -50%);";
		document.querySelector(".menu-formacion").style.cssText = "top: 115px; left: 110px; transform: translate(-50%, -50%);";
		document.querySelector(".menu-portfolio").style.cssText = "top: 115px; left: -110px; transform: translate(50%, -50%);";
		document.querySelector(".menu-contacto").style.cssText = "top: 0px; left:-100px; transform: translate(0%, -50%);";
		menu.setAttribute("onclick", "cerrarMenu()");
	}

	function cerrarMenu(){
		
		menu.innerHTML = iconoAbrir;
		document.querySelector(".menu-perfil").style.cssText = "top: 0px; left: 0px; transform: translate(0%, 0%);";
		document.querySelector(".menu-experiencia").style.cssText = "top: 0px; left: 0px; transform: translate(0%, 0%);";
		document.querySelector(".menu-formacion").style.cssText = "top: 0px; left: 0px; transform: translate(0%, 0%);";
		document.querySelector(".menu-portfolio").style.cssText = "top: 0px; left: 0px; transform: translate(0%, 0%);";
		document.querySelector(".menu-contacto").style.cssText = "top: 0px; left:0px; transform: translate(0%, 0%);";
		menu.setAttribute("onclick", "abrirMenu()");

	}

	//Funciones para el desplegable
	function desplegar(){

		iconoDesplegar.classList.replace('fa-caret-right','fa-sort-down');

		proteccion.forEach(elemento=>{

		let parrafo=document.createElement('P');

		parrafo.innerHTML=elemento;

		contDesplegable.append(parrafo);
})
		desplegable.setAttribute("onclick", "contraer()");
										
	}
	function contraer(){
		iconoDesplegar.classList.replace('fa-sort-down','fa-caret-right');

		contDesplegable.innerHTML = '';

		desplegable.setAttribute("onclick", "desplegar()");
	}
	
