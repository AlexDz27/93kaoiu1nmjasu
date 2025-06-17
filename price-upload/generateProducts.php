<?php

$rows = require 'price-upload/readProductsFromExcel.php';
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
  'description' => 'Для работ со всеми видами лакокрасочных материалов.',
  'isHit' => false,
  'img' => '/img/catalog-normal-res/kist.png',
  'galleryImgs' => [],
];

$products = [
  'sprava' => [],
  'roshma' => [],
];
foreach ($rows['sprava'] as $row) {
  $product = $exampleProduct;
  foreach ($row as $key => $data) {
    $product[$key] = $data;
  }
  $product['uri'] = '/catalog/' . slugify($product['category']) . '/' . slugify($product['model']) . '-' . slugify($product['variant']);

  $products['sprava'][] = $product;
}
foreach ($rows['roshma'] as $row) {
  $product = $exampleProduct;
  foreach ($row as $key => $data) {
    $product[$key] = $data;
  }

  $products['roshma'][] = $product;
}

return $products;


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
