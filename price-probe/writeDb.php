<?php

require 'generateDb.php';

$insertedMain = '';
$inserted = '';
foreach ($db as $datum) {
  $inserted = <<<HEREDOC
'{$datum['art']}' => [
    'price' => {$datum['price']},
    'category' => '{$datum['category']}',
    'model' => '{$datum['model']}',
    'variant' => '{$datum['variant']}',
    'unit' => '{$datum['unit']}',
    'upakMal' => {$datum['upakMal']},
    'upakKrup' => {$datum['upakKrup']},
    'uri' => '{$datum['uri']}',
    'img' => '{$datum['img']}',
    'galleryImgs' => [],
],

HEREDOC;
  $insertedMain .= <<<HEREDOC
  $inserted
HEREDOC;
}

// var_dump($insertedMain);
// die();

$contents = <<<HEREDOC
<?php

return [
  $insertedMain
];
HEREDOC;

// var_dump($contents);
file_put_contents('writtenDb.php', $contents);