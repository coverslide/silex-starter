<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new CoverSlide\SilexTest\Application(); 
$app->init();
$app->run(); 