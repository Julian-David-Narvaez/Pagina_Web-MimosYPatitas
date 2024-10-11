<?php
// Validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

// Conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

// Verificamos la conexión a la base de datos
if (!$connection) {
    echo "No se ha podido conectar con el servidor" . mysqli_error($connection);
} else {

    // Indicamos el nombre de la base de datos
    $datab = "mimos_patitas";

    // Seleccionamos la base de datos
    $db = mysqli_select_db($connection, $datab);

    if (!$db) {
        echo "No se ha podido encontrar la Tabla";
    } else {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre_propietario = $_POST["nombre_propietario"];
            $nombre_mascota = $_POST["nombre_mascota"];
            $raza = $_POST["raza"];
            $id_mascota = $_POST["id_mascota"];
            $genero = $_POST["genero"];
            $telefono = $_POST["telefono"];
            $edad = $_POST["edad"];
            $direccion = $_POST["direccion"];
            $color = $_POST["color"];
            $piel = $_POST["piel"];
            $ojos = $_POST["ojos"];
            $oidos = $_POST["oidos"];
            $examen_general = $_POST["examen_general"];
            $zonas_dolorosas = $_POST["zonas_dolorosas"];
            $otros = $_POST["otros"];
            $correo_electronico = $_POST["correo_electronico"];
            $animal_geriatrico = $_POST["animal_geriatrico"];
            $animal_braquicefalo = $_POST["animal_braquicefalo"];
            $problemas_cardiovasculares = $_POST["problemas_cardiovasculares"];
            $plan_vacunal_al_dia = $_POST["plan_vacunal_al_dia"];
            $nivel_ansiedad = $_POST["nivel_ansiedad"];
            $manejo_bolsa = $_POST["manejo_bolsa"];
            $fecha_cita = $_POST["fecha_cita"];
            $preexistencias = $_POST["preexistencias"];
            $especificaciones_bano_corte = $_POST["especificaciones_bano_corte"];
            $recomendaciones_especiales = $_POST["recomendaciones_especiales"];
            $nombreP_consentimiento = $_POST["nombreP_consentimiento"];
            $cedula = $_POST["cedula"];
            $ciudad = $_POST["ciudad"];
            $tipo = $_POST["tipo"];
            $nombreM_consentimiento = $_POST["nombreM_consentimiento"];
            $edad_consentimiento = $_POST["edad_consentimiento"];
            $raza_consentimiento = $_POST["raza_consentimiento"];
            $genero_consentimiento = $_POST["genero_consentimiento"];
            $peso = $_POST["peso"];

            $fecha_cita = $_POST["fecha_cita"];

            // Convertir la fecha y hora en un formato compatible con la base de datos (formato DATETIME)
            $fecha_hora_cita = date("Y-m-d H:i:s", strtotime($fecha_cita));


            $fecha_cita_solo_fecha = date("Y-m-d", strtotime($fecha_cita));

            $query_check_citas = "SELECT COUNT(*) AS total_citas FROM cita WHERE DATE(fecha_cita) = '$fecha_cita_solo_fecha'";
            $resultado_check = mysqli_query($connection, $query_check_citas);
            $row = mysqli_fetch_assoc($resultado_check);

            if ($row['total_citas'] >= 5) {
                echo "
                <script>
                    alert('Ya se alcanzó el límite de 5 citas para este día');
                    setTimeout(function() {
                        window.location.href = 'citas.php';
                    }, 1000); 
                </script>";
            } else {
                $instruccion_SQL = "INSERT INTO cita (nombre_propietario, nombre_mascota, raza, id_mascota, genero, telefono, edad, direccion, color, piel, ojos, oidos, examen_general, zonas_dolorosas, otros, correo_electronico, animal_geriatrico, animal_braquicefalo, problemas_cardiovasculares, plan_vacunal_al_dia, nivel_ansiedad, manejo_bolsa, fecha_cita, preexistencias, especificaciones_bano_corte, recomendaciones_especiales, nombreP_consentimiento, cedula, ciudad, tipo, nombreM_consentimiento, edad_consentimiento, raza_consentimiento, genero_consentimiento, peso)
                VALUES ('$nombre_propietario', '$nombre_mascota', '$raza', '$id_mascota', '$genero', '$telefono', '$edad', '$direccion', '$color', '$piel', '$ojos', '$oidos', '$examen_general', '$zonas_dolorosas', '$otros', '$correo_electronico', '$animal_geriatrico', '$animal_braquicefalo', '$problemas_cardiovasculares', '$plan_vacunal_al_dia', '$nivel_ansiedad', '$manejo_bolsa', '$fecha_hora_cita', '$preexistencias', '$especificaciones_bano_corte', '$recomendaciones_especiales', '$nombreP_consentimiento', '$cedula', '$ciudad', '$tipo', '$nombreM_consentimiento',  '$edad_consentimiento', '$raza_consentimiento', '$genero_consentimiento', '$peso')";
                $resultado = mysqli_query($connection, $instruccion_SQL);

                if (!$resultado) {
                    echo "<script>alert('Datos No insertados correctamente');</script>";
                } else {
                  // Envío de correo electrónico después de la inserción exitosa
        $to = $correo_electronico; // Correo del destinatario
        $subject = "Cita agendada exitosamente";
        $message = "Hola $nombre_propietario,\n\nTu cita para $nombre_mascota ha sido agendada exitosamente. Gracias.";
        $headers = "From: julian2002narvaez@gmail.com"; // Correo del remitente

        ini_set("SMTP", "smtp.gmail.com");
        ini_set("smtp_port", "587");
        
        // Envío del correo electrónico
        $mail_success = mail($to, $subject, $message, $headers);

        // Verificación de si el correo se envió correctamente
        if ($mail_success) {
            echo "
            <script>
            alert('Datos Insertados correctamente y el correo ha sido enviado.');
            setTimeout(function() {
                window.location.href = 'citas.php';
            }, 1000); 
            </script>";
        } else {
            echo "
            <script>
            alert('Datos Insertados correctamente, pero no se pudo enviar el correo.');
            setTimeout(function() {
                window.location.href = 'citas.php';
            }, 1000); 
            </script>";
        }
    }
}
            }
        }
    
    mysqli_close($connection);
}

?>