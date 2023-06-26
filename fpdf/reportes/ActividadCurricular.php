
<?php
require('../fpdf.php');
require("../../includes/conexion.php");
$CodigoGrupoFinal= $_GET['id_actividad'];
$sql = "call SP_BuscarActividad($CodigoGrupoFinal);";
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

  while($ver = mysqli_fetch_row($resultado))
{
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(105,10,utf8_decode('Actividad Curricular Código:'),0,0,'L');
    $pdf->Cell(10,10,utf8_decode($ver[0]),0,1,'L');
    $pdf->Ln(7);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',15);
    $pdf->SetFillColor(47,59,84);
    $pdf->Cell(180,9,utf8_decode('Datos Generales'),1,1,'C',1);
    $pdf->Ln(3);

    // Primera columna
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(35,7,utf8_decode('Línea de acción'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[1] ),0,1,'C');
    $pdf->Ln(3);

     // Segunda Columna
     $pdf->SetTextColor(255,255,255);
     $pdf->SetFont('Arial','B',12);
     $pdf->SetFillColor(18,61,192);
     $pdf->Cell(35,7,utf8_decode('Protagonistas'),1,'B',1,'L');
     $pdf->Ln(2);
 
     $pdf->SetFont('Arial','',10);
     $pdf->SetTextColor(0,0,0);
     $pdf->SetFillColor(255,255,255);
     $pdf->MultiCell(180,5,utf8_decode( $ver[2] ),0,1,'C');
     $pdf->Ln(3);

    // Tercera Columna
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(35,7,utf8_decode('Meta Anual'),1,0,'C',1);

  
    $pdf->Cell(35,7,utf8_decode('Meta Trimestral'),1,0,'C',1);

 
    $pdf->Cell(35,7,utf8_decode('Femeninos'),1,0,'C',1);

 
    $pdf->Cell(35,7,utf8_decode('Masculinos'),1,0,'C',1);
    
    
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(35,7,utf8_decode('Total'),1,1,'C',1);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->Cell(35,7,utf8_decode( $ver[3] ),1,0,'C',1);
   
    $pdf->Cell(35,7,utf8_decode( $ver[4] ),1,0,'C',1);

    $pdf->Cell(35,7,utf8_decode( $ver[5] ),1,0,'C',1);

    $pdf->Cell(35,7,utf8_decode( $ver[6] ),1,0,'C',1);

    $pdf->Cell(35,7,utf8_decode( ($ver[5] + $ver[6]) ),1,1,'C',1);


    $pdf->Ln(2);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(45,7,utf8_decode('Alcance Anual'),1,0,'C',1);
  
    $pdf->Cell(45,7,utf8_decode('Alcance Trimestral'),0,1,'C',1);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->Cell(45,7,utf8_decode( "% " .  round((($ver[5] + $ver[6]) * 100 ) / $ver[3],2)  ),1,0,'C',1);
    $pdf->Cell(45,7,utf8_decode( "% " . round( (($ver[5] + $ver[6]) * 100 ) / $ver[4],2)  ),1,1,'C');

    $pdf->Ln(4);
    
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',15);
    $pdf->SetFillColor(47,59,84);
    $pdf->Cell(180,9,utf8_decode('Valoración Cualitativa'),1,1,'C',1);
    $pdf->Ln(3);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(35,7,utf8_decode('¿Qué se hizo?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[19] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(110,7,utf8_decode('¿Con cuántos y quienes fueron los protagonistas?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[20] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(30,7,utf8_decode('¿Sobre qué?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[21] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(85,7,utf8_decode('¿Por qué se hizo y cuál fue el resultado?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[22] ),0,1,'C');
    $pdf->Ln(4);

    
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(74,7,utf8_decode('¿Cuál fue el impacto del resultado?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[23] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',15);
    $pdf->SetFillColor(47,59,84);
    $pdf->Cell(180,9,utf8_decode('Plan de Medidas'),1,1,'C',1);
    $pdf->Ln(3);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(48,7,utf8_decode('¿Cuándo se realizó?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[14] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(36,7,utf8_decode('¿Con Quienes?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[15] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(27,7,utf8_decode('¿Cuantos?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[16] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(23,7,utf8_decode('¿Como?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[17] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(23,7,utf8_decode('¿Donde?'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[18] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',15);
    $pdf->SetFillColor(47,59,84);
    $pdf->Cell(180,9,utf8_decode('Aspectos Finales'),1,1,'C',1);
    $pdf->Ln(3);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(50,7,utf8_decode('Principales Dificultades'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[7] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(70,7,utf8_decode('Situaciones en Estado de Alerta'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[8] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(70,7,utf8_decode('Propuesta de Toma de Decisiones'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[9] ),0,1,'C');
    $pdf->Ln(4);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(18,61,192);
    $pdf->Cell(45,7,utf8_decode('Observaciones'),1,'B',1,'L');
    $pdf->Ln(2);

    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->MultiCell(180,5,utf8_decode( $ver[10] ),0,1,'C');
    $pdf->Ln(8);

    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(6,14,41);
    $pdf->Cell(70,7,utf8_decode('Usuario Que Registro Actividad'),1,0,'C',1);

  
    $pdf->Cell(40,7,utf8_decode('Fecha de Registro'),1,1,'C',1);
    $pdf->Ln(2);
    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->Cell(65,7,utf8_decode( $ver[24] ),1,0,'C',1);
   
    $pdf->Cell(35,7,utf8_decode( $ver[25] ),1,0,'C',1);
 }
 $pdf->Output();
?>