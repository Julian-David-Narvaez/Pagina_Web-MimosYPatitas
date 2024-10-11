<?php
require_once('conexion_bd.php'); // Asegúrate de tener la conexión a la base de datos

$conexion->set_charset("utf8");
$cita_id = intval($_GET['id']);

// Consulta para obtener datos por defecto, si no hay datos POST
$sql = "SELECT * FROM cita WHERE id = $cita_id";
$result = $conexion->query($sql);

$datos = [];

if ($result && $result->num_rows > 0) {
    $datos = $result->fetch_assoc(); // Obtener la primera fila de resultados
}

// Validar si hay datos POST para sobreescribir
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $datos['nombre_propietario'] = $_POST["nombre_propietario"] ?? $datos['nombre_propietario'];
    $datos['nombre_mascota'] = $_POST["nombre_mascota"] ?? $datos['nombre_mascota'];
    $datos['raza'] = $_POST["raza"] ?? $datos['raza'];
    $datos['edad'] = $_POST["edad"] ?? $datos['edad'];
    $datos['telefono'] = $_POST["telefono"] ?? $datos['telefono'];
    $datos['direccion'] = $_POST["direccion"] ?? $datos['direccion'];
    $datos['color'] = $_POST["color"] ?? $datos['color'];
    $datos['piel'] = $_POST["piel"] ?? $datos['piel'];
    $datos['ojos'] = $_POST["ojos"] ?? $datos['ojos'];
    $datos['oidos'] = $_POST["oidos"] ?? $datos['oidos'];
    $datos['examen_general'] = $_POST["examen_general"] ?? $datos['examen_general'];
    $datos['zonas_dolorosas'] = $_POST["zonas_dolorosas"] ?? $datos['zonas_dolorosas'];
    $datos['otros'] = $_POST["otros"] ?? $datos['otros'];
    $datos['animal_geriatrico'] = $_POST["animal_geriatrico"] ?? $datos['animal_geriatrico'];
    $datos['animal_braquicefalo'] = $_POST["animal_braquicefalo"] ?? $datos['animal_braquicefalo'];
    $datos['problemas_cardiovasculares'] = $_POST["problemas_cardiovasculares"] ?? $datos['problemas_cardiovasculares'];
    $datos['plan_vacunal_al_dia'] = $_POST["plan_vacunal_al_dia"] ?? $datos['plan_vacunal_al_dia'];
    $datos['nivel_ansiedad'] = $_POST["nivel_ansiedad"] ?? $datos['nivel_ansiedad'];
    $datos['manejo_bolsa'] = $_POST["manejo_bolsa"] ?? $datos['manejo_bolsa'];
    $datos['hora_recepcion'] = $_POST["hora_recepcion"] ?? $datos['hora_recepcion'];
    $datos['preexistencias'] = $_POST["preexistencias"] ?? $datos['preexistencias'];
    $datos['especificaciones_bano_corte'] = $_POST["especificaciones_bano_corte"] ?? $datos['especificaciones_bano_corte'];
    $datos['recomendaciones_especiales'] = $_POST["recomendaciones_especiales"] ?? $datos['recomendaciones_especiales'];
    $datos['nombreP_consentimiento'] = $_POST["nombreP_consentimiento"] ?? $datos['nombreP_consentimiento'];
    $datos['cedula'] = $_POST["cedula"] ?? $datos['cedula'];
    $datos['ciudad'] = $_POST["ciudad"] ?? $datos['ciudad'];
    $datos['tipo'] = $_POST["tipo"] ?? $datos['tipo'];
    $datos['nombreM_consentimiento'] = $_POST["nombreM_consentimiento"] ?? $datos['nombreM_consentimiento'];
    $datos['edad_consentimiento'] = $_POST["edad_consentimiento"] ?? $datos['edad_consentimiento'];
    $datos['raza_consentimiento'] = $_POST["raza_consentimiento"] ?? $datos['raza_consentimiento'];
    $datos['genero_consentimiento'] = $_POST["genero_consentimiento"] ?? $datos['genero_consentimiento'];
    $datos['peso'] = $_POST["peso"] ?? $datos['peso'];
}


// Crear el PDF
require_once('../fpdf/fpdf.php'); // Asegúrate de tener FPDF en la ruta correcta
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Añadir datos al PDF
$pdf->Cell(0, 10, 'Detalles de la Cita', 0, 1, 'C'); // Título centrado
$pdf->Ln(10); // Salto de línea

$pdf->Cell(0, 10, 'Propietario: ' . ($datos['nombre_propietario'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Mascota: ' . ($datos['nombre_mascota'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Raza: ' . ($datos['raza'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Edad: ' . ($datos['edad'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Telefono: ' . ($datos['telefono'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Direccion: ' . ($datos['direccion'] ?? 'N/A'), 0, 1);

$pdf->Ln(10); // Salto de línea
$pdf->Cell(0, 10, 'Caracteristicas fisicas', 0, 1);
$pdf->Cell(0, 10, 'Color: ' . ($datos['color'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Piel: ' . ($datos['piel'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Ojos: ' . ($datos['ojos'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Oidos: ' . ($datos['oidos'] ?? 'N/A'), 0, 1);

$pdf->Ln(10); // Subtítulo para otros detalles
$pdf->Cell(0, 10, 'Examen General: ' . ($datos['examen_general'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Zonas Dolorosas: ' . ($datos['zonas_dolorosas'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Otros: ' . ($datos['otros'] ?? 'N/A'), 0, 1);

$pdf->Ln(10); // Subtítulo para información especial
$pdf->Cell(0, 10, 'Informacion Especial:', 0, 1);
$pdf->Cell(0, 10, 'Animal Geriatrico: ' . ($datos['animal_geriatrico'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Animal Braquicefalo: ' . ($datos['animal_braquicefalo'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Problemas Cardiovasculares: ' . ($datos['problemas_cardiovasculares'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Plan Vacunal al Dia: ' . ($datos['plan_vacunal_al_dia'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Nivel de Ansiedad: ' . ($datos['nivel_ansiedad'] ?? 'N/A'), 0, 1);

$pdf->Ln(10); // Otros detalles
$pdf->Cell(0, 10, 'Hora de Recepcion: ' . ($datos['fecha_cita'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Preexistencias: ' . ($datos['preexistencias'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Especificaciones de Bano y Corte: ' . ($datos['especificaciones_bano_corte'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Recomendaciones Especiales: ' . ($datos['recomendaciones_especiales'] ?? 'N/A'), 0, 1);

$pdf->AddPage();
$pdf->Cell(0, 10, 'Consentimiento', 0, 1, 'C');
$pdf->Ln(10);

$pdf->Cell(0, 10, 'Nombre Propietario: ' . ($datos['nombreP_consentimiento'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Cedula: ' . ($datos['cedula'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Ciudad: ' . ($datos['ciudad'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Tipo: ' . ($datos['tipo'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Nombre Mascota: ' . ($datos['nombreM_consentimiento'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Edad: ' . ($datos['edad_consentimiento'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Raza: ' . ($datos['raza_consentimiento'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Genero: ' . ($datos['genero_consentimiento'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'Peso: ' . ($datos['peso'] ?? 'N/A'), 0, 1);
$pdf->Cell(0, 10, 'AUTORIZO ' , 0, 1,'C');


$id = $cita_id; 
$nombre_archivo = 'DetalleCita_' . $id . '.pdf'; // Concatenación del nombre del archivo

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"'); // Uso correcto del nombre del archivo

$pdf->Output( $nombre_archivo ,'D'); // Descargar el PDF

$conexion->close(); // Cerrar la conexión a la base de datos
?>
