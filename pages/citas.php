<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/citas.css">
  <link rel="icon" href="../Images/icono.ico" type="image/x-icon">
  <title>Citas</title>
</head>

<body>
  <!--HEADER-->
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
          <a href="index.html">
            <li>Inicio</li>
          </a>

          <a href="login.php">
            <li class="sesion">Iniciar sesión</li>
          </a>
          <a href="index.html"><button onclick="mostrarTexto('nosotros')" class="btn-nosotros">
              Nosotros
            </button></a>
        </ul>
      </div>
      <div class="content-redes">
        <a href="https://www.instagram.com/mimos_y_patitas?igsh=Yzl6eGRibmd4Mmx1" target="_blank"><img
            src="../Images/instagrammorado.png" alt="" class="instagram" /></a>
        <a href="https://www.facebook.com/Goyipet" target="_blank"><img src="../Images/facebookmorado.png" alt=""
            class="facebook" /></a>
        <div class="contenedor">
          <div class="imagen-con-hover">
            <img src="../Images/gmail.png" alt="Descripción de la imagen" />
            <div class="texto-hover">valeja1718@gmail.com</div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!--CONTENIDO-->
  <div class="contenido">
    <form action="Consulta_cita.php" method="POST">
      <div class="cont_form">
        <div class="cont_agendar">
          <h2 class="agendar">Agenda tu cita</h2>
        </div>
        <div>
          <div class="cont_flex">
            <div class="cont_input">
              <label for="">Nombre propietario:</label>
              <input type="text" placeholder=""  name="nombre_propietario" required>
            </div>
            <div class="cont_input">
              <label for="">Nombre mascota:</label>
              <input type="text" placeholder="" name="nombre_mascota" required>
            </div>
            <div class="cont_input">
              <label for="">Raza:</label>
              <input type="text" placeholder="" name="raza" required>
            </div>
            <div class="cont_input">
              <label for="">ID:</label>
              <input type="text" placeholder="" name="id_mascota">
            </div>
          </div>

          <div class="cont_flex">
            <div class="cont_input cont_select" required>
              <label for="">Genero:</label>
              <select name="genero" id="genero">
                <option value="" hidden>Selecciona una opción</option>
                <option value="Macho">Macho</option>
                <option value="Hembra">Hembra</option>
              </select>
            </div>
            <div class="cont_input">
              <label for="">Telefono:</label>
              <input type="number" min="0" placeholder="" name="telefono" required>
            </div>
            <div class="cont_input">
              <label for="">Edad:</label>
              <input type="number" min="0" placeholder="" name="edad" required>
            </div>
            <div class="cont_input">
              <label for="">Dirección:</label>
              <input type="text" placeholder="" name="direccion" required>
            </div>
          </div>

          <div class="cont_flex">
            <div class="cont_input">
              <label for="">Color:</label>
              <input type="text" placeholder="" name="color">
            </div>
            <div class="cont_input">
              <label for="">Piel:</label>
              <input type="text" placeholder="" name="piel">
            </div>
            <div class="cont_input">
              <label for="">Ojos:</label>
              <input type="text" placeholder="" name="ojos">
            </div>
            <div class="cont_input">
              <label for="">Oídos:</label>
              <input type="text" placeholder="" name="oidos">
            </div>
          </div>

          <div class="cont_flex">
            <div class="cont_input">
              <label for="">Examen general:</label>
              <input type="text" placeholder="" name="examen_general">
            </div>
            <div class="cont_input">
              <label for="">Zonas dolorosas:</label>
              <input type="text" placeholder="" name="zonas_dolorosas">
            </div>
            <div class="cont_input">
              <label for="">Otros:</label>
              <input type="text" placeholder="" name="otros">
            </div>
            <div class="cont_input">
              <label for="">Correo electrónico:</label>
              <input type="email" placeholder="" name="correo_electronico" required>
            </div>
          </div>

          <div class="cont_flex">
            <div class="cont_input">
              <label for="">Animal geriátrico:</label>
              <select name="animal_geriatrico" id="animal_geriatrico">
                <option value="" hidden>Selecciona una opción</option>
                <option value="SI">Si</option>
                <option value="NO">No</option>
              </select>
            </div>
            <div class="cont_input">
              <label for="">Animal braquicéfalo:</label>
              <select name="animal_braquicefalo" id="animal_braquicefalo">
                <option value="" hidden>Selecciona una opción</option>
                <option value="SI">Si</option>
                <option value="NO">No</option>
              </select>
            </div>
            <div class="cont_input">
              <label for="">Animal con problemas cardiovasculares:</label>
              <select name="problemas_cardiovasculares" id="problemas_cardiovasculares">
                <option value="" hidden>Selecciona una opción</option>
                <option value="SI">Si</option>
                <option value="NO">No</option>
              </select>
            </div>
            <div class="cont_input cont_select">
              <label for="">Plan vacunal al día:</label>
              <select name="plan_vacunal_al_dia" id="plan_vacunal_al_dia">
                <option value="" hidden>Selecciona una opción</option>
                <option value="SI">Si</option>
                <option value="NO">No</option>
              </select>
            </div>
          </div>

          <div class="cont_flex">
            <div class="cont_input">
              <label for="">Nivel de ansiedad:</label>
              <select name="nivel_ansiedad" id="nivel_ansiedad">
                <option value="" hidden>Selecciona una opción</option>
                <option value="1">Nivel 1</option>
                <option value="2">Nivel 2</option>
                <option value="3">Nivel 3</option>
              </select>
            </div>
            <div class="cont_input">
              <label for="">Manejo de bolsa:</label>
              <select name="manejo_bolsa" id="manejo_bolsa">
                <option value="" hidden>Selecciona una opción</option>
                <option value="SI">Si</option>
                <option value="NO">No</option>
              </select>
            </div>
            <div class="cont_input">
              <label for="">Hora de recepción:</label>
              <input type="datetime-local" id="fecha_cita" name="fecha_cita" min="2024-01-01T00:00"
                max="2024-12-31T23:59" onkeydown="return false;" required>
            </div>
          </div>

          <div class="cont_flex">
            <div class="cont_input">
              <label for="">Preexistencias informadas por el propietario:</label>
              <input type="text" placeholder="" name="preexistencias">
            </div>
            <div class="cont_input">
              <label for="">Especificaciones de baño y corte:</label>
              <input type="text" placeholder="" name="especificaciones_bano_corte">
            </div>
            <div class="cont_input">
              <label for="">Recomendaciones especiales:</label>
              <input type="text" placeholder="" name="recomendaciones_especiales">
            </div>
          </div>
        </div>
      </div>

  </div>

  <div class="cont_consentimiento">
    <div class="cont_titulo_consentimiento">
      <div style="text-align: center;">
        <h2 class="titulo_texto">CONSENTIMIENTO INFORMADO PARA BAÑO Y PELUQUERÍA EN MIMOS Y PATITAS</h2>
      </div>
      <div>
        <p class="texto"> Yo <input type="text"  name="nombreP_consentimiento" placeholder="Nombre completo" class="llenar" required> identificado
          con cedula <input type="number" min="0" name="cedula" placeholder="Cédula" class="llenar" required> de
          <input type="text" name="ciudad" placeholder="Ciudad" class="llenar" required> y actuando como propietario o cuidador,
          soy la persona responsable de un <select class="estilo_select" name="tipo" id="tipo" required>
            <option value="" hidden>Selecciona una opción</option>
            <option value="canino">Canino</option>
            <option value="felino">Felino</option>
          </select> de nombre
          <input type="text" name="nombreM_consentimiento" placeholder="Nombre mascota" class="llenar" required>, edad <input
            type="number" min="0" name="edad_consentimiento" placeholder="Edad" class="llenar" required>, raza <input type="text"
            placeholder="Raza" name="raza_consentimiento" class="llenar" required>, Género <select class="estilo_select" name="genero_consentimiento"
            id="genero_consentimiento" required>
            <option value="" hidden>Selecciona una opción</option>
            <option value="Macho">Macho</option>
            <option value="Hembra">Hembra</option>
          </select>
          y peso <input type="number" min="0" name="peso" placeholder="Peso" class="llenar" required>. Autorizo a la peluquería
          canina <b>MIMOS Y PATITAS</b> a
          realizar el proceso de grooming para mi mascota donde se realizará proceso de baño y peluquería de
          acuerdo a las necesidades del animal y acepto que como tutor soy el único responsable de mi
          mascota y las consecuencias que pueda tener el proceso de grooming.
        </p>
      </div>

      <div>
        <div>
          <p class="texto">Autorizo que mi mascota sea sometida a un proceso de
            estética, respetando las libertades y leyes que amparan a los animales ley 1774 de 2016, entendiendo que
            este proceso puede generar estrés en mi mascota y se puede presentar el riesgo en alguna medida de paro
            cardiaco respiratorio. Confirmo que el personal que me atiende es claro en la información que me otorgó
            acerca del tema, y que de llegar a ser necesario autorizo se pueda realizar RCP (Reanimación Cardio
            Pulmonar) para atender una eventual emergencia.</p>
        </div>

        <div class="cont_check">
          <div class="checkbox-wrapper-10">
            <input type="checkbox" id="cb5" class="tgl tgl-flip">
            <label for="cb5" data-tg-on="Autorizo" data-tg-off="No autorizo" class="tgl-btn"></label>
          </div>
        </div>
      </div>
    </div>

    <div class="cont_nota">
      <p class="nota">NOTA: Una vez finalizado el servicio de grooming, el personal administrativo se comunicará con el
        propietario al número de contacto proporcionado, para indicar la hora de recogida de la mascota, pasados
        15 minutos de la hora agendada para la entrega, la mascota pasará al área de guardería canina y se cobrará
        una Tarifa adicional por el tiempo de permanencia en guardería</p>
    </div>
  </div>

  <div class="cont_btn_enviar">
    <button class="btn" type="submit" id="btn-submit" disabled>
      <div>Enviar formulario</div>
      <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
        <path d="M11.6801 14.62L14.2401 12.06L11.6801 9.5" stroke="white" stroke-width="2" stroke-miterlimit="10"
          stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M4 12.0601H14.17" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
          stroke-linejoin="round"></path>
        <path d="M12 4C16.42 4 20 7 20 12C20 17 16.42 20 12 20" stroke="white" stroke-width="2" stroke-miterlimit="10"
          stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </button>
  </div>
  </div>
  </form>

  <!--FOOTER-->
  <footer>
    <div class="foot-info">
      <div class="info-uno">
        <h1>Mimos y Patitas</h1>
      </div>
      <div class="info-dos">
        <h2>Contactanos</h2>
        <a href="https://www.google.com/maps/place/Mimos+y+patitas/@2.9362538,-75.2679148,17z/data=!4m15!1m8!3m7!1s0x8e3b75001ceaa6ad:0x5764e8c7ba312544!2sMimos+y+patitas!8m2!3d2.9362538!4d-75.2653399!10e1!16s%2Fg%2F11y2kpd2yy!3m5!1s0x8e3b75001ceaa6ad:0x5764e8c7ba312544!8m2!3d2.9362538!4d-75.2653399!16s%2Fg%2F11y2kpd2yy?entry=ttu"
          target="_blank" class="btn_ubi"><button class="info-dos-uno btn_ubi">
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
        <a href="/pages/index.html">
          <h3 class="galeria">Galeria</h3>
        </a>
        <h3>Equipo</h3>
      </div>
      <div class="info-cuatro">
        <div class="info-cuatro-dos">
          <h2>Siguenos</h2>
          <a href="https://www.facebook.com/Goyipet" target="_blank"><img src="../Images/facebook.png" alt="" />
            <a href="https://www.instagram.com/mimos_y_patitas?igsh=Yzl6eGRibmd4Mmx1" target="_blank"><img
                src="../Images/instagram.png" alt="" />
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
  <a href="https://wa.link/sdgyfx" target="_blank"><img src="../Images/whatsapp.png" alt="" class="whatsapp" /></a>

  <script>
    document.getElementById('fecha_cita').addEventListener('keydown', function (event) {
      event.preventDefault();
    });
    document.getElementById('cb5').addEventListener('change', function() {
            var boton = document.getElementById('btn-submit');
            boton.disabled = !this.checked;
        });
  </script>
</body>

</html>