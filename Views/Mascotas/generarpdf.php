<?php
header('Content-Type: text/html; charset=UTF-8');
require_once("Libs/fpdf/fpdf.php");
require_once("Models/cls_Mascotas.php");
/*

// Datos del paciente y propietario (debes reemplazar estos valores con tus datos reales)
$nombreMascota = "Nombre de la Mascota";
$color = "Color";
$tamanio = "Tamaño";
$edad = "Edad";
$especie = "Especie";
$pelaje = "Pelaje";
$sexo = "Sexo";
$raza = "Raza";
$nombrePropietario = "Nombre del Propietario";
$direccion = "Dirección";
$celular = "Celular";
$cedula = "Cédula";

// Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Configurar la fuente y tamaño de texto
$pdf->SetFont('Arial', 'B', 16);

// Título del historial médico
$pdf->Cell(0, 10, 'HISTORIAL MEDICO', 0, 1, 'C');

// Sección de Datos del Paciente
$pdf->SetFillColor(0, 0, 255); // Blue fill color
$pdf->SetTextColor(255, 255, 255); // White text color
$pdf->Rect(10, $pdf->GetY(), 190, 10, 'F'); // Blue rectangle
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, utf8_decode('Datos del Paciente'), 0, 1, 'L');
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Reset text color to black
$pdf->Cell(0, 10, utf8_decode('Nombre de Mascota: ' . $nombreMascota), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Color: ' . $color), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Tamaño: ' . $tamanio), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Edad: ' . $edad . ' años'), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Especie: ' . $especie), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Pelaje: ' . $pelaje), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Sexo: ' . $sexo), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Raza: ' . $raza), 0, 1, 'L');

$pdf->Ln(10); // Espacio en blanco

// Sección de Datos del Propietario
$pdf->SetFillColor(0, 0, 255); // Blue fill color
$pdf->SetTextColor(255, 255, 255); // White text color
$pdf->Rect(10, $pdf->GetY(), 190, 10, 'F'); // Blue rectangle
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, utf8_decode('Datos del Propietario'), 0, 1, 'L');
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Reset text color to black
$pdf->Cell(0, 10, utf8_decode('Nombre del Propietario: ' . $nombrePropietario), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Dirección: ' . $direccion), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Celular: ' . $celular), 0, 1, 'L');
$pdf->Cell(0, 10, utf8_decode('Cédula: ' . $cedula), 0, 1, 'L');

// Generar el PDF y enviarlo al navegador para descarga
$pdf->Output('historial_medico.pdf', 'D');
?>*/
class PDF extends FPDF {
    // Cabecera del PDF
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Historia Clinica', 0, 1, 'C');
        $this->Ln(10);
    }

    // Pie de página del PDF
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Crear instancia de la clase PDF
$pdf = new PDF();
$pdf->AddPage();

$clsmascota = new MascotasModel();
$row = $clsmascota->getAllHistorialClinico($_GET['id']);






    
    $datosHistoriaClinica = array(
        "Nombre_Mascota" => $row['Nombre_Mascota'],
        "Raza" => $row['Raza'],
        "Color" => $row['Color'],
        "Pelaje" => $row['Pelaje'],
        "Edad" => $row['Edad'],
        "Tamanio" => $row['Tamanio'],
        "Especie" => $row['Especie'],
        "Sexo" => $row['Sexo'],
        "Fecha_Consulta" => $row['Fecha_Consulta'],
        "Temperatura" => $row['Temperatura'],
        "Frecuencia_Cardiaca" => $row['Frecuencia_Cardiaca'],
        "Frecuencia_Respiratoria" => $row['Frecuencia_Respiratoria'],
        "Mucosa" => $row['Mucosa'],
        "Peso" => $row['Peso'],
        "Motivo_Consulta" => $row['Motivo_Consulta'],
        
        "Nombre_Propietario" => $row['Nombre_Propietario'],
        "Apellido_Propietario" => $row['Apellido_Propietario'],
        "Cedula_Propietario" => $row['Cedula_Propietario'],
        "Celular_Propietario" => $row['Celular_Propietario'],
        "Direccion_Propietario" => $row['Direccion_Propietario']
    );


// Generar el contenido del PDF
$pdf->SetFont('Arial', '', 12);

// Crear una tabla para mostrar los datos
foreach ($datosHistoriaClinica as $label => $valor) {
    $pdf->Cell(50, 10, $label, 1);
    $pdf->Cell(0, 10, $valor, 1);
    $pdf->Ln();
}

// Salida del PDF
$pdf->Output();
?>