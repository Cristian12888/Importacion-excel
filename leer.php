<?php

   require 'vendor/autoload.php';
   require 'Conexion.php';
   require 'tabla.php';
  
   
   use PhpOffice\PhpSpreadsheet\IOFactory;
   use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

   $nombreArchivo = ($_GET["Excel"]);
   $documento = IOFactory::load($nombreArchivo);
   $totalhojas = $documento->getSheetCount();

   $hojaActual = $documento->getSheet(0);
   $numeroFilas = $hojaActual->getHighestDataRow();
   $letra = $hojaActual->getHighestColumn();
   $numeroLetra = Coordinate::columnIndexFromString($letra);

   for($indiceFila = 1; $indiceFila <= $numeroFilas; $indiceFila++)
   {
      $varlorA=$hojaActual->getCellByColumnAndRow(1,$indiceFila);
      $varlorB=$hojaActual->getCellByColumnAndRow(2,$indiceFila);
      $varlorC=$hojaActual->getCellByColumnAndRow(3,$indiceFila);
      $varlorD=$hojaActual->getCellByColumnAndRow(4,$indiceFila);
      $varlorE=$hojaActual->getCellByColumnAndRow(5,$indiceFila);
      $varlorF=$hojaActual->getCellByColumnAndRow(6,$indiceFila);

      $sql ="INSERT INTO Info (Fecha, Descripcion, Sucursal, Referencia1,Referencia2, Valor) VALUES('$varlorA','$varlorB','$varlorC','$varlorD','$varlorE','$varlorF')";
      $sqlcon=sqlsrv_prepare($conn,$sql);
      sqlsrv_execute($sqlcon);
   }

?>