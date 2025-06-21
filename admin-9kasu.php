<?php

$db = require 'db.php';
$products = $db['products']['sprava'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/admin.js" defer></script>
  <title>Панель администратора</title>
</head>
<body>

<main class="main cont">
  <h1 style="margin-bottom: 60px;">Панель администратора</h1>
  <section class="section">
    <h2>Обновить прайс-лист:</h2>
    <form id="loadFileForm" method="POST" enctype="multipart/form-data">
      <p>
        <label for="file">Выберите файл прайс-листа: &nbsp;</label>
        <input name="file" type="file" id="file">
      </p>
      <button id="loadBtn" class="btn-load" type="submit">Загрузить файл прайс-листа</button>
    </form>
  </section>

  <section class="section">
    <h2>Редактировать товары:</h2>
    <div class="products-grid">
      <?php foreach ($products as $product): ?>
        <a href="/admin-9kasu-edit.php?art=<?= $product['art'] ?>" class="products-grid__product">
          <img class="products-grid__product__img" src="<?= $product['img'] ?>" alt="">
          <b><?= $product['model'] . ', ' . $product['variant'] ?></b>
          <span class="products-grid__product__art">(<?= $product['art'] ?>)</span>
          <button class="btn-edit products-grid__product__btn-edit">Редактировать</button>
        </a>
      <?php endforeach ?>
    </div>
  </section>
</main>
  
</body>
</html>