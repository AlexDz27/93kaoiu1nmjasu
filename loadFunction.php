<?php

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

function load($path, $vars = []) {
  extract($vars);
  require ROOT . $path;
}