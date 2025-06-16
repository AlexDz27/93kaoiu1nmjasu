<?php

// require 'lib/PhpArrDbWriter.php';
$db = require 'db.php';
$products = require 'price-upload/generateProducts.php';

foreach ($products as $product) {
  $db['products'][$product['art']] = $product;
}

$db['products']['0100-0000-10']['isHit'] = true;
$db['products']['0100-0000-15']['isHit'] = true;

// Imgs
// Kisti
$db['products']['0100-0000-10']['img'] = '/img/product/kisti/0100-0000-10_1.jpg';
// TODO: no photo for this?
$db['products']['0100-0000-15']['img'] = '/img/product/kisti/0100-0000-10_1.jpg';
$db['products']['0100-0000-20']['img'] = '/img/product/kisti/0100-0000-20_1.jpg';
$db['products']['0100-0000-25']['img'] = '/img/product/kisti/0100-0000-25_1.jpg';
$db['products']['0100-0000-30']['img'] = '/img/product/kisti/0100-0000-30_1.jpg';
$db['products']['0100-0000-40']['img'] = '/img/product/kisti/0100-0000-40_1.jpg';
$db['products']['0100-0000-50']['img'] = '/img/product/kisti/0100-0000-50_1.jpg';
$db['products']['0100-0000-50']['img'] = '/img/product/kisti/0100-0000-50_1.jpg';

$db['products']['0110-0000-10']['img'] = '/img/product/kisti/0110-0000-10_1.jpg';
$db['products']['0110-0000-15']['img'] = '/img/product/kisti/0110-0000-15_1.jpg';
$db['products']['0110-0000-20']['img'] = '/img/product/kisti/0110-0000-20_1.jpg';
$db['products']['0110-0000-25']['img'] = '/img/product/kisti/0110-0000-25_1.jpg';
$db['products']['0110-0000-30']['img'] = '/img/product/kisti/0110-0000-30_1.jpg';
$db['products']['0110-0000-40']['img'] = '/img/product/kisti/0110-0000-40_1.jpg';

$db['products']['0180-0000-10']['img'] = '/img/product/kisti/0180-0000-10_1.jpg';
$db['products']['0180-0000-15']['img'] = '/img/product/kisti/0180-0000-15_1.jpg';
$db['products']['0180-0000-20']['img'] = '/img/product/kisti/0180-0000-20_1.jpg';
$db['products']['0230-0030-07']['img'] = '/img/product/kisti/0230-0030-07_1.jpg';
$db['products']['0230-0030-10']['img'] = '/img/product/kisti/0230-0030-10_1.jpg';
$db['products']['0230-0030-12']['img'] = '/img/product/kisti/0230-0030-12_1.jpg';
$db['products']['0230-0040-14']['img'] = '/img/product/kisti/0230-0040-14_1.jpg';
$db['products']['0230-0050-15']['img'] = '/img/product/kisti/0230-0050-15_1.jpg';
// Запаски
// TODO: same as the next?)
$db['products']['0300-0615-05']['img'] = '/img/product/valiki/0300-0615-10_2.jpg';
$db['products']['0300-0615-10']['img'] = '/img/product/valiki/0300-0615-10_2.jpg';
$db['products']['0300-0630-10']['img'] = '/img/product/valiki/0300-0630-10_2.jpg';
// TODO: check here. mb the upper ones also should have the same style as the down one
$db['products']['0300-0630-15']['img'] = '/img/product/valiki/0300-0630-15_2.jpg';
$db['products']['0300-2-01848-18']['img'] = '/img/product/valiki/0300-2-01848-18_2.jpg';
$db['products']['0300-2-01848-23']['img'] = '/img/product/valiki/0300-2-01848-23_2.jpg';
$db['products']['0300-2-01848-23']['img'] = '/img/product/valiki/0300-2-01848-23_2.jpg';
$db['products']['0301-0615-05']['img'] = '/img/product/valiki/0301-0615-05_2.jpg';
$db['products']['0301-0615-10']['img'] = '/img/product/valiki/0301-0615-10_2.jpg';
$db['products']['0301-0615-30']['img'] = '/img/product/valiki/0301-0630-30_2.jpg';
$db['products']['0301-0630-30']['img'] = '/img/product/valiki/0301-0630-30_2.jpg';
$db['products']['0310-1848-18']['img'] = '/img/product/valiki/0310-1848-18_2.jpg';
$db['products']['0310-1848-23']['img'] = '/img/product/valiki/0310-1848-23_2.jpg';
$db['products']['0450-0615-05']['img'] = '/img/product/valiki/0450-0615-05_2.jpg';
$db['products']['0450-0615-10']['img'] = '/img/product/valiki/0450-0615-10_2.jpg';
$db['products']['0450-0615-15']['img'] = '/img/product/valiki/0450-0615-15_2.jpg';
$db['products']['0450-0630-10']['img'] = '/img/product/valiki/0450-0630-10_2.jpg';
$db['products']['0451-0848-18']['img'] = '/img/product/valiki/0451-0848-18_2.jpg';
$db['products']['0451-0848-24']['img'] = '/img/product/valiki/0451-0848-24_2.jpg';
// Валики
$db['products']['0301-10600000']['img'] = '/img/product/valiki/0301-11100000_2.jpg';
$db['products']['0301-11100000']['img'] = '/img/product/valiki/0301-11100000_2.jpg';
$db['products']['0301-11130000']['img'] = '/img/product/valiki/0301-11130000_2.jpg';
$db['products']['0301-11500000']['img'] = '/img/product/valiki/0301-11500000_2.jpg';
$db['products']['0302-21800000']['img'] = '/img/product/valiki/0302-21800000_2.jpg';
$db['products']['0302-22400000']['img'] = '/img/product/valiki/0302-22400000_1.jpg';
$db['products']['0301-0601-006']['img'] = '/img/product/valiki/0301-0601-006_2.jpg';
$db['products']['0301-0601-015']['img'] = '/img/product/valiki/0301-0601-015_2.jpg';
$db['products']['0301-0601-030']['img'] = '/img/product/valiki/0301-0601-030_2.jpg';
$db['products']['0301-0601-130']['img'] = '/img/product/valiki/0301-0601-130_2.jpg';
$db['products']['0311-11800000']['img'] = '/img/product/valiki/0311-11800000_2.jpg';
$db['products']['0311-24000000']['img'] = '/img/product/valiki/0311-24000000_2.jpg';
$db['products']['0451-30600000']['img'] = '/img/product/valiki/0451-30600000_2.jpg';
$db['products']['0451-31100000']['img'] = '/img/product/valiki/0451-31100000_2.jpg';
$db['products']['0451-31500000']['img'] = '/img/product/valiki/0451-31500000_2.jpg';
$db['products']['0451-31130000']['img'] = '/img/product/valiki/0451-31130000_2.jpg';
$db['products']['0540-0848-18']['img'] = '/img/product/valiki/0540-0848-18_2.jpg';
$db['products']['0540-0848-24']['img'] = '/img/product/valiki/0540-0848-24_2.jpg';
// TODO: а где ручки для валиков, например, 0575-0600-05?
// abraziv krugi
$db['products']['2897-0125-10']['img'] = '/img/product/abraziv/2897-0125-10_1.jpg';
$db['products']['2897-0125-12']['img'] = '/img/product/abraziv/2897-0125-12_1.jpg';
$db['products']['2897-0230-16']['img'] = '/img/product/abraziv/2897-0230-16_1.jpg';
$db['products']['2897-0123-20']['img'] = '/img/product/abraziv/2897-0123-20_1.jpg';
$db['products']['2812-0125-24']['img'] = '/img/product/abraziv/2812-0125-24_1.jpg';
$db['products']['2812-0125-26']['img'] = '/img/product/abraziv/2812-0125-26_1.jpg';
$db['products']['2812-0125-04']['img'] = '/img/product/abraziv/2812-0125-04_1.jpg';
$db['products']['2812-0125-06']['img'] = '/img/product/abraziv/2812-0125-06_1.jpg';
$db['products']['2812-0125-08']['img'] = '/img/product/abraziv/2812-0125-08_1.jpg';
$db['products']['2812-0125-10']['img'] = '/img/product/abraziv/2812-0125-10_1.jpg';
$db['products']['2812-0125-12']['img'] = '/img/product/abraziv/2812-0125-12_1.jpg';
$db['products']['0796-0125-60']['img'] = '/img/product/abraziv/0796-0125-60_1.jpg';
$db['products']['0797-0125-00']['img'] = '/img/product/abraziv/0797-0125-00_1.jpg';
$db['products']['0797-0230-00']['img'] = '/img/product/abraziv/0797-0230-00_1.jpg';
$db['products']['0797-0125-01']['img'] = '/img/product/abraziv/0797-0125-01_1.jpg';
$db['products']['0797-2125-00']['img'] = '/img/product/abraziv/0797-2125-00_1.jpg';
$db['products']['0797-2230-00']['img'] = '/img/product/abraziv/0797-2230-00_1.jpg';
$db['products']['0797-1125-00']['img'] = '/img/product/abraziv/0797-1230-00_1.jpg';  // нету: Круг алмазный сегментный первый
$db['products']['0797-1230-00']['img'] = '/img/product/abraziv/0797-1230-00_1.jpg';
$db['products']['0797-1350-20']['img'] = '/img/product/abraziv/0797-1230-00_1.jpg';
$db['products']['0797-1350-21']['img'] = '/img/product/abraziv/0797-1350-21_1.jpg';
$db['products']['0798-1856278 D']['img'] = '/img/product/abraziv/0798-1856278 D_1.jpg';
$db['products']['0799-0125-00']['img'] = '/img/product/abraziv/0799-0125-00_1.jpg';
$db['products']['0799-0125-01']['img'] = '/img/product/abraziv/0799-0125-01_1.jpg';
$db['products']['2902-0140-40']['img'] = '/img/product/abraziv/2902-0140-40_1.jpg';
$db['products']['2902-0160-60']['img'] = '/img/product/abraziv/2902-0160-60_1.jpg';
$db['products']['2902-0180-80']['img'] = '/img/product/abraziv/2902-0180-80_1.jpg';
$db['products']['2902-0100-10']['img'] = '/img/product/abraziv/2902-0100-10_1.jpg';
$db['products']['2902-0120-12']['img'] = '/img/product/abraziv/2902-0120-12_1.jpg';
$db['products']['2902-0180-18']['img'] = '/img/product/abraziv/2902-0180-18_1.jpg';
$db['products']['2902-0320-32']['img'] = '/img/product/abraziv/2902-0320-32_1.jpg';
$db['products']['0795-0125-40']['img'] = '/img/product/abraziv/0795-0125-40_1.jpg';
$db['products']['0795-0125-60']['img'] = '/img/product/abraziv/0795-0125-60_1.jpg';
$db['products']['0795-0125-80']['img'] = '/img/product/abraziv/0795-0125-80_1.jpg';
$db['products']['0795-0125-10']['img'] = '/img/product/abraziv/0795-0125-10_1.jpg';
$db['products']['0795-0125-12']['img'] = '/img/product/abraziv/0795-0125-12_1.jpg';
$db['products']['0795-0125-18']['img'] = '/img/product/abraziv/0795-0125-18_1.jpg';
$db['products']['0795-0125-32']['img'] = '/img/product/abraziv/0795-0125-32_1.jpg';
$db['products']['07991-0100-14']['img'] = '/img/product/abraziv/07991-0100-14_2.jpg';
$db['products']['07992-0100-14']['img'] = '/img/product/abraziv/07992-0100-14_2.jpg';
$db['products']['07993-0115-14']['img'] = '/img/product/abraziv/07993-0115-14_2.jpg';
$db['products']['07994-0115-14']['img'] = '/img/product/abraziv/07994-0115-14_2.jpg';
// nozhi
// TODO: нету для первого ножа фотки. Мб мне взять из рошмы сайта?
$db['products']['0890-0001-18']['img'] = '/img/product/nozhi/0890-0000-18_6.jpg';
$db['products']['0890-0000-18']['img'] = '/img/product/nozhi/0890-0000-18_6.jpg';
$db['products']['0890-0000-25']['img'] = '/img/product/nozhi/0890-0000-25_6.jpg';
$db['products']['0890-0010-18']['img'] = '/img/product/nozhi/0890-0010-18_2.jpg';
$db['products']['0890-0010-25']['img'] = '/img/product/nozhi/0890-0010-25_2.jpg';
// vspomogat
$db['products']['0990-0400-08']['img'] = '/img/product/vspomogat/0990-0400-08_1_3.jpg';
$db['products']['0990-0400-10']['img'] = '/img/product/vspomogat/0990-0400-08_1_3.jpg';
$db['products']['0990-0600-12']['img'] = '/img/product/vspomogat/0990-0600-12_2.jpg';
$db['products']['0980-0400-08']['img'] = '/img/product/vspomogat/0980-0400-08_2_4.jpg';
$db['products']['0980-0600-10']['img'] = '/img/product/vspomogat/0980-0600-10_2.jpg';
$db['products']['0975-0600-12']['img'] = '/img/product/vspomogat/0975-0600-12_1.jpg';
$db['products']['1051-0000-03']['img'] = '/img/product/vspomogat/1051-0000-03_3.jpg';
$db['products']['1051-0000-05']['img'] = '/img/product/vspomogat/1051-0000-03_3.jpg';
$db['products']['1051-0000-75']['img'] = '/img/product/vspomogat/1051-0000-75_3.jpg';
$db['products']['1051-0000-10']['img'] = '/img/product/vspomogat/1051-0000-10_3.jpg';
// TODO: put normal image or fix it
// $db['products']['1002-0001-31']['img'] = '/img/product/vspomogat/1002-0001-31.gif';
// TODO: no img
// $db['products']['1003-0000-12']['img'] = '/img/product/vspomogat/1003-0000-12.jpg';
// TODO: AU2A9218_1.jpg - картинка ещё одна для щётки
$db['products']['0700-0000-30']['img'] = '/img/product/vspomogat/0700-0000-30_1.jpg';
// TODO: no img
// $db['products']['1004-0000-01']['img'] = '/img/product/vspomogat/1004-0000-01.jpg';
// $db['products']['1004-0000-04']['img'] = '/img/product/vspomogat/1004-0000-04.jpg';
// $db['products']['1004-0000-06']['img'] = '/img/product/vspomogat/1004-0000-06.jpg';
// $db['products']['1004-0000-08']['img'] = '/img/product/vspomogat/1004-0000-08.jpg';
// $db['products']['1004-0000-10']['img'] = '/img/product/vspomogat/1004-0000-10.jpg';
// $db['products']['1004-0000-15']['img'] = '/img/product/vspomogat/1004-0000-15.jpg';
// $db['products']['1004-0000-20']['img'] = '/img/product/vspomogat/1004-0000-20.jpg';
// $db['products']['1004-0000-20']['img'] = '/img/product/vspomogat/1004-0000-20.jpg';
// $db['products']['1004-0000-25']['img'] = '/img/product/vspomogat/1004-0000-25.jpg';
// $db['products']['1004-0000-30']['img'] = '/img/product/vspomogat/1004-0000-30.jpg';
// $db['products']['1004-0000-35']['img'] = '/img/product/vspomogat/1004-0000-35.jpg';
// $db['products']['1004-0000-45']['img'] = '/img/product/vspomogat/1004-0000-45.jpg';
// $db['products']['1004-0001-15']['img'] = '/img/product/vspomogat/1004-0001-15.jpg';
// $db['products']['1004-0001-25']['img'] = '/img/product/vspomogat/1004-0001-25.jpg';
// $db['products']['1004-0001-35']['img'] = '/img/product/vspomogat/1004-0001-35.jpg';
$db['products']['2755-0001-H4']['img'] = '/img/product/vspomogat/2755-0001-H4_1.jpg';
$db['products']['0901-0000-20']['img'] = '/img/product/vspomogat/0901-0000-20.jpg';

$dbWriterP = new PhpArrDbWriter();
$dbWriterP->write($db, 'db.php');