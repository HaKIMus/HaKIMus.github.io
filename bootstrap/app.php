<?php

require __DIR__ . '/../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../resources/views/');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

echo $twig->render('index.twig', [
    'titleWebsite' => 'Purish',
]);