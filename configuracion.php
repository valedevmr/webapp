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
               Editar datos personales
            </h1>
        </header>

        <div class="datosconfiuracion" id="<?php echo $_REQUEST["usuario"]?>">

            <table>
                <thead>
                    <th>
                        Nombre
                    </th>
                    <th>
                        RFC 
                    </th>
                    <th>
                        Dirección
                    </th>
                    <th>
                        Telefono
                    </th>
                    <th>Website
                    </th>
                    <th>
                        Contrasena
                    </th>
                </thead>
                <tbody class="tbody">
                    
                </tbody>
            </table>  
            <div class="datosbtn">
                <input type="button" value="Editar datos" class="btn">
            </div>      
            <div class="datosbtn">
                <form action="" class="formC none">
                
                    <div class="group flex aroud wrap alig-center">
                        <label for="nombre">Nombre</label>
                        <input type="text"  id="nombre">
                    </div>
                    <div class="group flex aroud wrap alig-center">
                        <label for="rfc">RFC</label>
                        <input type="text"  id="rfc">
                    </div>
                    <div class="group flex aroud wrap alig-center">
                        <label for="direccion">Dirección</label>
                        <input type="text"  id="direccion">
                    </div>
                    <div class="group flex aroud wrap alig-center">
                        <label for="telefono">Telefono</label>
                        <input type="text"  id="telefono">
                    </div>
                    <div class="group flex aroud wrap alig-center">
                        <label for="site">website</label>
                        <input type="text"  id="site">
                    </div>
                    <div class="group flex aroud wrap alig-center">
                        <label for="pass">contrasena</label>
                        <input type="text"  id="pass">
                    </div>
                    <div class="group">
                    <input type="submit" value="Guardar">
                </div>
                    
                </form>
            </div>   
        </div>
      
    </section>

    <script src="js/app.js" type="module" ></script>
</body>
</html>