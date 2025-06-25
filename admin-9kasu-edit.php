<?php

$uname = 'aom';
$pwd = '';
if (@$_SERVER['PHP_AUTH_USER'] !== $uname) {
  header('WWW-Authenticate: Basic realm="Restricted Area"');
  header('HTTP/1.0 401 Unauthorized');
  echo 'Нужно ввести верные логин и пароль.';
  exit;
}

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
  <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
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
        <textarea class="form__textarea" rows="5" cols="40" name="details"><?= $product['details'] ?? '' ?></textarea>
      </section>

      <section class="form__section form__section--imgs">
        <div>
          <h2>Картинки текущие:</h2>

          <h3>Главная:</h3>
          <div class="img-holder" style="margin-bottom: 55px;">
            <img src="<?= $product['img'] ?>" alt="">
          </div>

          <h3>Галерея:</h3>
          <div id="currentGalleryImgs" class="gallery">
            <?php foreach ($product['galleryImgs'] as $galImg): ?>
              <div class="gallery__item">
                <img src="<?= $galImg ?>" alt="">
                <div class="gallery__item__x">x</div>
              </div>
            <?php endforeach ?>
          </div>
        </div>

        <div>
          <h2>Добавить картинки:</h2>

          <label style="display: inline-block;" class="btn-edit edit-form__btn-edit edit-form__btn-edit--w-auto" for="changeMainImg">Поменять главную картинку:</label>
          <p><input type="file" id="changeMainImg" name="mainImg" accept="image/png, image/jpeg"></p>
          <div style="margin-bottom: 55px;" id="changeMainImgHolder" class="img-holder img-holder--smaller"></div>

          <label style="display: inline-block;" class="btn-edit edit-form__btn-edit edit-form__btn-edit--w-auto" for="changeGalImg">Добавить картинки в галерею:</label>
          <p><input type="file" multiple id="changeGalImg" name="galleryImgs[]"></p>
          <div class="gallery" id="changeGalImgHolder">
            Пока что добавленных картинок нет
          </div>  
        </div>
      </section>  

      <button id="editBtn" class="btn-edit btn-edit--big-text edit-form__btn-edit" type="submit">Подтвердить редактирование</button>
    </form>
  </section>
</main>
  
</body>
</html>