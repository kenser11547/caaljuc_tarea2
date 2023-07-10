/*ELEMENTOS DE DOM*/
/*SELECCION DE NODOS POR MEDIO DEL ID*/
let nombretitulo = document.getElementById('tit');
let tarea = document.getElementById('tit2')
console.log(nombretitulo)
console.log(tarea)

/*con los selectores*/
let enlacepagina = document.querySelector('a');
let formulariodatos = document.querySelector('form')
let parrafor = document.querySelectorAll('.text-danger')
let botoningreso = document.querySelector('#caal')
let instagram = document.querySelector('a[href*="instagram"]')
let twitter = document.querySelectorAll('a[href^="https"]')
console.log(enlacepagina)
console.log(formulariodatos)
console.log(parrafor)
console.log(botoningreso)
console.log(instagram)
console.log(twitter)


let contenido = document.getElementById('parrafo')
let contenido2 = document.getElementById('parrafos')
console.log(contenido2)
// HIJOS DE UN LELEMENTO
console.log(contenido.childNodes)
console.log(contenido.children[3].innerText = 'AQUI REALIZE UN CAMBIO PARA UNA PRUEBA DE TAREA')

/*crear un atributo */
console.log(enlacepagina.getAttribute('href'))
/*Establece el valor de un atributo en el elemento indicado.*/
formulariodatos.setAttribute('action', '#')
console.log(formulariodatos.getAttribute('action'))

let crear = document.querySelectorAll('meta')

for (const crear2 of crear) {
console.log(crear2.getAttribute('content'))
}

formulariodatos.action = "/kenser/kenser.php"

console.log(enlacepagina.href)

let input = document.querySelector('input')
console.log(input.value)
/* reemplazar una clase por otra*/
console.log(tarea.getAttribute('class').replace('fw-bold','text-primary'))
console.log(tarea.classList)

/*eliminar una clase y agregar*/
nombretitulo.classList.add('fs-2')
nombretitulo.classList.remove('text-danger')
nombretitulo.classList.add('text-info')
//*segun su contenido*/
console.log(contenido.textContent)
console.log(contenido.innerText)
console.log(contenido.innerHTML)
console.log(contenido.outerHTML)
/* si se desea reemplazar en contenido html por un formulario*/
contenido2.innerHTML = "<form></form>"

const tabla = document.createElement('table')
const textonuevo = document.createElement('h1')

textonuevo.textContent = "ES UN TIPO DE TEXTO CREADO DESDE JAVA"
textonuevo.classList.add('text-warning', 'fw-semibold')

contenido.appendChild(tabla)
contenido.appendChild(textonuevo)
/*crear la lisyta del contenido de los parrafos*/
console.log(contenido.firstChild)
console.log(contenido.firstElementChild)
console.log(contenido.lastChild)
console.log(contenido.lastElementChild)
console.log(contenido.nextElementSibling)
console.log(contenido.nextSibling)
console.log(contenido.previousElementSibling.previousElementSibling)
console.log(contenido.parentElement)

let enlacesiguiente = document.getElementById('caal').parentElement.nextElementSibling
enlacesiguiente.href = "https://mindef.mil.gt/"
enlacesiguiente.innerText = "IR A LA PAGINA DE MINDEF"
console.log(enlacesiguiente)
/*que muestre los datos al hacer doble click*/
document.addEventListener('dblclick', (e)=>{
    console.log(e)
})


