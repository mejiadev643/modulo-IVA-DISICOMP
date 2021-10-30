<?php

require 'materializecss/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;




$excel = new Spreadsheet;

$hojaActiva = $excel->getActiveSheet();

$hojaActiva->setTitle("Reporte");

$hojaActiva->getColumnDimension("A")->setWidth(10);
$hojaActiva->setCellValue("A1", "CORRELA");
$hojaActiva->getColumnDimension("B")->setWidth(11);
$hojaActiva->setCellValue("B1", "FECHA");
$hojaActiva->getColumnDimension("C")->setWidth(10);
$hojaActiva->setCellValue("C1", "COMPRO");
$hojaActiva->getColumnDimension("D")->setWidth(10);
$hojaActiva->setCellValue("D1", "REGISTRO");
$hojaActiva->getColumnDimension("E")->setWidth(30);
$hojaActiva->setCellValue("E1", "NOMBRE");
$hojaActiva->getColumnDimension("F")->setWidth(15);
$hojaActiva->setCellValue("F1", "EXEINTERNA");
$hojaActiva->getColumnDimension("G")->setWidth(15);
$hojaActiva->setCellValue("G1", "EXEIMPORTA");
$hojaActiva->getColumnDimension("H")->setWidth(15);
$hojaActiva->setCellValue("H1", "GRAINTERNA");
$hojaActiva->getColumnDimension("I")->setWidth(15);
$hojaActiva->setCellValue("I1", "GRAIMPORTA");
$hojaActiva->getColumnDimension("J")->setWidth(10);
$hojaActiva->setCellValue("J1", "IVA");
$hojaActiva->getColumnDimension("K")->setWidth(10);
$hojaActiva->setCellValue("K1", "IVA3");
$hojaActiva->getColumnDimension("L")->setWidth(10);
$hojaActiva->setCellValue("L1", "IVA2");
$hojaActiva->getColumnDimension("M")->setWidth(10);
$hojaActiva->setCellValue("M1", "TOTALCOMPR");
$hojaActiva->getColumnDimension("N")->setWidth(10);
$hojaActiva->setCellValue("N1", "RETETERCE");
$hojaActiva->getColumnDimension("O")->setWidth(10);
$hojaActiva->setCellValue("O1", "COMPRATERC");
$hojaActiva->getColumnDimension("P")->setWidth(10);
$hojaActiva->setCellValue("P1", "FOVIAL");
$hojaActiva->getColumnDimension("Q")->setWidth(10);
$hojaActiva->setCellValue("Q1", "COTRAN");
$hojaActiva->getColumnDimension("R")->setWidth(30);
$hojaActiva->setCellValue("R1", "NIT");

$vacio = 0.00;
$fila = 2;
foreach ($this->model->ReporteVentaExcel() as $r) :

    $hojaActiva->setCellValue("A" . $fila, $r->IDVENTA);
    $hojaActiva->setCellValue("B" . $fila, $r->FECHA);
    $hojaActiva->setCellValue("C" . $fila, $r->COMPRO);
    $hojaActiva->setCellValue("D" . $fila, $r->REGISTRO);
    foreach ($this->model3->listarClientesProveedores() as $c) :
        if ($r->REGISTRO == $c->CODCLIENT) {
            $hojaActiva->setCellValue("E" . $fila, $c->NOMBCLIENT);
            $hojaActiva->setCellValue("R" . $fila, $c->NUMNIT);
        }
    endforeach;
    $hojaActiva->setCellValue("F" . $fila, $vacio);
    $hojaActiva->setCellValue("G" . $fila, $vacio);
    $hojaActiva->setCellValue("H" . $fila, $r->VALOR);
    $hojaActiva->setCellValue("I" . $fila, $vacio);
    $hojaActiva->setCellValue("J" . $fila, $r->IVA13);
    $hojaActiva->setCellValue("K" . $fila, $r->IVA2);
    $hojaActiva->setCellValue("L" . $fila, $r->IVA1);
    $hojaActiva->setCellValue("M" . $fila, $r->TOTAL);
    $hojaActiva->setCellValue("N" . $fila, $vacio);
    $hojaActiva->setCellValue("O" . $fila, $vacio);
    $hojaActiva->setCellValue("P" . $fila, $r->FOVIAL);
    $hojaActiva->setCellValue("Q" . $fila, $r->COTRAN);
    
$fila++;

endforeach;


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Libro de compras.xlsx"');
header('Cache-Control: max-age=0');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;
