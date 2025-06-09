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
  <h2>Обновить прайс-лист:</h2>
  <form id="loadFileForm" method="POST" enctype="multipart/form-data">
    <p>
      <label for="file">Выберите файл прайс-листа: &nbsp;</label>
      <input name="file" type="file" id="file">
    </p>
    <button id="loadBtn" class="btn-load" type="submit">Загрузить файл прайс-листа</button>
  </form>
</main>
  
</body>
</html>