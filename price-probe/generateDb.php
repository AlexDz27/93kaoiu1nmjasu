<?php

// TODO: rename files
// TODO: rethink flow of uploading file -> resetting prices

require 'index.php';

$dbExample = require 'db.php';
$dbDExample = $dbExample['0100-0000-10'];

$db = [];
foreach ($rows as $r) {
  $dbD = $dbDExample;
  foreach ($r as $key => $data) {
    $dbD[$key] = $data;
  }
  handleUri($dbD);

  $db[] = $dbD;
}

// var_dump($db);

// For products: set explode char -> set uri
function handleUri(&$dbD) {
  $explodeChar = null;
  $dbD['uri'] = null;

  switch (true) {
    case str_contains($dbD['model'], 'Кисть плоская СТАНДАРТ'):
      $explodeChar = '/';
      $dbD['uri'] = '/catalog/kisti-malyarnyie/kist-plosk-stndrt-nat-vors-';
      break;
    case str_contains($dbD['model'], 'Кисть плоская ЕВРО'):
      $explodeChar = '/';
      $dbD['uri'] = '/catalog/kisti-malyarnyie/kist-plosk-evro-nat-vors-';
      break;
    case str_contains($dbD['model'], 'Кисть лавковец мини'):
      $explodeChar = 'х';
      $dbD['uri'] = '/catalog/kisti-malyarnyie/kist-lavkovets-mini-nat-vors-';
      break;
    case str_contains($dbD['model'], 'Кисть радиаторная'):
      $explodeChar = '/';
      $dbD['uri'] = '/catalog/kisti-malyarnyie/kist-radiatornaya-nat-vors-';
      break;
    case str_contains($dbD['model'], 'Запаска нитевая "стандарт"'):
      $explodeChar = 'х';
      $dbD['uri'] = '/catalog/valiki-malyarnyie/zapaska-nitevaya-stndrt-';
      break;
    case str_contains($dbD['model'], 'Валик нитевой "стандарт"'):
      $explodeChar = 'х';
      $dbD['uri'] = '/catalog/valiki-malyarnyie/valik-nitevoi-stndrt-';
      break;
    case str_contains($dbD['model'], 'Запаска нитевая "пчелка"'):
      $explodeChar = 'х';
      $dbD['uri'] = '/catalog/valiki-malyarnyie/zapaska-nitevaya-pchelka-';
      break;
    case str_contains($dbD['model'], 'Валик нитевой "пчелка"'):
      $explodeChar = 'х';
      $dbD['uri'] = '/catalog/valiki-malyarnyie/valik-nitevoi-pchelka-';
      break;
    case str_contains($dbD['model'], 'Запаска велюровая'):
      $explodeChar = 'х';
      $dbD['uri'] = '/catalog/valiki-malyarnyie/zapaska-velyurovaya-';
      break;
    case str_contains($dbD['model'], 'Валик велюровый'):
      $explodeChar = 'х';
      $dbD['uri'] = '/catalog/valiki-malyarnyie/valik-velyurovyi-';
      break;
    case str_contains($dbD['model'], 'Ручка для валиков'):
      $explodeChar = 'х';
      $dbD['uri'] = '/catalog/valiki-malyarnyie/ruchka-dlya-valikov-';
      break;  
    default:
      // var_dump($dbD);
      throw new Exception('Unknown product model');
  }

  $parts = explode($explodeChar, $dbD['variant']);
  if (!isset($parts[1])) {
    $uriPart = extractNumbers($parts[0]);
    $dbD['uri'] .= $uriPart;
  } else {
    $parts[1] = extractNumbers($parts[1]);
    $dbD['uri'] .= $parts[0] . '-' . $parts[1];
  }
}


function extractNumbers($input) {
    // Using preg_match to find all numbers (including decimals)
    if (preg_match('/^(\d+\.?\d*)/', $input, $matches)) {
        return $matches[1];
    }
    return null; // or return 0 if no numbers found
}
