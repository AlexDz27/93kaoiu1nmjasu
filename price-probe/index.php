<?php

// Excel stuff

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$map = [
  0 => 'art',
  1 => 'model',
  2 => 'variant',
  3 => 'some_math',
  4 => 'price',
  5 => 'unit',
  6 => 'upakMal',
  7 => 'upakKrup'
];

$spreadsheet = IOFactory::load('Price-2025.05.27.xlsx');
$activeSheet = $spreadsheet->getActiveSheet();
$rows = [];
for ($i = 5; $i <= 11; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  unset($row['some_math']);
  $rows[] = $row;
}

// var_dump($rows);


// var_dump($activeSheet->getCell('A5')->getValue());
// die();

// $highestRow = $activeSheet->getHighestRow();
// $columnValues = [];
// for ($row = 1; $row <= $highestRow; $row++) {
//   $cellValue = $activeSheet->getCellByColumnAndRow(1, $row)->getValue();
//   $columnValues[] = $cellValue;
// }
