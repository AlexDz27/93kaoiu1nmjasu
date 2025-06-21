<?php

if (empty($_GET['art'])) {
  echo 'Отсутствует артикул. Попробуйте перейти назад (нажать кнопку "Назад" в браузере) и ещё раз нажать на карточку товара.';
  return;
}

$editedDb = require 'editedDb.php';
$product = isset($editedDb['products']['sprava'][$_GET['art']]) ? $editedDb['products']['sprava'][$_GET['art']] : null;

if ($product === null) {
  echo 'Неверный артикул: товара с таким артикулом нет в базе данных. Попробуйте перейти назад (нажать кнопку "Назад" в браузере) и ещё раз нажать на карточку товара.';
  return;
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/admin-edit.js" defer></script>
  <title>Панель администратора - Редактирование</title>
</head>
<body>

<main class="main cont">
  <h1 style="margin-bottom: 60px;">Панель администратора</h1>
  <section class="section">
    <h2 style="margin-bottom: 50px;">Редактируемый товар: <span style="font-weight: 400;"><?= $product['model'] . ', ' . $product['variant'] ?> (<?= $product['art'] ?>)</span></h2>
    <form id="editForm" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="art" value="<?= $product['art'] ?>">

      <section class="form__section">
        <h3>Является хитом:</h3>
        <p style="margin-top: 0;">
          <label for="no">Нет</label>
          <input type="radio" id="no" name="hit" value="no" <?= empty($product['isHit']) ? 'checked' : '' ?>>
          <label for="yes">Да</label>
          <input type="radio" id="yes" name="hit" value="yes" <?= !empty($product['isHit']) ? 'checked' : '' ?>>
        </p>
      </section>

      <section class="form__section form__section--breaker">
        <h3>Вкладка "Детали":</h3>
        <textarea class="form__textarea" rows="5" cols="40" name="details"><?= $product['details'] ?></textarea>
      </section>

      <section class="form__section">
        <h2>Картинки:</h2>
      </section>

      <h3>Главная:</h3>
      <h3>Галерея:</h3>
      <button id="editBtn" class="btn-edit edit-form__btn-edit" type="submit">Подтвердить редактирование</button>
    </form>
  </section>
</main>
  
</body>
</html>