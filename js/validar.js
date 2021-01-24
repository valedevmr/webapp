export {Validar}
import Registrar from './registrar.js';

class Validar{


    constructor(){
        this.nombre = document.querySelector("#nombre");
        this.rfc = document.querySelector("#rfc");
        this.correo = document.querySelector("#correo");
        this.contrasena = document.querySelector("#contrasena");
        this.bandera = false;
    }

    validacionimple(form){
        //Se obtiene le numero total de input del formulario
        const total = form.length-1;
        

        //verficamos si todo los campos o input del formulario
        //etan llenos y posterior a eso validamos su estructura
        //de cada uno
        for(let input =0 ; input <total; input++){

            const Campo  = form.elements[input]

            let campoid = Campo.getAttribute("id");

            if(!Campo.value){
                Campo.classList.add("error");
                this.bandera = false;
            }
            else{
                
                if(campoid==="nombre")
                    Campo.classList.remove("error");
                else if(campoid==="rfc")
                    this.bandera = this.validarRFC(Campo);
                else if(campoid === "correo")
                    this.bandera = this.validarCorreo(Campo);
                else if(campoid==="contrasena")
                    this.bandera = this.validarContrasena(Campo);
                else if(campoid==="confirmar")
                    this.bandera = this.validarConcidencia(Campo);
            }
            
        }
        if(this.bandera){
            const registro = new Registrar();
            const datos = new FormData();
            datos.append("accion","insertar");
            datos.append("rfc",this.rfc.value);
            datos.append("nombre",this.nombre.value);
            datos.append("correo",this.correo.value);
            datos.append("contrasena",this.contrasena.value);
            
            registro.verificar(datos);
        }
        else{
            console.log("no ejecutamos nada");
        }
       
    }
    validarRFC(campo){
        //campo.classList.remove("error");
        //expresion regular para obtener el rfc valido, 4 letras seguidas de 6 numeros
        const rfc = /[A-ZÑ&]{3,4}\d{6}[A-Z0-9]{3}/;
        if(rfc.test(campo.value)){
            campo.classList.remove("error");
            return true;
        }
        else{
            campo.classList.add("error");
            return false;
        }

    }
    validarCorreo(campo){
        
        const correo =/^([\w]|[\W])+@{1}[\w|W]+\.[a-z]{2,3}/;
        if(correo.test(campo.value) && !campo.value.includes("=")){
            campo.classList.remove("error");
            return true;
        }
        else{
            campo.classList.add("error");
            return false
        }
    }

    validarContrasena(campo){
        const contrasena = /[a-zA-Z0-9]*/;
        if(contrasena.test(campo.value)&& campo.value.length>=8){
            campo.classList.remove("error");
            return true;
        }    
        else{
            campo.classList.add("error");
            return false
        }
    }
    validarConcidencia(campo){

        if(campo.value === this.contrasena.value){
            campo.classList.remove("error");
            return true;

        }
        else{

            campo.classList.add("error");
            return false;
        }
        
    }

}

