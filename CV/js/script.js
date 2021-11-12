	
window.addEventListener('load',()=>{

	//Recogida elementos del DOM

	const hamburguesa=document.querySelector('#hamburguesa');
	const itemsMenu=document.querySelector('#items-menu');
	const itemPerfil=document.querySelector('#item-perfil');
	const itemExperiencia=document.querySelector('#item-experiencia');
	const itemFormacion=document.querySelector('#item-formacion');
	const itemPortfolio=document.querySelector('#item-portfolio');
	const itemContacto=document.querySelector('#item-contacto');
	const overlay=document.querySelector('#overlay');
	

	//Variables

	let abierto=false;

	// Variables para el menú circular

	var menu = document.querySelector(".menu-centro");

	var iconoCerrar = '<i class="fas fa-times" style="{font-size:30px; color:#E89210;} :hover{font-size:40px}"></i>';

	var iconoAbrir = '<p class="my-0 naranja">MENÚ</p>';



	// Variables para el desplegable



	var contDesplegable = document.querySelector("#contenido-desplegable");

	var desplegable = document.querySelector('#desplegable');

	var iconoDesplegar = document.getElementById('icono-desplegable');

	var iconoContraer = '<i class="fas fa-sort-down"></i>';

	const proteccion = ['<strong>Responsable:</strong> Carmen María Carretero Báez.','<strong>Finalidad:</strong> gestionar la solicitud que realizas a través de este formulario de contacto.','<strong>Legitimación:</strong> tu consentimiento.','<strong>Destinatario:</strong> Los datos que me vas a facilitar a través de este formulario de contacto, van a ser almacenados en los servidores de Webempresa.com, mi proveedor de email y hosting, que también cumple con la ley RGPD. Ver política de privacidad de Webempresa.com:<a href="https://www.webempresa.com/aviso-legal.html" target="blank"> www.webempresa.com/aviso-legal<a>','<strong>Derechos:</strong> Podrás acceder, rectificar, limitar y suprimir tus datos personales escribiéndome a <a href="mailto:contacto@carmencarretero.com" target="blank">contacto@carmencarretero.com<a>.'];

	//Eventos

	hamburguesa.addEventListener('click',()=>{
		if(!abierto){
			abrirMenu();
			abierto=true;
		}else{
			cerrarMenu();
			abierto=false;
		}
	})

	//Funciones para el menú circular

 function abrirMenu(){
     
	itemsMenu.style.cssText='display:block;'
	hamburguesa.style.cssText="transform: translate(50%, -50%);transition: 1s;";
	hamburguesa.innerHTML='<i class="fas fa-times text-light"></i>';
	
	itemPerfil.style.cssText="top: 0%; right:0%; transform: translate(-150px, -10px)";

	itemExperiencia.style.cssText="top: 0%; right:0%; transform: translate(-130px, 45px)";

	itemFormacion.style.cssText="top: 0%; right:0%; transform: translate(-100px, 95px)";

	itemPortfolio.style.cssText="top: 0%; right:0%; transform: translate(-50px, 130px)";

	itemContacto.style.cssText="top: 0%; right:0%; transform: translate(10px, 150px)";

	overlay.style.cssText="width:150%; height:150%";
 }

 function cerrarMenu(){
	hamburguesa.style.cssText="transform: translate(0%, 0%);transition: 1s;";
	hamburguesa.innerHTML='<i class="fas fa-bars text-light"></i>';

	itemPerfil.style.cssText="top: 0%; right:0%; transform: translate(0%,0%)";

	itemExperiencia.style.cssText="top: 0%; right:0%; transform: translate(0%,0%)";

	itemFormacion.style.cssText="top: 0%; right:0%; transform: translate(0%,0%)";

	itemPortfolio.style.cssText="top: 0%; right:0%; transform: translate(0%,0%)";

	itemContacto.style.cssText="top: 0%; right:0%; transform: translate(0%,0%)";

	overlay.style.cssText="width:0%; height:0%; transition-delay:1.5s";
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

	
})
