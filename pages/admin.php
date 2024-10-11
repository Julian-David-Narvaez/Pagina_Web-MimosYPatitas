<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/admin.css">
  <link rel="icon" href="../Images/icono.ico" type="image/x-icon">
  <title>Administrador</title>
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
          <a href="login.php"><li class="sesion">Iniciar sesión</li></a>
          <a><button onclick="mostrarTexto('nosotros')" class="btn-nosotros">Nosotros</button></a>
        </ul>
      </div>

      <div class="content-redes">
        <a href="https://www.instagram.com/mimos_y_patitas" target="_blank">
          <img src="../Images/instagrammorado.png" alt="Instagram" class="instagram" />
        </a>
        <a href="https://www.facebook.com/Goyipet" target="_blank">
          <img src="../Images/facebookmorado.png" alt="Facebook" class="facebook" />
        </a>
        <div class="contenedor">
          <div class="imagen-con-hover">
            <img src="../Images/gmail.png" alt="Correo" />
            <div class="texto-hover">valeja1718@gmail.com</div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="contenedor_form">
    <?php
    // Configuración de la base de datos
    $user = "root";
    $pass = "";
    $host = "localhost";
    $database = "mimos_patitas";

    // Conexión a la base de datos
    $connection = mysqli_connect($host, $user, $pass, $database);

    if (!$connection) {
      echo "No se ha podido conectar con el servidor: " . mysqli_connect_error();
    } else {
      // Consulta a la tabla cita
      $consulta = "SELECT * FROM cita";
      $result = mysqli_query($connection, $consulta);

      if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Nombre del Propietario</th>";
        echo "<th>Nombre de la Mascota</th>";
        echo "<th>Raza</th>";
        echo "<th>Edad</th>";
        echo "<th>Nivel Ansiedad</th>";
        echo "<th>Telefono</th>";
        echo "<th>Hora Recepcion</th>";
        echo "<th>Informacion</th>";
        echo "</tr>";

        while ($colum = mysqli_fetch_array($result)) {
          $id = $colum['id']; // Verificar que el ID está definido
          echo "<tr>";
          echo "<td>" . ($id ?? 'N/A') . "</td>";
          echo "<td>" . ($colum['nombre_propietario'] ?? 'N/A') . "</td>";
          echo "<td>" . ($colum['nombre_mascota'] ?? 'N/A') . "</td>";
          echo "<td>" . ($colum['raza'] ?? 'N/A') . "</td>";
          echo "<td>" . ($colum['edad'] ?? 'N/A') . "</td>";
          echo "<td>" . ($colum['nivel_ansiedad'] ?? 'N/A') . "</td>";
          echo "<td>" . ($colum['telefono'] ?? 'N/A') . "</td>";
          echo "<td>" . ($colum['fecha_cita'] ?? 'N/A') . "</td>";
          echo "<td><button class='btn-descargas' onclick='descargarPDF(" . $id . ")'>Detalles de la Cita</button></td>";
          echo "</tr>";
        }

        echo "</table>";
      } else {
        echo "No se encontraron datos.";
      }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($connection);
    ?>
  
    <!--<a href="login.php">Volver Atrás</a>-->
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
        <a href="#contenedor_galeria"><h3 class="galeria2">Galeria</h3></a>
        <h3>Equipo</h3>
      </div>
      <div class="info-cuatro">
        <div class="info-cuatro-dos">
          <h2>Siguenos</h2>
          <div class="redes_sociales">
            <a href="https://www.facebook.com/Goyipet"target="_blank"><img src="../Images/facebook.png" alt="" />
            <a href="https://www.instagram.com/mimos_y_patitas?igsh=Yzl6eGRibmd4Mmx1"target="_blank"><img src="../Images/instagram.png" alt="" />
            <a href="mailto:valeja1718@gmail.com" target="_blank"><img src="../Images/gmailcolor.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="foot-legal">
      <div>
        <h2 class="copy">&copy;2024 Todos los derechos reservados</h2>
      </div>
      <div class="cont-legal">
        <a href="#"><h3>Politicas de privacidad</h3></a>
        <a href="#"><h3>Terminos de uso</h3></a>
      </div>
    </div>
  </footer>

  <script>
  function descargarPDF(id) {
    if (id !== null && id !== undefined) {
      window.location.href = `Informacion-pdf.php?id=${id}`;
    } else {
      console.error("ID no definido o inválido");
    }
  }
  </script>

  <script type="text/javascript" src="../js/inicio.js"></script>

</body>
</html>
