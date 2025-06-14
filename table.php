<?php

$products = require 'tableDb.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/table.css">
  <title>Document</title>
</head>
<body>

<table class="cont">
  <thead>
    <tr class="thead__tr">
      <th class="important">27.05.2025</th>
      <th class="title" colspan="6">Прайс-лист торговой марки SPRAVA</th>
    </tr>
  </thead>
  <tbody>
    <tr class="title-columns">
      <th>Артикул</th>
      <th>Наименование товаров</th>
      <th>Внешний вид</th>
      <th>Размер</th>
      <th>Цена с НДС, руб.</th>
      <th class="text--regular">Единица изм.</th>
      <th class="text--regular">Упак. мал.</th>
      <th class="text--regular">Упак. круп.</th>
    </tr>
    <tr>
      <td class="category" colspan="8">Кисти малярные</td>
    </tr>
    <?php
      $lastModel = $products[array_key_first($products)]['model'];
    ?>
    <?php foreach ($products as $art => $product): ?>
      <?php
        $class = '';
        $currentModel = $product['model'];
        // means we that this is the first product in model list, and we should separate it with thickier border
        if ($lastModel !== $currentModel) {
          $lastModel = $currentModel;
          $class = 'first-product-in-model';
        }
      ?>
      <tr class="<?= $class ?>">
        <td><?= $art ?></td>
        <td><?= $product['model'] ?></td>
        <td>—</td>
        <td><?= $product['variant'] ?></td>
        <th><?= $product['price'] ?></th>
        <td><?= $product['unit'] ?></td>
        <td><?= $product['upakMal'] ?></td>
        <td><?= $product['upakKrup'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
  
</body>
</html>