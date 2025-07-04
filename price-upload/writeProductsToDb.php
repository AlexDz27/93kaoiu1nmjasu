<?php

// require 'lib/PhpArrDbWriter.php';
$db = require 'db.php';
$products = require 'price-upload/generateProducts.php';

foreach ($products['sprava'] as $product) {
  $db['products']['sprava'][$product['art']] = $product;
}
foreach ($products['roshma'] as $product) {
  $db['products']['roshma'][$product['art']] = $product;
}

// $db['products']['sprava']['0100-0000-10']['isHit'] = true;
// $db['products']['sprava']['0100-0000-15']['isHit'] = true;

// Imgs
// Kisti
$db['products']['sprava']['0100-0000-10']['img'] = '/img/product/kisti/0100-0000-10_1.jpg';
$db['products']['sprava']['0100-0000-10']['galleryImgs'] = ['/img/product/kisti/0100-0000-10_2.jpg', '/img/product/kisti/0100-0000-10_4.jpg', '/img/product/kisti/0100-0000-10.jpg'];
$db['products']['sprava']['0100-0000-15']['img'] = '/img/product/kisti/0100-0000-15.gif';
$db['products']['sprava']['0100-0000-15']['galleryImgs'] = [];
$db['products']['sprava']['0100-0000-20']['img'] = '/img/product/kisti/0100-0000-20_1.jpg';
$db['products']['sprava']['0100-0000-20']['galleryImgs'] = ['/img/product/kisti/0100-0000-20_2.jpg', '/img/product/kisti/0100-0000-20_4.jpg', '/img/product/kisti/0100-0000-20.jpg'];
$db['products']['sprava']['0100-0000-25']['img'] = '/img/product/kisti/0100-0000-25_1.jpg';
$db['products']['sprava']['0100-0000-25']['galleryImgs'] = ['/img/product/kisti/0100-0000-25_2.jpg', '/img/product/kisti/0100-0000-25_4.jpg', '/img/product/kisti/0100-0000-25.jpg'];
$db['products']['sprava']['0100-0000-30']['img'] = '/img/product/kisti/0100-0000-30_1.jpg';
$db['products']['sprava']['0100-0000-30']['galleryImgs'] = ['/img/product/kisti/0100-0000-30_2.jpg', '/img/product/kisti/0100-0000-30_4.jpg', '/img/product/kisti/0100-0000-30.jpg'];
$db['products']['sprava']['0100-0000-40']['img'] = '/img/product/kisti/0100-0000-40_1.jpg';
$db['products']['sprava']['0100-0000-40']['galleryImgs'] = ['/img/product/kisti/0100-0000-40_2.jpg', '/img/product/kisti/0100-0000-40_4.jpg', '/img/product/kisti/0100-0000-40.jpg'];
$db['products']['sprava']['0100-0000-50']['img'] = '/img/product/kisti/0100-0000-50_1.jpg';
$db['products']['sprava']['0100-0000-50']['galleryImgs'] = ['/img/product/kisti/0100-0000-50_2.jpg', '/img/product/kisti/0100-0000-50_4.jpg', '/img/product/kisti/0100-0000-50.jpg'];

$db['products']['sprava']['0110-0000-10']['img'] = '/img/product/kisti/0110-0000-10_1.jpg';
$db['products']['sprava']['0110-0000-10']['galleryImgs'] = ['/img/product/kisti/0110-0000-10_2.jpg', '/img/product/kisti/0110-0000-10_4.jpg', '/img/product/kisti/0110-0000-10.jpg'];
$db['products']['sprava']['0110-0000-15']['img'] = '/img/product/kisti/0110-0000-15_1.jpg';
$db['products']['sprava']['0110-0000-15']['galleryImgs'] = ['/img/product/kisti/0110-0000-15_2.jpg', '/img/product/kisti/0110-0000-15_4.jpg', '/img/product/kisti/0110-0000-15.jpg'];
$db['products']['sprava']['0110-0000-20']['img'] = '/img/product/kisti/0110-0000-20_1.jpg';
$db['products']['sprava']['0110-0000-20']['galleryImgs'] = ['/img/product/kisti/0110-0000-20_2.jpg', '/img/product/kisti/0110-0000-20_4.jpg', '/img/product/kisti/0110-0000-20.jpg'];
$db['products']['sprava']['0110-0000-25']['img'] = '/img/product/kisti/0110-0000-25_1.jpg';
$db['products']['sprava']['0110-0000-25']['galleryImgs'] = ['/img/product/kisti/0110-0000-25_2.jpg', '/img/product/kisti/0110-0000-25_4.jpg', '/img/product/kisti/0110-0000-25.jpg'];
$db['products']['sprava']['0110-0000-30']['img'] = '/img/product/kisti/0110-0000-30_1.jpg';
$db['products']['sprava']['0110-0000-30']['galleryImgs'] = ['/img/product/kisti/0110-0000-30_2.jpg', '/img/product/kisti/0110-0000-30_4.jpg', '/img/product/kisti/0110-0000-30.jpg'];
$db['products']['sprava']['0110-0000-40']['img'] = '/img/product/kisti/0110-0000-40_1.jpg';
$db['products']['sprava']['0110-0000-40']['galleryImgs'] = ['/img/product/kisti/0110-0000-40_2.jpg', '/img/product/kisti/0110-0000-40_4.jpg', '/img/product/kisti/0110-0000-40.jpg'];

$db['products']['sprava']['0180-0000-10']['img'] = '/img/product/kisti/0180-0000-10_1.jpg';
$db['products']['sprava']['0180-0000-10']['galleryImgs'] = ['/img/product/kisti/0180-0000-10_2.jpg', '/img/product/kisti/0180-0000-10_4_5.jpg', '/img/product/kisti/0180-0000-10.jpg'];
$db['products']['sprava']['0180-0000-15']['img'] = '/img/product/kisti/0180-0000-15_1.jpg';
$db['products']['sprava']['0180-0000-15']['galleryImgs'] = ['/img/product/kisti/0180-0000-15_2.jpg', '/img/product/kisti/0180-0000-15_4_5.jpg', '/img/product/kisti/0180-0000-15.jpg'];
$db['products']['sprava']['0180-0000-20']['img'] = '/img/product/kisti/0180-0000-20_1.jpg';
$db['products']['sprava']['0180-0000-20']['galleryImgs'] = ['/img/product/kisti/0180-0000-20_2.jpg', '/img/product/kisti/0180-0000-20_4_5.jpg', '/img/product/kisti/0180-0000-20.jpg'];
$db['products']['sprava']['0230-0030-07']['img'] = '/img/product/kisti/0230-0030-07_1.jpg';
$db['products']['sprava']['0230-0030-07']['galleryImgs'] = ['/img/product/kisti/0230-0030-07_2.jpg', '/img/product/kisti/0230-0030-07_4.jpg', '/img/product/kisti/0230-0030-07.jpg'];
$db['products']['sprava']['0230-0030-10']['img'] = '/img/product/kisti/0230-0030-10_1.jpg';
$db['products']['sprava']['0230-0030-10']['galleryImgs'] = ['/img/product/kisti/0230-0030-10_2.jpg', '/img/product/kisti/0230-0030-10_4.jpg', '/img/product/kisti/0230-0030-10.jpg'];
$db['products']['sprava']['0230-0030-12']['img'] = '/img/product/kisti/0230-0030-12_1.jpg';
$db['products']['sprava']['0230-0030-12']['galleryImgs'] = ['/img/product/kisti/0230-0030-12_2.jpg', '/img/product/kisti/0230-0030-12_4.jpg', '/img/product/kisti/0230-0030-12.jpg'];
$db['products']['sprava']['0230-0040-14']['img'] = '/img/product/kisti/0230-0040-14_1.jpg';
$db['products']['sprava']['0230-0040-14']['galleryImgs'] = ['/img/product/kisti/0230-0040-14_2.jpg', '/img/product/kisti/0230-0040-14_4.jpg', '/img/product/kisti/0230-0040-14.jpg'];
$db['products']['sprava']['0230-0050-15']['img'] = '/img/product/kisti/0230-0050-15_1.jpg';
$db['products']['sprava']['0230-0050-15']['galleryImgs'] = ['/img/product/kisti/0230-0050-15_2.jpg', '/img/product/kisti/0230-0050-15_4.jpg', '/img/product/kisti/0230-0050-15.jpg'];
// Запаски
$db['products']['sprava']['0300-0615-05']['img'] = '/img/product/valiki/0300-0615-05.gif';
$db['products']['sprava']['0300-0615-05']['galleryImgs'] = [];
$db['products']['sprava']['0300-0615-10']['img'] = '/img/product/valiki/0300-0615-10_2.jpg';
$db['products']['sprava']['0300-0615-10']['galleryImgs'] = ['/img/product/valiki/0300-0615-10_4.jpg', '/img/product/valiki/0300-0615-10_3.jpg', '/img/product/valiki/0300-0615-10.jpg', '/img/product/valiki/0300-0615-10_5.jpg'];
$db['products']['sprava']['0300-0630-10']['img'] = '/img/product/valiki/0300-0630-10_2.jpg';
$db['products']['sprava']['0300-0630-10']['galleryImgs'] = ['/img/product/valiki/0300-0630-10_4.jpg', '/img/product/valiki/0300-0630-10_3.jpg', '/img/product/valiki/0300-0630-10.jpg', '/img/product/valiki/0300-0630-10_5.jpg'];
$db['products']['sprava']['0300-0630-15']['img'] = '/img/product/valiki/0300-0630-15_2.jpg';
$db['products']['sprava']['0300-0630-15']['galleryImgs'] = ['/img/product/valiki/0300-0630-15_4.jpg', '/img/product/valiki/0300-0630-15_3.jpg', '/img/product/valiki/0300-0630-15.jpg', '/img/product/valiki/0300-0630-15_5.jpg'];
$db['products']['sprava']['0300-2-01848-18']['img'] = '/img/product/valiki/0300-2-01848-18_2.jpg';
$db['products']['sprava']['0300-2-01848-18']['galleryImgs'] = ['/img/product/valiki/0300-2-01848-18_4.jpg', '/img/product/valiki/0300-2-01848-18_3.jpg', '/img/product/valiki/0300-2-01848-18.jpg', '/img/product/valiki/0300-2-01848-18_5.jpg'];
$db['products']['sprava']['0300-2-01848-23']['img'] = '/img/product/valiki/0300-2-01848-23_2.jpg';
$db['products']['sprava']['0300-2-01848-23']['galleryImgs'] = ['/img/product/valiki/0300-2-01848-23_4.jpg', '/img/product/valiki/0300-2-01848-23_3.jpg', '/img/product/valiki/0300-2-01848-23.jpg', '/img/product/valiki/0300-2-01848-23_5.jpg'];
$db['products']['sprava']['0301-0615-05']['img'] = '/img/product/valiki/0301-0615-05_2.jpg';
$db['products']['sprava']['0301-0615-05']['galleryImgs'] = ['/img/product/valiki/0301-0615-05_4.jpg', '/img/product/valiki/0301-0615-05_3.jpg', '/img/product/valiki/0301-0615-05.jpg', '/img/product/valiki/0301-0615-05_5.jpg'];
$db['products']['sprava']['0301-0615-10']['img'] = '/img/product/valiki/0301-0615-10_2.jpg';
$db['products']['sprava']['0301-0615-10']['galleryImgs'] = ['/img/product/valiki/0301-0615-10_4.jpg', '/img/product/valiki/0301-0615-10_3.jpg', '/img/product/valiki/0301-0615-10.jpg', '/img/product/valiki/0301-0615-10_5.jpg'];
// TODO: same as the next one
$db['products']['sprava']['0301-0615-30']['img'] = '/img/product/valiki/0301-0630-30_2.jpg';
$db['products']['sprava']['0301-0615-30']['galleryImgs'] = ['/img/product/valiki/0301-0630-30_4.jpg', '/img/product/valiki/0301-0630-30_3.jpg', '/img/product/valiki/0301-0630-30.jpg', '/img/product/valiki/0301-0630-30_5.jpg'];
$db['products']['sprava']['0301-0630-30']['img'] = '/img/product/valiki/0301-0630-30_2.jpg';
$db['products']['sprava']['0301-0630-30']['galleryImgs'] = ['/img/product/valiki/0301-0630-30_4.jpg', '/img/product/valiki/0301-0630-30_3.jpg', '/img/product/valiki/0301-0630-30.jpg', '/img/product/valiki/0301-0630-30_5.jpg'];
$db['products']['sprava']['0310-1848-18']['img'] = '/img/product/valiki/0310-1848-18_2.jpg';
$db['products']['sprava']['0310-1848-18']['galleryImgs'] = ['/img/product/valiki/0310-1848-18_4.jpg', '/img/product/valiki/0310-1848-18_3.jpg', '/img/product/valiki/0310-1848-18.jpg', '/img/product/valiki/0310-1848-18_5.jpg'];
$db['products']['sprava']['0310-1848-23']['img'] = '/img/product/valiki/0310-1848-23_2.jpg';
$db['products']['sprava']['0310-1848-23']['galleryImgs'] = ['/img/product/valiki/0310-1848-23_4.jpg', '/img/product/valiki/0310-1848-23_3.jpg', '/img/product/valiki/0310-1848-23_5.jpg', '/img/product/valiki/0310-1848-23_00.jpg'];
$db['products']['sprava']['0450-0615-05']['img'] = '/img/product/valiki/0450-0615-05_2.jpg';
$db['products']['sprava']['0450-0615-05']['galleryImgs'] = ['/img/product/valiki/0450-0615-05_3.jpg', '/img/product/valiki/0450-0615-05_5.jpg', '/img/product/valiki/0450-0615-05_4.jpg', '/img/product/valiki/0450-0615-05.jpg', '/img/product/valiki/0450-0615-05_6.jpg'];
$db['products']['sprava']['0450-0615-10']['img'] = '/img/product/valiki/0450-0615-10_2.jpg';
$db['products']['sprava']['0450-0615-10']['galleryImgs'] = ['/img/product/valiki/0450-0615-10_4.jpg', '/img/product/valiki/0450-0615-10_3.jpg', '/img/product/valiki/0450-0615-10.jpg', '/img/product/valiki/0450-0615-10_5.jpg'];
$db['products']['sprava']['0450-0615-15']['img'] = '/img/product/valiki/0450-0615-15_2.jpg';
$db['products']['sprava']['0450-0615-15']['galleryImgs'] = ['/img/product/valiki/0450-0615-15_4.jpg', '/img/product/valiki/0450-0615-15_3.jpg', '/img/product/valiki/0450-0615-15.jpg', '/img/product/valiki/0450-0615-15_5.jpg'];
$db['products']['sprava']['0450-0630-10']['img'] = '/img/product/valiki/0450-0630-10_2.jpg';
$db['products']['sprava']['0450-0630-10']['galleryImgs'] = ['/img/product/valiki/0450-0630-10_4.jpg', '/img/product/valiki/0450-0630-10_3.jpg', '/img/product/valiki/0450-0630-10.jpg', '/img/product/valiki/0450-0630-10_5.jpg'];
$db['products']['sprava']['0451-0848-18']['img'] = '/img/product/valiki/0451-0848-18_2.jpg';
$db['products']['sprava']['0451-0848-18']['galleryImgs'] = ['/img/product/valiki/0451-0848-18_4.jpg', '/img/product/valiki/0451-0848-18_3.jpg', '/img/product/valiki/0451-0848-18.jpg', '/img/product/valiki/0451-0848-18_5.jpg'];
$db['products']['sprava']['0451-0848-24']['img'] = '/img/product/valiki/0451-0848-24_2.jpg';
$db['products']['sprava']['0451-0848-24']['galleryImgs'] = ['/img/product/valiki/0451-0848-24_4.jpg', '/img/product/valiki/0451-0848-24_3.jpg', '/img/product/valiki/0451-0848-24.jpg', '/img/product/valiki/0451-0848-24_5.jpg'];
// Валики
$db['products']['sprava']['0301-10600000']['img'] = '/img/product/valiki/0301-11100000_2.jpg';
$db['products']['sprava']['0301-10600000']['galleryImgs'] = ['/img/product/valiki/0301-11100000_4.jpg', '/img/product/valiki/0301-11100000_5.jpg', '/img/product/valiki/0301-11100000.jpg'];
$db['products']['sprava']['0301-11100000']['img'] = '/img/product/valiki/0301-11100000_2.jpg';
$db['products']['sprava']['0301-11100000']['galleryImgs'] = ['/img/product/valiki/0301-11100000_4.jpg', '/img/product/valiki/0301-11100000_5.jpg', '/img/product/valiki/0301-11100000.jpg'];
$db['products']['sprava']['0301-11130000']['img'] = '/img/product/valiki/0301-11130000_2.jpg';
$db['products']['sprava']['0301-11130000']['galleryImgs'] = ['/img/product/valiki/0301-11130000_4.jpg', '/img/product/valiki/0301-11130000_5.jpg', '/img/product/valiki/0301-11130000.jpg'];
$db['products']['sprava']['0301-11500000']['img'] = '/img/product/valiki/0301-11500000_2.jpg';
$db['products']['sprava']['0301-11500000']['galleryImgs'] = ['/img/product/valiki/0301-11500000_4.jpg', '/img/product/valiki/0301-11500000_5.jpg', '/img/product/valiki/0301-11500000.jpg'];
$db['products']['sprava']['0302-21800000']['img'] = '/img/product/valiki/0302-21800000_2.jpg';
$db['products']['sprava']['0302-21800000']['galleryImgs'] = ['/img/product/valiki/0302-21800000_4.jpg', '/img/product/valiki/0302-21800000_5.jpg', '/img/product/valiki/0302-21800000.jpg'];
$db['products']['sprava']['0302-22400000']['img'] = '/img/product/valiki/0302-22400000_1.jpg';
$db['products']['sprava']['0302-22400000']['galleryImgs'] = ['/img/product/valiki/0302-22400000_3.jpg', '/img/product/valiki/0302-22400000_2.jpg', '/img/product/valiki/0302-22400000.jpg'];
$db['products']['sprava']['0301-0601-006']['img'] = '/img/product/valiki/0301-0601-006_2.jpg';
$db['products']['sprava']['0301-0601-006']['galleryImgs'] = ['/img/product/valiki/0301-0601-006_4.jpg', '/img/product/valiki/0301-0601-006_5.jpg', '/img/product/valiki/0301-0601-006.jpg'];
$db['products']['sprava']['0301-0601-015']['img'] = '/img/product/valiki/0301-0601-015_2.jpg';
$db['products']['sprava']['0301-0601-015']['galleryImgs'] = ['/img/product/valiki/0301-0601-015_4.jpg', '/img/product/valiki/0301-0601-015_5.jpg', '/img/product/valiki/0301-0601-015.jpg'];
$db['products']['sprava']['0301-0601-030']['img'] = '/img/product/valiki/0301-0601-030_2.jpg';
$db['products']['sprava']['0301-0601-030']['galleryImgs'] = ['/img/product/valiki/0301-0601-030_4.jpg', '/img/product/valiki/0301-0601-030_5.jpg', '/img/product/valiki/0301-0601-030.jpg'];
$db['products']['sprava']['0301-0601-130']['img'] = '/img/product/valiki/0301-0601-130_2.jpg';
$db['products']['sprava']['0301-0601-130']['galleryImgs'] = ['/img/product/valiki/0301-0601-130_4.jpg', '/img/product/valiki/0301-0601-130_5.jpg', '/img/product/valiki/0301-0601-130.jpg'];
$db['products']['sprava']['0311-11800000']['img'] = '/img/product/valiki/0311-11800000_2.jpg';
$db['products']['sprava']['0311-11800000']['galleryImgs'] = ['/img/product/valiki/0311-11800000_4.jpg', '/img/product/valiki/0311-11800000_5.jpg', '/img/product/valiki/0311-11800000.jpg'];
$db['products']['sprava']['0311-24000000']['img'] = '/img/product/valiki/0311-24000000_2.jpg';
$db['products']['sprava']['0311-24000000']['galleryImgs'] = ['/img/product/valiki/0311-24000000_4.jpg', '/img/product/valiki/0311-24000000_5.jpg', '/img/product/valiki/0311-24000000.jpg'];
$db['products']['sprava']['0451-30600000']['img'] = '/img/product/valiki/0451-30600000_2.jpg';
$db['products']['sprava']['0451-30600000']['galleryImgs'] = ['/img/product/valiki/0451-30600000_4.jpg', '/img/product/valiki/0451-30600000_5.jpg', '/img/product/valiki/0451-30600000.jpg'];
$db['products']['sprava']['0451-31100000']['img'] = '/img/product/valiki/0451-31100000_2.jpg';
$db['products']['sprava']['0451-31100000']['galleryImgs'] = ['/img/product/valiki/0451-31100000_4.jpg', '/img/product/valiki/0451-31100000_5.jpg', '/img/product/valiki/0451-31100000.jpg'];
$db['products']['sprava']['0451-31500000']['img'] = '/img/product/valiki/0451-31500000_2.jpg';
$db['products']['sprava']['0451-31500000']['galleryImgs'] = ['/img/product/valiki/0451-31500000_4.jpg', '/img/product/valiki/0451-31500000_5.jpg', '/img/product/valiki/0451-31500000.jpg'];
$db['products']['sprava']['0451-31130000']['img'] = '/img/product/valiki/0451-31130000_2.jpg';
$db['products']['sprava']['0451-31130000']['galleryImgs'] = ['/img/product/valiki/0451-31130000_4.jpg', '/img/product/valiki/0451-31130000_5.jpg', '/img/product/valiki/0451-31130000.jpg'];
$db['products']['sprava']['0540-0848-18']['img'] = '/img/product/valiki/0540-0848-18_2.jpg';
$db['products']['sprava']['0540-0848-18']['galleryImgs'] = ['/img/product/valiki/0540-0848-18_4.jpg', '/img/product/valiki/0540-0848-18_5.jpg', '/img/product/valiki/0540-0848-18.jpg'];
$db['products']['sprava']['0540-0848-24']['img'] = '/img/product/valiki/0540-0848-24_2.jpg';
$db['products']['sprava']['0540-0848-24']['galleryImgs'] = ['/img/product/valiki/0540-0848-24_4.jpg', '/img/product/valiki/0540-0848-24_5.jpg', '/img/product/valiki/0540-0848-24.jpg'];
$db['products']['sprava']['0575-0600-05']['img'] = '/img/product/valiki/0575-0600-05.gif';
$db['products']['sprava']['0575-0600-05']['galleryImgs'] = [];
$db['products']['sprava']['0575-0600-10']['img'] = '/img/product/valiki/0575-0600-10.gif';
$db['products']['sprava']['0575-0600-10']['galleryImgs'] = [];
$db['products']['sprava']['0575-0600-15']['img'] = '/img/product/valiki/0575-0600-15.gif';
$db['products']['sprava']['0575-0600-15']['galleryImgs'] = [];
$db['products']['sprava']['0580-0800-18']['img'] = '/img/product/valiki/0580-0800-18.gif';
$db['products']['sprava']['0580-0800-18']['galleryImgs'] = [];
$db['products']['sprava']['0580-0800-24']['img'] = '/img/product/valiki/0580-0800-24.gif';
$db['products']['sprava']['0580-0800-24']['galleryImgs'] = [];
// abraziv krugi
$db['products']['sprava']['2897-0125-10']['img'] = '/img/product/abraziv/2897-0125-10_1.jpg';
$db['products']['sprava']['2897-0125-10']['galleryImgs'] = ['/img/product/abraziv/2897-0125-10_2.jpg', '/img/product/abraziv/2897-0125-10_5.jpg', '/img/product/abraziv/2897-0125-10_4.jpg', '/img/product/abraziv/2897-0125-10.jpg'];
$db['products']['sprava']['2897-0125-12']['img'] = '/img/product/abraziv/2897-0125-12_1.jpg';
$db['products']['sprava']['2897-0125-12']['galleryImgs'] = ['/img/product/abraziv/2897-0125-12_2.jpg', '/img/product/abraziv/2897-0125-12_5.jpg', '/img/product/abraziv/2897-0125-12_4.jpg', '/img/product/abraziv/2897-0125-12.jpg'];
$db['products']['sprava']['2897-0230-16']['img'] = '/img/product/abraziv/2897-0230-16_1.jpg';
$db['products']['sprava']['2897-0230-16']['galleryImgs'] = ['/img/product/abraziv/2897-0230-16_2.jpg', '/img/product/abraziv/2897-0230-16_5.jpg', '/img/product/abraziv/2897-0230-16_4.jpg', '/img/product/abraziv/2897-0230-16.jpg'];
$db['products']['sprava']['2897-0123-20']['img'] = '/img/product/abraziv/2897-0123-20_1.jpg';
$db['products']['sprava']['2897-0123-20']['galleryImgs'] = ['/img/product/abraziv/2897-0123-20_2.jpg', '/img/product/abraziv/2897-0123-20_5.jpg', '/img/product/abraziv/2897-0123-20_4.jpg', '/img/product/abraziv/2897-0123-20.jpg'];
$db['products']['sprava']['2812-0125-24']['img'] = '/img/product/abraziv/2812-0125-24_1.jpg';
$db['products']['sprava']['2812-0125-24']['galleryImgs'] = ['/img/product/abraziv/2812-0125-24_2.jpg', '/img/product/abraziv/2812-0125-24_5.jpg', '/img/product/abraziv/2812-0125-24_4.jpg', '/img/product/abraziv/2812-0125-24.jpg'];
$db['products']['sprava']['2812-0125-26']['img'] = '/img/product/abraziv/2812-0125-26_1.jpg';
$db['products']['sprava']['2812-0125-26']['galleryImgs'] = ['/img/product/abraziv/2812-0125-26_2.jpg', '/img/product/abraziv/2812-0125-26_5.jpg', '/img/product/abraziv/2812-0125-26_4.jpg', '/img/product/abraziv/2812-0125-26.jpg'];
$db['products']['sprava']['2812-0125-04']['img'] = '/img/product/abraziv/2812-0125-04_1.jpg';
$db['products']['sprava']['2812-0125-04']['galleryImgs'] = ['/img/product/abraziv/2812-0125-04_2.jpg', '/img/product/abraziv/2812-0125-04_5.jpg', '/img/product/abraziv/2812-0125-04_4.jpg', '/img/product/abraziv/2812-0125-04.jpg'];
$db['products']['sprava']['2812-0125-06']['img'] = '/img/product/abraziv/2812-0125-06_1.jpg';
$db['products']['sprava']['2812-0125-06']['galleryImgs'] = ['/img/product/abraziv/2812-0125-06_2.jpg', '/img/product/abraziv/2812-0125-06_5.jpg', '/img/product/abraziv/2812-0125-06_4.jpg', '/img/product/abraziv/2812-0125-06.jpg'];
$db['products']['sprava']['2812-0125-08']['img'] = '/img/product/abraziv/2812-0125-08_1.jpg';
$db['products']['sprava']['2812-0125-08']['galleryImgs'] = ['/img/product/abraziv/2812-0125-08_2.jpg', '/img/product/abraziv/2812-0125-08_5.jpg', '/img/product/abraziv/2812-0125-08_4.jpg', '/img/product/abraziv/2812-0125-08.jpg'];
$db['products']['sprava']['2812-0125-10']['img'] = '/img/product/abraziv/2812-0125-10_1.jpg';
$db['products']['sprava']['2812-0125-10']['galleryImgs'] = ['/img/product/abraziv/2812-0125-10_2.jpg', '/img/product/abraziv/2812-0125-10_5.jpg', '/img/product/abraziv/2812-0125-10_4.jpg', '/img/product/abraziv/2812-0125-10.jpg'];
$db['products']['sprava']['2812-0125-12']['img'] = '/img/product/abraziv/2812-0125-12_1.jpg';
$db['products']['sprava']['2812-0125-12']['galleryImgs'] = ['/img/product/abraziv/2812-0125-12_2.jpg', '/img/product/abraziv/2812-0125-12_5.jpg', '/img/product/abraziv/2812-0125-12_4.jpg', '/img/product/abraziv/2812-0125-12.jpg'];
$db['products']['sprava']['0796-0125-60']['img'] = '/img/product/abraziv/0796-0125-60_1.jpg';
$db['products']['sprava']['0796-0125-60']['galleryImgs'] = ['/img/product/abraziv/0796-0125-60_2.jpg', '/img/product/abraziv/0796-0125-60_5.jpg', '/img/product/abraziv/0796-0125-60_4.jpg', '/img/product/abraziv/0796-0125-60.jpg'];
$db['products']['sprava']['0797-0125-00']['img'] = '/img/product/abraziv/0797-0125-00_1.jpg';
$db['products']['sprava']['0797-0125-00']['galleryImgs'] = ['/img/product/abraziv/0797-0125-00_2.jpg', '/img/product/abraziv/0797-0125-00_4.jpg', '/img/product/abraziv/0797-0125-00_3.jpg', '/img/product/abraziv/0797-0125-00.jpg'];
$db['products']['sprava']['0797-0230-00']['img'] = '/img/product/abraziv/0797-0230-00_1.jpg';
$db['products']['sprava']['0797-0230-00']['galleryImgs'] = ['/img/product/abraziv/0797-0230-00_2.jpg', '/img/product/abraziv/0797-0230-00_4.jpg', '/img/product/abraziv/0797-0230-00_3.jpg', '/img/product/abraziv/0797-0230-00.jpg'];
$db['products']['sprava']['0797-0125-01']['img'] = '/img/product/abraziv/0797-0125-01_1.jpg';
$db['products']['sprava']['0797-0125-01']['galleryImgs'] = ['/img/product/abraziv/0797-0125-01_2.jpg', '/img/product/abraziv/0797-0125-01_4.jpg', '/img/product/abraziv/0797-0125-01_3.jpg', '/img/product/abraziv/0797-0125-01.jpg'];
$db['products']['sprava']['0797-2125-00']['img'] = '/img/product/abraziv/0797-2125-00_1.jpg';
$db['products']['sprava']['0797-2125-00']['galleryImgs'] = ['/img/product/abraziv/0797-2125-00_2.jpg', '/img/product/abraziv/0797-2125-00_4.jpg', '/img/product/abraziv/0797-2125-00_3.jpg', '/img/product/abraziv/0797-2125-00.jpg'];
$db['products']['sprava']['0797-2230-00']['img'] = '/img/product/abraziv/0797-2230-00_1.jpg';
$db['products']['sprava']['0797-2230-00']['galleryImgs'] = ['/img/product/abraziv/0797-2230-00_2.jpg', '/img/product/abraziv/0797-2230-00_4.jpg', '/img/product/abraziv/0797-2230-00_3.jpg', '/img/product/abraziv/0797-2230-00.jpg'];
$db['products']['sprava']['0797-1125-00']['img'] = '/img/product/abraziv/0797-1125-00.gif'; 
$db['products']['sprava']['0797-1125-00']['galleryImgs'] = [];
$db['products']['sprava']['0797-1230-00']['img'] = '/img/product/abraziv/0797-1230-00_1.jpg';
$db['products']['sprava']['0797-1230-00']['galleryImgs'] = ['/img/product/abraziv/0797-1230-00_2.jpg', '/img/product/abraziv/0797-1230-00_4.jpg', '/img/product/abraziv/0797-1230-00_3.jpg', '/img/product/abraziv/0797-1230-00.jpg'];
$db['products']['sprava']['0797-1350-20']['img'] = '/img/product/abraziv/0797-1350-20.gif';
$db['products']['sprava']['0797-1350-20']['galleryImgs'] = [];
$db['products']['sprava']['0797-1350-21']['img'] = '/img/product/abraziv/0797-1350-21_1.jpg';
$db['products']['sprava']['0797-1350-21']['galleryImgs'] = ['/img/product/abraziv/0797-1350-21_2.jpg', '/img/product/abraziv/0797-1350-21_4.jpg', '/img/product/abraziv/0797-1350-21_3.jpg', '/img/product/abraziv/0797-1350-21.jpg'];
$db['products']['sprava']['0798-1856278 D']['img'] = '/img/product/abraziv/0798-1856278 D_1.jpg';
$db['products']['sprava']['0798-1856278 D']['galleryImgs'] = ['/img/product/abraziv/0798-1856278 D_2.jpg', '/img/product/abraziv/0798-1856278 D_3.jpg', '/img/product/abraziv/0798-1856278 D.jpg', '/img/product/abraziv/0798-1856278 D_4.jpg'];
$db['products']['sprava']['0799-0125-00']['img'] = '/img/product/abraziv/0799-0125-00_1.jpg';
$db['products']['sprava']['0799-0125-00']['galleryImgs'] = ['/img/product/abraziv/0799-0125-00_6.jpg', '/img/product/abraziv/0799-0125-00_2.jpg', '/img/product/abraziv/0799-0125-00_3.jpg', '/img/product/abraziv/0799-0125-00_4.jpg', '/img/product/abraziv/0799-0125-00_9.jpg', '/img/product/abraziv/0799-0125-00.jpg'];
$db['products']['sprava']['0799-0125-01']['img'] = '/img/product/abraziv/0799-0125-01_1.jpg';
$db['products']['sprava']['0799-0125-01']['galleryImgs'] = ['/img/product/abraziv/0799-0125-01_6.jpg', '/img/product/abraziv/0799-0125-01_2.jpg', '/img/product/abraziv/0799-0125-01_3.jpg', '/img/product/abraziv/0799-0125-01_4.jpg', '/img/product/abraziv/0799-0125-01_9.jpg', '/img/product/abraziv/0799-0125-01.jpg'];
$db['products']['sprava']['2902-0140-40']['img'] = '/img/product/abraziv/2902-0140-40_1.jpg';
$db['products']['sprava']['2902-0140-40']['galleryImgs'] = ['/img/product/abraziv/2902-0140-40_0.jpg', '/img/product/abraziv/2902-0140-40_2.jpg', '/img/product/abraziv/2902-0140-40_3.jpg', '/img/product/abraziv/2902-0140-40.jpg'];
$db['products']['sprava']['2902-0160-60']['img'] = '/img/product/abraziv/2902-0160-60_1.jpg';
$db['products']['sprava']['2902-0160-60']['galleryImgs'] = ['/img/product/abraziv/2902-0160-60_0.jpg', '/img/product/abraziv/2902-0160-60_2.jpg', '/img/product/abraziv/2902-0160-60_3.jpg', '/img/product/abraziv/2902-0160-60.jpg'];
$db['products']['sprava']['2902-0180-80']['img'] = '/img/product/abraziv/2902-0180-80_1.jpg';
$db['products']['sprava']['2902-0180-80']['galleryImgs'] = ['/img/product/abraziv/2902-0180-80_0.jpg', '/img/product/abraziv/2902-0180-80_2.jpg', '/img/product/abraziv/2902-0180-80_3.jpg', '/img/product/abraziv/2902-0180-80.jpg'];
$db['products']['sprava']['2902-0100-10']['img'] = '/img/product/abraziv/2902-0100-10_1.jpg';
$db['products']['sprava']['2902-0100-10']['galleryImgs'] = ['/img/product/abraziv/2902-0100-10_0.jpg', '/img/product/abraziv/2902-0100-10_2.jpg', '/img/product/abraziv/2902-0100-10_3.jpg', '/img/product/abraziv/2902-0100-10.jpg'];
$db['products']['sprava']['2902-0120-12']['img'] = '/img/product/abraziv/2902-0120-12_1.jpg';
$db['products']['sprava']['2902-0120-12']['galleryImgs'] = ['/img/product/abraziv/2902-0120-12_0.jpg', '/img/product/abraziv/2902-0120-12_2.jpg', '/img/product/abraziv/2902-0120-12_3.jpg', '/img/product/abraziv/2902-0120-12.jpg'];
$db['products']['sprava']['2902-0180-18']['img'] = '/img/product/abraziv/2902-0180-18_1.jpg';
$db['products']['sprava']['2902-0180-18']['galleryImgs'] = ['/img/product/abraziv/2902-0180-18_0.jpg', '/img/product/abraziv/2902-0180-18_2.jpg', '/img/product/abraziv/2902-0180-18_3.jpg', '/img/product/abraziv/2902-0180-18.jpg'];
$db['products']['sprava']['2902-0320-32']['img'] = '/img/product/abraziv/2902-0320-32_1.jpg';
$db['products']['sprava']['2902-0320-32']['galleryImgs'] = ['/img/product/abraziv/2902-0320-32_0.jpg', '/img/product/abraziv/2902-0320-32_2.jpg', '/img/product/abraziv/2902-0320-32_3.jpg', '/img/product/abraziv/2902-0320-32.jpg'];
$db['products']['sprava']['0795-0125-40']['img'] = '/img/product/abraziv/0795-0125-40_1.jpg';
$db['products']['sprava']['0795-0125-40']['galleryImgs'] = ['/img/product/abraziv/0795-0125-40_0.jpg', '/img/product/abraziv/0795-0125-40_2.jpg', '/img/product/abraziv/0795-0125-40_3.jpg', '/img/product/abraziv/0795-0125-40.jpg'];
$db['products']['sprava']['0795-0125-60']['img'] = '/img/product/abraziv/0795-0125-60_1.jpg';
$db['products']['sprava']['0795-0125-60']['galleryImgs'] = ['/img/product/abraziv/0795-0125-60_0.jpg', '/img/product/abraziv/0795-0125-60_2.jpg', '/img/product/abraziv/0795-0125-60_3.jpg', '/img/product/abraziv/0795-0125-60.jpg'];
$db['products']['sprava']['0795-0125-80']['img'] = '/img/product/abraziv/0795-0125-80_1.jpg';
$db['products']['sprava']['0795-0125-80']['galleryImgs'] = ['/img/product/abraziv/0795-0125-80_0.jpg', '/img/product/abraziv/0795-0125-80_2.jpg', '/img/product/abraziv/0795-0125-80_3.jpg', '/img/product/abraziv/0795-0125-80.jpg'];
$db['products']['sprava']['0795-0125-10']['img'] = '/img/product/abraziv/0795-0125-10_1.jpg';
$db['products']['sprava']['0795-0125-10']['galleryImgs'] = ['/img/product/abraziv/0795-0125-10_0.jpg', '/img/product/abraziv/0795-0125-10_2.jpg', '/img/product/abraziv/0795-0125-10_3.jpg', '/img/product/abraziv/0795-0125-10.jpg'];
$db['products']['sprava']['0795-0125-12']['img'] = '/img/product/abraziv/0795-0125-12_1.jpg';
$db['products']['sprava']['0795-0125-12']['galleryImgs'] = ['/img/product/abraziv/0795-0125-12_0.jpg', '/img/product/abraziv/0795-0125-12_2.jpg', '/img/product/abraziv/0795-0125-12_3.jpg', '/img/product/abraziv/0795-0125-12.jpg'];
$db['products']['sprava']['0795-0125-18']['img'] = '/img/product/abraziv/0795-0125-18_1.jpg';
$db['products']['sprava']['0795-0125-18']['galleryImgs'] = ['/img/product/abraziv/0795-0125-18_0.jpg', '/img/product/abraziv/0795-0125-18_2.jpg', '/img/product/abraziv/0795-0125-18_3.jpg', '/img/product/abraziv/0795-0125-18.jpg'];
$db['products']['sprava']['0795-0125-32']['img'] = '/img/product/abraziv/0795-0125-32_1.jpg';
$db['products']['sprava']['0795-0125-32']['galleryImgs'] = ['/img/product/abraziv/0795-0125-32_0.jpg', '/img/product/abraziv/0795-0125-32_2.jpg', '/img/product/abraziv/0795-0125-32_3.jpg', '/img/product/abraziv/0795-0125-32.jpg'];
$db['products']['sprava']['07991-0100-14']['img'] = '/img/product/abraziv/07991-0100-14_2.jpg';
$db['products']['sprava']['07991-0100-14']['galleryImgs'] = ['/img/product/abraziv/07991-0100-14_5.jpg', '/img/product/abraziv/07991-0100-14_3.jpg', '/img/product/abraziv/07991-0100-14_1.jpg', '/img/product/abraziv/07991-0100-14_4.jpg', '/img/product/abraziv/07991-0100-14_6.jpg', '/img/product/abraziv/07991-0100-14.jpg'];
$db['products']['sprava']['07992-0100-14']['img'] = '/img/product/abraziv/07992-0100-14_2.jpg';
$db['products']['sprava']['07992-0100-14']['galleryImgs'] = ['/img/product/abraziv/07992-0100-14_5.jpg', '/img/product/abraziv/07992-0100-14_3.jpg', '/img/product/abraziv/07992-0100-14_1.jpg', '/img/product/abraziv/07992-0100-14_4.jpg', '/img/product/abraziv/07992-0100-14.jpg' , '/img/product/abraziv/07992-0100-14_6.jpg'];
$db['products']['sprava']['07993-0115-14']['img'] = '/img/product/abraziv/07993-0115-14_2.jpg';
$db['products']['sprava']['07993-0115-14']['galleryImgs'] = ['/img/product/abraziv/07993-0115-14_5.jpg', '/img/product/abraziv/07993-0115-14_3.jpg', '/img/product/abraziv/07993-0115-14_1.jpg', '/img/product/abraziv/07993-0115-14_4.jpg', '/img/product/abraziv/07993-0115-14.jpg' , '/img/product/abraziv/07993-0115-14_6.jpg'];
$db['products']['sprava']['07994-0115-14']['img'] = '/img/product/abraziv/07994-0115-14_2.jpg';
$db['products']['sprava']['07994-0115-14']['galleryImgs'] = ['/img/product/abraziv/07994-0115-14_0.jpg', '/img/product/abraziv/07994-0115-14_4_1.jpg', '/img/product/abraziv/07994-0115-14_1.jpg', '/img/product/abraziv/07994-0115-14_4.jpg', '/img/product/abraziv/07994-0115-14.jpg', '/img/product/abraziv/07994-0115-14_5.jpg'];
// nozhi
$db['products']['sprava']['0890-0000-18']['img'] = '/img/product/nozhi/0890-0000-18_6.jpg';
$db['products']['sprava']['0890-0000-18']['galleryImgs'] = ['/img/product/nozhi/0890-0000-18_3.jpg', '/img/product/nozhi/0890-0000-18_4.jpg', '/img/product/nozhi/0890-0000-18_5.jpg', '/img/product/nozhi/0890-0000-18.jpg', '/img/product/nozhi/0890-0000-18_1.jpg', '/img/product/nozhi/0890-0000-18_9.jpg'];
$db['products']['sprava']['0890-0000-25']['img'] = '/img/product/nozhi/0890-0000-25_6.jpg';
$db['products']['sprava']['0890-0000-25']['galleryImgs'] = ['/img/product/nozhi/0890-0000-25_3.jpg', '/img/product/nozhi/0890-0000-25_4.jpg', '/img/product/nozhi/0890-0000-25_5.jpg', '/img/product/nozhi/0890-0000-25.jpg', '/img/product/nozhi/0890-0000-25_1.jpg', '/img/product/nozhi/0890-0000-25_9.jpg'];
$db['products']['sprava']['0890-0010-18']['img'] = '/img/product/nozhi/0890-0010-18_2.jpg';
$db['products']['sprava']['0890-0010-18']['galleryImgs'] = ['/img/product/nozhi/0890-0010-18_1.jpg', '/img/product/nozhi/0890-0010-18.jpg', '/img/product/nozhi/0890-0010-18_3.jpg'];
$db['products']['sprava']['0890-0010-25']['img'] = '/img/product/nozhi/0890-0010-25_2.jpg';
$db['products']['sprava']['0890-0010-25']['galleryImgs'] = ['/img/product/nozhi/0890-0010-25_1.jpg', '/img/product/nozhi/0890-0010-25.jpg', '/img/product/nozhi/0890-0010-25_4.jpg'];
// vspomogat
$db['products']['sprava']['0990-0400-08']['img'] = '/img/product/vspomogat/0990-0400-08_1_3.jpg';
$db['products']['sprava']['0990-0400-08']['galleryImgs'] = ['/img/product/vspomogat/0990-0400-08_1_4.jpg', '/img/product/vspomogat/0990-0400-08_1.jpg'];
$db['products']['sprava']['0990-0400-10']['img'] = '/img/product/vspomogat/0990-0400-08_1_3.jpg';
$db['products']['sprava']['0990-0400-10']['galleryImgs'] = ['/img/product/vspomogat/0990-0400-08_1_4.jpg', '/img/product/vspomogat/0990-0400-08_1.jpg'];
$db['products']['sprava']['0990-0600-12']['img'] = '/img/product/vspomogat/0990-0600-12_2.jpg';
$db['products']['sprava']['0990-0600-12']['galleryImgs'] = ['/img/product/vspomogat/0990-0600-12_1.jpg', '/img/product/vspomogat/0990-0600-12.jpg'];
$db['products']['sprava']['0980-0400-08']['img'] = '/img/product/vspomogat/0980-0400-08_2_4.jpg';
$db['products']['sprava']['0980-0400-08']['galleryImgs'] = ['/img/product/vspomogat/0980-0400-08_2.jpg', '/img/product/vspomogat/0980-0400-08.jpg'];
$db['products']['sprava']['0980-0600-10']['img'] = '/img/product/vspomogat/0980-0600-10_2.jpg';
$db['products']['sprava']['0980-0600-10']['galleryImgs'] = ['/img/product/vspomogat/0980-0600-10_3.jpg', '/img/product/vspomogat/0980-0600-10.jpg'];
$db['products']['sprava']['0975-0600-12']['img'] = '/img/product/vspomogat/0975-0600-12_1.jpg';
$db['products']['sprava']['0975-0600-12']['galleryImgs'] = ['/img/product/vspomogat/0975-0600-12_2.jpg', '/img/product/vspomogat/0975-0600-12.jpg'];
$db['products']['sprava']['1051-0000-03']['img'] = '/img/product/vspomogat/1051-0000-03_3.jpg';
$db['products']['sprava']['1051-0000-03']['galleryImgs'] = ['/img/product/vspomogat/1051-0000-03_1.jpg', '/img/product/vspomogat/1051-0000-03_2.jpg', '/img/product/vspomogat/1051-0000-03_5_6.jpg', '/img/product/vspomogat/1051-0000-03_4.jpg', '/img/product/vspomogat/1051-0000-03.jpg', '/img/product/vspomogat/1051-0000-03_5.jpg'];
$db['products']['sprava']['1051-0000-05']['img'] = '/img/product/vspomogat/1051-0000-05.gif';
$db['products']['sprava']['1051-0000-05']['galleryImgs'] = [];
$db['products']['sprava']['1051-0000-75']['img'] = '/img/product/vspomogat/1051-0000-75_3.jpg';
$db['products']['sprava']['1051-0000-75']['galleryImgs'] = ['/img/product/vspomogat/1051-0000-75_1.jpg', '/img/product/vspomogat/1051-0000-75_2.jpg', '/img/product/vspomogat/1051-0000-75_6.jpg', '/img/product/vspomogat/1051-0000-75_4.jpg', '/img/product/vspomogat/1051-0000-75.jpg', '/img/product/vspomogat/1051-0000-75_5.jpg'];
$db['products']['sprava']['1051-0000-10']['img'] = '/img/product/vspomogat/1051-0000-10_3.jpg';
$db['products']['sprava']['1051-0000-10']['galleryImgs'] = ['/img/product/vspomogat/1051-0000-10_1.jpg', '/img/product/vspomogat/1051-0000-10_2.jpg', '/img/product/vspomogat/1051-0000-10_4_6.jpg', '/img/product/vspomogat/1051-0000-10_4_4.jpg', '/img/product/vspomogat/1051-0000-10.jpg', '/img/product/vspomogat/1051-0000-10_4_5.jpg'];
$db['products']['sprava']['1002-0001-31']['img'] = '/img/product/vspomogat/1002-0001-31.gif';
$db['products']['sprava']['1003-0000-12']['img'] = '/img/product/vspomogat/1003-0000-12.gif';
$db['products']['sprava']['0700-0000-30']['img'] = '/img/product/vspomogat/0700-0000-30_1.jpg';
$db['products']['sprava']['0700-0000-30']['galleryImgs'] = ['/img/product/vspomogat/0700-0000-30_2.jpg', '/img/product/vspomogat/AU2A9218_1.jpg', '/img/product/vspomogat/0700-0000-30_3.jpg', '/img/product/vspomogat/0700-0000-30.jpg', '/img/product/vspomogat/0700-0000-30_4.jpg'];
// $db['products']['sprava']['1004-0000-01']['img'] = '/img/product/vspomogat/1004-0000-01.jpg';  // её не должно быть
$db['products']['sprava']['1004-0000-04']['img'] = '/img/product/vspomogat/1004-0000-04_1.jpg';
$db['products']['sprava']['1004-0000-04']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-04.jpg'];
$db['products']['sprava']['1004-0000-06']['img'] = '/img/product/vspomogat/1004-0000-06_1.jpg';
$db['products']['sprava']['1004-0000-06']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-06.jpg'];
$db['products']['sprava']['1004-0000-08']['img'] = '/img/product/vspomogat/1004-0000-08_2.jpg';
$db['products']['sprava']['1004-0000-08']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-08.jpg'];
$db['products']['sprava']['1004-0000-10']['img'] = '/img/product/vspomogat/1004-0000-10_1.jpg';
$db['products']['sprava']['1004-0000-10']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-10.jpg'];
$db['products']['sprava']['1004-0000-15']['img'] = '/img/product/vspomogat/1004-0000-15_1.jpg';
$db['products']['sprava']['1004-0000-15']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-15.jpg'];
$db['products']['sprava']['1004-0000-20']['img'] = '/img/product/vspomogat/1004-0000-20_1.jpg';
$db['products']['sprava']['1004-0000-20']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-20.jpg'];
$db['products']['sprava']['1004-0000-25']['img'] = '/img/product/vspomogat/1004-0000-25_1.jpg';
$db['products']['sprava']['1004-0000-25']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-25.jpg'];
$db['products']['sprava']['1004-0000-30']['img'] = '/img/product/vspomogat/1004-0000-30_1.jpg';
$db['products']['sprava']['1004-0000-30']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-30.jpg'];
$db['products']['sprava']['1004-0000-35']['img'] = '/img/product/vspomogat/1004-0000-35_1.jpg';
$db['products']['sprava']['1004-0000-35']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-35.jpg'];
$db['products']['sprava']['1004-0000-45']['img'] = '/img/product/vspomogat/1004-0000-45_1.jpg';
$db['products']['sprava']['1004-0000-45']['galleryImgs'] = ['/img/product/vspomogat/1004-0000-45.jpg'];
$db['products']['sprava']['1004-0001-15']['img'] = '/img/product/vspomogat/1004-0001-15_1.jpg';
$db['products']['sprava']['1004-0001-15']['galleryImgs'] = ['/img/product/vspomogat/1004-0001-15.jpg'];
$db['products']['sprava']['1004-0001-25']['img'] = '/img/product/vspomogat/1004-0001-25_1.jpg';
$db['products']['sprava']['1004-0001-25']['galleryImgs'] = ['/img/product/vspomogat/1004-0001-25.jpg'];
$db['products']['sprava']['1004-0001-35']['img'] = '/img/product/vspomogat/1004-0001-35_1.jpg';
$db['products']['sprava']['1004-0001-35']['galleryImgs'] = ['/img/product/vspomogat/1004-0001-35.jpg'];
$db['products']['sprava']['2755-0001-H4']['img'] = '/img/product/vspomogat/2755-0001-H4_1.jpg';
$db['products']['sprava']['2755-0001-H4']['galleryImgs'] = ['/img/product/vspomogat/2755-0001-H4_2.jpg', '/img/product/vspomogat/2755-0001-H4_3.jpg', '/img/product/vspomogat/2755-0001-H4.jpg'];
$db['products']['sprava']['0901-0000-20']['img'] = '/img/product/vspomogat/0901-0000-20.jpg';
$db['products']['sprava']['0901-0000-20']['galleryImgs'] = ['/img/product/vspomogat/0901-0000-20_1.jpg', '/img/product/vspomogat/0901-0000-20_3.jpg'];

// ROSHMA
// Кисти - где брать?
// Also setting some images for tableView, pay attention
$db['products']['roshma']['0000-0000-15']['img'] = '/img/roshma/0100-0000-15.gif';

$db['products']['roshma']['0302-21800060']['img'] = '';  // нету картинки. Похоже на https://roshma.by/product/valik-nitevoj-standart-poliakril-ruchka-7-8mm-180h48mm-vors18mm/, но у настоящей параметр 180х40мм, а не 180х48
$db['products']['roshma']['0302-22400060']['img'] = '/img/roshma/0302-22400060.gif';

$db['products']['roshma']['0311-11800040']['img'] = '';  // аналогично первому: https://roshma.by/product/valik-nitevoj-pchelka-poliakril-ruchka-7-8mm-180h48mm-vors-10-mm/
$db['products']['roshma']['0311-24000040']['img'] = '/img/roshma/k_0311-24000040.gif';  // set for tableView  // тоже нету (искал "240х40")


$db['products']['roshma']['0794-0125-10']['img'] = '/img/roshma/0794-0125-10.gif'; 
$db['products']['roshma']['0794-0230-16']['img'] = '/img/roshma/0794-0230-16.gif';

$db['products']['roshma']['0795-0224-04']['img'] = '/img/roshma/0795-0224-04.gif';
$db['products']['roshma']['0795-0224-06']['img'] = '/img/roshma/0795-0224-06.gif';
$db['products']['roshma']['0795-0224-08']['img'] = '/img/roshma/0795-0224-08.gif';

// Круг наждачный с ворсовой подложкой - ?. Setting for one
$db['products']['roshma']['2810-0125-60']['img'] = '/img/roshma/k_2810-0125-60.gif';

// Нож обойный + -//- три штуки - тоже не нашел на старом сайте. Setting one img for both
$db['products']['roshma']['0605-0000-18']['img'] = '/img/roshma/k_0605-0000-18.gif';
$db['products']['roshma']['0605-0003-18']['img'] = '/img/roshma/k_0605-0000-18.gif';

$db['products']['roshma']['1004-0000-00']['img'] = '/img/roshma/1004-0000-00.gif';

$dbWriterP = new PhpArrDbWriter();
$dbWriterP->write($db, 'db.php');