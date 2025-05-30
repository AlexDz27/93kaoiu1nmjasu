<?php

require 'index.php';

$dbExample = require 'db.php';
$dbDExample = $dbExample['0100-0000-10'];

$db = [];
$lastModel = '';
foreach ($rows as $r) {
  $dbD = $dbDExample;
  foreach ($r as $key => $data) {
    $dbD[$key] = $data;
  }
  if ($dbD['model']) {
    $modelWoNewline = str_replace(["\r\n", "\n", "\r"], '', $dbD['model']);
    $lastModel = $modelWoNewline;
  }
  $dbD['model'] = $lastModel;
  handleUri($dbD);

  $db[] = $dbD;
}

// var_dump($db);


function handleUri(&$dbD) {
  if (str_contains($dbD['model'], 'Кисть лавковец мини')) {
    $parts = explode('х', $dbD['variant']);
    $parts[1] = extractNumbers($parts[1]);
    $dbD['uri'] = '/catalog/kisti-malyarnyie/kist-lavkovets-mini-nat-vors-';  
  } else {
    $parts = explode('/', $dbD['variant']);
    $parts[1] = extractNumbers($parts[1]);
    if (str_contains($dbD['model'], 'Кисть плоская ЕВРО')) {
      $dbD['uri'] = '/catalog/kisti-malyarnyie/kist-plosk-evro-nat-vors-';  
    } else if (str_contains($dbD['model'], 'Кисть радиаторная')) {
      $dbD['uri'] = '/catalog/kisti-malyarnyie/kist-radiatornaya-evro-nat-vors-';  
    }
  }
  $dbD['uri'] .= $parts[0] . '-' . $parts[1];
}

function extractNumbers($input) {
    // Using preg_match to find all numbers (including decimals)
    if (preg_match('/^(\d+\.?\d*)/', $input, $matches)) {
        return $matches[1];
    }
    return null; // or return 0 if no numbers found
}
