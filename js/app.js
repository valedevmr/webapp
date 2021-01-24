import {Validar} from './validar.js';
import algoritmo from './algoritmo.js';
import {Ingresar} from './ingresar.js';
//Ovtnbemos las referecnias de los formularios de registro y logeo
const formInsert =  document.querySelector(".forminsertar");
const formIn = document.querySelector(".formIn");
const numero =  document.querySelector("#generar");
const config = document.querySelector(".datosconfiuracion");
const btneditar = document.querySelector(".btn");
let datosGoblaes;
///ejcutar los
document.addEventListener("DOMContentLoaded",e=>{
    if(formInsert){
        
        formInsert.addEventListener("submit",validarInsercion);
    }
    if(formIn){
        formIn.addEventListener("submit",inciarsecion);
    }
    if(numero){
        numero.addEventListener("click",generarpalabras);
    }
    if(config){
       const valor =   config.getAttribute("id");
        configuracion(valor);
    }
    if(btneditar){
        btneditar.addEventListener("click",mostrarformulario);
    }
})

function validarInsercion(e){
    e.preventDefault();
    const validar =  new  Validar();
    validar.validacionimple(formInsert);
}

function generarpalabras(){
    const objeto = new algoritmo();
    objeto.validarcampoNumero();
}

function configuracion(usuario){
    const datos =  new FormData();
    datos.append("accion","renderizar");
    datos.append("usuario",usuario);

    const xhr = new XMLHttpRequest();

    xhr.open("POST","./clases/contralador.php",true);
    xhr.onload= function(){
        if(this.status == 200){
            const respuesta =JSON.parse(this.responseText);
            console.log(respuesta);
            const tbody =  document.querySelector(".tbody");

            tbody.innerHTML = `<tr>
                                <td disabled="disabled">${respuesta[0].nombre}</td>
                                <td disabled="disabled">${respuesta[0].rfc}</td>
                                <td >${respuesta[0].direccion}</td>
                                <td>${respuesta[0].telefono}</td>
                                <td>${respuesta[0].website}</td>
                                <td>${respuesta[0].contrasena}</td>
            </tr>`;
            datosGoblaes = [respuesta[0].nombre,respuesta[0].rfc,respuesta[0].direccion,respuesta[0].telefono,respuesta[0].website,respuesta[0].contrasena]
        }
    }

    xhr.send(datos);
}

function mostrarformulario(){
    const form =  document.querySelector(".formC");
    form.classList.remove("none");
    let total = form.elements.length-1;
    console.log();
    for(let input =0 ; input <total; input++){
        form.elements[input].value = datosGoblaes[input];
    }
    form.addEventListener("submit",function(e){
        e.preventDefault();
        if(form.elements[1].value){
            console.log(form.elements[1]);
            form.elements[1].classList.remove("error");
            form.elements[5].classList.remove("error");
            actualizar(form);
        }
        else{
            form.elements[1].classList.add("error");
        }
    });

}

function actualizar(form){

    const datos =  new FormData();
    datos.append("accion","actualizar");
    datos.append("nombre",form.elements[0].value);
    datos.append("rfc",form.elements[1].value);
    datos.append("direccion",form.elements[2].value);
    datos.append("telefono",form.elements[3].value);
    datos.append("site",form.elements[4].value);
    datos.append("contrasena",form.elements[5].value);

    const xhr =  new XMLHttpRequest();

    xhr.open("POST","./clases/contralador.php",true);
    xhr.onload= function(){
        if(this.status == 200){
            const respuesta =JSON.parse(this.responseText);
            console.log(respuesta);
            const tbody =  document.querySelector(".tbody");
            tbody.innerHTML = "";
            tbody.innerHTML = `<tr>
                                <td disabled="disabled">${respuesta[0].nombre}</td>
                                <td disabled="disabled">${respuesta[0].rfc}</td>
                                <td >${respuesta[0].direccion}</td>
                                <td>${respuesta[0].telefono}</td>
                                <td>${respuesta[0].website}</td>
                                <td>${respuesta[0].contrasena}</td>
            </tr>`;
            form.classList.add("none");
            document.querySelector(".tbody").classList.add("exito");
            setTimeout(() => {
                document.querySelector(".tbody").classList.remove("exito");
            }, 2000);

         }
    }

    xhr.send(datos);
}


function inciarsecion(e){
    e.preventDefault();
    const objeto =  new Ingresar();
    objeto.validacion(formIn);
    
}