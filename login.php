<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
    
    <header class="flex aroud wrap alig-center cabecera">
        <h1>
            WEB APP
        </h1>
    </header>
    
    <section class="flex aroud wrap alig-center">
        <header class="menu ">
            <ul class="flex aroud wrap alig-center ">
                <li class="flex aroud wrap alig-center active ">
                    <a href="login.php">Inciar sesion</a>
                </li>
                <li class="flex aroud wrap alig-center">
                    <a href="resgistrase.php">Registrarse</a>
                </li>
            </ul>
        </header>
        <div class="form">
            <form action="" class="flex aroud wrap alig-center formIn">
              
                
                <div class="group flex aroud wrap alig-center">
                    <label for="correo">Correo</label>
                    <input type="email" id="correo">

                    <div class="mostrartexto hidenE">
                        <p >El correo no existe</p>
                    </div>
                </div>
                <div class="group flex aroud wrap alig-center">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena">
                    <div class="mostrartexto hiden">
                        <p >Contraseña erronea</p>
                    </div>
                </div>
                
                <div class="group">
                    <input type="submit" value="Registrarse">
                </div>
                
            </form>
        </div>
    </section>

    <script src="js/app.js" type="module" ></script>
</body>
</html>