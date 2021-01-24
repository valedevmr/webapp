<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aplication.css">
    

</head>
<body>
    <?php
        session_start();
        $_SESSION["username"]= $_REQUEST["usuario"];

        
    ?>
    <header class="cabecera">
        
        <ul>
            
            <li>
                <a href="configuracion.php?usuario=<?php echo $_SESSION["username"]?>">configuracion</a>
            </li>
            <li>
                <a href="algoritmo.php?usuario=<?php echo $_SESSION["username"]?>">Algoritmo</a>
            </li>
        </ul>
    </header>
    
    <section class="flex aroud wrap alig-center algoritmo">
        <header>
            <h1>
                Algoritmo para verificar si las palabras son palindromos
            </h1>
        </header>

        <div class="numero">
            <h2>Ingresa el numero de palabras</h2>

            <div>
                <input type="text" id="numero">
                
            </div>
            <div>
            <input type="button" value="Generar Elementos" id="generar">
            </div>
        </div>
        <div class="colores">
            <div>
                <label for="">palindromo</label>
                <div class="palindromo"></div>
            </div>
            <div>
                <label for="">No plaindromo</label>
                <div class="nopalindromo"></div>
            </div>
        </div>
        <div class="palabras">
                <form action="" class="form">


                </form>
        </div>
    </section>

    <script src="js/app.js" type="module" ></script>
</body>
</html>