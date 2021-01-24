
export default class Registrar{

    constructor(){
    }

    verificar(datos){

        const usuario = document.querySelector("#rfc").value;
        const xhr = new XMLHttpRequest(); 
        xhr.open('POST','./clases/contralador.php',true);

        xhr.onload= function(){
            if(this.status == 200){
                const respuesta =JSON.parse(this.responseText);
                console.log(respuesta);
                if(respuesta.retorno === true){
                    document.querySelector("#rfc").classList.add("error");
                }
                else{
                    document.querySelector(".forminsertar").reset();
                    window.location.href = "./aplicacion.php?usuario="+usuario;
                }

            }
        }
        //enviamos los datos que recibimos, estos ya han sido extraidos del formulario
        xhr.send(datos);

    }
    /*insertar(datos){
        
        const xhr = new XMLHttpRequest(); 
        xhr.open('POST','./clases/contralador.php',true);

        xhr.onload= function(){
            if(this.status == 200){
                const respuesta =JSON.parse(this.responseText);
                if(respuesta.retorno === true){
                    document.querySelector("#rfc").classList.add("error");
                }
                else{
                    
                }

            }
        }
        //enviamos los datos que recibimos, estos ya han sido extraidos del formulario
        xhr.send(datos);
    }
*/
}