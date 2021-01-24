

export default class algoritmo {
    constructor() {


    }

    validarcampoNumero() {

        const numero = document.querySelector("#numero");
        if (!(numero.value === "")) {
            let numeros = /^([0-9])*$/;
            if (numeros.test(numero.value)) {
                numero.classList.remove("error");
                this.generarcampos(numero.value);
            }
            else {
                numero.classList.add("error");

            }

        }
        else {
            numero.classList.add("error");

        }
    }
    generarcampos(numero) {
        let formulario = document.querySelector(".form");
        formulario.innerHTML = "";
        for (var contador = 1; contador <= numero; contador++) {

            formulario.innerHTML = formulario.innerHTML + "<input type='text' required class='cajitas' name='arr[]'><br> ";


        }
        formulario.innerHTML = formulario.innerHTML + " <input type='submit' value='Emplear Algoritmo' id='emplearAlg'>";
        const emplear = document.querySelector(".form");
        emplear.addEventListener("submit", (e) => {
            e.preventDefault();
            this.algoritmofuncion(emplear);
        });


    }
    algoritmofuncion(emplear) {
        const total = emplear.length - 1;
        const palabras = new FormData();
        for (let input = 0; input < total; input++) {
            const Campo = emplear.elements[input];
            let bandera = false;
            var cadenaSinEspacios = "";
            for (var i in Campo.value) {
                if (Campo.value[i] != " ") {
                    cadenaSinEspacios += Campo.value[i];
                }
            }
            const nuevoarray = cadenaSinEspacios.split("").reverse();
            const cadenanormal = cadenaSinEspacios.split("");
            console.log(nuevoarray);

            for(var i in nuevoarray){
                if(nuevoarray[i] === cadenanormal[i]){
                    bandera = true;
                }
                else{
                    bandera = false;
                }
            }
            if(bandera){
                Campo.classList.add("noes");

            }
            else{
                Campo.classList.add("es");
            }
        }
    }

}