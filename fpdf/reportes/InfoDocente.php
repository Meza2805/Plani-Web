
<?php
require('../fpdf.php');
require("../../includes/conexion.php");
$Cedula= $_GET['CedulaInfo'];
$Info= $_GET['DocenteInfo'];
$Horas= $_GET['HorasClasesInfo'];
$Guiado= $_GET['ddgrupo'];


$sql = "call SP_Mostrar_Detalle_Docente02('$Cedula');";
$resultado = mysqli_query($conexion,$sql); 


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('h.jpg',0,0,220,0,'JPG');
    $this->Image('logo022.png',5,3,27,0,'PNG');

    // $this->Image('uni.png',180,8,15,0,'PNG');
    // Arial bold 15

    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',15);
    $this->SetDrawColor(255,255,255);
    $this->Cell(30);
    
    // Título
    $this->Cell(120,10,utf8_decode('Sistema de Control y Planificación Académica'),1,0,'L');
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','',9);
    date_default_timezone_set("America/Managua");
    $fecha_actual = date("d-m-Y h:i:s");
    $this->Cell(50,7,utf8_decode($fecha_actual),0,1,'R');


    // Salto de línea
    $this->Ln(30);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
$pdf->Ln(3);
$pdf->SetX(15);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',15);
    $pdf->SetFillColor(47,59,84);
$Info= $_GET['DocenteInfo'];
$Info= $_GET['DocenteInfo'];
    $pdf->Cell(180,9,utf8_decode('Informacion Docente:'. $Info),1,1,'C',1);
    $pdf->Ln(3);

    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(105,10,utf8_decode('Detalle de Horas Clases'),0,1,'L');
    $pdf->Ln(2);


    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(23,5,utf8_decode('Dia'),1,0,'C',1);
    $pdf->Cell(9,5,utf8_decode('No'),1,0,'C',1);
    $pdf->Cell(28,5,utf8_decode('Bloque'),1,0,'C',1);
    $pdf->Cell(65,5,utf8_decode('Asignatura'),1,0,'C',1);
    $pdf->Cell(33,5,utf8_decode('Grado'),1,0,'C',1);
    $pdf->Cell(9,5,utf8_decode('S'),1,0,'C',1);
    $pdf->Cell(20,5,utf8_decode('Turno'),1,1,'C',1);
  while($ver = mysqli_fetch_row($resultado))
{

    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->Cell(23,5,utf8_decode( $ver[0] ),1,0,'C');
    $pdf->Cell(9,5,utf8_decode( $ver[1] ),1,0,'C');
    $pdf->Cell(28,5,utf8_decode( $ver[2] ),1,0,'C');
    $pdf->Cell(65,5,utf8_decode( $ver[3] ),1,0,'C');
    $pdf->Cell(33,5,utf8_decode( $ver[4] ),1,0,'C');
    $pdf->Cell(9,5,utf8_decode( $ver[5] ),1,0,'C');
    $pdf->Cell(20,5,utf8_decode( $ver[6] ),1,1,'C');
    

 }
 $pdf->Ln(3);
 $pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(105,10,utf8_decode('Total de Horas Clases por Semana: '.$Horas),0,1,'L');
$pdf->Ln(2);

$pdf->Cell(105,10,utf8_decode('Grupo Guiado: '.$Guiado),0,1,'L');
 $pdf->Output();
?>