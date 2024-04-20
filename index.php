<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section class="Frame">
        <div class="Image-section">
            <img src="imagenes/Login.jpg" alt="imagen de login">
        </div>
        
        <div class="Login-section">

            <div class="Inicio">

                    <div class="Logo">
                        <article>
                            <img src="imagenes/logoSinFondo.png" alt="">
                        </article>
                    </div>

                    <h1 class="titulo">QUINVENTORY</h1>
                    
                    
                    <form class="formulario-login" action="/" method="post">
                        <h2>Inicio de Sesión</h2>

                        <div class="email">
                            <label class=" f-text" for="emailAddress">Correo Electrónico</label><br>
                            <input type="email" id="eAdd" name="emailAddress" value="" placeholder="Ingrese su correo electrónico" required><br>
                        </div>

                        <div class="contraseña">
                            <label class=" f-text" for="password">Contraseña</label><br>
                            <input type="password" id="pass" name="password" placeholder="Ingrese su contraseña" required><br>
                        </div>

                        <label class="labelTerminos" for="terms"> 
                        <input type="checkbox" class="terminos" id="terms" name="terms" required>Acepto los términos y condiciones</label>
                        
                        <input class="btn" id="btnLogin" type="submit" value="Login">

                        <article class="lineas">
                            <div class="line"></div>
                            <div class="line line-Two"></div>
                        </article>

                        <footer>
                            <input class="btn btn-two" id="btnContacto" type="submit" value="Contáctanos">
                            <input class="btn btn-two" id="btnContraseña" type="submit" value="Olvidaste tu contraseña?">

                        </footer>

                    </form>
            </div>  
        </div>

</section>
</body>
</html>