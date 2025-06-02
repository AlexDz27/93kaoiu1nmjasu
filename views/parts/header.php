<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TODO: r this -->
  <meta name="robots" content="noindex,nofollow,noarchive">
  <link rel="stylesheet" href="css/style-v4.css">
  <?php if ($pageName === 'home' || $pageName === 'contacts'): ?>
    <script src="https://api-maps.yandex.ru/v3/?apikey=2b7d9147-4a30-4c29-9a2f-594b90fa8c59&lang=ru_RU" defer></script>
  <?php endif ?>
  <script src="js/main-v2.js" defer></script>
  <?php if ($pageName === 'home'): ?>
    <script src="js/slider.js" defer></script>
  <?php elseif ($pageName === 'catalog'): ?>
    <script src="js/slider-2.js" defer></script>
  <?php elseif ($pageName === 'product'): ?>
    <script src="js/slider-product.js" defer></script>
  <?php endif; ?>  
  <title><?= $title ?></title>
</head>