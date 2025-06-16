<?php

$lowDb = require 'lowDb.php';
$currentPriceListDate = $lowDb['currentPriceListDate'];
$tableViewDb = require 'tableViewDb.php';

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
      <th class="important"><?= $currentPriceListDate ?></th>
      <!-- TODO: js for SPRAVA <-> ROSHMA -->
      <th class="title" colspan="6">Прайс-лист торговой марки SPRAVA</th>
    </tr>
  </thead>
  <tbody>
    <tr class="title-columns">
      <th>Артикул</th>
      <th style="line-height: 13px;">Наименование товаров <br><span style="font-size: 10px;">+ внешний вид (одного из товаров)</span></th>
      <th>Размер</th>
      <th>Цена с НДС, руб.</th>
      <th class="text--regular">Единица изм.</th>
      <th class="text--regular">Упак. мал.</th>
      <th class="text--regular">Упак. круп.</th>
    </tr>

    <?php $placedImg = false; ?>
    <?php foreach ($tableViewDb as $catName => $cat): ?>
      <tr>
        <td class="category" colspan="7"><?= $catName ?></td>
        <?php foreach ($cat as $model): ?>
          <?php foreach ($model as $modelDatum): ?>
            <tr class="<?= isset($modelDatum['isFirst']) ? 'first-product-in-model' : '' ?>">
              <?php if (isset($modelDatum['imgNeedsOtherRows'])): ?>
                <td><?= $modelDatum['art'] ?></td>
                <td><?= $modelDatum['model'] ?></td>
                <td><?= $modelDatum['variant'] ?></td>
                <th><?= $modelDatum['price'] ?></th>
                <td><?= $modelDatum['unit'] ?></td>
                <td><?= $modelDatum['upakMal'] ?></td>
                <td><?= $modelDatum['upakKrup'] ?></td>
              <?php elseif (isset($modelDatum['howMany'])): ?>
                <td><?= $modelDatum['art'] ?></td>
                <td class="td--holding-img" rowspan="<?= $modelDatum['howMany'] ?>">
                  <img class="td--holding-img__img" src="/img/catalog-normal-res/kist.png" alt="">
                </td>
                <td><?= $modelDatum['variant'] ?></td>
                <th><?= $modelDatum['price'] ?></th>
                <td><?= $modelDatum['unit'] ?></td>
                <td><?= $modelDatum['upakMal'] ?></td>
                <td><?= $modelDatum['upakKrup'] ?></td>
              <?php else: ?>
                <td><?= $modelDatum['art'] ?></td>
                <td><?= $modelDatum['variant'] ?></td>
                <th><?= $modelDatum['price'] ?></th>
                <td><?= $modelDatum['unit'] ?></td>
                <td><?= $modelDatum['upakMal'] ?></td>
                <td><?= $modelDatum['upakKrup'] ?></td>
              <?php endif ?>
            </tr>
          <?php endforeach ?>
        <?php endforeach ?>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
  
</body>
</html>