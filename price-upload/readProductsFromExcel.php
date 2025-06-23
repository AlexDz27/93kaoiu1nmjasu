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
$rows = [
  'sprava' => [],
  'roshma' => [],
];

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

  $rows['sprava'][] = $row;
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

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для размывки потолков, грунтовки и побелки больших поверхностей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для работы в труднодоступных местах со всеми видами лакокрасочных материалов.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания ровных поверхностей эмалями и лаками.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания ровных поверхностей эмалями и лаками.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания ровных поверхностей эмалями и лаками.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для окрашивания ровных поверхностей эмалями и лаками.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для запасок с посадочным диаметром 6 мм.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для запасок с посадочным диаметром 8 мм.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
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
  $row['description'] = 'Для быстрого и точного разреза обычной и нержавеющей стали. Используется на ручных, угловых, шлифовальных машинах (УШМ)';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 72; $i <= 78; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг наждачный лепестковый 125мм x 22,2мм';
  $row['description'] = 'Для шлифования металлических и деревянных поверхностей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 79; $i <= 79; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг зачистной по металлу';
  $row['description'] = 'Для шлифования и очистки изделий из металла.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 80; $i <= 81; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг алмазный гладкий';
  $row['description'] = 'Для разреза изделий из кирпича, бетона, камня, керамической плитки. Не требует водяного охлаждения.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 82; $i <= 82; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг алмазный гладкий <b>ультратонкий</b>';
  $row['description'] = 'Для разреза изделий из кирпича, бетона, камня, керамической плитки. Не требует водяного охлаждения.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 83; $i <= 84; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг алмазный TURBO';
  $row['description'] = 'Для разреза изделий из кирпича, бетона, камня, керамической плитки. Не требует водяного охлаждения.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 85; $i <= 87; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг алмазный сегментный';
  $row['description'] = 'Для разреза изделий из кирпича, бетона, камня, керамической плитки. Не требует водяного охлаждения.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 88; $i <= 88; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг алмазный сегментный <b>для Асфальта</b>';
  $row['description'] = 'Для разреза изделий из кирпича, бетона, камня, керамической плитки. Не требует водяного охлаждения.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 89; $i <= 89; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Чаша алмазная зачистная двурядная';
  $row['description'] = 'Для шлифования и обработки бетонных, кирпичных, газосиликатных и гранитных поверхностей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 90; $i <= 90; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Насадка дисковая с липучкой, мягкая';
  $row['description'] = 'Для шлифования поверхностей с использованием круга наждачного на ворсовой подложке.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 91; $i <= 91; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Насадка дисковая с липучкой, жесткая';
  $row['description'] = 'Для шлифования поверхностей с использованием круга наждачного на ворсовой подложке.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 92; $i <= 98; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг наждачный, 125мм с ворсовой подложкой <b>(уп. 5 шт.)</b>';
  $row['description'] = 'Для шлифования металлических и деревянных поверхностей с использованием насадок на электроинструмент.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 99; $i <= 105; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг наждачный, 125мм с ворсовой подложкой <b>перфорированный (уп. 5 шт.)</b>';
  $row['description'] = 'Для шлифования металлических и деревянных поверхностей с использованием насадок на электроинструмент.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 106; $i <= 106; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Кордщетка чашеобразная мягкая, М14';
  $row['description'] = 'Для очистки металлических поверхностей от ржавчины и грязи.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 107; $i <= 107; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Кордщетка чашеобразная жесткая крученая, М14';
  $row['description'] = 'Для очистки металлических поверхностей от ржавчины и грязи.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 108; $i <= 108; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Кордщетка коническая мягкая, М14';
  $row['description'] = 'Для очистки металлических поверхностей от ржавчины и грязи.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 109; $i <= 109; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Кордщетка коническая жесткая крученая, М14';
  $row['description'] = 'Для очистки металлических поверхностей от ржавчины и грязи.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}

// Строительные материалы и инструмент (название категории по эксель-файлу)
// Ножи и лезвия + Вспомогательный инструмент (название категории по логике сайта)
// Ножи
for ($i = 111; $i <= 111; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Ножи и лезвия';
  $row['model'] = 'Нож обойный';
  $row['description'] = 'Для разрезания бумаги, картона и прочих материлов с применением значительных усилий.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 112; $i <= 113; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Ножи и лезвия';
  $row['model'] = 'Нож обойный усиленный';
  $row['description'] = 'Для разрезания бумаги, картона и прочих материлов с применением значительных усилий.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 114; $i <= 115; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Ножи и лезвия';
  $row['model'] = 'Лезвия запасные для обойного ножа';
  $row['description'] = 'Для обойных ножей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
// Вспомогательный инструмент
for ($i = 116; $i <= 118; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Миксер для смесей оцинкованный SDS-plus';
  $row['description'] = 'Для смешивания тяжелых строительных масс.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 119; $i <= 120; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Миксер для смесей оцинкованный';
  $row['description'] = 'Для смешивания тяжелых строительных масс.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 121; $i <= 121; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Миксер для смесей оцинкованный, гайкой М14';
  $row['description'] = 'Для смешивания тяжелых строительных масс.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 122; $i <= 125; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Рулетка, прорезиненный корпус';
  $row['description'] = 'Для измерения размеров объекта.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 126; $i <= 126; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Пистолет скелетный для герметиков, 225мм';
  $row['description'] = 'Для выдавливания герметика из тубы.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 127; $i <= 127; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Карандаш столярный (10 шт)';
  $row['description'] = 'Для нанесения разметки при внутренних и наружных работах.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 128; $i <= 128; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Щетка проволочная универсальная, латунированная';
  $row['description'] = 'Для обработки металлических поверхностей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 130; $i <= 133; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Шпатель фасадный, нержавеющая сталь 0,5мм, пластиковая ручка';
  $row['description'] = 'Для нанесения и выравнивания строительных смесей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 134; $i <= 139; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Шпатель фасадный, нержавеющая сталь 0,5мм, пластиковая ручка';
  $row['description'] = 'Для нанесения и выравнивания строительных смесей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 140; $i <= 142; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Шпатель фасадный, нержавеющая сталь 0,5мм, пластиковая ручка, ЗУБЧАТЫЙ';
  $row['description'] = 'Для нанесения и выравнивания строительных смесей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 144; $i <= 144; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Шпатель резиновый (набор 3 штуки)';
  $row['description'] = 'Для нанесения и выравнивания строительных смесей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}
for ($i = 145; $i <= 145; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Шпатель обойный';
  $row['description'] = 'Для нанесения и выравнивания строительных смесей.';
  unset($row['some_math']);

  $rows['sprava'][] = $row;
}

$activeSheet = $spreadsheet->getSheet(1);
for ($i = 5; $i <= 10; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Кисти малярные';
  $row['model'] = 'Кисть плоская, искусственный ворс';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}
for ($i = 11; $i <= 12; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Валик нитевой "стандарт", полиакрил, ручка 6,0мм';
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}
for ($i = 13; $i <= 14; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Валики малярные';
  $row['model'] = 'Валик нитевой "пчелка", полиакрил, ручка 6,0мм';
  $row['description'] = 'Для окрашивания поверхностей красками на водной основе.';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}
for ($i = 15; $i <= 16; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг отрезной по металлу';
  $row['description'] = 'Для быстрого и точного разреза обычной и нержавеющей стали. Используется на ручных, угловых, шлифовальных машинах (УШМ)';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}
for ($i = 17; $i <= 19; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг наждачный лепестковый 125мм x 22,2мм';
  $row['description'] = 'Для шлифования металлических и деревянных поверхностей.';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}
for ($i = 20; $i <= 23; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Абразивные алмазные материалы и оснастка';
  $row['model'] = 'Круг наждачный, 125мм, с ворсовой подложкой <b>(уп. - 5 шт.)</b>';
  $row['description'] = 'Для шлифования металлических и деревянных поверхностей.';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}
for ($i = 24; $i <= 24; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Ножи и лезвия';
  $row['model'] = 'Нож обойный';
  $row['description'] = 'Для разрезания бумаги, картона и прочих материлов с применением значительных усилий.';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}
for ($i = 25; $i <= 25; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Ножи и лезвия';
  $row['model'] = 'Нож обойный, набор 3 штуки';
  $row['description'] = 'Для разрезания бумаги, картона и прочих материлов с применением значительных усилий.';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}
for ($i = 26; $i <= 26; $i++) {
  $row = [];
  for ($k = 1; $k <= 8; $k++) {
    $val = $activeSheet->getCell([$k, $i])->getFormattedValue();
    $row[$map[$k - 1]] = $val;
  }
  $row['excelFileRowNum'] = $i;
  $row['category'] = 'Вспомогательный инструмент';
  $row['model'] = 'Щетка проволочная универсальная, латунированная';
  $row['description'] = 'Для обработки металлических поверхностей.';
  unset($row['some_math']);

  $rows['roshma'][] = $row;
}

return $rows;