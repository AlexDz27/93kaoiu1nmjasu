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
  <link rel="stylesheet" href="css/table-h2.css">
  <script src="js/table.js" defer></script>
  <title>Прайс-лист | SPRAVA</title>
</head>
<body>

<table class="cont" id="tableSprava">
  <thead>
    <tr class="thead__tr">
      <th class="important"><?= $currentPriceListDate ?></th>
      <th class="title" colspan="6">Прайс-лист торговой марки SPRAVA</th>
    </tr>
  </thead>
  <tbody>
    <tr class="title-columns">
      <th>Артикул</th>
      <th style="line-height: 18px;">Наименование товаров <br><span style="font-size: 13px;">+ внешний вид (одного из товаров в модельном ряду)</span></th>
      <th>Размер</th>
      <th>Цена с НДС, руб.</th>
      <th class="text--regular">Единица изм.</th>
      <th class="text--regular">Упак. мал.</th>
      <th class="text--regular">Упак. круп.</th>
    </tr>

    <?php $placedImg = false; ?>
    <?php foreach ($tableViewDb['sprava'] as $catName => $cat): ?>
      <tr>
        <td class="category" colspan="7"><?= $catName ?></td>
        <?php foreach ($cat as $model): ?>
          <?php foreach ($model as $idx => $modelDatum): ?>
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
                  <?php if ($modelDatum['category'] === 'Кисти малярные' && $idx === 1): ?>
                    <img class="td--holding-img__img" src="<?= $model[0]['img'] ? $model[0]['img'] : '/img/catalog-normal-res/kist.png' ?>" alt="">
                  <?php else: ?>
                    <img class="td--holding-img__img" src="<?= $modelDatum['img'] ? $modelDatum['img'] : '/img/catalog-normal-res/kist.png' ?>" alt="">
                  <?php endif ?>  
                </td>
                <td><?= $modelDatum['variant'] ?></td>
                <th><?= $modelDatum['price'] ?></th>
                <td><?= $modelDatum['unit'] ?></td>
                <td><?= $modelDatum['upakMal'] ?></td>
                <td><?= $modelDatum['upakKrup'] ?></td>
              <?php elseif (isset($modelDatum['imgsNeedsOnlyOneRow'])): ?>
                <td><?= $modelDatum['art'] ?></td>
                <td class="td--model--imgs-needs-only-one-row">
                  <p class="td--model--imgs-needs-only-one-row__text"><?= $modelDatum['model'] ?></p>
                  <p class="td--model--imgs-needs-only-one-row__img__cont"><img class="td--holding-img__img" src="<?= $modelDatum['img'] ?>" alt=""></p>
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

<div class="table-switcher-pane cont">
  <button id="SPRAVA" class="table-switcher-pane__btn table-switcher-pane__btn--sprava table-switcher-pane__btn--active">SPRAVA</button>
  <button id="ROSHMA" class="table-switcher-pane__btn table-switcher-pane__btn--roshma">Рошма</button>
</div>

<table class="cont table--hidden" id="tableRoshma">
  <thead>
    <tr class="thead__tr">
      <th class="important"><?= $currentPriceListDate ?></th>
      <th class="title" colspan="6">Прайс-лист торговой марки Рошма</th>
    </tr>
  </thead>
  <tbody>
    <tr class="title-columns">
      <th>Артикул</th>
      <th style="line-height: 18px;">Наименование товаров <br><span style="font-size: 13px;">+ внешний вид (одного из товаров в модельном ряду)</span></th>
      <th>Размер</th>
      <th>Цена с НДС, руб.</th>
      <th class="text--regular">Единица изм.</th>
      <th class="text--regular">Упак. мал.</th>
      <th class="text--regular">Упак. круп.</th>
    </tr>

    <?php $placedImg = false; ?>
    <?php foreach ($tableViewDb['roshma'] as $catName => $cat): ?>
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
                  <img class="td--holding-img__img" src="<?= $modelDatum['img'] ? $modelDatum['img'] : '/img/catalog-normal-res/kist.png' ?>" alt="">
                </td>
                <td><?= $modelDatum['variant'] ?></td>
                <th><?= $modelDatum['price'] ?></th>
                <td><?= $modelDatum['unit'] ?></td>
                <td><?= $modelDatum['upakMal'] ?></td>
                <td><?= $modelDatum['upakKrup'] ?></td>
              <?php elseif (isset($modelDatum['imgsNeedsOnlyOneRow'])): ?>
                <td><?= $modelDatum['art'] ?></td>
                <td class="td--model--imgs-needs-only-one-row">
                  <p class="td--model--imgs-needs-only-one-row__text"><?= $modelDatum['model'] ?></p>
                  <p class="td--model--imgs-needs-only-one-row__img__cont"><img class="td--holding-img__img" src="<?= $modelDatum['img'] ?>" alt=""></p>
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