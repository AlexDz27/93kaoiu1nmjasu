<?php

$rows = require 'readExcel.php';
$exampleProduct = [
  'art' => '0100-0000-10',
  'price' => 1.02,
  'category' => 'Кисти малярные',
  'model' => 'Кисть плоская СТАНДАРТ, натуральный ворс',
  'variant' => '1/25мм',
  'unit' => 'шт.',
  'upakMal' => 12,
  'upakKrup' => 1200,
  'uri' => '/catalog/kisti-malyarnyie/kist-plosk-stndrt-nat-vors-',
  'img' => '',
  'galleryImgs' => [],
];

$db = [];
foreach ($rows as $row) {
  $dbDatum = $exampleProduct;
  foreach ($row as $key => $data) {
    $dbDatum[$key] = $data;
  }
  handleUri($dbDatum);

  $db[] = $dbDatum;
}

var_dump($db);

function handleUri(&$dbDatum) {
  $dbDatum['uri'] = '/catalog/' . slugify($dbDatum['category']) . '/' . slugify($dbDatum['model']) . '-' . slugify($dbDatum['variant']);
}


function slugify($text) {
  $text = str_replace('х', 'x', $text);
  $text = str_replace('ь', '', $text);
  $text = str_replace('ъ', '', $text);
  $text = str_replace('я', 'ya', $text);
  // Transliterate to ASCII
  $text = transliterator_transliterate('Any-Latin; Latin-ASCII; [\u0080-\u7fff] remove', $text);
  // Replace non-alphanumeric with dashes
  $text = preg_replace('/[^a-z0-9]+/i', '-', $text);
  // Trim and lowercase
  $text = trim($text, '-');
  $text = strtolower($text);
  return $text;
}

function extractNumbers($input) {
    // Using preg_match to find all numbers (including decimals)
    if (preg_match('/^(\d+\.?\d*)/', $input, $matches)) {
        return $matches[1];
    }
    return null; // or return 0 if no numbers found
}
