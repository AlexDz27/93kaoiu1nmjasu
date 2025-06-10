<?php

require 'lib/PhpArrDbWriter.php';

const ERR_NO_FILE_UPLOADED = 4;

$response = [
  'status' => null,
  'payload' => null,
];
$file = $_FILES['file'];
// var_dump($file);
// die();
if ($file['error'] === ERR_NO_FILE_UPLOADED) {
  $response['status'] = 'ERR';
  $response['payload'] = 'Ошибка: файл не был выбран';
  echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  return;
}
if ($file['type'] !== 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
  $response['status'] = 'ERR';
  $response['payload'] = 'Ошибка: файл не является Excel-файлом. Если Вы думаете, что так не должно быть, свяжитесь с программистом Алексеем';
  echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  return;
}

if (!move_uploaded_file($file['tmp_name'], 'price-lists/' . $file['name'])) {
  $response['status'] = 'ERR';
  $response['payload'] = 'Ошибка при загрузке файла. Скорее всего, что-то не так с файлом. Если Вы думаете, что так не должно быть, свяжитесь с программистом Алексеем';
  echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  return;
}

// TODO: 1. положить его чтоб можно было скачать по кнопке ; 2. сделать db и всё сопутствующее
$db = require 'db.php';
$db['currentPriceList'] = $file['name'];
$dbWriter = new PhpArrDbWriter();
$dbWriter->write($db, 'db.php');
$excelFileName = 'price-lists/' . $file['name'];
require 'price-upload/writeProductsToDb.php';

$response['status'] = 'OK';
$response['payload'] = 'Прайс-лист был успешно загружен!';
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
