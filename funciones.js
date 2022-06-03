//botones para Video//
function play() {
	if (miVideo.paused) {
		miVideo.play();
	} else {
		miVideo.pause();
	}
}

function reiniciar() {
	miVideo.play();
	miVideo.currentTime = 0;
}

//cargar tabla usando AJAX XMLHttpRequest//
document.querySelector('#boton').addEventListener('click', traerDatos);

function traerDatos() {
	const xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'horario.json', true);
	xhttp.send();
	xhttp.onreadystatechange = function () {

		if (this.readyState == 4 && this.status == 200) {

			let datos = JSON.parse(this.responseText);
			let res = document.querySelector('#res');
			res.innerHTML = '';

			for (let cont of datos) {
				res.innerHTML += `
				<tr>
					<td>${cont.Hora}</td>
					<td>${cont.clase1}</td>
					<td>${cont.clase2}</td>
					<td>${cont.clase3}</td>
					<td>${cont.clase4}</td>
					<td>${cont.clase5}</td>
				</tr>
				`
			}

		}
	}
}

//Contador de etiquetas//
let cont = document.getElementById("cont");
cont.onclick = cargar;
function cargar() {
	let contli = document.getElementsByTagName("li");
	let contdiv = document.getElementsByTagName("div");
	let contth = document.getElementsByTagName("th");
	let conthtml = document.getElementsByTagName("html");
	let contlink = document.getElementsByTagName("link");
	let conthead = document.getElementsByTagName("head");
	let contmeta = document.getElementsByTagName("meta");
	let conttitle = document.getElementsByTagName("title");
	let contbody = document.getElementsByTagName("body");
	let conta = document.getElementsByTagName("a");
	let contheader = document.getElementsByTagName("header");
	let conth1 = document.getElementsByTagName("h1");
	let conttable = document.getElementsByTagName("table");
	let contbutton = document.getElementsByTagName("button");
	let conth4 = document.getElementsByTagName("h4");
	let contthead = document.getElementsByTagName("thead");
	let conttr = document.getElementsByTagName("tr");
	let conttbody = document.getElementsByTagName("tbody");

	var myElementToShow = document.getElementById("aqui");
	myElementToShow.innerHTML = 
	"Numero de etiquetas div: " + contdiv.length +"<br>"
	+"Numero de etiquetas th: " + contth.length +"<br>"
	+"Numero de etiquetas li: " + contli.length +"<br>"
	+"Numero de etiquetas html: " + conthtml.length +"<br>"
	+"Numero de etiquetas link: " + contlink.length +"<br>"
	+"Numero de etiquetas head: " + contthead.length +"<br>"
	+"Numero de etiquetas meta: " + contmeta.length +"<br>"
	+"Numero de etiquetas title: " + conttitle.length +"<br>"
	+"Numero de etiquetas body: " + contbody.length +"<br>"
	+"Numero de etiquetas a: " + conta.length +"<br>"
	+"Numero de etiquetas header: " + contheader.length +"<br>"
	+"Numero de etiquetas h1: " + conth1.length +"<br>"
	+"Numero de etiquetas table: " + conttable.length +"<br>"
	+"Numero de etiquetas button: " + contbutton.length +"<br>"
	+"Numero de etiquetas h4: " + conth4.length +"<br>"
	+"Numero de etiquetas thead: " + contthead.length +"<br>"
	+"Numero de etiquetas tr: " + conttr.length +"<br>"
	+"Numero de etiquetas tbody: " + conttbody.length +"<br>"
	;
}

