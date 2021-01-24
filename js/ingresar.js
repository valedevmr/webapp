export { Ingresar }

class Ingresar {
    constructor() {
        this.bandera = false;
    }
    
    validacion(form) {
        const numero =  form.elements.length-1;
        const datos = new FormData();

        
        for(var cont = 0 ; cont <numero; cont ++){
            const   campo = form.elements[cont];
            let campoid = campo.getAttribute("id");
            this.bandera = false;
            if(!campo.value){
                campo.classList.add("error");
                this.bandera = false;
            }
            else{
                this.bandera = true;
                datos.append(campoid, campo.value);
                campo.classList.remove("error");
            }
            
        
        }
        if(this.bandera){
            datos.append("accion","login");
            this.validarservidor(datos);
        }
    }
    validarservidor(datos){
        const xhr = new XMLHttpRequest();
        const texto = document.querySelector(".mostrartexto");
        xhr.open("POST","./clases/contralador.php",true);

        xhr.onload= function(){
            if(this.status == 200){
                const res = JSON.parse(this.responseText);
                console.log(res);
                if(res[0].correo ==="exito"){
                    
                    texto.classList.add("hidenE");

                    if(res[1].contrasena === "exito"){   
                        texto.classList.add("hiden");
                        console.log("correcto");
                        window.location.href = "./aplicacion.php?usuario="+res[2].usuario;
                    }
                    else{
                        texto.classList.remove("hiden");
                    }

                }
                else{
                    texto.classList.remove("hidenE");
                }
            
            }
        }

        xhr.send(datos);

    }
}