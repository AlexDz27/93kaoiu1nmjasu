<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = IOFactory::load('Price-2025.05.27.xlsx');
$activeSheet = $spreadsheet->getActiveSheet();
$rows = [];
for ($i = 5; $i <= 11; $i++) {  // 145
  $row = $activeSheet->rangeToArray('A5:G5', NULL, TRUE, TRUE, TRUE);
  $rows[] = $row;
}

var_dump($rows);


// var_dump($activeSheet->getCell('A5')->getValue());
// die();

// $highestRow = $activeSheet->getHighestRow();
// $columnValues = [];
// for ($row = 1; $row <= $highestRow; $row++) {
//   $cellValue = $activeSheet->getCellByColumnAndRow(1, $row)->getValue();
//   $columnValues[] = $cellValue;
// }
