<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  echo file_get_contents('store.json');
  die();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  file_put_contents('store.json', file_get_contents('php://input'));
}
