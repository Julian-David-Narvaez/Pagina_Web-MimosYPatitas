<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/inicio.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" href="../Images/icono.ico" type="image/x-icon">
    <title>Iniciar Sesion</title>
</head>
<body>
  <header>
    <div class="cont_header">
      <div class="cont_img">
        <div class="cont_logo">
          <a href="/pages/index.html"><img src="../Images/icono.ico" alt="" class="logo" /></a>
        </div>
        <div class="cont_titulo">
          <h1 class="titulo">Mimos y Patitas</h1>
        </div>
      </div>

      <div class="cont_ul"> 
        <ul>
          <a href="index.html"><li>Inicio</li></a>
          <a href="citas.php"><li>Citas</li></a>
          
          <a href="index.html"
            ><button onclick="mostrarTexto('nosotros')" class="btn-nosotros">
              Nosotros
            </button></a>
        </ul>
      </div>
      <div class="content-redes">
        <a
          href="https://www.instagram.com/mimos_y_patitas?igsh=Yzl6eGRibmd4Mmx1"
          target="_blank"
          ><img src="../Images/instagrammorado.png" alt="" class="instagram"
        /></a>
        <a href="https://www.facebook.com/Goyipet" target="_blank"
          ><img src="../Images/facebookmorado.png" alt="" class="facebook"
        /></a>
        <div class="contenedor">
          <div class="imagen-con-hover">
            <img src="../Images/gmail.png" alt="Descripción de la imagen" />
            <div class="texto-hover">valeja1718@gmail.com</div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?php
    include("conexion_bd.php");
    include("controlador.php");
    ?>
    <div class="contenedor_form">
        <form class="form" method="POST">
            <p class="title">Iniciar sesión</p>
            <div class="flex-column">
                <label>Correo electrónico </label></div>
                <div class="inputForm">
                    <svg height="20" viewBox="0 0 32 32" width="20" xmlns="http://www.w3.org/2000/svg"><g id="Layer_3" data-name="Layer 3"><path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path></g></svg>
                    <input type="text" class="input" name="correo" placeholder="Ingresa tu correo electrónico">
                </div>
            
            <div class="flex-column">
                <label>Contraseña </label>
                <div class="inputForm">
                    <svg height="20" viewBox="-64 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>        
                    <input type="password" class="input"  name="password" placeholder="Ingresa tu contraseña">
                    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg>
                </div>
            </div>
            <button type="submit" class="button-submit" name="btningresar" >Iniciar sesión</button>
        </form>
    </div>

    <footer>
      <div class="foot-info">
        <div class="info-uno">
          <h1>Mimos y Patitas</h1>
        </div>
        <div class="info-dos">
          <h2>Contactanos</h2>
          <a href="https://www.google.com/maps/place/Mimos+y+patitas/@2.9362538,-75.2679148,17z/data=!4m15!1m8!3m7!1s0x8e3b75001ceaa6ad:0x5764e8c7ba312544!2sMimos+y+patitas!8m2!3d2.9362538!4d-75.2653399!10e1!16s%2Fg%2F11y2kpd2yy!3m5!1s0x8e3b75001ceaa6ad:0x5764e8c7ba312544!8m2!3d2.9362538!4d-75.2653399!16s%2Fg%2F11y2kpd2yy?entry=ttu" target="_blank" class="btn_ubi"><button class="info-dos-uno btn_ubi">
            <img src="../Images/ubicacion.png" alt="" />
            <h3>Colombia,Huila,Neiva</h3>
          </button></a>
          <div class="info-dos-uno">
            <img src="../Images/correo.png" alt="" />
            <h3>valeja1718@gmail.com</h3>
          </div>
        </div>
        <div class="info-tres">
          <h2>Conocenos</h2>
          <a href="/pages/index.html"><h3 class="galeria">Galeria</h3></a>
          <h3>Equipo</h3>
        </div>
        <div class="info-cuatro">
          <div class="info-cuatro-dos">
            <h2>Siguenos</h2>
            <a href="https://www.facebook.com/Goyipet"target="_blank"><img src="../Images/facebook.png" alt="" />
              <a href="https://www.instagram.com/mimos_y_patitas?igsh=Yzl6eGRibmd4Mmx1"target="_blank"><img src="../Images/instagram.png" alt="" />
                <a href="mailto:valeja1718@gmail.com" target="_blank"><img src="../Images/gmailcolor.png" alt="" />
          </div>
        </div>
      </div>
      <div class="foot-legal">
        <h2 class="copy">&copy;2024 Todos los derechos reservados</h2>
        <div class="cont-legal">
          <h3>Politicas de privacidad</h3>
          <h3>Terminos de uso</h3>
        </div>
      </div>
    </footer>
    <a href="https://wa.link/sdgyfx" target="_blank"
            ><img src="../Images/whatsapp.png" alt="" class="whatsapp"
          /></a>
</body>
</html>