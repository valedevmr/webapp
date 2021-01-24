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
    
        $usuario = $_REQUEST["usuario"];
        $_SESSION["username"] = $usuario;
    ?>
    <header class="cabecera">
        
        <ul>
            
            <li>
                <a href="configuracion.php?usuario=<?php echo $usuario?>">configuracion</a>
            </li>
            <li>
                <a href="algoritmo.php?usuario=<?php echo $usuario?>">Algoritmo</a>
            </li>
        </ul>
    </header>
    
    <section class="flex aroud wrap alig-center app">
        <div class="letter">

            <h1>
                web app
            </h1>
        </div>
    </section>
    <section>
    
    </section>
    <script src="js/app.js" type="module" ></script>
</body>
</html>