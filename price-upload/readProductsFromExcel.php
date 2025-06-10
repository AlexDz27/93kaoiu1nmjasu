<?php

// TODO: probably '$row['excelFileRowNum'] = $i;' is not really needed

require 'vendor/autoload.php';
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

$spreadsheet = IOFactory::load($excelFileName);
$activeSheet = $spreadsheet->getActiveSheet();
$rows = [];

// Малярный инструмент (название категории по эксель-файлу)
// Кисти малярные (название категории по логике сайта)
// Кисти
for ($i = 5; $i <= 11; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Кисти малярные';
  $row['model'] = 'Кисть плоская СТАНДАРТ, натуральный ворс';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 12; $i <= 17; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Кисти малярные';
  $row['model'] = 'Кисть плоская ЕВРО, натуральный ворс';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 18; $i <= 22; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Кисти малярные';
  $row['model'] = 'Кисть лавковец мини, натуральный ворс';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 23; $i <= 25; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Кисти малярные';
  $row['model'] = 'Кисть радиаторная, натуральный ворс';
  unset($row['some_math']);

  $rows[] = $row;
}

// Валики малярные (название категории по логике сайта)
// Запаски и валики
for ($i = 26; $i <= 29; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Запаска нитевая "стандарт", полиакрил, к ручке 6мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 30; $i <= 33; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Валик нитевой "стандарт", полиакрил, ручка 6мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 34; $i <= 35; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Запаска нитевая "стандарт", полиакрил, к ручке 8мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 36; $i <= 37; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Валик нитевой "стандарт", полиакрил, к ручке 8мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 38; $i <= 41; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Запаска нитевая "пчелка", полиакрил, к ручке 6мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 42; $i <= 45; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Валик нитевой "пчелка", полиакрил, ручка 6мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 46; $i <= 47; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Запаска нитевая "пчелка", полиакрил, для ручки 8мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 48; $i <= 49; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Валик нитевой "пчелка", полиакрил, ручка 8мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 50; $i <= 53; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Запаска велюровая , к ручке 6мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 54; $i <= 57; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Валик велюровый, к ручке 6мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 58; $i <= 59; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Запаска велюровая, к ручке 8мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 60; $i <= 61; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Валик велюровый, к ручке 8мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 62; $i <= 64; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Ручка для валиков, диаметр 6,0мм';
  unset($row['some_math']);

  $rows[] = $row;
}
for ($i = 65; $i <= 66; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Ручка для валиков, диаметр 8мм';
  unset($row['some_math']);

  $rows[] = $row;
}

// Абразивные, алмазные материалы и оснастка (название категории по эксель-файлу)
// Абразивные, алмазные материалы и оснастка (название категории по логике сайта)
// Круги
for ($i = 68; $i <= 71; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг отрезной по металлу';
  unset($row['some_math']);

  $rows[] = $row;
}

return $rows;