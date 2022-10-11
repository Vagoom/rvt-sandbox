<?php
require __DIR__ . '/vendor/autoload.php';
ini_set("date.timezone", "Europe/Riga");


use Apps\Application;

$app = new Application();
echo $app->getName();
