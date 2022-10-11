<?php
require __DIR__ . '/vendor/autoload.php';
ini_set("date.timezone", "Europe/Riga");


use App\Application;

$app = new Application();
echo $app->renderView('src/views/base.php');
